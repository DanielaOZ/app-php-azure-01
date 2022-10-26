<?php
include_once ('connect.php');

    $sql = "SELECT * FROM world.country";

    foreach ($conn->query($sql) as $row) {
        echo $row['Code'] . " | ";
        echo $row['Name'] . " | ";
        echo $row['Continent'] . " | ";
        echo $row['Region'] . " | ";
        echo $row['SurfaceArea'] . "<br>";
    }

    // use exec() because no results are returned
    $conn->exec($sql);

$conn = null;