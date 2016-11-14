<?php
/**
 * Template Name: ASBA About Us
 *
 */


global $spEvents;
//$spEvents->loadDomainStylesScripts();

get_header(); ?>

  <div id="asba-about-content" >


      <?php if (have_posts()) : while (have_posts()) : the_post();?>

         <?php the_content(); ?>


        <?php endwhile; endif; ?>

    </div>

<div class="asba-about-us-section">
    <div class="about-us-wrapper">
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