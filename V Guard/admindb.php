<?php
      $username = $_POST['username'];
      $password = $_POST['password'];
     
      $con = new mysqli("localhost", "root", "1234567", "v_guard");
      if($con->connect_error)
      {
        die("failed to connect : ".$con->connect_error);
      } else {
        $stmt = $con->prepare("SELECT * FROM admin WHERE username = ? ");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result ->num_rows > 0) {
             $data = $stmt_result->fetch_assoc();
             if($data['password'] === $password) {
              header ("location: add_users.php");
              
             }
        } else {
            echo "<h2> Invalid Username or password</h2>";
        }
      }
?>
