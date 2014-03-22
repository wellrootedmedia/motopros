<?php
require get_template_directory() . '/widgets/widget.googleads.php';


//function my_scripts_method() {
//    wp_enqueue_script(
//        'custom-script',
//        get_stylesheet_directory_uri() . '/dist/js/bootstrap.js',
//        array( 'jquery' )
//    );
//}
//
//add_action( 'wp_enqueue_scripts', 'my_scripts_method' );


if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'before_widget' => '<div class="mp-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="mp-widget-top"><div class="mp-widget-title">',
        'after_title' => '</div></div>'
    ));
}


//function advertisement_widgets_init() {
//
//    register_sidebar( array(
//        'name' => 'Sidebar Advertisement',
//        'id' => 'sidebar_advertisement',
//        'before_widget' => '<div class="sp-widget">',
//        'after_widget' => '</div>',
//        'before_title' => '<div class="sp-widget-top"><div class="sp-widget-title">',
//        'after_title' => '</div></div>'
//    ) );
//}
//add_action( 'widgets_init', 'advertisement_widgets_init' );
//
//function register_googlead_widget() {
//    register_widget( 'GoogleAd_Widget' );
//}
//add_action( 'widgets_init', 'register_googlead_widget' );





function retrieveUsersWithLocations() {
  /*
   * Todo: need to get a list of users with location
   * loop thru user locations with data below
   * return data as json
   */
    global $wpdb;
    $query = "
        SELECT profileData.value
        FROM wp_bp_xprofile_data AS profileData
        LEFT JOIN wp_users AS users
        ON profileData.user_id = users.ID
        WHERE profileData.field_id = 5
        ";
    $results = $wpdb->get_results( $query, ARRAY_A);

    return $results;
}



function retrieveGoogleMapLocations() {
    $geoLocs = retrieveUsersWithLocations();

    foreach( $geoLocs as $result ) {
        $cityStateName = strtolower( str_replace(", ", ",", $result['value'] ) );
        $url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$cityStateName."&sensor=false";
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        $locations = $data['results'][0]['geometry']['location'];
        $newData = json_encode($locations, true);
        $something = json_decode($newData, true);

        foreach( $something as $index => $value ) {
            echo $index . " " . $value . "<br/>";
        }
    }
}




function getCurrentGeoLocation() {

    $ip_addr = $_SERVER['REMOTE_ADDR'];

    if($ip_addr == "::1")
        $ip_addr = "71.160.202.224";

    $arr = array();
    $geoplugin = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip_addr) );

    if ( is_numeric($geoplugin['geoplugin_latitude']) && is_numeric($geoplugin['geoplugin_longitude']) ) {
        $arr = [
            'lat' => $geoplugin['geoplugin_latitude'],
            'long' => $geoplugin['geoplugin_longitude']
        ];
    }

    return json_encode($arr);
}


add_action('bp_setup_nav', 'mb_bp_profile_menu_posts', 301 );
function mb_bp_profile_menu_posts() {
    global $bp;
    // Change the order of menu items
    //$bp->bp_nav["profile"]["position"] = 10;
    //$bp->bp_nav['activity']['position'] = 20;

    // Remove a menu item links from page
    $bp->bp_nav['profile'] = false;
    $bp->bp_nav['activity'] = false;
    $bp->bp_nav['settings'] = false;
    $bp->bp_nav['notifications'] = false;
    $bp->bp_nav['friends'] = false;
    $bp->bp_nav['groups'] = false;
}

define("BP_DEFAULT_COMPONENT","profile");


function getBpUserFirstLastName() {
    global $bp;
    $userid = $bp->displayed_user->id;
    $user_info = get_userdata($userid);
    $wpFirstName = $user_info->first_name;
    $wpLastName =  $user_info->last_name;
    $bpUserFullName = bp_core_get_user_displayname( $userid );

//    if($wpLastName != "") {
//        return $wpFirstName . " " . $wpLastName;
//    } else {
//        return $bpUserFullName;
//    }
    return $wpFirstName . " " . $wpLastName;
}



function display_user_profession() {
    $args = array(
        'field'   => 20, // Field name or ID.
    );
    $profession = bp_get_profile_field_data( $args );

    if ($profession) {
        return $profession;
    }

}