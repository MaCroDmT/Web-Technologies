<?php 
    //session_start();
    require_once('../MODEL/dbconn.php');

    if(isset($_POST['submit'])){
        
        $uname = $_POST['uname'];
        $upass = $_POST['upass'];
        $gender = $_POST['gender'];
        $interest = $_POST['interest'];
      

       // insertIntousers($uname,$upass,$gender,$interest);


    }




?>