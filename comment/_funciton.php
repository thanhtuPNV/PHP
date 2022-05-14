<?php 

include('vendor/autoload.php');


$mycomment = $_POST['myComment'];


$app_id = "1364602";
$key = "4c622c6c4aa5e63e0e64";
$secret = "b82359582ca8e9672d15";
$cluster = "ap1";

$pusher = new Pusher\Pusher( $key, $secret, $app_id, array('cluster' => $cluster) );

$data['message'] = array(
    'myComment' => $mycomment,
);
$pusher->trigger( 'pusher_demo2', 'add_comment', $data );

?>