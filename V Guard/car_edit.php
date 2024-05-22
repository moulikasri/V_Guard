<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$database = "v_guard";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$LOCATION = "";
$Distance_in_KM = "";
$No_of_Time = "";
$Total_Distance = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    // GET method: show the data of the client

    if (!isset($_GET["id"]) ) {
        header("location: car.php");
        exit;
    }

    $id =$_GET["id"];

    $sql = "SELECT * FROM car WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: car.php");
        exit;
    }

    $LOCATION = $row["LOCATION"];
    $Distance_in_KM = $row["Distance_in_KM"];
    $No_of_Time = $row["No_of_Time"];
    $Total_Distance = $row["Total_Distance"];
}
else {
    // POST method: update th data of th client

    $id = $_POST["id"];
    $LOCATION = $_POST["LOCATION"];
    $Distance_in_KM = $_POST["Distance_in_KM"];
    $No_of_Time = $_POST["No_of_Time"];
    $Total_Distance = $_POST["Total_Distance"];

    do {
        if ( empty($id) || empty($LOCATION) || empty($Distance_in_KM) || empty($No_of_Time) || empty($Total_Distance) ) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE car SET LOCATION = '$LOCATION', Distance_in_KM = '$Distance_in_KM', No_of_Time = '$No_of_Time', Total_Distance = '$Total_Distance' WHERE id = $id";

        $result = $connection->query($sql);
        
        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Client updated correctly";

        header("location: car.php");
        exit;

    } while (false);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>V Guard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    body{
            background: url("images/bg black.webp");
            color:white;
        }
        .btn{
            background-color: #0066ff; 
            border: none;
  color: white;
  padding: 6px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:5px;
        }
        .btn:hover{
    background:#0033cc;
   
    color:white;
}
</style>

</head>
<body>
    <div class="container my-5">
    <h2><center>Edit</center></h2><br><br><br>

        <?php
        if ( !empty($errorMessage) ) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>    
            ";
        }
        ?>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">LOCATION</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="LOCATION" value="<?php echo $LOCATION; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Distance_in_KM</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Distance_in_KM" value="<?php echo $Distance_in_KM; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">No_of_Time</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="No_of_Time" value="<?php echo $No_of_Time; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Total_Distance</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Total_Distance" value="<?php echo $Total_Distance; ?>">
                </div>
            </div>

            <?php
            if (!empty($successMessage) ) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label'Close'></button>
                        </div>
                    </div>
                </div>            
                ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn" href="car.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>    
</body>
</html>