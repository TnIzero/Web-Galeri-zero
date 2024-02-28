<?php
    session_start();
    if (!isset($_SESSION['userid'])) {
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Edit Album</title>
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
        <h1>Halaman Edit Album</h1>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="album.php">Album</a></li>
                <li><a href="foto.php">Foto</a></li>
                <li><a>Selamat Datang <b><?=$_SESSION['namalengkap']?></b>
                <li><a href="logout.php">Logout</a></li>
            </ul>

            <form action="update_album.php" method="post">
                <?php
                    include "koneksi.php";
                    $albumid=$_GET['albumid'];
                    $sql=mysqli_query($conn,"select * from album where albumid='$albumid'");
                    while ($data=mysqli_fetch_array($sql)){
                ?>
            <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
            <table>
                <tr>
                    <td>Nama Album</td>
                    <td><input type="text" name="namaalbum" value="<?=$data['namaalbum']?>"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><input type="text" name="deskripsi" value="<?=$data['deskripsi']?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Ubah"></td>
                </tr>
            </table>
            <?php
                    }
            ?>
            </form>
    </body>
</html>