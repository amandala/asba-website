<?php
/**
 * Template Name: ASBA Home
 */
?>
<?php
global $spEvents;
//$spEvents->loadDomainStylesScripts();

get_header();
?>

<?php get_header(); ?>
<div id="main-content">
    <div class="container" id="asba-homepage">
        <div id="content-area" class="clearfix">
            <div id="asba-home-banner-home">
               <?php //echo do_shortcode('[et_pb_section fullwidth="on" specialty="off"][et_pb_fullwidth_slider admin_label="Fullwidth Slider" saved_tabs="all" show_arrows="on" show_pagination="on" auto="off" auto_ignore_hover="off" parallax="off" parallax_method="off" remove_inner_shadow="off" background_position="default" background_size="default" hide_content_on_mobile="off" hide_cta_on_mobile="off" show_image_video_mobile="off" custom_button="off" button_letter_spacing="0" button_use_icon="default" button_icon_placement="right" button_on_hover="on" button_letter_spacing_hover="0" global_module="293"] [et_pb_slide background_image="http://mak.yourdevsite.ca/wp-content/uploads/2015/08/ASBA_Banner.jpg" background_position="center" background_size="initial" background_color="#ffffff" alignment="center" background_layout="dark" allow_player_pause="off" header_font_select="default" body_font_select="default" custom_button="off" button_font_select="default" button_use_icon="default" button_icon_placement="right" button_on_hover="on"] [/et_pb_slide] [/et_pb_fullwidth_slider][/et_pb_section]')?>


            <?php the_post_thumbnail( 50); ?>

            </div>

            <div id="asba-home-content" >


              <?php if (have_posts()) : while (have_posts()) : the_post();?>

                 <?php the_content(); ?>


                <?php endwhile; endif; ?>

            </div>

            <div id="asba-home-events" class="margined">
            <?php

            
            $args = array('start_date' => date('D, d M Y H:i:s'));
            //$args = array(); //sets the

            //get all the events that start after todays date
            $events = tribe_get_events($args);
            shuffle($events);

                if($events){
                    $ev1 = $events[0];
                    $ev2 = $events[1];
                    $ev3 = $events[2];

                    ?>
                    <div class="et_pb_row" id="asba-about-beer-week">
                        <h1 class="asba-home-heading">Past Alberta Beer Week Events</h1>
                        <p class="asba-home-tagline" id="asba-home-beer-week-events">Alberta Beer Week is a celebration of
                        fresh, local beer hosted by the Alberta Small Brewers Association. The Oktoberfests, presented by
                        the fine folks at Alberta Beer Festivals in Calgary (September 25th/26th) and Edmonton (October
                        2nd/3rd), are the bookends for the week, and special events will be taking place around the province
                        celebrating local beer.</p>


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
                <div class="et_pb_row"  >
                    <div id="asba-home-view-all">
                        <a id="asba-home-view-all-link-small" href="<?php echo site_url()?>/events/">View All Beer Week Events</a>
                    </div>
                </div>
            </div>

            <div id="asba-home-members" class="asba-color-background">
                <div class="et_pb_row " id="asba-about-row">
                    <h1 class="asba-home-heading white">About Us</h1>
                    <p>The Alberta Small Brewers Association is a not-for-profit organization that is committed to
                    promoting craft Alberta beer. We celebrate local entrepreneurs, educate the public on the benefits
                    of local beer, and work with the Alberta Government to create the best brewing environment.</p>
                    <div id="asba-home-view-all">
                        <a id="asba-home-view-all-link" class="white" href="<?php echo site_url()?>/members/">Learn More</a>
                    </div>
                </div>
            </div>

            <div id="asba-home-members" class="margined et_pb_row">
                <h1 class="asba-home-heading">Members</h1>
                <div id="asba-home-members-grid">

                    <?php

                $args = array(
                'role' => 'brewery'
                );

                $user_query = new WP_User_Query( $args );

                foreach($user_query->results as $brewery){
                    $meta = get_user_meta($brewery->id);

                    echo '<a href="'.$meta['asba_url'][0].'">' .get_avatar($brewery->ID, '200'). '</a>';

                }

                    ?>


                        </div>
                    </div>

                </div>
            </div>



        </div> <!-- #content-area -->
    </div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer(); ?>