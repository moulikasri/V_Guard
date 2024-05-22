<?php
if ( isset($_GET["id"]) ) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "1234567";
    $database = "v_guard";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM diesel_comsumption WHERE id=$id";
    $connection->query($sql);
}

header("location: comsumption.php");
exit;

?>