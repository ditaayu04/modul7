<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpegawai";

//create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);


//check connection
if(!$conn){
    die("Connection failed : " . mysqli_connect_errno());
}

$sql = "CREATE TABLE pegawai (
    kode_pegawai INT UNSIGNED PRIMARY KEY,
    nama_pegawai VARCHAR(50) NOT NULL,
    kode_divisi INT UNSIGNED NOT NULL,
    gaji INT UNSIGNED NOT NULL,
    FOREIGN KEY (kode_divisi) REFERENCES divisi(kode_divisi));";

    if (mysqli_query($conn, $sql)){
        echo "New record created succesfully";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_connect_errno($conn);
    }
    mysqli_close($conn);
    ?>