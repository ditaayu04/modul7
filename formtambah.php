<!DOCTYPE html>
<html lang="en">
<head>
    <title>TAMBAH DATA PEGAWAI</title>
</head>
<body>
    <div align="center">
        <form action="tugas3-tambah.php" method="POST">
            <table>
                <tr>
                    <td> Kode Pegawai : </td>
                    <td> 
                        <input type="number" name="kode_pegawai">
                    </td>
</tr>

<tr>
    <td> Nama Pegawai : </td>
<td>
    <input type="text" name="nama_pegawai">
 </td>
</tr>

<tr>
<td> Kode Divisi : </td>
<td>
    <input type="number" name="kode_divisi">
 </td>
</tr>

<tr>
<td> Gaji : </td>
<td>
    <input type="number" name="gaji">
 </td>
</tr>
</table>

<br>
<input type="submit" name="submit" value="Tambah Data">
</form>
</div>

</body>
</html>