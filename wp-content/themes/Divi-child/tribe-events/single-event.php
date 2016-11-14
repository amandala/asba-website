<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 * 
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); }

$event_id = get_the_ID();

?>


	<?php while ( have_posts() ) :  the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="et_pb_row et_pb_row_0">

				<div class="et_pb_column et_pb_column_1_3">
					<!-- Event featured image, but exclude link -->
					<?php echo tribe_event_featured_image($event_id, 'thumbnail', false); ?>
				</div> <!-- .et_pb_column -->

				<div class="et_pb_column et_pb_column_2_3">
					<?php the_title( '<h2 class="tribe-events-single-event-title summary entry-title">', '</h2>' ); ?>


					<div class="tribe-events-schedule updated published tribe-clearfix">
						<?php echo tribe_events_event_schedule_details( $event_id, '<h3>', '</h3>'); ?>
						<?php  if ( tribe_get_cost() ) :  ?>

							<div class="tribe-events-cost">Cost to attend: <?php
								if(tribe_get_cost( null, true ) === "Free"){

									$flag = site_url() . '/wp-content/themes/Divi-child/images/FreeFlag.png';
									echo "<img class='free-flag' src='".$flag."' >";
								}
								else{
									echo tribe_get_cost( null, true );
								}
								?>

							</div>
						<?php endif; ?>

						<!-- Event content -->
						<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
						<div class="tribe-events-single-event-description tribe-events-content entry-content description">
							<?php the_content(); ?>
						</div><!-- .tribe-events-single-event-description -->
					</div>
				</div> <!-- .et_pb_column -->

			</div>

		</div><!-- #tribe-events-content -->

</div> <!-- #post-x -->

<div class="asba-single-event-details">
	<div class="et_pb_row et_pb_row_0 ">

		<div class="et_pb_column et_pb_column_1_3">
		<h3 id="asba-single-event-details">Details</h3>
			<div class="asba-single-event-details-detail">
				<p class="bolded">Date:</p>
				<?php if(tribe_event_is_all_day($event->ID)){
					echo tribe_get_start_date($event, false, $format = 'F j ') . "All Day";
				}
				else{
					echo tribe_get_start_date($event, false, $format = 'F g:i A') . ' to ' . tribe_get_end_date($event, false, $format = 'g:i A');

				} ?>
				<p class="bolded pad">Cost to attend:</p>
				<?php echo tribe_get_cost( null, true ); ?>
				<p class="bolded pad">Address:</p>
				<p class="tribe-events-single-section-title"> <?php echo tribe_get_venue() ?> </p>
				<?php  echo $street_address = tribe_address_exists() ? '<address class="tribe-events-address">' . tribe_get_address() . '</address>' : '';
				echo tribe_get_city();
				?>
			</div>
		</div>

		<div class="et_pb_column et_pb_column_2_3">

			<?php

			$map = apply_filters( 'tribe_event_meta_venue_map', tribe_get_embedded_map() );
			if ( empty( $map ) ) return;
			?>

			<div class="tribe-events-venue-map">
				<?php
				do_action( 'tribe_events_single_meta_map_section_start' );
				echo $map;
				do_action( 'tribe_events_single_meta_map_section_end' );
				?>
			</div>
		</div>
	</div>

</div>

<div id="asba-home-events" class="margined">
	<?php
	remove_all_filters('posts_orderby');
	$featured_query = new WP_Query();
	$featured_query->query(array(
		'post_type' => 'tribe_events',
		'showposts' => '3',
		'orderby' => 'rand',
		'eventDisplay'=>'upcoming',

	));

	if($featured_query->have_posts()){
		$events = $featured_query->get_posts();

		foreach($events as $event){
			//echo $event->post_title;
		}
	}
	wp_reset_query();
	$args = array('start_date' => date('D, d M Y H:i:s'));$args =

	//get all the events that start after todays date
	$events = tribe_get_events($args);

	shuffle($events);

	if($events){
		$ev1 = $events[0];
		$ev2 = $events[1];
		$ev3 = $events[2];

		?>
		<div class=" et_pb_row " id="asba-footer-row">
			<h1 class="asba-home-heading" id="asba-event-browse">Browse More Beer Week Events</h1>
			<div class="et_pb_column et_pb_column_1_3 et_pb_column et_pb_column_0 featured-event">
				<?php output_asba_event($ev1);

				?>
			</div>
			<div class="et_pb_column et_pb_column_1_3 et_pb_column et_pb_column_1 featured-event">
				<?php output_asba_event($ev2); ?>
			</div>
			<div class="et_pb_column et_pb_column_1_3 et_pb_column et_pb_column_2 featured-event">
				<?php output_asba_event($ev3); ?>
			</div>
		</div>
	<?php } ?>
	<div id="asba-home-view-all">
		<a id="asba-home-view-all-link" href="<?php echo site_url()?>/events/">Browse More Events</a>
	</div>
</div>

<div class="et_pb_row et_pb_row_0 full-width">
		<?php if( get_post_type() == TribeEvents::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>


</div>


