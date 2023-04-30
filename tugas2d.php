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

$sql = "INSERT INTO divisi (kode_divisi, nama_divisi, gaji_divisi)
        VALUES ('01', 'EDITOR', '1000000')";
    

    if (mysqli_query($conn, $sql)){
        echo "New record created succesfully";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_connect_errno($conn);
    }
    mysqli_close($conn);
    ?>