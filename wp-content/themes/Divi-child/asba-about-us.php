<?php
/**
 * Template Name: ASBA About Us
 *
 */


global $spEvents;
//$spEvents->loadDomainStylesScripts();

get_header(); ?>

<div id="asba-home-banner">
    <?php echo do_shortcode('[et_pb_section fullwidth="on" specialty="off"][et_pb_fullwidth_slider admin_label="Fullwidth Slider" show_arrows="on" show_pagination="on" auto="off" auto_ignore_hover="off" parallax="off" parallax_method="off" remove_inner_shadow="off" background_position="default" background_size="default" hide_content_on_mobile="off" hide_cta_on_mobile="off" show_image_video_mobile="off" custom_button="off" button_letter_spacing="0" button_use_icon="default" button_icon_placement="right" button_on_hover="on" button_letter_spacing_hover="0"]

[et_pb_slide background_position="bottom_center" background_size="default" background_color="#ffffff" alignment="center" background_layout="dark" video_bg_mp4="http://albertabrewers.ca/wp-content/uploads/2015/08/ASBA.mp4" video_bg_width="1920px" video_bg_height="1080px" allow_player_pause="off" header_font_select="default" body_font_select="default" custom_button="off" button_font_select="default" button_use_icon="default" button_icon_placement="right" button_on_hover="on" background_image="http://mak.yourdevsite.ca/wp-content/uploads/2015/08/ASBA-1920x1080.png"]

<h1 id="about-slider-caption">Representing Alberta Beer</h1>

[/et_pb_slide]

[/et_pb_fullwidth_slider][/et_pb_section]')?>
</div>

<div class="asba-section">
    <div class="et_pb_row centered-text">
        <h1>About Us</h1>
        <p>The Alberta Small Brewers Association is a not-for-profit organization that is committed to promoting craft Alberta beer. We celebrate local entrepreneurs, educate the public on the benefits of local beer, and work with the Alberta Government to create the best brewing environment.</p>
    </div>
</div>

<div class="asba-section grey" id="asba-about-members-wrapper">
    <div class="asba-wrapper">
        <h1>Board of Directors</h1>
        <p>Our leadership team is comprised of seasoned professionals and passionate beer patrons from across Alberta. </p>
    </div>
    <div class="et_pb_row boardmembers">
        <?php
        //this is for the new ASBA board member page. All users need to have gravatars before we can use this!
        $args = array(
        'role' => 'boardmember'
        );

        $user_query = new WP_User_Query( $args );

        $count = 0;
        foreach($user_query->results as $board) {

        echo '<div class="et_pb_column et_pb_column_1_3 et_pb_column et_pb_column_'.$count.'">';
        echo '<div class="asba-about-us-board-pic">'.get_avatar($board->ID, '300') . '</div>';

           $meta = get_user_meta($board->id);

        echo '<h4 class="asba-about-us-member-name">' .$board->display_name. '</h4>';
        echo '<div class="asba-about-us-member-bio"><p class="asba-about-us-member-bio">' . $meta['description'][0] . '</p></div>';


            if($count < 2){
                $count  = $count + 1;
                echo '</div>';
            }
            else{
                echo '</div></div><div class="et_pb_row boardmembers">';
                $count = 0;
            }

        }
        ?>
    </div>



</div>



<?php get_footer(); ?>
