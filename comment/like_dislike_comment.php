<?php
session_start();
require_once("db.php");
include('server.php');
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./style.css">
<script>

// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('4c622c6c4aa5e63e0e64', {
cluster: 'ap1'
});

var channel = pusher.subscribe('pusher_demo2');
channel.bind('add_comment', function (data) {
    var smycomment = data['message']['myComment'];
    $('#old_comment').append('<div class="old_comment" style="padding: 0 20px;"><h3><?= $username ?>:</h3><p>'+ smycomment +'</p></div>');
});

const sendComment = () => {
    $.ajax({
        type: "POST",
        url: "include/PostComment.php",
        data: {'myComment': $("#mycomment").val()},
        success: (data) => {
            console.log(data)
        }
    });
    
}
</script>
    <link rel="stylesheet" href="test.css">
    <title>Document</title>
</head>
<body>
    <div class="posts-wrapper">
        <?php foreach ($posts as $post): ?>
            <div class="post">
            <img class="posts-image" src="<?php echo $post['image']; ?>" alt="">
            <div class="post-info">
                <!-- if user likes post, style button differently -->
                <i <?php if (userLiked($post['id'])): ?>
                    class="fa fa-thumbs-up like-btn"
                <?php else: ?>
                    class="fa fa-thumbs-o-up like-btn"
                <?php endif ?>
                data-id="<?php echo $post['id'] ?>"></i>
                <span class="likes"><?php echo getLikes($post['id']); ?></span>
                        
                &nbsp;&nbsp;&nbsp;&nbsp;

                <!-- if user dislikes post, style button differently -->
                <i 
                <?php if (userDisliked($post['id'])): ?>
                    class="fa fa-thumbs-down dislike-btn"
                <?php else: ?>
                    class="fa fa-thumbs-o-down dislike-btn"
                <?php endif ?>
                data-id="<?php echo $post['id'] ?>"></i>
                <span class="dislikes"><?php echo getDislikes($post['id']); ?></span>
            </div>
            </div>
        <?php endforeach ?>
        <div class="inpute_enter">
            <input type="text" id="mycomment" placeholder="Comment something ..." name="myComment">
            <button type="button" onclick="sendComment()"><i class="ri-send-plane-fill"></i></button>
        </div>
        <div id="old_comment">
            <h2>Comments</h2>
            <?php
            $sql = "SELECT * FROM comments";
            $result = mysqli_query($conn, $sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){ ?>
                    <div class="old_comment" style="padding: 0 20px;"><h3><?php echo $row['username']; ?>:</h3><p><?php echo $row['comment']; ?></p></div>
                <?php }
            }
            ?>
        </div>
    </div>
    <!--  -->
    <script src="like_dislike.js"></script>
</body>
</html>