<!DOCTYPE html>
<html lang="en">
<head>
   <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1> Demo Koneksi database MySQL </h1>
    <?php$con = mysql_connect("localhost", "root", "root", "my_db");

    //Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error()
        ;
        exit();
    }
    ?>
</body>
</html>