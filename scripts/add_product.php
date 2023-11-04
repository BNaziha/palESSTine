<?php
include_once("./database.php");

// Add a new brand to the brands table
if (isset($_GET["name"]) && isset($_GET["field"])) {
    $brand_name = $_GET["name"];
    $field = $_GET["field"];
    $is_safe = isset($_GET['is_safe']);
    $sql = "INSERT INTO brand (brand_name, field, is_safe) VALUES ('$brand_name', '$field', '$is_safe')";
    if ($conn->query($sql) === TRUE) {
        echo "New brand added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    header("Location: ../pages/admin.php");
    exit();
}
else
{
    echo "Error: Missing parameters";
}
