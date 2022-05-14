<?php
include "./account.php";
$table = "category";
$mysql = new mysqli($host, $user, $password, $database);
if ($mysql === false) {
    die("ERROR: Could not connect" . $mysql->connect_error);
}
$sql = "INSERT INTO $table(name_category) VALUES('Thời trang nam'),
('Thời trang nữ'),
('Túi xách nam'),
('Túi xách nữ')
";
if ($mysql->query($sql) === true) {
    echo "Insert data successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysql->error;
}
$mysql->close();