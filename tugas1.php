<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//create table dulu
$sql = "CREATE TABLE buku_tamu (
    ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    NAMA VARCHAR(200) NOT NULL,
    EMAIL VARCHAR(50) NOT NULL,
    ISI TEXT)";

if (mysqli_query($conn, $sql)){
    echo "New record created successfully";
} else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
mysqli_close($conn);
?>