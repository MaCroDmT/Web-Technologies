<?php

    require_once('databaseconn.php');

    //insersion function
    function insertIntousers($uname,$upass,$gender,$interest){
        
        $conn = getConnection();

        if(!$conn){
            die("Database connection failed!".mysqli_connect_error());
        }

        $query = "INSERT INTO users(usename,password,gender,interest) VALUES ('$uname','$upass','$gender','$interest')";

        $data = mysqli_query($conn,$query);

        if($data){
            echo "Data inserted Successfully!";
        }else{
            echo "Error : ".mysqli_error($conn);
        }

        mysqli_close($conn);

    }










?>