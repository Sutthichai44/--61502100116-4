<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDBM";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nameMovie VARCHAR(50) NOT NULL,
timeMovie VARCHAR(10) NOT NULL,
UserMovie char(4) NOT NULL,
pin INT(4) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn->query($sql) === TRUE){
	echo "Table MyGuests created successfully";
} else{
	echo "Error creating table: " . $connect->error;
}

$conn->close();
?>