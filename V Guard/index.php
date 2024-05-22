<!DOCTYPE html>
<html lang="en">
<head>
    <title> V Guard</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        body{
            background:url(images/bg.jpg);
            background-position:20px -280px;
            background-size:cover;
        }
        .menu{
            width: 450px;
            float: left;
            height: 70px;
            margin-left: 800px;
            margin-top: -50px;
        }
        ul li a{
            text-decoration: none;
            color: #feb70f;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            transition: 0.4s ease-in-out;
        }

        ul li a:hover{
            color: #ffffff;
        }
        .content{
            width: 1200px;
            height: auto;
            margin: auto;
            color: #fff;
            position:absolute;
            margin: 100px 100px;
        }
        .icon{
    width: 200px;
    float: left;
    height: 70px;
    margin-top: 20px;
    margin-left: -50px;
}

    </style>
</head>
<body>

    <div class="main">
        <div class="navbar">
                <a href="index.php"><img src="images/logo.png" class="icon"></a>

            <div class="menu">
                <ul>
                <li><a href="index.php">HOME</a></li>
                    <li><a href="user_login.php">USER LOGIN</a></li>
                    <li><a href="admin.php">ADMIN LOGIN</a></li>
                </ul>
            </div>

            

        </div> 
        <div class="content">
            <h1><span>Data Entry </span></h1>
            <p class="par"></p>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>