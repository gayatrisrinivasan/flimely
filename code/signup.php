<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flimely";
$mysql = mysqli_connect($servername, $username, $password, $dbname);
if (!$mysql) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO user_data (name, email, password,date_created) VALUES ('$username', '$email', '$password',current_timestamp())";

    
    if(mysqli_query($mysql, $sql))
    {
        echo "New record created successfully";
    }
    else
    {
        echo "Error: " . "<br>" . mysqli_error($mysql);
    }
}
