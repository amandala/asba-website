<?php
/*
Plugin Name: ASBA Custom Roles
Plugin URI:
Description: Creates Board Member and Brewery roles with specific permissions
Version: 1
Author: Amanda Haynes
Author URI:
Text Domain: asbacustomroles
Domain Path: /lang
License:
*/
?>
<?php
remove_role( 'board_member' );
remove_role( 'brewery' );


/* custom user role functions */
$board_member_args = array(
'read' => true,
'edit_posts' => true,
'create_posts' => true,
'manage_categories' => true,
'publish_posts' => true,
'edit_themes' => false,
'install_plugins' => false,
'update_plugin' => false,
'update_core' => false,
'upload_files' => true
);

$new_board_role = add_role(
'boardmember', __('Board Member'), $board_member_args
);


$brewery_args = array(
    'read' => true,
    'edit_posts' => true,
    'create_posts' => true,
    'manage_categories' => true,
    'publish_posts' => true,
    'edit_themes' => false,
    'install_plugins' => false,
    'update_plugin' => false,
    'update_core' => false,
    'upload_files' => true,
    'edit_tribe_event' => true,
    'read_tribe_event' => true,
    'delete_tribe_event' => true,
    'publish_tribe_events' => true,
    'edit_published_tribe_events' => true,
    'delete_published_tribe_events' => true


);

$new_brewery_role = add_role(
    'brewery', __('Brewery'), $brewery_args
);

?>