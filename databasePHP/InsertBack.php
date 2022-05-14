<?php
/* Attempt MYSQL server connection. Assuming you are running MYSQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "demo");
// Check connection
if ($mysqli === false){
    die("ERROR: Could not connect. " .$mysqli->connect_error);
}
                                        
// Escape user inputs for security
$first_name = $mysqli->real_escape_string($_POST['first_name']);
$last_name = $mysqli->real_escape_string ($_POST['last_name']);
$email = $mysqli->real_escape_string($_POST['email']);

// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
 } else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}                          
                                                    
// Close connection
$mysqli->close();
?>