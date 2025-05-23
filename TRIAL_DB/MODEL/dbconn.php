<?php
$DBHostname="localhost";
$DBUsername="root";
$DBPassword="";
$DBname="seca";

$connectionObject= new mysqli($DBHostname,
$DBUsername,$DBPassword,$DBname);
if($connectionObject->connect_error)
{
    echo "Error connecting to DB: " . 
    $connectionObject->error;
}
$sql="INSERT INTO users (usename, password,
gender, interest,filename) VALUES 
('$uname','$upass','$gender','$interest')";
if($connectionObject->query($sql))
{
    echo "Success";
}
else{
    echo "Error: " . $connectionObject->error;
}




?>