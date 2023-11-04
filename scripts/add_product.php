<?php
include_once("./database.php");

// Add a new brand to the brands table
if (isset($_POST["brand_name"]) && isset($_POST["country"]) && isset($_POST["is_safe"])) {
    $brand_name = $_POST["brand_name"];
    $country = $_POST["country"];
    $is_safe = $_POST["is_safe"];
    $sql = "INSERT INTO brands (name, country, is_safe) VALUES ('$brand_name', '$country', '$is_safe')";
    if ($conn->query($sql) === TRUE) {
        echo "New brand added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
