<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$database = "v_guard";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$DG_UNITS_in_KW = "";
$TOTAL_DIESEL_CONSUMPTION = "";
$Conversion_Factor = "";
$CO2_Emission_in_Kg = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    // GET method: show the data of the client

    if (!isset($_GET["id"]) ) {
        header("location: 380.php");
        exit;
    }

    $id =$_GET["id"];

    $sql = "SELECT * FROM emission_380 WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: 380.php");
        exit;
    }

    $DG_UNITS_in_KW = $row["DG_UNITS_in_KW"];
    $TOTAL_DIESEL_CONSUMPTION = $row["TOTAL_DIESEL_CONSUMPTION"];
    $Conversion_Factor = $row["Conversion_Factor"];
    $CO2_Emission_in_Kg = $row["CO2_Emission_in_Kg"];
}
else {
    // POST method: update th data of th client

    $id = $_POST["id"];
    $DG_UNITS_in_KW = $_POST["DG_UNITS_in_KW"];
    $TOTAL_DIESEL_CONSUMPTION = $_POST["TOTAL_DIESEL_CONSUMPTION"];
    $Conversion_Factor = $_POST["Conversion_Factor"];
    $CO2_Emission_in_Kg = $_POST["CO2_Emission_in_Kg"];

    do {
        if ( empty($id) || empty($TOTAL_DIESEL_CONSUMPTION) || empty($Conversion_Factor) || empty($CO2_Emission_in_Kg) ) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE emission_380 SET DG_UNITS_in_KW = '$DG_UNITS_in_KW', TOTAL_DIESEL_CONSUMPTION = '$TOTAL_DIESEL_CONSUMPTION', Conversion_Factor = '$Conversion_Factor', CO2_Emission_in_Kg = '$CO2_Emission_in_Kg' WHERE id = $id";

        $result = $connection->query($sql);
        
        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Client updated correctly";

        header("location: 380.php");
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
                <label class="col-sm-3 col-form-label">DG_UNITS_in_KW</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="DG_UNITS_in_KW" value="<?php echo $DG_UNITS_in_KW; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">TOTAL_DIESEL_CONSUMPTION</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="TOTAL_DIESEL_CONSUMPTION" value="<?php echo $TOTAL_DIESEL_CONSUMPTION; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Conversion_Factor</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Conversion_Factor" value="<?php echo $Conversion_Factor; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">CO2_Emission_in_Kg</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="CO2_Emission_in_Kg" value="<?php echo $CO2_Emission_in_Kg; ?>">
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
                    <a class="btn" href="380.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>    
</body>
</html>