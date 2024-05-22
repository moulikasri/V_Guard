<!DOCTYPE html>
<html lang="en">
<head>
    <title> V Guard</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="form2.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        body{
            background:url(images/bg.jpg);
            background-position:20px -330px;
            background-size:cover;
        }
        .form1{
            width: 300px;
            height: 300px;
            background: linear-gradient(to top, rgba(118, 114, 114, 0.5),rgba(45, 43, 43, 0.5));
            position: absolute;
            top: 40px;
            left: -70px;
            transform: translate(0%,-5%);
            border-radius: 10px;
            padding: 25px;
        }
        .menu{
            width: 400px;
            float: left;
            height: 70px;
            margin-left: 950px;
            margin-top: -50px;
        }
        .main1{
            border-radius: 10px;
            border-width: 3px;
            border-style: solid;
            padding: 20px;
            margin-left: 100px;
            margin-top: 120px;
            background: linear-gradient(to top, rgba(118, 114, 114, 0.5),rgba(45, 43, 43, 0.5));
            font-family:  Verdana, Geneva, Tahoma, sans-serif;
            height: 60px;
            width: 250px;
            border-color:#feb70f;
            text-align: center;

        }
        .main2{
            border-radius: 10px;
            border-width: 3px;
            border-style: solid;
            padding: 20px;
            margin-left: 100px;
            margin-top: 80px;
            background: linear-gradient(to top, rgba(118, 114, 114, 0.5),rgba(45, 43, 43, 0.5));
            font-family:  Verdana, Geneva, Tahoma, sans-serif;
            height: 60px;
            width: 250px;
            border-color:#feb70f;
            text-align: center;
        } 
        .main1 p {
      font-size: 25px;
      font-family:  Verdana, Geneva, Tahoma, sans-serif;
      letter-spacing: 1px;
      color:#feb70f
    }
    .main2 p {
      font-size: 25px;
      font-family:  Verdana, Geneva, Tahoma, sans-serif;
      letter-spacing: 1px;
      color:#feb70f
    }
    p a{
    text-decoration: none;
    color: #feb70f;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    transition: 0.4s ease-in-out;
    }

    p a:hover{
    color: #ffffff;
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
                    <li><a href="admin.php">LOGOUT</a></li>
                </ul>
            </div>

            

        </div> 
        <div class="main1">
        <?php
            echo '<p style="margin-top: 20px"><a href="emission.php">CO<sub>2</sub> Emission</a></p>';
        ?>
        </div>
        <div class="main2">
        <?php
            echo '<p style="margin-top: 20px"><a href="offset.php">CO<sub>2</sub> Offset</a></p>';
        ?>
        </div>
    </div>
</body>
</html>