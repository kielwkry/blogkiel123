<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>
<font color="black">   
<body bgcolor="black">
<h2><?php
$koneksi=mysqli_connect("localhost","root","","final_project");
if(!$koneksi){
    echo "Gagal Terkoneksi".mysqi_connect_error;
} echo "Koneksi Berhasil";
?>
</h2>
    
</body>
</center>
</html>