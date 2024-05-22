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
        .form1 {
    width: 300px;
    height: 280px;
    background: linear-gradient(to top, rgba(118, 114, 114, 0.5),rgba(45, 43, 43, 0.5));
    position: absolute;
    top: 30px;
    left: -70px;
    transform: translate(0%,-5%);
    border-radius: 20px;
    padding: 25px;
}
        .menu{
    width: 500px;
    float: left;
    height: 70px;
    margin-left: 800px;
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
                <li><a href="index.php">HOME</a></li>
                <li><a href="user_login.php">USER LOGIN</a></li>
                    <li><a href="admin.php">ADMIN LOGIN</a></li>
                </ul>
            </div>

            

        </div> 
        <div class="content1">
            <h1><span style= "color: #0047AB; text-shadow: 1px 1px 2px black, 0 0 5px black;"></span></h1>
            <p class="par"></p>

                
                <form class="form1" action="admindb.php" method="post">
                
                    <h2>Admin Login</h2>
                    
                    <input type="name" name="username" placeholder="Username" required/>
                    <input type="password" name="password" placeholder="Password" required/>
                    <button type="submit" name="submit" class="btnn">Login</button>                  
                                    
                 </form>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>