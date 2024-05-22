<!DOCTYPE html>
<html lang="en">
<head>
    <title>V Guard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <style>
        .heading{
            text-align: center;
        }
        .back{
            margin-top:-45px;
            margin-left:1100px;
        }
        body{
            background: url("images/bg black.webp");
            color:white;
        }
        .table{
            color:white;

        } 
        .btn1{
            background-color: rgba(246, 248, 250, 0.623); 
            border: none;
  color: black;
  padding: 3px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:5px;
        }
        .btn2{
            background-color: #bb0000; 
            border: none;
  color: white;
  padding: 3px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:5px;
        }
        .btn1:hover{
            background-color: rgba(246, 248, 250, 0.623); 
            color: black;
        } 
        .btn2:hover{
            background-color: #bb0000; 
            color: white;
        }      
        
    </style>
</head>
<body>
    <div class="container my-5">
        <h2 class="heading">Other Energy Saving Activity</h2><br>
        <a class="btn btn-primary" href="create_saving.php" role="button">New Entry</a>
        <div class="back">
        <a class="btn btn-primary" href="offset.php" role="button">BACK</a>
        </div> 
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>POWER SAVING UNITS in KW</th>
                    <th>Conversion Factor</th>
                    <th>CO2 Emission in Kg</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $servername = "localhost";
                $username = "root";
                $password = "1234567";
                $database = "v_guard";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($connection->connect_error) {
                    die("Connection failed: " .$connection->connect_error);
                }

                // read all row from database table
                $sql = "SELECT * FROM saving";
                $result = $connection->query($sql);

                if(!$result) {
                    die("Invalid query: " .$connection->error);
                }

                // read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[POWER_SAVING_UNITS_in_KW]</td>
                    <td>$row[Conversion_Factor]</td>
                    <td>$row[CO2_Emission_in_Kg]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class='btn1' href='saving_edit.php?id=$row[id]'>Edit</a>
                        <a class='btn2' href='saving_delete.php?id=$row[id]'>Delete</a>
                    </td>
                    <tr>    
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>    
</body>
</html>