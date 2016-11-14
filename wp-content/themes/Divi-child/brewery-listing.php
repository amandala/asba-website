<?php
/* Template Name: Brewery Listing*/

?>
<?php get_header(); ?>


<div class="asba-section">
    <div class="asba-wrapper">
        <h1>Members</h1>
        <p>We represent 18 independent breweries that are based in Alberta and brew in Alberta. </br>Interested in
        becoming a member? Check out our <a href="<?php echo site_url()?>/membership-criteria">Membership Criteria</a> to become part of Alberta’s vibrant
        beer scene. </p>
    </div>
    <div class="et_pb_row asba-member-row">
    <?php
        $args = array(
            'role'         => 'brewery'
        );
        $brewers = get_users($args);

        $count = 0;

    foreach($brewers as $brewery){


        $id = $brewery->id;
        $meta = get_user_meta($id);

        echo '<div class="et_pb_column et_pb_column_1_3 et_pb_column et_pb_column_'.$count.'">';

        output_asba_member_brewery($brewery);

        if($count < 2){
            $count = $count + 1;
            echo '</div>'; //end previous column
        }
        else{
            echo '</div>'; //end previous column
            echo '</div>'; //end previous row
            echo '<div class="et_pb_row asba-member-row">';
            $count = 0;
        }

    }
    ?>
    </div>
</div>



<?php get_footer(); ?>