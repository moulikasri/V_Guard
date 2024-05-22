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
    </style>
</head>
<body>

    <div class="main">
        <div class="navbar">
                <a href="index.php"><img src="images/logo.png" class="icon"></a>

            <div class="menu">
                <ul>
                    <li><a href="user.php">TOTAL USERS</a></li>
                    <li><a href="admin.php">LOGOUT</a></li>
                </ul>
            </div>

            

        </div> 
        <div class="content1">
                
                <form class="form1" action="" method="post">
                
                    <h2>ADD USERS</h2>
                    
                    <input type="name" name="username" placeholder="Username" required/>
                    <input type="password" name="password" placeholder="Password" required/><br><br>
                    
                    <button type="submit" name="submit" class="btnn">Submit</button> 
                                    
                 </form>
        </div>
    </div>
</body>
</html>

<?php
	include('logindb.php');


    if(isset($_POST['username'],$_POST['password'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        // validation
        if (empty($username) or empty($password) or preg_match("/[a-z]/i",$password) or !preg_match("/^[a-zA-Z ]*$/",$username)) {
            if(empty($username))
                echo '<p class="error">Please enter username</p>';
            if(empty($password))
                echo '<p class="error">Please enter your password</p>';
            if(preg_match("/[a-z]/i",$password))
                echo '<p class="error">Please enter valid password</p>';
            if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
                    echo '<p class="error">No numbers or symbols allowed in username</p>'; 
                  }
            exit();
        }

        $sql = "INSERT INTO `department` (`username`, `password`) VALUES ('$username', '$password')";
        $result=mysqli_query($conn,$sql);
        
        if (!$result) {
            echo '<script language="javascript">';
            echo 'alert("Invalid Details")';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Success!!")';
            echo '</script>';
        }

    }
?>