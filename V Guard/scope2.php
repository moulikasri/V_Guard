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
            background:url(images/scope4.jpg);
            background-position:10px -130px;
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
            width: 200px;
            float: left;
            height: 70px;
            margin-left: -20px;
            margin-top: 40px;
        }
        .main1{
            border-radius: 10px;
            border-width: 4px;
            border-style: solid;
            padding: 20px;
            margin-left: 900px;
            margin-top: 210px;
            background: linear-gradient(to top, rgba(118, 114, 114, 0.2),rgba(45, 43, 43, 0.2));
            font-family:  Verdana, Geneva, Tahoma, sans-serif;
            height: 60px;
            width: 450px;
            border-color:black;
            text-align: center;

        }
        .main1 p {
      font-size: 25px;
      font-family:  Verdana, Geneva, Tahoma, sans-serif;
      letter-spacing: 1px;
        }
    p a{
    text-decoration: none;
    color: black;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    transition: 0.4s ease-in-out;
    }

    p a:hover{
    color: #ffffff;
    }
    ul li a{
    text-decoration: none;
    color: #000000;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    transition: 0.4s ease-in-out;
    font-weight:bold;
    font-size:20px;
    }
    ul li a:hover{
    color: #feb70f;
    }
    .heading {
    font-size: 60px;
    margin-top:30px;
    font-family: sans-serif;
    letter-spacing: -2px
    }
    .title {
    display: grid;
    grid-template-rows: 50px;
    grid-template-columns: 150px 1fr 150px;
    align-items: center;
    padding: 20px 0;
    text-align: center;
    }
    .menu ul li a span{
        font-size:25px
    }
    </style>
</head>
<body>

    <div class="main">
        <div class="navbar">
                <a href="index.php"><img src="images/logo2.png" class="icon"></a>

        <div class="title">
        <a href="dashboard.php"><img src="kpriet.png" alt="" class="logo"></a>
        <span class="heading">SCOPE 2</span>
        <div class="menu">
            <ul>
            <li><a href="emission.php"><span class="">Back</span></a></li>               
            <li><a href="logout.php"><span class="">Logout</span></a></li>
            </ul>
        </div>
    </div>

            

        </div> 
        <div class="main1">
        <?php
            echo '<p style="margin-top: 20px"><a href="tneb.php">TNEB Power Consumption</a></p>';
        ?>
        </div>
    </div>
</body>
</html>