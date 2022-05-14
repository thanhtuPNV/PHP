<?php
// session_start();
// if(isset($_POST['login'])){
//     $username = $_POST['username'];
//     if($username === 'TU' || $username == 'TT'){
//         echo "<script>alert('Login success')</script>";
//         echo "<script>location.replace('home.php')</script>";
//     }else{
//         echo "<script>alert('Invalid Username')</script>";
//         echo "<script>location.replace('index1.php')</script>";
//     }
// }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Like and Dislike</title>
</head>
<body>
    <div>
        <p>Login Form</p>
        <form action="index1.php" method="POST">
            <input type="text" name="username" placeholder="Enter username......">
            <br>
            <button name="login">Login</button>
        </form>
    </div>
</body>
</html> -->
<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Like and Dislike system</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="posts-wrapper">
   <?php foreach ($posts as $post): ?>
   	<div class="post">
      <img src="<?php echo $post['text']; ?>" alt="">
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
  </div>
  <script src="scripts.js"></script>
</body>
</html>