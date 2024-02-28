<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="" >
        <title>Halaman Login</title>
        <style>
        body,h1,h2,h3,p,ul,li,table,th,td{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: 'Times New Roman', Times, serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .container{
            max-width: 3000px;
            margin; 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1{
            text-align:center;
            margin-bottom:50px;
            color: #007BFF;
        }
        form{
            margin-top: 50px;                    
        }
        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table,th,td{
            border: 1px solid #ddd;
        }
        td{
            padding:10px;
        }
        .link{
            font-size;10pt;
            background: #007BFF;
            color: #fff;
            text-decoration: none;
            padding: 10px;
            font-family: sans-serif;
        }
        .link:hover{
            background: #0056b3;
        }
        input[type="text"],input[type="password"],input[type="email"],input[type="submit"]{
            width: 50%;
            padding: 5px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"]{
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover{
            background-color: #0056b3;
        }
        @media (max-width: 600px){
            ul li{
                display: block;
                margin-bottom:10px;
            }
            table{
                font-size:14px;
            }
        }
        </style>
    </head>

    <body>
        <h1>Halaman Login</h1>
        <form action="proses_login.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><a class=link href="register.php">Register</a></td>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>