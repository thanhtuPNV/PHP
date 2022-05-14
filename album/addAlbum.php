<?php
function createAlbum(){
    $nameAblum = $_POST["nameAlbum"];
    $imgAlbum = $_POST["imgAlbum"];
    $descriptionAlbum = $_POST["descriptionAlbum"];
    $priceAlbum = $_POST["priceAlbum"];
    return new Album($nameAblum, $imgAlbum, $descriptionAlbum, $priceAlbum, []);
}

function addAlbum($indexSinger)
{
    $data = getdata(link:"../album/style/data.json");
    $newAlbum = createAlbum();
    $newAlbum = array("nameAlbum" => $newAlbum -> getnameAlbum(),"imgAlbum" => $newAlbum -> getimgAlbum(),"descriptionAlbum" => $newAlbum -> getdescriptionAlbum(),"priceAlbum" => $newAlbum -> getpriceAlbum(),"listSong" =>[]);
    $data[] = $newAlbum; //push
    $data[$indexSinger]["listAlbum"][]=$newAlbum;
    echo "<br>";
    $json = json_encode($data, JSON_UNESCAPED_UNICODE);
    if (file_put_contents("data.json", $json))
    {
        echo "JSON file created successfully...";
    }
    else
    {
        echo "Oops! Error creating json file...";
        echo "<br>";
    }

}


function getdata($link){
    return json_encode(file_get_contents($link),true);
}

?>