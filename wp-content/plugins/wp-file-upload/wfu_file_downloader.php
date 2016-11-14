<?php
if( !session_id() ) { session_start(); }
include_once( dirname(__FILE__).'/lib/wfu_functions.php' );
wfu_download_file();

function wfu_download_file() {
	$file_code = (isset($_POST['file']) ? $_POST['file'] : (isset($_GET['file']) ? $_GET['file'] : ''));
	$ticket = (isset($_POST['ticket']) ? $_POST['ticket'] : (isset($_GET['ticket']) ? $_GET['ticket'] : ''));
	if ( $file_code == '' || $ticket == '' ) die();
	//if download ticket does not exist or is expired die
	if ( !isset($_SESSION['wfu_download_ticket_'.$ticket]) || time() > $_SESSION['wfu_download_ticket_'.$ticket] ) die();
	//destroy ticket so it cannot be used again
	unset($_SESSION['wfu_download_ticket_'.$ticket]);
	
//	$filepath = wfu_plugin_decode_string($file_code);
	$filepath = wfu_get_filepath_from_safe($file_code);
	if ( $filepath === false ) die();
	$filepath = wfu_flatten_path($filepath);
	if ( substr($filepath, 0, 1) == "/" ) $filepath = substr($filepath, 1);
	$filepath = ( substr($filepath, 0, 6) == 'ftp://' || substr($filepath, 0, 7) == 'ftps://' || substr($filepath, 0, 7) == 'sftp://' ? $filepath : $_SESSION['wfu_ABSPATH'].$filepath );
	//reject download of php files for security reasons
	if ( wfu_file_extension_restricted($filepath) ) {
		$_SESSION['wfu_download_status_'.$ticket] = 'failed';
		die('<script language="javascript">alert("Error! File is forbidden for security reasons.");</script>');
	}
	//check that file exists
	if ( !file_exists($filepath) ) {
		$_SESSION['wfu_download_status_'.$ticket] = 'failed';
		die('<script language="javascript">alert("Error! File does not exist.'.$filepath.'");</script>');
	}
	//get mime type

	set_time_limit(0); // disable the time limit for this script
	$fsize = filesize($filepath);
	$path_parts = pathinfo($filepath);
	if ( $fd = @fopen ($filepath, "rb") ) {
		header('Content-Type: application/octet-stream');
		header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");
		header('Content-Transfer-Encoding: binary');
		header('Connection: Keep-Alive');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header("Content-length: $fsize");
		$failed = false;
		while( !feof($fd) ) {
			$buffer = @fread($fd, 1024*8);
			echo $buffer;
			ob_flush();
			flush();
			if ( connection_status() != 0 ) {
				$failed = true;
				break;
			}
		}
		fclose ($fd);
	}
	else $failed = true;
	
	if ( !$failed ) {
		$_SESSION['wfu_download_status_'.$ticket] = 'downloaded';
		die();
	}
	else {
		$_SESSION['wfu_download_status_'.$ticket] = 'failed';
		die('<script language="javascript">alert("Error! Could not download file.");</script>');
	}
}

?>
