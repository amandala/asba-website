<?php get_header(); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">




			<div id="left-area">
			<?php if (is_category()) { ?>
		<h1 class="asba-home-heading press-category-heading"><?php single_cat_title(); ?></h1>
	<?php } ?>
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					$post_format = et_pb_post_format(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>

				<?php
					$thumb = '';

					$width = (int) apply_filters( 'et_pb_index_blog_image_width', 1080 );

					$height = (int) apply_filters( 'et_pb_index_blog_image_height', 675 );
					$classtext = 'et_pb_post_main_image';
					$titletext = get_the_title();
					$thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'Blogimage' );
					$thumb = $thumbnail["thumb"];

					et_divi_post_format_content();

					if ( ! in_array( $post_format, array( 'link', 'audio', 'quote' ) ) ) {
						if ( 'video' === $post_format && false !== ( $first_video = et_get_first_video() ) ) :
							printf(
								'<div class="et_main_video_container">
									%1$s
								</div>',
								$first_video
							);
						elseif ( 'on' == et_get_option( 'divi_thumbnails_index', 'on' ) && '' !== $thumb  ) : ?>
							<a href="<?php the_permalink(); ?>">
								<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
							</a>
					<?php
						endif;
					} ?>

				<?php if ( ! in_array( $post_format, array( 'link', 'audio', 'quote', 'gallery' ) ) ) : ?>
					<?php if ( ! in_array( $post_format, array( 'link', 'audio' ) ) ) : ?>
						<h2 class="asba-post-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php endif; ?>

					<?php
						et_divi_post_meta();

						if ( 'on' !== et_get_option( 'divi_blog_style', 'false' ) || ( is_search() && ( 'on' === get_post_meta( get_the_ID(), '_et_pb_use_builder', true ) ) ) )
							truncate_post( 270 );
						else
							the_content();
					?>
				<?php endif; ?>

					</article> <!-- .et_pb_post -->
			<?php
					endwhile;

					if ( function_exists( 'wp_pagenavi' ) )
						wp_pagenavi();
					else
						get_template_part( 'includes/navigation', 'index' );
				else :
					get_template_part( 'includes/no-results', 'index' );
				endif;
			?>
			</div> <!-- #left-area -->

			<?php
			if($cat === 9){ ?>
				<div class="asba-press-sidebar" id="sidebar">
					<div class="asba-press-sidebar-section">


						<h1 class="asba-home-heading press-category-heading">PR Contact</h1>
						<div class="asba-press-sidebar-links">
							<p class="asba-sidebar-para"><b>Greg Zeschuk</b></p>
							<p class="asba-sidebar-para"><b><em>Executive Director of ASBA</em></b></p>
							<p class="asba-sidebar-para">execdirector@albertabrewers.ca</p>
						</div>
					</div>
					<div class="asba-press-sidebar-section">
						<h1 class="asba-home-heading press-category-heading">Logos</h1>
						<div class="asba-press-sidebar-links">
							<a href="<?php echo site_url()?>/wp-content/uploads/downloadable/drinkalberta_badge-black.eps"
							   download="drinkalberta_badge-black.eps" target="_blank" ><h4 class="asba-teal-title">ASBA Black Logo</h4></a>
							<a href="<?php echo site_url()?>/wp-content/uploads/downloadable/drinkalberta_badge-yellow.eps"
							   download="drinkalberta_badge-yellow.eps" target="_blank"><h4 class="asba-teal-title">ASBA Yellow Logo</h4></a>
							<a href="<?php echo site_url()?>/wp-content/uploads/downloadable/drinkalberta_badge-white.eps" download="drinkalberta_badge-white.eps" target="_blank"><h4 class="asba-teal-title">ASBA White Logo</h4></a>
						</div>
						<div class="asba-press-sidebar-links pad">
							<a href="<?php echo site_url()?>/wp-content/uploads/downloadable/2015_beerweek-black.eps" download="2015_beerweek-black.eps" target="_blank"><h4 class="asba-teal-title">Beer Week Logo Black</h4></a>
							<a href="<?php echo site_url()?>/wp-content/uploads/downloadable/2015_beerweek-yellow.eps" download="2015_beerweek-yellow.eps" target="_blank"><h4 class="asba-teal-title">Beer Week Logo Yellow</h4></a>
							<a href="<?php echo site_url()?>/wp-content/uploads/downloadable/2015_beerweek-white.eps" download="2015_beerweek-white.eps" target="_blank"><h4 class="asba-teal-title">Beer Week Logo White</h4></a>
							<a href="<?php echo site_url()?>/wp-content/uploads/downloadable/2015_beerweek.eps" download="2015_beerweek.eps" target="_blank"><h4 class="asba-teal-title">Beer Week Logo Black & Yellow</h4></a>
						</div>
					</div>
				</div>
			<?php }
			else{
				echo get_sidebar();
			}

			?>



		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer(); ?>