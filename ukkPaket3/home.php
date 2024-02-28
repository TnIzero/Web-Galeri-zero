<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Galeri</title>
        <style>
            body{
                font-family:Arial, sans-serif;
                margin: 0;
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
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #4682B4;
            }
            li{
                float: left;
            }
            li a{
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            li a:hover{
                background-color: #111;
            }
            table{
                width: 100%;
                border-collapse: collapse;
                margin-top:20px;
            }
            th, td{
                border: 1 px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th{
                background-color: #4682B4;
                color: white;
            }
            img{
                max-width: 100%;
                height: auto;
            }
            td a{
                text-decoration: none;
                padding: 5px 10px;
                margin: 2px;
                display: inline-block;
                background-color: #4CAF50;
                color: white;
                border-radius:3px;
            }
        </style>
    </head>

    <body>                       
        <h1>Web Galeri</h1>
        <?php
            session_start();
            if (!isset($_SESSION['userid'])) {
        ?> 
            <ul>
                <li><a href="register.php">Register</a></li>
                <li><a href="index.php">Login</a></li>
            </ul>
        <?php
            } else{
        ?>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="album.php">Album</a></li>
                <li><a href="foto.php">Foto</a></li>
                <li><a>Selamat Datang <b><?=$_SESSION['namalengkap']?></b>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        <?php
            }
        ?>
            <table width="100%" border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Uploader</th>
                    <th>Jumlah Like</th>
                    <th>Lihat Komentar</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    include "koneksi.php";
                    $sql=mysqli_query($conn,"select * from foto,user where foto.userid=user.userid");
                    while ($data=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?=$data['fotoid']?></td>
                    <td><?=$data['judulfoto']?></td>
                    <td><?=$data['deskripsifoto']?></td>
                    <td>
                        <img src="gambar/<?=$data['lokasifile']?>" width="200px">
                    </td>
                    <td><?=$data['namalengkap']?></td>
                    <td>
                        <?php
                            $fotoid=$data['fotoid'];
                            $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
                            echo mysqli_num_rows($sql2);
                        ?>
                    </td> 
                    <td>
                        <a href="lihat_komentar.php?fotoid=<?=$data['fotoid']?>">Lihat Komentar</a>
                    </td> 
                    <td>
                        <a href="like.php?fotoid=<?=$data['fotoid']?>">Like</a>
                        <a href="komentar.php?fotoid=<?=$data['fotoid']?>">Komentar</a>
                    </td> 
                </tr>
                <?php
                    }
                ?>
            </table>
    </body>
</html>