<?php
/*
Plugin Name: WP Simple Twitter Feed
Description: Simple Twitter Feed WordPress Plugin, friendly with developers!
Version: 1.0.2
Author: 9Pixels - Web Development Agency
Author URI:  http://www.9pixels.co
Plugin URI: http://www.9pixels.co
Requires at least: 3.5
Tested up to: 4.3
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: pthgtf

Plugin slug: twitter-feed-widget
*/

class pthgstfTwitterfeed_Widget extends WP_Widget {
	/**
	 * plugin info
	 *
	 * @var array
	 */
	public static $pthgstf_plugin_info;

	/**
	 * static var for number of posts to show in the widget
	 *
	 * @var int
	 */
	public static $number_posts;

	/**
	 * Required elements for template
	 *
	 * @var array
	 */
	public static $template_elem;

	/**
	 * Default templates list
	 *
	 * @var array
	 */
	public static $default_templates;

	/**
	 * Default template
	 *
	 * @var string
	 */
	public static $default_template;

	/**
	 * Settings plugin
	 *
	 * @var string
	 */
	public static $settings;

	/**
	 * Class constructor
	 *
	 * @return	void
	 */
	function __construct() {
		//Plugin info
		$pthgstf_default_headers = array(
		   'Name'        => 'Plugin Name',
		   'PluginURI'   => 'Plugin URI',
		   'Version'     => 'Version',
		   'Description' => 'Description',
		   'Author'      => 'Author',
		   'AuthorURI'   => 'Author URI',
		   'TextDomain'  => 'Text Domain',
		   'DomainPath'  => 'Domain Path',
		   'Network'     => 'Network',
		   'PluginSlug'  => 'Plugin slug',
		);
		self::$pthgstf_plugin_info = get_file_data(__FILE__, $pthgstf_default_headers, 'plugin' );

		self::$number_posts  = 5;
		self::$template_elem = array(
			'user' 		  => array( 'id' => 1, 'content' => '', 'title' => __( 'User', self::$pthgstf_plugin_info[ 'TextDomain' ] ) ),
			'user_avatar' => array( 'id' => 2, 'content' => '', 'title' => __( 'User avatar', self::$pthgstf_plugin_info[ 'TextDomain' ] ) ),
			'user_link'   => array( 'id' => 3, 'content' => '', 'title' => __( 'User link', self::$pthgstf_plugin_info[ 'TextDomain' ] ) ),
			'content'	  => array( 'id' => 4, 'content' => '', 'title' => __( 'Content', self::$pthgstf_plugin_info[ 'TextDomain' ] ) ),
			'image_tweet' => array( 'id' => 5, 'content' => '', 'title' => __( 'Image tweet', self::$pthgstf_plugin_info[ 'TextDomain' ] ) ),
			'link_tweet'  => array( 'id' => 6, 'content' => '', 'title' => __( 'Link tweet', self::$pthgstf_plugin_info[ 'TextDomain' ] ) ),
			'date' 		  => array( 'id' => 7, 'content' => '', 'title' => __( 'Date', self::$pthgstf_plugin_info[ 'TextDomain' ] ) ),
			'large_date'  => array( 'id' => 8, 'content' => '', 'title' => __( 'Large date', self::$pthgstf_plugin_info[ 'TextDomain' ] ) ),
		);

		self::$default_templates = array( 
			'style_one' => array( 
				'title' => 'Style one',
				'code'  => '<li class="style_one"><figure><img src="{user_avatar}" alt="{user}" /></figure><p>{content}</p><a href="{user_link}"><time title="{large_date}">{date}</time></a></li>',
			),
			'style_two' => array(
				'title' => 'Style two',
				'code'  => '<li class="style_two"><div class="meta"><div class="author">{user}</div><div class="time" title="{large_date}">{date}</div></div><figure style="background-image: url({user_avatar});"></figure><p>{content}</p></li>',
			),
		);

		self::$default_template = array_keys(self::$default_templates);
		self::$default_template = self::$default_template[0];

		self::$settings = get_option( self::$pthgstf_plugin_info[ 'TextDomain' ] . '_settings' );
		
		$widget_ops = array( 'classname' => 'widget_twitter_feed', 'description' => __( self::$pthgstf_plugin_info['Description'], self::$pthgstf_plugin_info[ 'TextDomain' ] ) );
		parent::__construct(
            self::$pthgstf_plugin_info[ 'PluginSlug' ], // Base ID
            __( self::$pthgstf_plugin_info[ 'Name' ], self::$pthgstf_plugin_info[ 'TextDomain' ] ), // Name
            $widget_ops // Args
        );
        
		add_filter( self::$pthgstf_plugin_info[ 'TextDomain' ] . '_add_links', array( __Class__, 'filter_add_links' ) );
		add_filter( self::$pthgstf_plugin_info[ 'TextDomain' ] . '_to_relative_date', array( __Class__, 'relative_date' ) );
		add_filter( self::$pthgstf_plugin_info[ 'TextDomain' ] . '_include_in_template', array( __Class__, 'template_system' ), 2, 3 );

		add_filter( self::$pthgstf_plugin_info[ 'TextDomain' ] . '_twitter_connect', array( __Class__, 'twitter_auth' ), 10, 3 );

		add_action( 'widgets_admin_page', array( __Class__, 'output_wp_editor_widget_html' ), 100 );
		add_action( 'customize_controls_print_footer_scripts', array( __Class__, 'output_wp_editor_widget_html' ), 1 );
		
		add_action( 'admin_head', array( __Class__, 'admin_assets' ) );
		add_action( 'customize_controls_print_footer_scripts', array( __Class__, 'admin_assets' ) );

		add_action( 'wp_enqueue_scripts', array( __Class__, 'public_assets' ) );

		add_action( 'admin_menu', array( __Class__, 'add_menu_admin' ), 1 );
		add_action( 'admin_init', array( __Class__, 'register_settings' ));
		
		remove_action( 'admin_notices', 'update_nag', 3 );
		add_action( 'admin_notices', 'settings_errors' );
	}	

	/**
	 * Generates menu admin pages and links
	 *
	 * @return	void
	 */
	static function add_menu_admin(){
		add_menu_page( __( 'Simple TF', self::$pthgstf_plugin_info[ 'TextDomain' ] ), __( 'Simple TF', self::$pthgstf_plugin_info[ 'TextDomain' ] ), 'manage_options', self::$pthgstf_plugin_info[ 'PluginSlug' ], array( __Class__, 'plugin_page' ), 'dashicons-twitter', 3 );
	}

	/**
	 * Settings page
	 *
	 * @return void
	 */
	static function plugin_page(){
		require_once( dirname( __FILE__ ) . '/view/settings_page.php' ); 
	}

	/**
	 * Register Settings
	 *
	 * @return void
	 */
	static function register_settings(){
	    register_setting( self::$pthgstf_plugin_info[ 'TextDomain' ] . '_settings', self::$pthgstf_plugin_info[ 'TextDomain' ] . '_settings');
	}

	/**
	 * Load public assets
	 *
	 * @return	void
	 */
	static function public_assets() {
		wp_enqueue_style( self::$pthgstf_plugin_info[ 'TextDomain' ] . '-public-css', plugins_url() . '/' . dirname( plugin_basename( __FILE__ ) ) . '/assets/css/public_style.css' );
	}

	/**
	 * Load admin assets 
	 *
	 * @return	void
	 */
	static function admin_assets(){
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-form' );
	    wp_enqueue_script( 'dashboard' );
		wp_enqueue_script( self::$pthgstf_plugin_info[ 'TextDomain' ] . '-main-js', plugins_url() . '/' . dirname( plugin_basename( __FILE__ ) ) . '/assets/js/admin_scripts.js' );
		wp_enqueue_style( self::$pthgstf_plugin_info[ 'TextDomain' ] . '-main-css', plugins_url() . '/' . dirname( plugin_basename( __FILE__ ) ) . '/assets/css/admin_style.css' );
	}

	/**
	 * Template editor
	 *
	 * @return	void
	 */
	static function output_wp_editor_widget_html() {
		
		?>
		<div id="wp-editor-widget-container" style="display: none;">
			<a class="close" href="javascript:WPEditorWidget.hideEditor();" title="<?php esc_attr_e( 'Close', 'wp-editor-widget' ); ?>"><span class="dashicons dashicons-no"></span></a>
			<div class="editor">
				<?php
					$settings = array(
						'tinymce' 		=> false,
						'media_buttons' 	=> false,
						'quicktags' 		=> array( 'buttons' => ',' )
					);

					wp_editor( '', 'wpeditorwidget', $settings );
				?>
				<p>
					<a href="javascript:WPEditorWidget.updateWidgetAndCloseEditor(true);" class="button button-primary"><?php _e( 'Save and close', 'wp-editor-widget' ); ?></a>
				</p>
			</div>
		</div>
		<div id="wp-editor-widget-backdrop" style="display: none;"></div>
		<?php
		
	}

	/**
	 * Widget form 
	 *
	 * @param	array
	 * @return	void
	 */
	function form( $instance ) {
		// Check values
		$title 		  		= isset( $instance[ 'title' ] ) ? esc_attr( $instance[ 'title' ] ) : '';
		$number_posts		= isset( $instance[ 'number_posts' ] ) ? absint( $instance[ 'number_posts' ] ) : self::$number_posts;
		$date_type			= isset( $instance[ 'date_type' ] ) ? esc_attr( $instance[ 'date_type' ] ) : 'standard';
		$template			= isset( $instance[ 'template' ] ) ? esc_attr( $instance[ 'template' ] ) : self::$default_template;
		$custom_template 	= !empty( $instance[ 'custom_template' ] ) ? $instance[ 'custom_template' ] : self::$default_templates[$template]['code'];
		$custom_template 	= addslashes( esc_attr( $custom_template ) );

		$twitter_user_id 	= isset( $instance[ 'twitter_user_id' ] ) ? esc_attr( $instance[ 'twitter_user_id' ] ) : '';
		?>
		<textarea style="display:none;" id="<?php echo $this->get_field_id('custom_template'); ?>" name="<?php echo $this->get_field_name( 'custom_template' ); ?>" cols="30" rows="10"><?php echo $custom_template; ?></textarea>

		<p>
			<label for="<?php echo $this->get_field_id( 'twitter_user_id' ); ?>"><?php _e( 'Owner ID', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'twitter_user_id' ); ?>" name="<?php echo $this->get_field_name( 'twitter_user_id' ); ?>" type="text" value="<?php echo $twitter_user_id; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Widget Title', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'number_posts' ); ?>"><?php _e( 'Tweet limit:', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></label>
			<input id="<?php echo $this->get_field_id( 'number_posts' ); ?>" name="<?php echo $this->get_field_name( 'number_posts' ); ?>" type="number" value="<?php echo $number_posts; ?>" size="3" />
		</p>

		<p>
			<input type="radio" id="<?php echo $this->get_field_id( 'standard_date' ); ?>" name="<?php echo $this->get_field_name( 'date_type' ); ?>" value="standard" <?php checked( $date_type, 'standard' ); ?> /><label for="<?php echo $this->get_field_id( 'standard_date' ); ?>"> <?php _e( 'Standard Date ( Jan 31 2015 )', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></label>
			<input type="radio" id="<?php echo $this->get_field_id( 'relative_date' ); ?>" name="<?php echo $this->get_field_name( 'date_type' ); ?>" value="relative" <?php checked( $date_type, 'relative' ); ?> /><label for="<?php echo $this->get_field_id( 'relative_date' ); ?>"> <?php _e( 'Relative Date ( 20min ago )', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></label>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'number_posts' ); ?>"><?php _e( 'Select template:', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></label>
		   	<select id="<?php echo $this->get_field_id( 'template' ); ?>" name="<?php echo $this->get_field_name( 'template' ); ?>"> 
		    	<option <?php selected( $template, 'custom'); ?> value="custom"><?php _e( 'Custom', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></option> 
		   		<?php foreach (self::$default_templates as $key => $get_template): ?>
		    		<option <?php selected( $template, $key ); ?> value="<?php echo $key; ?>"><?php echo $get_template[ 'title' ]; ?></option> 
		   		<?php endforeach; ?>
		    </select>
    	</p>
		<?php
		add_action( 'admin_print_footer_scripts', array( __Class__, 'appthemes_add_quicktags' ) );
		?>
		<p>
			<a href="javascript:WPEditorWidget.showEditor('<?php echo $this->get_field_id( 'custom_template' ); ?>');" class="button"><?php _e( 'Create template', self::$pthgstf_plugin_info[ 'TextDomain' ] ) ?></a>
		</p>
	    <?php
	}

	/**
	 * Update widget
	 *
	 * @param	new_instance array
	 * @param	old_instance array
	 * @return	array
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		// Fields
		$instance[ 'title' ] 		  	= strip_tags( $new_instance[ 'title' ] );
		$instance[ 'number_posts' ] 	= absint( $new_instance[ 'number_posts' ] );
		$instance[ 'date_type' ]    	= strip_tags( $new_instance[ 'date_type' ] );
		$instance[ 'template' ] 		= $new_instance[ 'template' ];
		$instance[ 'custom_template' ] 	= $new_instance[ 'custom_template' ];

		$instance[ 'twitter_user_id' ] 	= strip_tags( $new_instance[ 'twitter_user_id' ] );
		
 	 	return $instance;
	}

	/**
	 * Display widget
	 *
	 * @param	args array
	 * @param	instance array
	 * @return	void
	 */
	function widget( $args, $instance ) {
		extract( $args );

		// these are the widget options
		$title		   	 = isset($instance[ 'title' ]) ? apply_filters( 'widget_title', $instance[ 'title' ] ) : '';
		$number_posts  	 = ( !empty( $instance[ 'number_posts' ] ) ) ? absint( $instance[ 'number_posts' ] ) : self::$number_posts;
		$date_type    	 = ( !empty( $instance[ 'date_type' ] ) ) ? $instance[ 'date_type' ] : 'standard';
		$template 		 = ( !empty( $instance[ 'template' ] ) ) ? $instance[ 'template' ] : self::$default_template;
		$custom_template = ( $template == 'custom' ) ? $instance[ 'custom_template' ] : self::$default_templates[$template]['code'];

		$twitter_user_id = isset($instance[ 'twitter_user_id' ]) ? $instance[ 'twitter_user_id' ] : '';

		$twitter_result  = apply_filters( self::$pthgstf_plugin_info[ 'TextDomain' ] . '_twitter_connect', 'https://api.twitter.com/1.1/statuses/user_timeline.json', '?user_id=' . $twitter_user_id . '&count=' . $number_posts);

		echo $before_widget;

		   	// Check if title is set
		   	if ( $title ) {
		      	echo $before_title . $title . $after_title;
		   	}

		   	if( $twitter_result ){
		   		echo '<ul class="' . self::$pthgstf_plugin_info[ 'TextDomain' ] . '_timeline">';
				foreach ($twitter_result as $key => $value) {

					self::$template_elem[ 'user' ][ 'content' ] 		= $value->user->name;
					self::$template_elem[ 'user_avatar' ][ 'content' ] 	= $value->user->profile_image_url;
					self::$template_elem[ 'user_link' ][ 'content' ] 	= 'http://www.twitter.com/' . $value->user->screen_name;
					self::$template_elem[ 'content' ][ 'content' ] 		= apply_filters( self::$pthgstf_plugin_info[ 'TextDomain' ] . '_add_links', $value->text );
					self::$template_elem[ 'link_tweet' ][ 'content' ] 	= self::$template_elem[ 'user_link' ][ 'content' ] . '/status/' . $value->id_str;
					self::$template_elem[ 'image_tweet' ][ 'content' ] 	= isset( $value->entities->media[0]->media_url ) ? $value->entities->media[0]->media_url : '';
					self::$template_elem[ 'date' ][ 'content' ] 		= $date_type == 'standard' ? date( 'M j', strtotime( $value->created_at ) ) : apply_filters( self::$pthgstf_plugin_info[ 'TextDomain' ] . '_to_relative_date', $value->created_at );
					self::$template_elem[ 'large_date' ][ 'content' ] 	= date( 'g:i A - M j Y', strtotime( $value->created_at ) );

					$result_content = apply_filters( self::$pthgstf_plugin_info[ 'TextDomain' ] . '_include_in_template', $custom_template, self::$template_elem);

					echo $result_content;

				}
				echo '</ul>';
			}

	   	echo $after_widget;
	}

	/**
	 * Add more buttons to the html editor
	 *
	 * @return	void
	 */
	public static function appthemes_add_quicktags() {
	    if ( wp_script_is( 'quicktags' ) ){
		?>
		    <script type="text/javascript">
		    	<?php foreach (self::$template_elem as $key => $elem): ?>
			   		QTags.addButton( 'eg_<?php echo $key; ?>', '<?php echo $key; ?>', '{<?php echo $key; ?>}', '', '', '<?php echo $elem[ 'title' ]; ?>', <?php echo $elem[ 'id' ]; ?> );
		    	<?php endforeach; ?>
		    </script>
		<?php
	    }
	}

	/**
	 * Generate template
	 *
	 * @param	template string
	 * @param	content array
	 * @return	string
	 */
	public static function template_system( $template, $content ){
		$search = $replace = array();

		foreach ( $content as $key => $elem ) {
			$search[ $elem[ 'id' ] ]  = '{' . $key . '}';
			$replace[ $elem[ 'id' ] ] = $elem[ 'content' ];
		}

		$content = str_replace( $search, $replace, $template );

		return $content;
	}

	/**
	 * Generate relative date
	 *
	 * @param	date
	 * @return	string
	 */
	public static function relative_date( $date ){
		$now 	= strtotime( "now" );
		$tweet 	= strtotime( $date );
		$diff	= $now - $tweet;

		$minutes = floor( $diff / 60 );
		$hours 	 = floor( $minutes / 60 );
		$days 	 = floor( $hours / 24 );

		
		$hoursString = $hours % 24;
		if( $hoursString < 10 )
			$hoursString = "0" . $hoursString;

		$minutesString = $minutes % 60;
		if( $minutesString < 10 )
			$minutesString = "0" . $minutesString;

		$agoValue 	= $minutesString;
		$agoString 	= __( "mins", self::$pthgstf_plugin_info[ 'TextDomain' ] );
		if( $minutesString == "01" ) 
			$agoString = __( "min", self::$pthgstf_plugin_info[ 'TextDomain' ] );

		if( $hours > 0 ) {
			$agoValue  = $hoursString;
			$agoString = __( "hours", self::$pthgstf_plugin_info[ 'TextDomain' ] );

			if( $hours == "01" )
				$agoString = __( "hour", self::$pthgstf_plugin_info[ 'TextDomain' ] );
		}

		if( $days > 0 ) {
			$agoValue  = $days;
			$agoString = __( "days", self::$pthgstf_plugin_info[ 'TextDomain' ] );

			if( $days == "01" )
				$agoString = __( "day", self::$pthgstf_plugin_info[ 'TextDomain' ] );
		}
	
		return sprintf( __( '%1$d %2$s ago', self::$pthgstf_plugin_info[ 'TextDomain' ] ), $agoValue, $agoString );
	}

	/**
	 * Filter links
	 *
	 * @param	string
	 * @return	string
	 */
	public static function filter_add_links( $content ){

		//Find url and place a tag
		$urladd = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
	    preg_match_all( $urladd, $content, $matches );
	    $usedpatternsurl = array();

	    foreach( $matches[0] as $pattern ){
			if( !array_key_exists( $pattern, $usedpatternsurl ) ){
				$usedpatternsurl[ $pattern ] = true;
				$content = str_replace( $pattern, '<a href="' . $pattern . '" rel="nofollow" target="_blank">' . $pattern . '</a>', $content );   
			}
		}

		//Find usernames and add links
		$useradd = "/\@[a-z0-9_]+/i";
	    preg_match_all( $useradd, $content, $matches );
		$usedPatterns = array();
		
	    foreach( $matches[ 0 ] as $pattern ){
			if( !array_key_exists( $pattern, $usedPatterns ) ){
				$usedPatterns[ $pattern ]=true;
				$content = str_replace( $pattern, '<a href="http://www.twitter.com/' . $pattern . '" rel="nofollow" target="_blank">' . $pattern . '</a>', $content );   
			}
		}

		return $content;
	}

	/**
	 * Connect to Twitter API and receive informations
	 *
	 * @param	string url
	 * @param	string field
	 * @param	string method
	 * @return	array
	 */
	public static function twitter_auth( $url = NULL, $field = NULL, $method = "GET" ) {
		//Include twitter api
		require_once( dirname( __FILE__ ) . '/lib/TwitterAPIExchange.php' );	

		//Authentification
		$settings_twitter = array(
			'oauth_access_token' 		=> self::$settings[ 'twitter_o_t' ],
			'oauth_access_token_secret' => self::$settings[ 'twitter_o_t_s' ],
			'consumer_key' 				=> self::$settings[ 'twitter_key' ],
			'consumer_secret' 			=> self::$settings[ 'twitter_secret' ],
		);

		if( $url && $field != NULL ) {
			//Get data
			$twitter = new TwitterAPIExchange( $settings_twitter );
			$response = $twitter->setGetfield( $field )->buildOauth( $url, $method )->performRequest();
			$items = $response ? json_decode( $response ) : array();

			if(isset($items->errors))
				$items = array();
		} else {
			$items = array();
		}
		return $items;
	}
}

// register widget
add_action( 'widgets_init', create_function( '', 'return register_widget("pthgstfTwitterfeed_Widget");' ) );