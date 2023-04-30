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
exit();
}

$data = mysqli_query($conn, "SELECT * FROM pegawai");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>DATA PEGAWAI</title>
</head>
<body>
    <div align="center">
        <table border="1px">
            <tr>
                <th> Kode Pegawai </th>
                <th> Nama Pegawai </th>
                <th> Kode Divisi </th>
                <th> Gaji </th>
</tr>
<?php while($row = mysqli_fetch_assoc($data)){ ?>
    
    <tr>
        <td><?php
        echo $row['kode_pegawai']?> </td>
        <td><?php
        echo $row['nama_pegawai']?> </td>
        <td><?php
        echo $row['kode_divisi']?> </td>
        <td><?php
        echo $row['gaji']?> </td>
        <td>
    <button>
        <a style="text-decoration: none; color: black;" href="formedit.php?id=<?php echo $row['kode_pegawai']?>">Edit</a> 
    </button>
    <button>
    <a style="text-decoration: none; color: black;" href="formhapus.php?id=<?php echo $row['kode_pegawai']?>">Hapus</a> 
    </button>
</td>
</tr>
<?php }
mysqli_close($conn);
?>


</table>
<br>

<button>
<a href="formtambah.php"> Tambah Data </a>
</button>
</div>
</body>
</html>