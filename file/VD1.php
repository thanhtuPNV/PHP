<?php
error_reporting(0);
$fh=fopen("my_setting.txt", 'W') or die("Fails to create file");
$test="localhost;root;pwd1234;my_database";
fwrite($fh, $test)or die("Could not write to file");
fclose($fh);
echo "File 'my_setting.txt' written successfully";
?>