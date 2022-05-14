<?php
$CSVfp = fopen("data.csv", "r");
if($CSVfp !== FALSE) {
 while(! feof($CSVfp)) {
  $data = fgetcsv($CSVfp, 1000, ",");
  print_r($data);
 }
}
fclose($CSVfp);
?>
<!--  -->
if (($open = fopen("aaa.csv", "r")) !== FALSE) {

while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
    $array[] = $data;
}

fclose($open);
}