<?php
$APIkey = "AIzaSyAx-WTymtYiBvhF7esIYPcGNbA0csTeYUs";
$channelID = 'UCBop1o6MQaSRVlxsTaLuVhg';
$maxResults = 5;

// Get videos from channel by YouTube Data API
$apiError = 'video not found!';
try{
  $apiData = @file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID. '&maxResults='. $maxResults. '&key='. $APIkey.'');
  if($apiData){
    $videolist = json_decode($apiData);
  }else{
    throw new Exception('Invalid API key or channel ID.');
  }
}catch(Exception $e){
  $apiError = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive Video</title>
    <style>
        /* .video{width: 100%;display: flex;} */
    </style>
</head>
<body>
    <?php
        if(!empty($videolist->items)){
            foreach($videolist->items as $item){
                if(isset($item->id->videoId)){
                ?>
                    <div class="video">
                        <iframe width="280" height="150" src="https://www.youtube.com/embed/<?php echo $item->id->videoId; ?>" frameborder="0" allowfullscreen></iframe>
                        <h4><?php echo $item->snippet->title; ?></h4>
                    </div>
                <?php
                }
            }
        }else{
            echo '<p class="error">'.$apiError.'</p>';
        }
    ?>
</body>
</html>