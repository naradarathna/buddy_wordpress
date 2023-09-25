<?php
/**
 * Plugin Name: Buddy
 * Description: Buddy features.
 * Version: 1.0
 * Author: Nimesha Amarasinghe
 * Domain Path: /languages/
 *
 * @package Buddy
 */

if(!defined("ABSPATH"))
    exit;
    
if(!defined("BUDDY_PLUGIN_DIR_PATH"))
    define("BUDDY_PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));

if(!defined("BUDDY_PLUGIN_URL"))
    define("BUDDY_PLUGIN_URL", plugins_url()."/buddy");

function include_css() {
	wp_enqueue_style("bootstrap", BUDDY_PLUGIN_URL."/assets/css/bootstrap.min.css",'');
    wp_enqueue_style("datatable", BUDDY_PLUGIN_URL."/assets/css/jquery.dataTables.min.css",'');
    wp_enqueue_style("bootstrap", BUDDY_PLUGIN_URL."/assets/css/jquery.notifyBar.css",'');
    wp_enqueue_style("style", BUDDY_PLUGIN_URL."/assets/css/style.css",'');
}

function include_scripts() {
	wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap.min.js',BUDDY_PLUGIN_URL."/assets/js/bootstrap.min.js",'',true);
    wp_enqueue_script('jquery.validate.min.js',BUDDY_PLUGIN_URL."/assets/js/jquery.validate.min.js",'',true);
    wp_enqueue_script('jquery.notifyBar.js',BUDDY_PLUGIN_URL."/assets/js/jquery.notifyBar.js",'',true);
    wp_enqueue_script('jquery.dataTables.min.js',BUDDY_PLUGIN_URL."/assets/js/jquery.dataTables.min.js",'',true);
    wp_enqueue_script('script.js',BUDDY_PLUGIN_URL."/assets/js/script.js",'',true);
}
function include_assets(){
    include_css();
    include_scripts();
}
add_action("init","include_assets");

function user_detail_table(){
    global $wpdb;
    return $wpdb->prefix."user_detail"; // wp_user_detail
}

function mode_table(){
    global $wpdb;
    return $wpdb->prefix."mode"; // wp_mode
}

function user_mode_table(){
    global $wpdb;
    return $wpdb->prefix."user_mode"; // wp_user_mode
}

function user_custom_gratitude_table(){
    global $wpdb;
    return $wpdb->prefix."user_custom_gratitude"; // wp_user_custom_gratitude
}

function user_task_table(){
    global $wpdb;
    return $wpdb->prefix."user_task"; // wp_user_task
}

function user_diary_table(){
	global $wpdb;
    return $wpdb->prefix."user_diary"; // wp_user_diary
}

function meditation_table(){
	global $wpdb;
    return $wpdb->prefix."meditation"; // wp_meditation
}

function user_meditation_table(){
	global $wpdb;
    return $wpdb->prefix."user_meditation"; // wp_user_meditation
}

function motivation_table(){
	global $wpdb;
    return $wpdb->prefix."motivation"; // wp_motivation
}

function user_motivation_table(){
	global $wpdb;
    return $wpdb->prefix."user_motivation"; // wp_user_motivation
}

function yoga_table(){
	global $wpdb;
    return $wpdb->prefix."yoga"; // wp_yoga
}

function user_yoga_table(){
	global $wpdb;
    return $wpdb->prefix."user_yoga"; // wp_user_yoga
}

function relaxing_table(){
	global $wpdb;
    return $wpdb->prefix."relaxing"; // wp_relaxing
}

function user_relaxing_table(){
	global $wpdb;
    return $wpdb->prefix."user_relaxing"; // wp_user_relaxing
}

function initialize_user_default_modes() {
    global $wpdb;
    
    // Adding default mode for users
    $all_users = "SELECT * FROM wp_users";
    $result_all_users = $wpdb->get_results($all_users) or die(mysql_error());
    $date = date("Y-m-d H:i:s");
    foreach( $result_all_users as $user ) {
        $current_user = $user->ID;
        $wpdb->insert('wp_user_mode', array(
            'user_id' => $current_user,
            'mode_id' => '1',
            'user_mode_started' => $date,
            ));
    }
}

function initialize_mode_table() {
    global $wpdb;
    
    // Adding modes
    $wpdb->insert(mode_table(), array(
        'mode_name' => 'HAPPY',
        'mode_symbol' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/emoji/happy.gif',
        ));
    $wpdb->insert(mode_table(), array(
        'mode_name' => 'ANGRY',
        'mode_symbol' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/emoji/angry.gif',
        ));
    $wpdb->insert(mode_table(), array(
        'mode_name' => 'SAD',
        'mode_symbol' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/emoji/sad.gif',
        ));
    $wpdb->insert(mode_table(), array(
        'mode_name' => 'FEAR',
        'mode_symbol' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/emoji/fear.gif',
        ));
    $wpdb->insert(mode_table(), array(
        'mode_name' => 'LOVE',
        'mode_symbol' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/emoji/love.gif',
        ));
    $wpdb->insert(mode_table(), array(
        'mode_name' => 'BORING',
        'mode_symbol' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/emoji/boring.gif',
        ));
}

function initialize_meditation_table() {
    global $wpdb;
    
    $wpdb->insert(meditation_table(), array( 
    'meditation_title' => 'Mindfulness', 
    'meditation_url' => 'https://player.vimeo.com/video/12367590?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(meditation_table(), array( 
    'meditation_title' => 'Dealing with Stress', 
    'meditation_url' => 'https://player.vimeo.com/video/132863847?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(meditation_table(), array( 
    'meditation_title' => 'Breathing', 
    'meditation_url' => 'https://player.vimeo.com/video/132753459?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(meditation_table(), array( 
    'meditation_title' => 'Aligning with Source Energy and Grounding', 
    'meditation_url' => 'https://player.vimeo.com/video/132756938?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(meditation_table(), array( 
    'meditation_title' => 'Sunset', 
    'meditation_url' => 'https://player.vimeo.com/video/11382422?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(meditation_table(), array( 
    'meditation_title' => 'River Journey', 
    'meditation_url' => 'https://player.vimeo.com/video/10287670?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(meditation_table(), array( 
    'meditation_title' => '5-Minute', 
    'meditation_url' => 'https://player.vimeo.com/video/69985793?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(meditation_table(), array( 
    'meditation_title' => 'Non-dual', 
    'meditation_url' => 'https://player.vimeo.com/video/7057814? h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(meditation_table(), array( 
    'meditation_title' => 'Glacier', 
    'meditation_url' => 'https://player.vimeo.com/video/4904719?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(meditation_table(), array( 
    'meditation_title' => 'Amazing Day', 
    'meditation_url' => 'https://player.vimeo.com/video/359645992?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(meditation_table(), array( 
    'meditation_title' => ' Simple', 
    'meditation_url' => 'https://player.vimeo.com/video/252595700?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(meditation_table(), array( 
    'meditation_title' => ' Sleep', 
    'meditation_url' =>'https://player.vimeo.com/video/133083187?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    ));
}

function initialize_motivation_table() {
    global $wpdb;
    
    $wpdb->insert(motivation_table(), array( 
    'motivation_title' => ' Sacrifice', 
    'motivation_url' => 'https://player.vimeo.com/video/76593824?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(motivation_table(), array( 
    'motivation_title' => ' Sacrifice', 
    'motivation_url' => 'https://player.vimeo.com/video/134816387?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(motivation_table(), array( 
    'motivation_title' => ' VISION', 
    'motivation_url' => 'https://player.vimeo.com/video/106904052?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(motivation_table(), array( 
    'motivation_title' => ' Unstoppable', 
    'motivation_url' => 'https://player.vimeo.com/video/305398922?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(motivation_table(), array( 
    'motivation_title' => 'Desire', 
    'motivation_url' => 'https://player.vimeo.com/video/106242254?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(motivation_table(), array( 
    'motivation_title' => ' Why Do We Fall', 
    'motivation_url' => 'https://player.vimeo.com/video/103043997?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(motivation_table(), array( 
    'motivation_title' => 'Dream', 
    'motivation_url' => 'https://player.vimeo.com/video/104883969?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(motivation_table(), array( 
    'motivation_title' => 'Imagine', 
    'motivation_url' => 'https://player.vimeo.com/video/110696593?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(motivation_table(), array( 
    'motivation_title' => 'Accenture', 
    'motivation_url' => 'https://player.vimeo.com/video/422337049?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    ));  
    
    $wpdb->insert(motivation_table(), array( 
    'motivation_title' => 'Awakening', 
    'motivation_url' => 'https://player.vimeo.com/video/107471488?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(motivation_table(), array( 
    'motivation_title' => ' Born In Darkness', 
    'motivation_url' => 'https://player.vimeo.com/video/105450430?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
}

function initialize_yoga_table() {
    global $wpdb;
    
    $wpdb->insert(yoga_table(), array( 
    'yoga_title' => ' Yoga for Stress Management', 
    'yoga_url' => 'https://player.vimeo.com/video/721214338?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(yoga_table(), array( 
    'yoga_title' => ' Yoga with Melissa 555', 
    'yoga_url' => 'https://player.vimeo.com/video/498416630?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(yoga_table(), array( 
    'yoga_title' => ' Yoga_for_stress_management', 
    'yoga_url' => 'https://player.vimeo.com/video/592449835?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(yoga_table(), array( 
    'yoga_title' => ' Yoga for Stress Relief_1', 
    'yoga_url' => 'https://player.vimeo.com/video/11213304?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(yoga_table(), array( 
    'yoga_title' => ' Iyengar Yoga for Stress Management', 
    'yoga_url' => 'https://player.vimeo.com/video/393622791?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(yoga_table(), array( 
    'yoga_title' => ' Bath Yoga Studio', 
    'yoga_url' => 'https://player.vimeo.com/video/415104661?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(yoga_table(), array( 
    'yoga_title' => ' Yoga For Stress Relief_2', 
    'yoga_url' => 'https://player.vimeo.com/video/365301302?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(yoga_table(), array( 
    'yoga_title' => ' Ears & Jaw', 
    'yoga_url' => 'https://player.vimeo.com/video/399167477?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(yoga_table(), array( 
    'yoga_title' => 'Yin Yoga', 
    'yoga_url' => 'https://player.vimeo.com/video/200272169?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
    
    $wpdb->insert(yoga_table(), array( 
    'yoga_title' => 'Yin Yoga for holiday', 
    'yoga_url' => 'https://player.vimeo.com/video/304983798?h=dbdad73488&amp;autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0', 
    )); 
}

function initialize_relaxing_table() {
    global $wpdb;
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Good Vibe', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_01.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Country Morning', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_02.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Ocean and infinity', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_03.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Dawnlight', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_04.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Silent Solece', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_05.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Calm down rewind', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_06.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Ocean song', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_07.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Cloudy Mountains', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_08.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Morning Sunshine', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_09.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Relaxing Evening', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_10.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Sunny Sky', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_11.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Cool wind', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_12.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Sunday Relaxing', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_13.mp3', 
    ));
    
    $wpdb->insert(relaxing_table(), array( 
    'relaxing_title' => 'Cool Mind', 
    'relaxing_url' => 'https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_14.mp3', 
    ));
}

function initialize_tables() {
    initialize_mode_table();
    initialize_user_default_modes();
    initialize_meditation_table();
    initialize_motivation_table();
    initialize_yoga_table();
    initialize_relaxing_table();
}

function initialize_database(){
    global $wpdb;
    require_once ABSPATH.'wp-admin/includes/upgrade.php';
    
    // Create user detail table
    $sql_create_user_details_tbl = "CREATE TABLE `".user_detail_table()."` (
    `user_detail_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    `user_detail_dob` DATE NOT NULL,
    `user_detail_gender` VARCHAR(25) NOT NULL,
    PRIMARY KEY (`user_detail_id`),
    FOREIGN KEY (`user_id`) REFERENCES `wp_users`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_create_user_details_tbl);
    
    // Create mode table
    $sql_create_mode_tbl = "CREATE TABLE `".mode_table()."` (
    `mode_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `mode_name` VARCHAR(25) NOT NULL,
    `mode_symbol` TEXT NOT NULL,
    PRIMARY KEY (`mode_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_create_mode_tbl);
    
     // Create user mode table
    $sql_create_user_mode_tbl = "CREATE TABLE `".user_mode_table()."` (
    `user_mode_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    `mode_id` BIGINT(20) UNSIGNED NOT NULL,
    `user_mode_started` DATETIME NOT NULL,
    `user_mode_ended` DATETIME NULL,
    PRIMARY KEY (`user_mode_id`),
    FOREIGN KEY (`user_id`) REFERENCES `wp_users`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (`mode_id`) REFERENCES `".mode_table()."`(`mode_id`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_create_user_mode_tbl);
    
    // Create user custom gratitude table
    $sql_user_custom_gratitude_tbl = "CREATE TABLE `".user_custom_gratitude_table()."` (
    `user_custom_gratitude_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    `custom_gratitude_content` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`user_custom_gratitude_id`),
    FOREIGN KEY (`user_id`) REFERENCES `wp_users`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_user_custom_gratitude_tbl);
    
    // Create user task table
    $sql_user_task_tbl = "CREATE TABLE `".user_task_table()."` (
    `user_task_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    `user_task_title` VARCHAR(255) NOT NULL,
    `user_task_date` DATE NOT NULL,
    `user_task_start_time` TIME NOT NULL,
    `user_task_end_time` TIME NOT NULL,
    `user_task_location` VARCHAR(255) NOT NULL,
    `user_task_description` VARCHAR(255) NOT NULL,
    `user_task_is_reminder` BOOLEAN NOT NULL,
    `user_task_reminding_time` INT(11) NOT NULL,
    PRIMARY KEY (`user_task_id`),
    FOREIGN KEY (`user_id`) REFERENCES `wp_users`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_user_task_tbl);
    
    // Create user diary table
    $sql_user_diary_tbl = "CREATE TABLE `".user_diary_table()."` (
    `user_diary_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    `user_diary_date` DATE NOT NULL,
    `user_diary_note` TEXT NOT NULL,
    PRIMARY KEY (`user_diary_id`),
    FOREIGN KEY (`user_id`) REFERENCES `wp_users`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_user_diary_tbl);
    
    // Create meditation table
    $sql_meditation_tbl = "CREATE TABLE `".meditation_table()."` (
    `meditation_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `meditation_title` VARCHAR(255) NOT NULL,
    `meditation_url` TEXT NOT NULL,
    PRIMARY KEY (`meditation_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_meditation_tbl);
    
    // Create user meditation table
    $sql_user_meditation_tbl = "CREATE TABLE `".user_meditation_table()."` (
    `user_meditation_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    `meditation_id` BIGINT(20) UNSIGNED NOT NULL,
    PRIMARY KEY (`user_meditation_id`),
    FOREIGN KEY (`user_id`) REFERENCES `wp_users`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (`meditation_id`) REFERENCES `".meditation_table()."`(`meditation_id`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_user_meditation_tbl);
    
    // Create motivation table
    $sql_motivation_tbl = "CREATE TABLE `".motivation_table()."` (
    `motivation_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `motivation_title` VARCHAR(255) NOT NULL,
    `motivation_url` TEXT NOT NULL,
    PRIMARY KEY (`motivation_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_motivation_tbl);
    
    // Create user motivation table
    $sql_user_motivation_tbl = "CREATE TABLE `".user_motivation_table()."` (
    `user_motivation_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    `motivation_id` BIGINT(20) UNSIGNED NOT NULL,
    PRIMARY KEY (`user_motivation_id`),
    FOREIGN KEY (`user_id`) REFERENCES `wp_users`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (`motivation_id`) REFERENCES `".motivation_table()."`(`motivation_id`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_user_motivation_tbl);
    
    // Create yoga table
    $sql_yoga_tbl = "CREATE TABLE `".yoga_table()."` (
    `yoga_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `yoga_title` VARCHAR(255) NOT NULL,
    `yoga_url` TEXT NOT NULL,
    PRIMARY KEY (`yoga_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_yoga_tbl);
    
    // Create user yoga table
    $sql_user_yoga_tbl = "CREATE TABLE `".user_yoga_table()."` (
    `user_yoga_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    `yoga_id` BIGINT(20) UNSIGNED NOT NULL,
    PRIMARY KEY (`user_yoga_id`),
    FOREIGN KEY (`user_id`) REFERENCES `wp_users`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (`yoga_id`) REFERENCES `".yoga_table()."`(`yoga_id`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_user_yoga_tbl);
    
    // Create relaxing music table
    $sql_relaxing_tbl = "CREATE TABLE `".relaxing_table()."` (
    `relaxing_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `relaxing_title` VARCHAR(255) NOT NULL,
    `relaxing_url` TEXT NOT NULL,
    PRIMARY KEY (`relaxing_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_relaxing_tbl);
    
    // Create user relaxing table
    $sql_user_relaxing_tbl = "CREATE TABLE `".user_relaxing_table()."` (
    `user_relaxing_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    `relaxing_id` BIGINT(20) UNSIGNED NOT NULL,
    PRIMARY KEY (`user_relaxing_id`),
    FOREIGN KEY (`user_id`) REFERENCES `wp_users`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (`relaxing_id`) REFERENCES `".relaxing_table()."`(`relaxing_id`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    dbDelta($sql_user_relaxing_tbl);
    
    initialize_tables();
}

function initialize_pages() {
    // User login page
    $user_login_page = array(
        'post_title'    => "User Login",
        'post_content'  => "[login]",
        'post_status'   => 'publish',
        "post_type"     => "page",
        "post_name"     => "login"
        );
    
    // Insert the post into the database
    $user_login_page_id = wp_insert_post($user_login_page);
    add_option("login_page_id", $user_login_page_id);
    update_option( 'page_on_front', $user_login_page_id );
    update_option( 'show_on_front', 'page' );
    
    // User profile page
    $user_profile_page = array(
        'post_title'    => "User Profile",
        'post_content'  => "[profile]",
        'post_status'   => 'publish',
        "post_type"     => "page",
        "post_name"     => "profile"
        );
    
    // Insert the post into the database
    $user_profile_page_id = wp_insert_post($user_profile_page);
    add_option("profile_page_id", $user_profile_page_id);
    
    // PHP Request page
    $php_request_page = array(
        'post_title'    => "Php Request",
        'post_content'  => "[php_request]",
        'post_status'   => 'publish',
        "post_type"     => "page",
        "post_name"     => "php_request"
        );
    
    $php_request_page_id = wp_insert_post($php_request_page);
    add_option("request_page_id", $php_request_page_id);
    
    
    // SignUp Request page
    $signup_request_page = array(
        'post_title'    => "Signup Request",
        'post_content'  => "[signup]",
        'post_status'   => 'publish',
        "post_type"     => "page",
        "post_name"     => "signup"
        );
    
    $signup_request_page_id = wp_insert_post($signup_request_page);
    add_option("signup_request_page_id", $signup_request_page_id);
    
    // Workload Organizer page
    $workload_organizer_page = array(
        'post_title'    => "Workload Organizer",
        'post_content'  => "[workload_organizer]",
        'post_status'   => 'publish',
        "post_type"     => "page",
        "post_name"     => "workload_organizer"
        );
    
    $workload_organizer_page_id = wp_insert_post($workload_organizer_page);
    add_option("workload_organizer_page_id", $workload_organizer_page_id);
    
    // Diary Request page
    $diary_request_page = array(
        'post_title'    => "Diary Request",
        'post_content'  => "[diary]",
        'post_status'   => 'publish',
        "post_type"     => "page",
        "post_name"     => "diary"
        );
    
    $diary_request_page_id = wp_insert_post($diary_request_page);
    add_option("diary_request_page_id", $diary_request_page_id);
    
    // Meditation Request page
    $meditation_request_page = array(
        'post_title'    => "Meditation Request",
        'post_content'  => "[meditation]",
        'post_status'   => 'publish',
        "post_type"     => "page",
        "post_name"     => "meditation"
        );
    
    $meditation_request_page_id = wp_insert_post($meditation_request_page);
    add_option("meditation_request_page_id", $meditation_request_page_id);
    
    // Motivation Request page
    $motivation_request_page = array(
        'post_title'    => "Motivation Request",
        'post_content'  => "[motivation]",
        'post_status'   => 'publish',
        "post_type"     => "page",
        "post_name"     => "motivation"
        );
    
    $motivation_request_page_id = wp_insert_post($motivation_request_page);
    add_option("motivation_request_page_id", $motivation_request_page_id);
    
    // Yoga Request page
    $yoga_request_page = array(
        'post_title'    => "Yoga Request",
        'post_content'  => "[yoga]",
        'post_status'   => 'publish',
        "post_type"     => "page",
        "post_name"     => "yoga"
        );
    
    $yoga_request_page_id = wp_insert_post($yoga_request_page);
    add_option("yoga_request_page_id", $yoga_request_page_id);
    
    // Calming and Relaxing Request page
    $calming_request_page = array(
        'post_title'    => "Calming Request",
        'post_content'  => "[calming_and_relaxing]",
        'post_status'   => 'publish',
        "post_type"     => "page",
        "post_name"     => "calming_and_relaxing"
        );
    
    $calming_request_page_id = wp_insert_post($calming_request_page);
    add_option("calming_request_page_id", $calming_request_page_id);
    
    // 404 page
    $error_page = array(
        'post_title'    => "Error page",
        'post_content'  => "[error_page]",
        'post_status'   => 'publish',
        "post_type"     => "page",
        "post_name"     => "error_page"
        );
    
    // Insert the post into the database
    $error_page_id = wp_insert_post($error_page);
    add_option("error_page_id", $error_page_id);
    
    add_option('op404_target', 'https://buddytorest.co.uk/');
}

function initialize() {
    initialize_database();
    initialize_pages();
}

register_activation_hook(__FILE__, "initialize");

function custom_page_layout($page_template){
    global $post;
    $page_slug = $post->post_content;
    
    if($page_slug == "[login]"){
        $page_template = BUDDY_PLUGIN_DIR_PATH."/views/frontend_login_page.php";
    }
    if($page_slug == "[signup]"){
        $page_template = BUDDY_PLUGIN_DIR_PATH."/views/frontend_signup_page.php";
    }
    if($page_slug == "[profile]"){
        $page_template = BUDDY_PLUGIN_DIR_PATH."/views/frontend_profile_page.php";
    }
    if($page_slug == "[php_request]"){
        $page_template = BUDDY_PLUGIN_DIR_PATH."/views/php_request.php";
    }
    if($page_slug == "[workload_organizer]"){
        $page_template = BUDDY_PLUGIN_DIR_PATH."/views/frontend_calander_page.php";
    }
    if($page_slug == "[diary]"){
        $page_template = BUDDY_PLUGIN_DIR_PATH."/views/frontend_diary_page.php";
    }
    if($page_slug == "[meditation]"){
        $page_template = BUDDY_PLUGIN_DIR_PATH."/views/frontend_meditation_page.php";
    }
    if($page_slug == "[motivation]"){
        $page_template = BUDDY_PLUGIN_DIR_PATH."/views/frontend_motivation_page.php";
    }
    if($page_slug == "[yoga]"){
        $page_template = BUDDY_PLUGIN_DIR_PATH."/views/frontend_yoga_page.php";
    }
    if($page_slug == "[calming_and_relaxing]"){
        $page_template = BUDDY_PLUGIN_DIR_PATH."/views/frontend_calming_and_relaxing_page.php";
    }
    if($page_slug == "[error_page]"){
        $page_template = BUDDY_PLUGIN_DIR_PATH."/views/frontend_error_page.php";
    }
    return $page_template;
}
add_filter("page_template", "custom_page_layout");


function dispose_database(){
    global $wpdb; // Drop reverse order
    $wpdb->query("DROP TABLE IF EXISTS ".user_relaxing_table());
    $wpdb->query("DROP TABLE IF EXISTS ".relaxing_table());
    $wpdb->query("DROP TABLE IF EXISTS ".user_yoga_table());
    $wpdb->query("DROP TABLE IF EXISTS ".yoga_table());
    $wpdb->query("DROP TABLE IF EXISTS ".user_motivation_table());
    $wpdb->query("DROP TABLE IF EXISTS ".motivation_table());
    $wpdb->query("DROP TABLE IF EXISTS ".user_meditation_table());
    $wpdb->query("DROP TABLE IF EXISTS ".meditation_table());
    $wpdb->query("DROP TABLE IF EXISTS ".user_diary_table());
    $wpdb->query("DROP TABLE IF EXISTS ".user_task_table());
    $wpdb->query("DROP TABLE IF EXISTS ".user_custom_gratitude_table());
    $wpdb->query("DROP TABLE IF EXISTS ".user_mode_table());
    $wpdb->query("DROP TABLE IF EXISTS ".mode_table());
    $wpdb->query("DROP TABLE IF EXISTS ".user_detail_table());
}

function dispose_pages() {
    if(!empty(get_option("login_page_id"))){
        $page_id = get_option("login_page_id");
        wp_delete_post($page_id,true);
        delete_option("login_page_id");
    }
    
    if(!empty(get_option("profile_page_id"))){
        $page_id = get_option("profile_page_id");
        wp_delete_post($page_id,true);
        delete_option("profile_page_id");
    }
    
    if(!empty(get_option("request_page_id"))){
        $page_id = get_option("request_page_id");
        wp_delete_post($page_id,true);
        delete_option("request_page_id");
    }
    
    if(!empty(get_option("signup_request_page_id"))){
        $page_id = get_option("signup_request_page_id");
        wp_delete_post($page_id,true);
        delete_option("signup_request_page_id");
    }
    
    if(!empty(get_option("workload_organizer_page_id"))){
        $page_id = get_option("workload_organizer_page_id");
        wp_delete_post($page_id,true);
        delete_option("workload_organizer_page_id");
    }
    
    if(!empty(get_option("diary_request_page_id"))){
        $page_id = get_option("diary_request_page_id");
        wp_delete_post($page_id,true);
        delete_option("diary_request_page_id");
    }
    
    if(!empty(get_option("meditation_request_page_id"))){
        $page_id = get_option("meditation_request_page_id");
        wp_delete_post($page_id,true);
        delete_option("meditation_request_page_id");
    }
    
    if(!empty(get_option("motivation_request_page_id"))){
        $page_id = get_option("motivation_request_page_id");
        wp_delete_post($page_id,true);
        delete_option("motivation_request_page_id");
    }
    
    if(!empty(get_option("yoga_request_page_id"))){
        $page_id = get_option("yoga_request_page_id");
        wp_delete_post($page_id,true);
        delete_option("yoga_request_page_id");
    }
    
    if(!empty(get_option("calming_request_page_id"))){
        $page_id = get_option("calming_request_page_id");
        wp_delete_post($page_id,true);
        delete_option("calming_request_page_id");
    }
    
    if(!empty(get_option("error_page_id"))){
        $page_id = get_option("error_page_id");
        wp_delete_post($page_id,true);
        delete_option("error_page_id");
    }
}

function dispose() {
    dispose_database();
    dispose_pages();
}

register_deactivation_hook(__FILE__, "dispose");

?>