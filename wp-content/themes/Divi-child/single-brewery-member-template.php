<?php
/*
 * Template Name: Brewery Member Template
 */
?>
<?php get_header(); ?>


<?php

$post = $wp_query->post;
$meta = get_post_meta($post->ID);

$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
$banner_full = wp_get_attachment_image( $post_thumbnail_id, $size, true, $attr );


$banner_s = $meta['banner_small'][0];
preg_match('(/wp-content\/.*)', $banner_s, $match );

$banner_small = $match[0];

$address = $meta['address'][0];
$name = $meta['name'][0];
$url = $meta['url'][0];
$email = $meta['email'][0];
$phone = $meta['phone'][0];
$lat = $meta['lat'][0];
$long = $meta['long'][0];

?>

<div class="brewery-page-img" id="asba_brewery_banner_full">
    <?php echo $banner_full; ?>
</div>
<div id="asba_brewery_banner_small">

</div>

<style>
    @media (max-width: 600px) {
        div#asba_brewery_banner_small{
            background-image: url(<?php echo '..' . $banner_small ?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center top;
            height: 300px;
        }
        
        div#asba_brewery_banner_full{
            display: none;
        }
    }
</style>

<div class="et_pb_row">
    <div class="et_pb_column et_pb_column_1_3 et_pb_column et_pb_column_0">
        <div id="y-map" style="width: 250px; height: 250px"></div>
    </div>
    <div class="et_pb_column et_pb_column_2_3 et_pb_column et_pb_column_1">
        <h4><?php echo $name ?></h4>
        <a href="<?php echo $url ?>" target="_blank"><?php echo $url ?></a>
        <p class="asba-member-address">Address: <?php echo $address ?></br>Tel: <?php echo $phone ?></br>Email: <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
        <p class="asba-member-decription"><?php echo apply_filters('the_content', $post->post_content); ?></p>
    </div>
</div> <!-- .container -->


<?php get_footer(); ?>

<script type="text/javascript"
        src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
    var myOptions = {
        zoom: 17,
        center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $long; ?>),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("y-map"), myOptions);
</script>

<style>

    .brewery-page-img {
        text-align: center;
    }
</style>