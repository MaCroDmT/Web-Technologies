<?php

if(isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];
    $gender = $_POST['gender'];
    $interest = $_POST['interest'];
}

$DBHostname = "localhost";
$DBUsername = "root";
$DBPassword = "";
$DBname = "seca";

$connectionObject = new mysqli($DBHostname, $DBUsername, $DBPassword, $DBname);

if($connectionObject->connect_error){
    echo "Error connecting to DB: " . $connectionObject->error;
}

$sql = "INSERT INTO users (usename, password, gender, interest) 
        VALUES ('$uname', '$upass', '$gender', '$interest')";

if ($connectionObject->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connectionObject->error;
}

$connectionObject->close();
?>
