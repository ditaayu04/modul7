<?php
if(isset($_POST['kode_pegawai'])) {
    $kode_pegawai = $_POST['kode_pegawai'];
} else {
    echo "Maaf, Kode Pegawai Tidak Ditemukan!";
    exit;
}

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

//Menghapus data
$sql = "DELETE FROM pegawai WHERE kode_pegawai = '$kode_pegawai'";

if (mysqli_query($conn, $sql)) {
    echo "Data Berhasil Dihapus!";
} else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>