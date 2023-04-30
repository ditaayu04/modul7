<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpegawai";

//create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);


//check connection
if(!$conn){
    die("Connection failed : " . mysqli_connect_error());
}

$sql = "CREATE TABLE divisi (
    kode_divisi INT UNSIGNED PRIMARY KEY,
    nama_divisi VARCHAR(50) NOT NULL,
    gaji_divisi INT UNSIGNED NOT NULL);";

    if (mysqli_query($conn, $sql)){
        echo "New record created succesfully";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>