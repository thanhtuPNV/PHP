'<?php 

include('../vendor/autoload.php');
require_once "../db.php";
if (isset($_POST["myComment"])) {
    $myComment = $_POST['myComment'];
    $app_id = "1364602";
    $key = "4c622c6c4aa5e63e0e64";
    $secret = "b82359582ca8e9672d15";
    $cluster = "ap1";

    $pusher = new Pusher\Pusher( $key, $secret, $app_id, ['cluster' => $cluster]);

    $data['message'] = ['myComment' => $myComment];
    $pusher->trigger( 'pusher_demo2', 'add_comment', $data );
    echo "YES";
    session_start();
    $sql = "INSERT INTO comments (username, comment) VALUES ('{$_SESSION['username']}', '$myComment')";
    mysqli_query($conn, $sql);

}
?>