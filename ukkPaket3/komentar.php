<?php
    session_start();
    if (!isset($_SESSION['userid'])) {
        header("location:landing.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Komentar</title>
        <style>
            body{
                font-family: Arial, sans-serif;
                margin:0;
                padding: 0;
                background-color: #f4f4f4;
            }
            h1{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                color: white;
                background-color: #4682B4;
            }
        
            ul{
                list-style-type: none;
                padding: 0;
                margin: 0;
                background-color: #4682B4;
                overflow: hidden;
            }
            li{
                float: left;
            }
            li a {
                display: block;
                color: white;
                text-align:center;
                padding: 14px 16px;
                text-decoration: none;
            }
            li a:hover{
                background-color: #87CEFA
            }
            form{
                margin: 20px;
            }
            table{
                width:100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            th,td{
                padding: 20px;
                text-align: left;
                border-bottom: 1 px solid #ddd;
            }
            th{
                background-color: #4682B4;
                color: white;
            }
            tr:hover {
                background-color: #87CEFA;
            }
            input[type="text"],input[type="submit"],select,input[type="file"]{
                padding: 8 px;
                margin-bottom: 10px;
            }
            input[type="submit"]{
                background-color: #384754;
                color: white;
                cursor: pointer;
            }
            input[type="submit"]:hover{
                background-color: #555;
            }
            img{
                max-width: 100%;
                height: auto;
            }
        </style>
    </head>

    <body>
        <h1>Halaman Komentar</h1>
        <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="album.php">Album</a></li>
                <li><a href="foto.php">Foto</a></li>
                <li><a>Selamat Datang <b><?=$_SESSION['namalengkap']?></b>
                <li><a href="logout.php">Logout</a></li>
            </ul>

        <form action="tambah_komentar.php" method="post">
            <?php
                include "koneksi.php";
                $fotoid=$_GET['fotoid'];
                $sql=mysqli_query($conn,"select * from foto where fotoid='$fotoid'");
                while ($data=mysqli_fetch_array($sql)) {
                    ?>
                <input type="text" name="fotoid" value="<?=$data['fotoid']?>" hidden>
                <table>
                    <tr>
                        <td>Judul</td>
                        <td><input type="text" name="judulfoto" value="<?=$data['judulfoto']?>"></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><input type="text" name="deskripsifoto" value="<?=$data['deskripsifoto']?>"></td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td><img src="gambar/<?=$data['lokasifile']?>" width="200px"></td>
                    </tr>
                    <tr>
                        <td>Komentar</td>
                        <td><input type="text" name="isikomentar"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Tambah"></td>
                    </tr>
                </table>
                <?php
                    }
                ?>
        </form>
    </body>
</html>