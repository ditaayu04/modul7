<!DOCTYPE html>
<html lang="en">
<head>
   <title>Edit Data Pegawai</title>
</head>
<body>

<div align="center">
    <form action="tugas3-edit.php" method="POST">
        <table>

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

            $kode_pegawai= $_GET['kode_pegawai'];
            $sql= "SELECT * FROM pegawai WHERE kode_pegawai='$kode_pegawai'";
            $hasil=mysqli_query($conn, $sql);
            $row=mysqli_fetch_row($hasil);
            list($kode_pegawai, $nama_pegawai, $kode_divisi, $gaji)=$row;
            ?>

            <tr>
                <td> Kode Pegawai : </td>
                <td>
                    <input type = "text" name="kode_pegawai" value="<?php echo $kode_pegawai?>" readonly>
        </td>
        </tr>

        <tr>
                <td> Nama Pegawai : </td>
                <td>
                    <input type = "text" name="nama_pegawai" value="<?php echo $nama_pegawai?>">
        </td>
        </tr>

        <tr>
                <td> Kode Divisi : </td>
                <td>
                    <input type = "text" name="kode_divisi" value="<?php echo $kode_divisi?>">
        </td>
        </tr>

        <tr>
                <td> Gaji : </td>
                <td>
                    <input type = "text" name="gaji" value="<?php echo $gaji?>">
        </td>
        </tr>

        </table>
        <br>
        <input type="submit" name="simpan" value="Simpan Data">
        <input type=reset value=Reset>
        <button><a href="tugas3.php" style="text-decoration: none; color: black;"> Kembali </a> </button>
        </form>
        </div>

    
</body>
</html>