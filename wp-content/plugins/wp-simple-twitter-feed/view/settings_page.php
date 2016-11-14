<div class="pthgtf">
	<div class="pthgtf_header">
		<a href="<?php echo admin_url( 'admin.php?page=' . self::$pthgstf_plugin_info[ 'PluginSlug' ] ); ?>" class="pthgtf_logo">
			<h1><?php _e( 'Simple Twitter Feed', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></h1>
			<span><?php _e( 'Simple Twitter Feed WordPress Plugin, friendly with developers!', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></span>
		</a><!-- / .pthgtf_logo -->
	</div><!-- / .pthgtf_header -->
	<div class="wrap">
		<div  class="metabox-holder">
			<div class="meta-box-sortables ui-sortable">
				<div class="postbox">
					<div class="handlediv" title="<?php _e( 'Click to toggle', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?>"><br></div>
					<h3 class="hndle ui-sortable-handle"><span><?php _e( 'Twitter connect', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></span></h3>
					<div class="inside">
						<form action="options.php" method="post" class="settings">
							<?php 
							settings_fields( self::$pthgstf_plugin_info[ 'TextDomain' ] . '_settings' );
							do_settings_sections( self::$pthgstf_plugin_info[ 'TextDomain' ] . '_settings' );
							?>
							<div class="message"></div>
							<p><?php _e( 'To use Twitter counter widget and other Twitter related widgets, you need OAuth access keys. To get Twitter Access keys, you need to create Twitter Application which is mandatory to access Twitter.', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></p>
							<ol type="1">
								<li><?php _e( 'Go to <a href="https://dev.twitter.com/apps/new" target="_blank">https://dev.twitter.com/apps/new</a> and log in, if necessary', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></li>
								<li><?php _e( 'Enter your Application Name, Description and your website address. You can leave the callback URL empty.', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></li>
								<li><?php _e( 'Accept the TOS, and solve the CAPTCHA.', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></li>
								<li><?php _e( 'Submit the form by clicking the Create your Twitter Application', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></li>
							</ol>
							<table class="form-table">
								<tbody>
									<tr>
										<th scope="row">
											<label for="twitter_o_t"><?php _e( 'oAuth access token', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></label>
										</th>
										<td>
											<input name="pthgtf_settings[twitter_o_t]" type="text" id="twitter_o_t" value="<?php echo @self::$settings[ 'twitter_o_t' ]; ?>" class="regular-text">
											<p class="description"><?php _e( 'Access Token', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></p>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<label for="twitter_o_t_s"><?php _e( 'oAuth access token secret', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></label>
										</th>
										<td>
											<input name="pthgtf_settings[twitter_o_t_s]" type="text" id="twitter_o_t_s" value="<?php echo @self::$settings[ 'twitter_o_t_s' ]; ?>" class="regular-text">
											<p class="description"><?php _e( 'Access Token Secret', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></p>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<label for="twitter_key"><?php _e( 'Consumer key', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></label>
										</th>
										<td>
											<input name="pthgtf_settings[twitter_key]" type="text" id="twitter_key" value="<?php echo @self::$settings[ 'twitter_key' ]; ?>" class="regular-text">
											<p class="description"><?php _e( 'Consumer Key (API Key)', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></p>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<label for="twitter_secret"><?php _e( 'Consumer secret', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></label>
										</th>
										<td>
											<input name="pthgtf_settings[twitter_secret]" type="text" id="twitter_secret" value="<?php echo @self::$settings[ 'twitter_secret' ]; ?>" class="regular-text">
											<p class="description"><?php _e( 'Consumer Secret (API Secret)', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?></p>
										</td>
									</tr>
								</tbody>
							</table><!-- / .form-table -->
							<div id="publishing-action">
								<input type="submit" name="save" class="button button-primary button-large" value="<?php _e( 'Save Changes', self::$pthgstf_plugin_info[ 'TextDomain' ] ); ?>">
							</div><!-- / #publishing-action -->
							<div class="clear"></div>
						</form>
					</div><!-- / .inside -->
				</div><!-- / .postbox -->
			</div><!-- / .meta-box-sortables .ui-sortable -->
		</div><!-- / .metabox-holder -->
	</div><!-- / .wrap -->
</div><!-- / .pthgtf -->