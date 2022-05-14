<?php require("script.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="How to store form data in a json file with php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Storing messages in a json file with PHP</title>

<style>
	td{

		border: 2px solid black;
		border-radius: 5px;
	}
	.title{
		border-radius: 0px;
	}
	input{
		border: 0;
		outline: 0;
	}
</style>
</head>
<body>


	<!-- Let's begin with our form element -->
	<form action="" method="post">
		<table >
			<tr>
				<td class = "title">
					<label>Name</label>
				</td>
				<td>
				<input type="text" name="name" placeholder="Enter Name">
				</td>
			</tr>
			<tr>
				<td class = "title">
				<label>Image</label>
				</td>
				<td>
				<input type="text" name="img" placeholder="http:///" >
				</td>
			</tr>
			<tr>
				<td class = "title">
					<label>URL</label>
				</td>
				<td>
					<input type="text" name="url" placeholder="http:///" >
				</td>
			</tr>
			<tr>
				<td class = "title">
				<label>Address</label>
				</td>
				<td>
				<input type="text" name="address" placeholder="Enter place" >
				</td>
			</tr>
			<tr>
				<td class = "title">
				<label>Direction</label>
				</td>
				<td>
				<input type="text" name="direction" placeholder="Enter direction" >
				</td>
			</tr>
			<tr>
				<td class = "title">
				<label>Score</label>
				</td>
				<td>
				<input type="text" name="score" placeholder="Enter score" >
				</td>
			</tr>
			<tr>
				<td class = "title">
				<label>Review</label>
				</td>
				<td>
				<input type="text" name="review"  placeholder="Enter review">
				</td>
			</tr>
			<tr>
				<td class = "title">
				<label>Review Count</label>
				</td>
				<td>
				<input type="text" name="reviewCount" placeholder="Enter review count" >
				</td>
			</tr>
			<tr>
				<td class = "title">
				<label>roomType</label>
				</td>
				<td>
				<input type="text" name="roomType" placeholder="Enter roomType" >
				</td>
			</tr>
			<tr>
				<td class = "title">
				<label>bedType</label>
				</td>
				<td>
				<input type="text" name="bedType" placeholder="Enter bedType" >
				</td>
			</tr>
			<tr>
				<td class = "title">
				<label>price</label>
				</td>
				<td>
				<input type="text" name="price" placeholder="Enter price" >
				</td>
			</tr>
		</table>
		<br>
		<input type="submit" name="submit"  placeholder="Send message">

		<p class="error"><?php echo @$error; ?></p>
		<p class="success"><?php echo @$success; ?></p>
	</form>
	
</body>
</html>