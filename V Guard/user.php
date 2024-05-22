<?php
    include("logindb.php");
    
    $no_of_users=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `department`"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> V Guard</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        body{
            background:url(images/bg.jpg);
            background-position:20px -330px;
            background-size:cover;
        }
        .menu{
            width: 500px;
            float: left;
            height: 70px;
            margin-left: 850px;
            margin-top: -50px;
        }
        .main1{
            border-radius: 10px;
            border-width: 3px;
            border-style: solid;
            padding: 20px;
            margin-left: 100px;
            margin-top: 180px;
            background: linear-gradient(to top, rgba(118, 114, 114, 0.5),rgba(45, 43, 43, 0.5));
            font-family:  Verdana, Geneva, Tahoma, sans-serif;
            height: 80px;
            width: 500px;
            border-color:#feb70f;
        }
        .main p {
      margin: 0;
      font-size: 25px;
      font-family:  Verdana, Geneva, Tahoma, sans-serif;;
      letter-spacing: 1px;
      line-height: 3;
      color:#feb70f;
    }
    </style>
</head>
<body>

    <div class="main">
        <div class="navbar">
                <a href="index.php"><img src="images/logo.png" class="icon"></a>

            <div class="menu">
                <ul>
                    <li><a href="add_users.php">ADD USERS</a></li>
                    <li><a href="user.php">TOTAL USERS</a></li>
                    <li><a href="admin.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>

        <div class="main1">
        <?php
            echo '<p>Total Number of Users:'.$no_of_users[0].'</p>';
        ?>
        </div>

    </div> 
</body>
</html>