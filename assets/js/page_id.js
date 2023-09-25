<script>
function getUserProfilePageUrl(){
    var page = 
        <?php
            global $wpdb;
            $profile_page = "SELECT guid FROM $wpdb->posts WHERE post_name = 'user_profile' AND post_type= 'page'";
            $rows_profile = $wpdb->get_results($profile_page);
            if (is_array($rows_profile)) {
                echo json_encode($rows_profile);
            } else {
                echo '[]';
            }
        ?>;
    return page[0].guid;
}

function getCalanderPageUrl(){
    var page = 
        <?php
            global $wpdb;
            $profile_page = "SELECT guid FROM $wpdb->posts WHERE post_name = 'calander_request' AND post_type= 'page'";
            $rows_profile = $wpdb->get_results($profile_page);
            if (is_array($rows_profile)) {
                echo json_encode($rows_profile);
            } else {
                echo '[]';
            }
        ?>;
    return page[0].guid;
}
</script>