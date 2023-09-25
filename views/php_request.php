<?php
$func = $_GET["func"];
if($func == "login")
{
    if(!session_id()) {
        session_start();
    }
    $info = array();
    $info['user_login'] = $_GET["username"];
    $info['user_password'] = $_GET["password"];
    $user = wp_signon($info);
    if ( is_wp_error( $user ) ) 
    {
        echo "false";
    }
    else
    {
        unset($_COOKIE['user_buddy']);
        setcookie('user_buddy',NULL,time()-7000000, '/');
        setcookie("user_buddy", $user->ID, time() + (86400 * 30), "/");
        echo "true";
    }
}
if($func == "logout")
{
    $user_id = get_current_user_id();

	wp_destroy_current_session();
	wp_clear_auth_cookie();
	wp_set_current_user( 0 );

	/**
	 * Fires after a user is logged out.
	 *
	 * @since 1.5.0
	 * @since 5.5.0 Added the `$user_id` parameter.
	 *
	 * @param int $user_id ID of the user that was logged out.
	 */
	do_action( 'wp_logout', $user_id );
    unset($_COOKIE['user_buddy']);
    setcookie('user_buddy',NULL,time()-7000000, '/');
    echo "true";
}

if($func == "isUserExists")
{
    global $wpdb;
    $user = "SELECT * FROM wp_users WHERE user_email='".$_GET["email"]."'";
    $rows_user = $wpdb->get_results($user);
    if($rows_user)
    {
        echo "true";
    }
    else{
        echo "false";
    }
}
if($func == "signup")
{
    global $wpdb;
    $user = "SELECT * FROM wp_users WHERE user_email='".$_GET["email"]."'";
    $rows_user = $wpdb->get_results($user);
    if(!$rows_user)
    {
        $date = date("Y-m-d H:i:s");
        $wpdb->insert('wp_users', array(
            'user_login' => $_GET['email'],
            'user_pass' => wp_hash_password($_GET['password']),
            'user_nicename' => $_GET['fname'],
            'user_email' => $_GET['email'],
            'user_registered' => $date,
            'user_status' => 0,
            'display_name' => $_GET['fname'].' '.$_GET['lname'],
            )); 
        $lastid = $wpdb->insert_id;
       //$registerd_user = "SELECT * FROM wp_users WHERE user_email='".$_GET["email"]."'";
        //$registered_rows_user = $wpdb->get_results($registerd_user);
        //$new_user_id = $registered_rows_user[0]->id;
        $wpdb->insert('wp_usermeta', array(
            'user_id' => $lastid,
            'meta_key' => 'wp_capabilities',
            'meta_value' => 'a:1:{s:13:"administrator";b:1;}',
            )); 
            
        $mode = "SELECT * FROM wp_mode WHERE mode_name='HAPPY'";
        $result_mode = $wpdb->get_results($mode) or die(mysql_error());
        foreach( $result_mode as $mode ) {
            $default_mode_id = $mode->mode_id;
            $wpdb->insert('wp_user_mode', array(
                'user_id' => $lastid,
                'mode_id' => $default_mode_id,
                'user_mode_started' => $date,
                )); 
        }
        
        echo "true";
    }
    else{
        echo "false";
    }
}
if($func == "getAllModes")
{
    global $wpdb;
    $mode = "SELECT * FROM wp_mode";
    $rows_modes = $wpdb->get_results($mode);
    if (is_array($rows_modes)) {
        echo json_encode($rows_modes);
    } else {
        echo '[]';
    }
}
if($func == "getAllUserModes")
{
    global $wpdb;
    $mode = "SELECT * FROM wp_user_mode WHERE user_id='".$_GET["user_id"]."'";
    $rows_modes = $wpdb->get_results($mode);
    if (is_array($rows_modes)) {
        echo json_encode($rows_modes);
    } else {
        echo '[]';
    }
}
if($func == "getLatetestMode")
{
    global $wpdb;
    $user_mode = "SELECT * FROM wp_user_mode WHERE user_id='".$_GET["user_id"]."' ORDER BY user_mode_id DESC LIMIT 1";
    $rows_user_modes = $wpdb->get_results($user_mode);
    foreach( $rows_user_modes as $user_modes ) {
            $current_mode_id = $user_modes->mode_id;
            $mode = "SELECT * FROM wp_mode WHERE mode_id='".$current_mode_id."'";
            $rows_modes = $wpdb->get_results($mode);
            if (is_array($rows_modes)) {
                echo json_encode($rows_modes);
            } else {
                echo '[]';
            }
    }
}
if($func == "updateMode")
{
    global $wpdb;
    $date = date("Y-m-d H:i:s");
    $latest_user_mode = "SELECT * FROM wp_user_mode WHERE user_id='".$_GET["user_id"]."' ORDER BY user_mode_id DESC LIMIT 1";
    $rows_latest_user_mode = $wpdb->get_results($latest_user_mode);
    foreach( $rows_latest_user_mode as $latet_modes ) {
            $current_mode_id = $latet_modes->user_mode_id;
            $wpdb->update('wp_user_mode', array('user_mode_ended'=>$date), array('user_mode_id'=>$current_mode_id));
            $wpdb->insert('wp_user_mode', array(
                'user_id' => $_GET["user_id"],
                'mode_id' => $_GET["mode_id"],
                'user_mode_started' => $date,
                )); 
    }
    echo true;
}
if($func == "task")
{
    global $wpdb;
    $user = "SELECT * FROM wp_user_task WHERE user_task_id='".$_GET["user_task_id"]."'";
    $rows_user = $wpdb->get_results($user);
    
    if($rows_user){
        $wpdb->update('wp_user_task', array(
            'user_task_title' => $_GET["user_task_title"],
            'user_task_date' => $_GET["user_task_date"],
            'user_task_start_time' => $_GET["user_task_start_time"],
            'user_task_end_time' => $_GET["user_task_end_time"],
            'user_task_location' => $_GET["user_task_location"],
            'user_task_description' => $_GET["user_task_description"],
            'user_task_is_reminder' => $_GET["user_task_is_reminder"],
            'user_task_reminding_time' => $_GET["user_task_reminding_time"]), array('user_task_id'=>$_GET["user_task_id"]));
        //echo json_encode("Exists");
    } else {
        $wpdb->insert('wp_user_task', array(
            'user_id' => $_GET["user_id"],
            'user_task_title' => $_GET["user_task_title"],
            'user_task_date' => $_GET["user_task_date"],
            'user_task_start_time' => $_GET["user_task_start_time"],
            'user_task_end_time' => $_GET["user_task_end_time"],
            'user_task_location' => $_GET["user_task_location"],
            'user_task_description' => $_GET["user_task_description"],
            'user_task_is_reminder' => $_GET["user_task_is_reminder"],
            'user_task_reminding_time' => $_GET["user_task_reminding_time"],
            )); 
        //echo json_encode("Not Exists");
    }
    echo true;
}
if($func == "getUserTasks")
{
    global $wpdb;
    $tasks = "SELECT * FROM wp_user_task WHERE user_task_date = '".$_GET["user_task_date"]."' AND user_id = '".$_GET["user_id"]."' AND CAST(user_task_start_time as time) >= '".$_GET["user_task_start_time"]."' AND user_task_is_reminder = 1";
    $rows_tasks = $wpdb->get_results($tasks);
    //echo json_encode($_GET["user_task_month"]." ".$_GET["user_id"]);
    if (is_array($rows_tasks)) {
        echo json_encode($rows_tasks);
    } else {
        echo '[]';
    }
}
if($func == "getTasks")
{
    global $wpdb;
    $tasks = "SELECT * FROM wp_user_task WHERE MONTH(user_task_date) = '".$_GET["user_task_month"]."' AND user_id = '".$_GET["user_id"]."'";
    $rows_tasks = $wpdb->get_results($tasks);
    //echo json_encode($_GET["user_task_month"]." ".$_GET["user_id"]);
    if (is_array($rows_tasks)) {
        echo json_encode($rows_tasks);
    } else {
        echo '[]';
    }
}
if($func == "deletetask")
{
    global $wpdb;
    $tasks = "DELETE FROM `wp_user_task` WHERE `user_task_id` = ".$_GET["user_task_id"];
    $rows_tasks = $wpdb->get_results($tasks);
    if (is_array($rows_tasks)) {
        echo json_encode("DELETED");
    } else {
        echo '[]';
    }
}
if($func == "meditation")
{
    global $wpdb;
    $all_meditation = "SELECT * FROM `wp_meditation`";
    $rows_all_meditation = $wpdb->get_results($all_meditation);
    if (is_array($rows_all_meditation)) {
        echo json_encode($rows_all_meditation);
    } else {
        echo '[]';
    }
}
if($func == "meditationSetFav")
{
    global $wpdb;
    $user_meditation = "SELECT * FROM `wp_user_meditation` WHERE user_id = '".$_GET["user_id"]."' AND meditation_id='".$_GET["meditation_id"]. "'";
    $rows_user_meditation = $wpdb->get_results($user_meditation);
    if (!$rows_user_meditation) {
        $wpdb->insert('wp_user_meditation', array(
            'user_id' => $_GET["user_id"],
            'meditation_id' => $_GET["meditation_id"]
            ));
        echo true;
    }
    echo false;
}
if($func == "meditationUnsetFav")
{
    global $wpdb;
    $tasks = "DELETE FROM `wp_user_meditation` WHERE user_id = '".$_GET["user_id"]."' AND meditation_id='".$_GET["meditation_id"]. "'";
    $rows_tasks = $wpdb->get_results($tasks);
    if (is_array($rows_tasks)) {
        echo json_encode("DELETED");
    } else {
        echo '[]';
    }
}
if($func == "favmeditation")
{
    global $wpdb;
    $user_meditation = "SELECT * FROM `wp_user_meditation` WHERE user_id = '".$_GET["user_id"]."'";
    $rows_user_meditation = $wpdb->get_results($user_meditation);
    if (is_array($rows_user_meditation)) {
        echo json_encode($rows_user_meditation);
    } else {
        echo '[]';
    }
}
// Motivation
if($func == "motivation")
{
    global $wpdb;
    $all_motivation = "SELECT * FROM `wp_motivation`";
    $rows_all_motivation = $wpdb->get_results($all_motivation);
    if (is_array($rows_all_motivation)) {
        echo json_encode($rows_all_motivation);
    } else {
        echo '[]';
    }
}
if($func == "motivationSetFav")
{
    global $wpdb;
    $user_motivation = "SELECT * FROM `wp_user_motivation` WHERE user_id = '".$_GET["user_id"]."' AND motivation_id='".$_GET["motivation_id"]. "'";
    $rows_user_motivation = $wpdb->get_results($user_motivation);
    if (!$rows_user_motivation) {
        $wpdb->insert('wp_user_motivation', array(
            'user_id' => $_GET["user_id"],
            'motivation_id' => $_GET["motivation_id"]
            ));
        echo true;
    }
    echo false;
}
if($func == "motivationUnsetFav")
{
    global $wpdb;
    $tasks = "DELETE FROM `wp_user_motivation` WHERE user_id = '".$_GET["user_id"]."' AND motivation_id='".$_GET["motivation_id"]. "'";
    $rows_tasks = $wpdb->get_results($tasks);
    if (is_array($rows_tasks)) {
        echo json_encode("DELETED");
    } else {
        echo '[]';
    }
}
if($func == "favmotivation")
{
    global $wpdb;
    $user_motivation = "SELECT * FROM `wp_user_motivation` WHERE user_id = '".$_GET["user_id"]."'";
    $rows_user_motivation = $wpdb->get_results($user_motivation);
    if (is_array($rows_user_motivation)) {
        echo json_encode($rows_user_motivation);
    } else {
        echo '[]';
    }
}
// Yoga
if($func == "yoga")
{
    global $wpdb;
    $all_yoga = "SELECT * FROM `wp_yoga`";
    $rows_all_yoga = $wpdb->get_results($all_yoga);
    if (is_array($rows_all_yoga)) {
        echo json_encode($rows_all_yoga);
    } else {
        echo '[]';
    }
}
if($func == "yogaSetFav")
{
    global $wpdb;
    $user_yoga = "SELECT * FROM `wp_user_yoga` WHERE user_id = '".$_GET["user_id"]."' AND yoga_id='".$_GET["yoga_id"]. "'";
    $rows_user_yoga = $wpdb->get_results($user_yoga);
    if (!$rows_user_yoga) {
        $wpdb->insert('wp_user_yoga', array(
            'user_id' => $_GET["user_id"],
            'yoga_id' => $_GET["yoga_id"]
            ));
        echo true;
    }
    echo false;
}
if($func == "yogaUnsetFav")
{
    global $wpdb;
    $tasks = "DELETE FROM `wp_user_yoga` WHERE user_id = '".$_GET["user_id"]."' AND yoga_id='".$_GET["yoga_id"]. "'";
    $rows_tasks = $wpdb->get_results($tasks);
    if (is_array($rows_tasks)) {
        echo json_encode("DELETED");
    } else {
        echo '[]';
    }
}
if($func == "favyoga")
{
    global $wpdb;
    $user_yoga = "SELECT * FROM `wp_user_yoga` WHERE user_id = '".$_GET["user_id"]."'";
    $rows_user_yoga = $wpdb->get_results($user_yoga);
    if (is_array($rows_user_yoga)) {
        echo json_encode($rows_user_yoga);
    } else {
        echo '[]';
    }
}
// Relaxing

if($func == "relaxing")
{
    global $wpdb;
    $all_relaxing = "SELECT * FROM `wp_relaxing`";
    $rows_all_relaxing = $wpdb->get_results($all_relaxing);
    if (is_array($rows_all_relaxing)) {
        echo json_encode($rows_all_relaxing);
    } else {
        echo '[]';
    }
}
if($func == "relaxingSetFav")
{
    global $wpdb;
    $user_relaxing = "SELECT * FROM `wp_user_relaxing` WHERE user_id = '".$_GET["user_id"]."' AND relaxing_id='".$_GET["relaxing_id"]. "'";
    $rows_user_relaxing = $wpdb->get_results($user_relaxing);
    if (!$rows_user_relaxing) {
        $wpdb->insert('wp_user_relaxing', array(
            'user_id' => $_GET["user_id"],
            'relaxing_id' => $_GET["relaxing_id"]
            ));
        echo true;
    }
    echo false;
}
if($func == "relaxingUnsetFav")
{
    global $wpdb;
    $tasks = "DELETE FROM `wp_user_relaxing` WHERE user_id = '".$_GET["user_id"]."' AND relaxing_id='".$_GET["relaxing_id"]. "'";
    $rows_tasks = $wpdb->get_results($tasks);
    if (is_array($rows_tasks)) {
        echo json_encode("DELETED");
    } else {
        echo '[]';
    }
}
if($func == "favrelaxing")
{
    global $wpdb;
    $user_relaxing = "SELECT * FROM `wp_user_relaxing` WHERE user_id = '".$_GET["user_id"]."'";
    $rows_user_relaxing = $wpdb->get_results($user_relaxing);
    if (is_array($rows_user_relaxing)) {
        echo json_encode($rows_user_relaxing);
    } else {
        echo '[]';
    }
}
//Diary
if($func == "changeDiary")
{
    global $wpdb;
    $diary = "SELECT * FROM `wp_user_diary` WHERE user_id = '".$_GET["user_id"]."' AND user_diary_date='".$_GET["user_diary_date"]."'";
    $rows_diary = $wpdb->get_results($diary);
    if($rows_diary)
    {
        $wpdb->update('wp_user_diary', array('user_diary_note' => $_GET["user_diary_note"]), array('user_id'=>$_GET["user_id"],'user_diary_date'=>$_GET["user_diary_date"]));
    }
    else
    {
        $wpdb->insert('wp_user_diary', array(
            'user_id' => $_GET["user_id"],
            'user_diary_date' => $_GET["user_diary_date"],
            'user_diary_note' => $_GET["user_diary_note"]
            ));
    }
}
if($func == "getDiary")
{
    global $wpdb;
    $diary = "SELECT * FROM `wp_user_diary` WHERE user_id = '".$_GET["user_id"]."' AND user_diary_date='".$_GET["user_diary_date"]."'";
    $rows_diary = $wpdb->get_results($diary);
    if($rows_diary)
    {
        echo json_encode($rows_diary);
    }
    else
    {
        echo '[]';
    }
}
if($func == "addGratitude")
{
    global $wpdb;
    $wpdb->insert('wp_user_custom_gratitude', array(
            'user_id' => $_GET["user_id"],
            'custom_gratitude_content' => $_GET["custom_gratitude_content"]
            ));
    echo true;
}
if($func == "allUserGratitude")
{
    global $wpdb;
    $diary = "SELECT * FROM `wp_user_custom_gratitude` WHERE user_id = '".$_GET["user_id"]."'";
    $rows_diary = $wpdb->get_results($diary);
    if($rows_diary)
    {
        echo json_encode($rows_diary);
    }
    else
    {
        echo '[]';
    }
}
if($func == "deleteGratitude")
{
    global $wpdb;
    $tasks = "DELETE FROM `wp_user_custom_gratitude` WHERE user_id = '".$_GET["user_id"]."' AND user_custom_gratitude_id='".$_GET["user_custom_gratitude_id"]. "'";
    $rows_tasks = $wpdb->get_results($tasks);
    if (is_array($rows_tasks)) {
        echo json_encode("DELETED");
    } else {
        echo '[]';
    }
}

?>