<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$database = "v_guard";

$connection = new mysqli($servername, $username, $password, $database);


$SOLAR_PV_UNITS_in_KW = "";
$Conversion_Factor = "";
$CO2_Emission_in_Kg = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $SOLAR_PV_UNITS_in_KW = $_POST["SOLAR_PV_UNITS_in_KW"];
    $Conversion_Factor = $_POST["Conversion_Factor"];
    $CO2_Emission_in_Kg = $_POST["CO2_Emission_in_Kg"];

    do {
        if ( empty($SOLAR_PV_UNITS_in_KW) || empty($Conversion_Factor) || empty($CO2_Emission_in_Kg) ) {
            $errorMessage = "All the fields are required";
            break;
        }

        // add new client to database

        $sql = "INSERT INTO solar (SOLAR_PV_UNITS_in_KW, Conversion_Factor, CO2_Emission_in_Kg) " .
               "VALUES ('$SOLAR_PV_UNITS_in_KW', '$Conversion_Factor', '$CO2_Emission_in_Kg')";
        $result = $connection->query($sql);
        
        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $SOLAR_PV_UNITS_in_KW = "";
        $Conversion_Factor = "";
        $CO2_Emission_in_Kg = "";

        $successMessage = "Client added correctly";

        header("location: solar.php");
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
    <h2><center>New Entry</center></h2><br><br><br>

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
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">SOLAR_PV_UNITS_in_KW</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="SOLAR_PV_UNITS_in_KW" value="<?php echo $SOLAR_PV_UNITS_in_KW; ?>">
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Conversion_Factor</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Conversion_Factor" value="<?php echo '2.653'; ?>">
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
                    <a class="btn" href="solar.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>    
</body>
</html>