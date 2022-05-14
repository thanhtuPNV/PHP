<?php
    if(empty( $_POST["Title"])){
        $Title ='';
        $Image ='';
        $Type ='';
        $Description = '';
    }
    if(!empty( $_POST["Title"])){
        $Title = $_POST["Title"];
        $Image = $_POST["Image"];
        $Type = $_POST["Type"];
        $Description = $_POST["Description"];
        $Time = date("Y:m:d");
        // *****
        $content = file_get_contents("VieZ_data1.json");
        $dataArr = json_decode($content, true);
        // Biến đổi thành mảng có dạng như phía dưới
        $data = array('Title' => $Title, 'Image' => $Image, 'Type' =>$Type , 'Description' => $Description, 'Time' => $Time);
        array_unshift($dataArr, $data);
        // pust vào đầu mảng
        // print_r($dataArr);
        $newContent = json_encode($dataArr, JSON_UNESCAPED_UNICODE);
        // Chuyển thành chuỗi
        file_put_contents("VieZ_data1.json", $newContent);
        // Pust vào Json
    }
?>