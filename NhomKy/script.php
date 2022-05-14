<?php 
if(isset($_POST['submit'])){
		if( !empty($_POST['name']) && !empty($_POST['img']) && !empty($_POST['url']) && !empty($_POST['address']) && !empty($_POST['direction']) && !empty($_POST['review']) && !empty($_POST['score']) && !empty($_POST['munOfReviews']) && !empty($_POST['roomType']) && !empty($_POST['bedType']) && !empty($_POST['price'])){
			$new_message = array(
				"name" => $_POST['name'],
				"img" => $_POST['img'],
				"url" => $_POST['url'],
				"address" => $_POST['address'],
				"direction" => $_POST['direction'],
				"score" => $_POST['score'],
				"review" => $_POST['review'],
				"reviewCount" => $_POST['reviewCount'],
				"roomType" => $_POST['roomType'],
				"bedType" => $_POST['bedType'],
				"price" => $_POST['price']
			);
			if(filesize("data.json") == 0){
				$first_record = array($new_message);
				$data_to_save = $first_record; 
			}else{
				$old_records = json_decode(file_get_contents("data.json"));
				array_push($old_records, $new_message);
				$data_to_save = $old_records;
			}
			if(!file_put_contents("data.json", json_encode($data_to_save, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX)){
				$error = "Error storing data, please try again";
			}else{
				$success =  "Data is stored successfully";
			}
		}
		else {
			echo 'Please fill all blanks!';
		}
		
}
