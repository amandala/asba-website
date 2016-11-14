<?php
/**
 * Photo View Template
 * The wrapper template for photo view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/photo.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php do_action( 'tribe_events_before_template' ); ?>

<div class="asba-section grey">
    <div class="asba-wrapper">
        <h1>Alberta Beer Week</h1>
        <div id="asba-event-listing-quote">
        <p>Alberta Beer Week runs from Friday, September 25 to Saturday, October 3. It is a celebration of fresh, local beer hosted by the Alberta Small Brewers Association with special events around the province.</p>
        </div>
    </div>
</div>

<div class="et_pb_row et_pb_row_0 full-width" id="asba-photo-view-wrapper">



<!-- Main Events Content -->
<?php tribe_get_template_part( 'pro/photo/content' ) ?>
</div>

<div class="asba-section grey">
    <div class="asba-wrapper">
        <h1>In Partnership With</h1>
        <a href="http://www.albertabeerfestivals.com/" target="_blank"><img id="asba-partner-beerfest" class="asba-partners" src="<?php echo site_url() ?>/wp-content/themes/Divi-child/images/ABF.png" ></a>
        <a href="http://www.liquorconnect.com/" target="_blank"><img id="asba-partner-liquor-connect" class="asba-partners" src="<?php echo site_url() ?>/wp-content/themes/Divi-child/images/LiquorConnect.png" ></a>
        <a href="http://www.rcktshp.com" target="_blank"><img id="asba-partner-rcktshp" class="asba-partners" src="<?php echo site_url() ?>/wp-content/themes/Divi-child/images/RCKTSHP.png"></a>
    </div>
</div>
<?php do_action( 'tribe_events_after_template' ) ?>
