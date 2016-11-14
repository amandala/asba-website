<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* instagram functions */

$access_token = '13475079.f3c36e0.3f9d587226634da891f6f57ac0416780';


function fetchData($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}


// Gets the users user id given their username
function getClientId($insta_user_name){
    global $access_token;

    $users = fetchData("https://api.instagram.com/v1/users/search?q=".$insta_user_name."&access_token=".$access_token);

    $result = json_decode($users, true);
    return (int)$result['data'][0]['id'];
}

// Gets the user's intagram feed given their user id
// vars: count = the number of photos to get
function getInstaFeed($insta_user_id){
    global $access_token;
    $count = 6; //the number of photos to get

    if($insta_user_id !== ''){
        $result = fetchData("https://api.instagram.com/v1/users/".$insta_user_id."/media/recent/?count=".$count."&access_token=".$access_token);
        $result = json_decode($result, true);

        return $result['data'];

    }

}

/* custom event functions */

function output_asba_event($event){
    $title = $event->post_title;
    //get the dates from start and end date
    preg_match_all("/([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$event->EventStartDate, $start_date);
    preg_match_all("/([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$event->EventEndDate, $end_date);


    $start_month = $start_date[2][0];
    $start_day = ltrim($start_date[3][0], 0);

    $v = tribe_get_recurrence_start_dates($post_id);

    echo '<a href="'.tribe_get_event_link($event->ID).'">' . tribe_event_featured_image($event->ID, 'thumbnail', false) . '</a>';
    echo '<a href="'.tribe_get_event_link($event->ID).'"><h4 class="asba-teal-title">' . $title . '</h4></a>';

    switch ($start_month){
        case '01':
            $start_month = 'January';
            break;
        case '02':
            $start_month = 'February';
            break;
        case '03':
            $start_month = 'March';
            break;
        case '04':
            $start_month = 'April';
            break;
        case '05':
            $start_month = 'May';
            break;
        case '06':
            $start_month = 'June';
            break;
        case '07':
            $start_month = 'July';
            break;
        case '08':
            $start_month = 'August';
            break;
        case '09':
            $start_month = 'September';
            break;
        case '10':
            $start_month = 'October';
            break;
        case '11':
            $start_month = 'November';
            break;
        case '12':
            $start_month = 'December';
            break;

    }
    echo '<h5 class="asba-home-event-date">'.$start_month.' '. $start_day . '   ';

    if(tribe_event_is_all_day($event->ID)){
        echo "- All Day</h5>";
    }
    else{
        echo tribe_get_start_date($event, false, $format = 'g:i A') . '-' . tribe_get_end_date($event, false, $format = 'g:i A');
        echo '</h5>';
    }

}

function output_asba_past_event($event){
    ?>
    <div class="event-wrapper">
        <div class="event-image">
    <?php
    echo '<a href="'.tribe_get_event_link($event->ID).'">' . tribe_event_featured_image($event->ID, 'thumbnail', false) . '</a></div>';
    echo '<div class="event-title"><a href="'.tribe_get_event_link($event->ID).'"><h4 class="asba-teal-title-small">' . $event->post_title . '</h4></a></div>';

    ?>
    </div>
    <?php

}

function output_asba_member_listing($picture, $name, $address, $city, $postal, $phone, $link, $email = 'null')
{
    function output_asba_member_listing($brewery)
    {
        $meta = get_user_meta($brewery->id);
        echo '<div class="asba-member">';
        echo '<div class="asba-member">';
        echo '<div class="asba-about-us-member-pic">';
        echo '<div class="asba-about-us-member-pic">';
        echo '<a href="' . site_url() . '/' . $link . '"><img class="asba-about-us-member-pic" src="' . site_url() . '/wp-content/themes/Divi-child/images/' . $picture . '"></a>';
        echo '<a href="' . $meta['asba_url'][0] . '">' . get_avatar($brewery->id, 300) . '</a>';
        echo '</div>';
        echo '</div>';
        echo '<h4 class="asba-teal-title">' . $name . '</h4>';
        echo '<h4 class="asba-teal-title">' . $brewery->display_name . '</h4>';
        echo '<p class="asba-member-address-listing">' . $address . '</br>' . $city . '</br>' . $postal . '</br>Phone: ' . $phone . '</p>';
        echo '<p class="asba-member-address-listing">' . $meta['asba_address'][0] . '</br>' . $meta['asba_city'][0] . '</br>' . $meta['asba_postal'] . '</br>Phone: ' . $meta['asba_phone'][0] . '</p>';
        if ($email !== 'null') {
            if ($meta['asba_email'][0] !== '') {
                echo '<p class="asba-member-address"><a href="mailto:' . $email . '">send email</a></p>';
                echo '<p class="asba-member-address"><a href="mailto:' . $meta['asba_email'][0] . '">send email</a></p>';
            }
        }
        echo '</div>';
        echo '</div>';
    }
}


function output_asba_member_brewery($brewery){

    $meta = get_user_meta($brewery->id);
    echo '<div class="asba-member">';
    echo '<div class="asba-about-us-member-pic">';
    echo '<a href="'. $meta['asba_url'][0] . '">'  . get_avatar($brewery->id, 300) . '</a>';
    echo '</div>';
    echo '<h4 class="asba-teal-title">'.$brewery->display_name .'</h4>';
    echo '<p class="asba-member-address-listing">'.$meta['asba_address'][0].'</br>'.$meta['asba_city'][0].'</br>'.$meta['asba_postal'][0].'</br>Phone: '.$meta['asba_phone'][0].'</p>';
    if($meta['asba_email'][0] !==''){
        echo '<p class="asba-member-address"><a href="mailto:'.$meta['asba_email'][0].'">send email</a></p>';
    }
    echo '</div>';

}

function output_asba_member_board($picture, $name, $bio){
    echo '<div class="asba-about-us-member">';
        echo '<div class="asba-about-us-board-pic">';
            echo '<img class="asba-about-us-member-pic" src="'.site_url().'/wp-content/themes/Divi-child/images/'.$picture.'">';
        echo '</div>';
        echo '<h4 class="asba-about-us-member-name">'.$name.'</h4>';
        echo '<p class="asba-about-us-member-bio">'.$bio.'</p>';
    echo '</div>';

}


add_action('in_widget_form', 'spice_get_widget_id');

function spice_get_widget_id($widget_instance)

{

    // Check if the widget is already saved or not.

    if ($widget_instance->number=="__i__"){

        echo "<p><strong>Widget ID is</strong>: Pls save the widget first!</p>"   ;


    }  else {


        echo "<p><strong>Widget ID is: </strong>" .$widget_instance->id. "</p>";


    }
}

if ( ! function_exists( 'et_pb_postinfo_meta' ) ) :
    function et_pb_postinfo_meta( $postinfo, $date_format ){
        $postinfo_meta = '';

        if ( in_array( 'date', $postinfo ) ) {
            if ( in_array( 'author', $postinfo ) ) $postinfo_meta ;
            $postinfo_meta .= get_the_time( wp_unslash( $date_format ) );
        }

        return $postinfo_meta;
    }
endif;



add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );
add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id )
{
    if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
    update_user_meta( $user_id, 'asba_address', $_POST['asba_address'] );
    update_user_meta( $user_id, 'asba_city', $_POST['asba_city'] );
    update_user_meta( $user_id, 'asba_postal', $_POST['asba_postal'] );
    update_user_meta( $user_id, 'asba_phone', $_POST['asba_phone'] );
    update_user_meta( $user_id, 'asba_email', $_POST['asba_email'] );
    update_user_meta( $user_id, 'asba_url', $_POST['asba_url'] );



}
#Developed By oneTarek , http://oneTarek.com
function extra_user_profile_fields( $user )
{ ?>
    <h3>Brewery Member Custom Fields</h3>
    <p>These fields will only work with the Brewery user type and are used to fill the brewery member listing page.</p>

    <div class="form-table">
        <fieldset>
            <label class="backend-input" for="asba_address"><b>Address</b> eg.123 Some Street</label>
            <input type="text" id="asba_address" name="asba_address"  value="<?php echo esc_attr( get_the_author_meta( 'asba_address', $user->ID )); ?>"><br />
            <label class="backend-input" for="asba_city"><b>City and Province</b> eg. Calgary, AB</label>
            <input type="text" id="asba_city" name="asba_city"  value="<?php echo esc_attr( get_the_author_meta( 'asba_city', $user->ID )); ?>"><br />
            <label class="backend-input" for="asba_postal"><b>Postal Code</b> eg. T2K 3M5</label>
            <input type="text" id="asba_postal" name="asba_postal"  value="<?php echo esc_attr( get_the_author_meta( 'asba_postal', $user->ID )); ?>"><br />
            <label class="backend-input" for="asba_phone"><b>Phone Number</b> eg. 403-555-5555</label>
            <input type="text" id="asba_phone" name="asba_phone"  value="<?php echo esc_attr( get_the_author_meta( 'asba_phone', $user->ID )); ?>"><br />

            <label class="backend-input" for="asba_url"><b>Brewery Page URL</b> eg. www.albertabrewers.ca/yellowhead-brewery</label>
            <input type="text" id="asba_url" name="asba_url"  value="<?php echo esc_attr( get_the_author_meta( 'asba_url', $user->ID )); ?>"><br />

        </fieldset>
    </div>

<?php }?>
