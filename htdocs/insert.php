<?php
require "db/dbconnection.class.php";

$dbconnect = new dbconnection();

if(isset($_POST['mealName']))
{
    $name = $_POST['mealName'];
    $number = $_POST['numberPersons'];
    $prep = $_POST['preparation'];

    $sql = "INSERT INTO recipes (recipe_name, number_for, preparation)
            VALUES (?, ?, ?)";

    $query = $dbconnect->prepare($sql);

    $query->execute([$name, $number, $prep]);
}

header('location: index.php'); 