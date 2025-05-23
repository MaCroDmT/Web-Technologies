<?php
    //server name, user level,password,database name

    $dbhost = "localhost";
    $dbname = "seca";
    $dbuser = "root";
    $dbpass = "";

    function getConnection(){

        global $dbhost;
        global $dbname;
        global $dbuser;
        global $dbpass;

       return $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    }

?>