<?php

include 'inc/functions-globals.php';
include 'inc/functions-identify-environment.php';
include 'inc/functions-child.php';
include 'inc/functions-shortcode.php';
include 'inc/functions-admin.php';
include 'inc/functions-activities-data.php';
include 'inc/functions-activities.php';

// For Breadcrumbs and URLs
$environment = identifyEnvironmentFromIP($_SERVER['SERVER_ADDR'], $_SERVER['REMOTE_ADDR']);
setThemeGlobals($environment);

// add_action
add_action('wp_enqueue_scripts', 'dequeue_parent_style', 9999);
add_action('wp_head', 'dequeue_parent_style', 9999);
add_action('wp_enqueue_scripts', 'tna_child_styles');
add_action('wp_enqueue_scripts','tna_child_scripts');
add_action( 'init', 'latin_metaboxes' );

class Manage_Acceptable_Group_Cookie_List implements JsonSerializable {
    protected $usage;
    protected $settings;
    protected $essential;
    public function __construct(array $cookie_options)
    {
        $this->usage        = $cookie_options[‘usage’];
        $this->settings     = $cookie_options[‘settings’];
        $this->essential    = $cookie_options[‘essential’];
    }
    public function getEssential()
    {
        return $this->essential;
    }
    public function getSettings()
    {
        return $this->settings;
    }
    public function getUsage()
    {
        return $this->usage;
    }
    public function jsonSerialize()
    {
        return
        [
            ‘usage’       => $this->getUsage(),
            ‘settings’    => $this->getSettings(),
            ‘essential’   => $this->getEssential()
        ];
    }
}
$manage_acceptable_group_cookie_list = new Manage_Acceptable_Group_Cookie_List(
    array(
        ‘usage’         => false,
        ‘settings’      => false,
        ‘essential’     => true,
    )
);


function wp_cookies() { 
    // Check if cookie is already set
    $cookie_group_list_to_json = json_encode( $manage_acceptable_group_cookie_list );
    setcookie('cookies_policy', $cookie_group_list_to_json, time()+31556926  ,‘/’);
    
    /**
    * Call $_COOKIE directly after was set so it can be accessed
    * without having to reload or navigate to a different page
    */
    $_COOKIE['cookies_policy'] = $cookie_group_list_to_json;
} 

add_action('init', 'wp_cookies');

setcookie('wpb_visit_time',  date('F j, Y g:i a'), time()+31556926, ,'/');