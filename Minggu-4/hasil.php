<html>
<head><title>Hasil Submit Form</title></head>
<body>
    <h1><center>Hasil Submit Form</center></h1>
    <style>
            h2 {
                color: white;
            }
            h1 {
            text-shadow: 2px 4px 10px rgb(63, 71, 47);
            color: black;
            }
            body{
                background-image: url(rgb.jpg);
                background-size: cover;
                background-attachment: fixed;
                margin: 0;

            }
            .header{
                background-color: rgba(255, 255, 255, 0.938);
                padding: 10px;
                text-align: center;
                color: rgb(248, 246, 246);
            }
        </style>
<?php
if(isset($_GET['submit'])){
    echo"<table border=1 width=100%>
    <tr><td>Nama Lengkap</td><td>:".$_GET{'nama_lengkap'}."</td></tr>
    <tr><td>Universitas</td><td>:".$_GET{'universitas'}."</td></tr>
    <tr><td>NIM</td><td>:".$_GET{'nim'}."</td></tr>
    <tr><td>Universitas</td><td>:".$_GET{'universitas'}."</td></tr>
    <tr><td>Jenis Kelamin</td><td>:".$_GET{'jenis_kelamin'}."</td></tr>
    <tr><td>Alamat</td><td>:".$_GET{'alamat'}."</td></tr>
    <tr><td>Email</td><td>:".$_GET{'email'}."</td></tr>
    <tr><td>No.Hp</td><td>:".$_GET{'nomor_hp'}."</td></tr>
    </table>";
} else { echo"<h2>Halaman ini tidak bisa dipanggil secara langsung</h2>";
}
?>
</body>    
</html>