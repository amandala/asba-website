<?php
/**
 * Photo View Content
 * The content template for the photo view of events. This template is also used for
 * the response that is returned on photo view ajax requests.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/photo/content.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>


<div id="tribe-events-content" class="tribe-events-list tribe-events-photo">

	<!-- Photo View Title -->
	<?php do_action( 'tribe_events_before_the_title' ); ?>

	<!-- UNCOMMENT FOR UPCOMING EVENTS -->
	<h2 class="tribe-events-page-title"><?php //echo tribe_get_events_title(); ?>Upcoming Events</h2>
	<!-- Tribe Bar -->
	 <?php // tribe_get_template_part( 'modules/bar' ); ?>
	<?php do_action( 'tribe_events_after_the_title' ); ?>

	<!-- Notices -->
	<?php tribe_events_the_notices(); ?>

	<!-- Photo View Header -->
	<?php do_action( 'tribe_events_before_header' ); ?>
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes(); ?>>

		<!-- Header Navigation -->
		<?php do_action( 'tribe_events_before_header_nav' ); ?>
		<?php tribe_get_template_part( 'pro/photo/nav', 'header' ); ?>
		<?php do_action( 'tribe_events_after_header_nav' ); ?>

	</div><!-- #tribe-events-header -->
	<?php do_action( 'tribe_events_after_header' ); ?>




	<!-- Events Loop -->


	<?php

	global $post;
	$all_events = tribe_get_events();


	if ( have_posts() ) {

		do_action('tribe_events_before_loop');
		tribe_get_template_part('pro/photo/loop');
		do_action('tribe_events_after_loop');



	}
	elseif(!empty($all_events) ){
		echo '<div class=asba-past-events>';

	 echo '<h2 class="tribe-events-page-title">2015 Beer Week Events</h2>';

		echo '<div class="et_pb_row">';


		$count = 0;
		foreach($all_events as $event){
		?>
	    <div class="et_pb_column et_pb_column_1_3 et_pb_column et_pb_column_<?php echo $count ?> past"><?php output_asba_past_event($event); ?></div>
	<?php



		}
	}
	echo '</div></div>';
	?>




	<!-- List Footer -->
	<?php do_action( 'tribe_events_before_footer' ); ?>
	<div id="tribe-events-footer">

		<!-- Footer Navigation -->
		<?php do_action( 'tribe_events_before_footer_nav' ); ?>
		<?php tribe_get_template_part( 'pro/photo/nav', 'footer' ); ?>
		<?php do_action( 'tribe_events_after_footer_nav' ); ?>

	</div><!-- #tribe-events-footer -->
	<?php do_action( 'tribe_events_after_footer' ); ?>

</div><!-- #tribe-events-content -->