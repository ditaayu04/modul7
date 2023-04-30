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

$sql = "INSERT INTO pegawai (kode_pegawai, nama_pegawai, kode_divisi, gaji)
        VALUES ('0001', 'DANIEL', '01', '1000000')";
    

    if (mysqli_query($conn, $sql)){
        echo "New record created succesfully";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_connect_errno($conn);
    }
    mysqli_close($conn);
    ?>