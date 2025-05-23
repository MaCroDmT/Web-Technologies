<?php
session_start();

echo "<h5>HELLO MR.GUEST!!</h5>";

if (isset($_REQUEST['submit'])) {
    $Name = $_REQUEST['name'];
    setcookie("data",$Name,time()+10,"/");
    $Password = $_REQUEST['pass'];
    $Gender = $_REQUEST['gender'];
    $Room = $_REQUEST['Room_type'];

    $valid_1 = false;
    $valid_2 = false;
    $valid_3 = false;
    $valid_4 = false;

    if (!empty($Name)) {
        for ($i = 0; $i < strlen($Name); $i++) {
            if ($Name[$i] == '1' || $Name[$i] == '2' || $Name[$i] == '4' || $Name[$i] == '5' || $Name[$i] == '6' || $Name[$i] == '7' || $Name[$i] == '8' || $Name[$i] == '9' || $Name[$i] == '0' || $Name[$i] == '@' || $Name[$i] == '#' || $Name[$i] == '!') {
                $valid_1 = false;
                echo "Name cannot contain any numeric or special charecter";
                break;
            } else {
                $valid_1 = true;
            }
        }
    }

    else{
        echo "Name cannot be empty";
    }

    if (!empty($Password)) {
        for ($i = 0; $i < strlen($Password); $i++) {
            if ($Password[$i] == '@' || $Password[$i] == '#' || $Password[$i] == '_' || $Password[$i] == '&') {
                $valid_2 = true;
                break;
            } else {
                $valid_2 = false;
               
            }
        }
    }

    

    if (!empty($Gender)) {
        $valid_3 = true;
    }

   

    if (!empty($Room)) {
        $valid_4 = true;
    }

  

    if ($valid_1 && $valid_2 && $valid_3 && $valid_4)
    {
        $_SESSION['name']=$_REQUEST['name'];
        $_SESSION['pass']=$_REQUEST['pass'];
        $_SESSION['gender']=$_REQUEST['gender'];
    
        header('location:../CONTROL/SESSION_CHECK.php');
    }

   

    else
    {
        echo "REGESTRATION ERROR";

        echo "PLEASE PROVIDE YOUR NAME PASSWORD AND GENDER PROPERLY <UL><LI>HERE IS OURS SYSTEM CEREDENALITIES GIVEN BELOW:</LI></UL><ol><li>NAME CANNOT CONTAIN ANY NUMBER OR SPECIAL CHARECTER</li><LI>PASWWORD SHOULD CONTAIN @ OR ! OR & OR _ INSIDE </LI> </ol>";

    }

}

?>
