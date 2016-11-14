<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<div id="asba-footer">
				<div class="container" id="footer-container">
					<div class=" et_pb_row " id="asba-footer-row">
						<div class="et_pb_column et_pb_column_1_3 et_pb_column et_pb_column_0">
						<h3 class="footer-heading">Twitter</h3>
						<p class="footer-p" id="asba-footer-insta">by @altabrewers</p>
								<a class="twitter-timeline" href="https://twitter.com/AltaBrewers" data-widget-id="634777129411080193" height="208">Tweets by @AltaBrewers</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div> <!-- .et_pb_column -->
					<div class="et_pb_column et_pb_column_1_3 et_pb_column et_pb_column_1">
						<h3 class="footer-heading">Instagram</h3>
						<p class="footer-p" id="asba-footer-insta">by @albertabrewers</p>
						<?php
						$insta_client_id = 1970326622;

						echo $insta_client_id;

						$feed = getInstaFeed($insta_client_id);


						if($feed){
							?>

							<div id="slideshow">
							<?php
							foreach ($feed as $post) {

								 $link = $post['link'];

								 //echo $link;

								$thumb = $post['images']['thumbnail']['url'];

								 if ($post === reset($feed)){
									echo "<a href='".$link."'><img class='asba-insta-pic' src='".$thumb."'  ></a>";
								 }
								 else{
									echo "<a href='".$link."'><img class='asba-insta-pic' src='".$thumb."'  ></a>";
								 }
							}
						}
						?>
							</div>
					</div> <!-- .et_pb_column -->
					<div class="et_pb_column et_pb_column_1_3 et_pb_column et_pb_column_2">
						<h3 class="footer-heading">Our Newsletter</h3>
						<p class="footer-p">Sign up for our newsletter to receive info on Alberta beer, events, and breweries.</p>
						<?php // echo  do_shortcode('[optin-cat id=455]');?>

						<form action="http://albertasmallbrewersassociation.createsend.com/t/d/s/villy/" method="post" id="subForm">
							<p>
								<input id="fieldEmail" name="cm-villy-villy" type="email" placeholder="Email" required />
							</p>
							<p>
								<button id="buttonSubmit" type="submit">Sign Up</button>
							</p>
						</form>
					</div> <!-- .et_pb_column -->
				</div>
			</div>
		</div>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>

<!--
 http://mak.yourdevsite.ca/?code=47b46c7611ad4ec7b5ca973bf37b2a11
 -->
		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>


					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>

<script>
	jQuery(function(jQuery){
		jQuery(window).load(function(){
			jQuery('#main-content').waypoint('destroy');
			jQuery('#main-header').removeClass('et-fixed-header');
		});
	});
</script>

</html>

