<?php

session_start();
{

    if(isset($_SESSION['name'],$_SESSION['pass'],$_SESSION['gender']))
    {
       // $_SESSION['name'] = $Name;  
        echo "<h5>HELLO GUEST: " . $_SESSION['name'] . "!!</h5>";
        echo "your gender is:".$_SESSION['gender'];
    echo "<p>Welcome to our hotel!</p>";
  /*  echo "<p>Gender: " . htmlspecialchars($_SESSION['gender']) . "</p>";
    echo "<p>Room Type: " . htmlspecialchars($_SESSION['room']) . "</p>"; */

    print_r($_SESSION);
    }

   
    else {
        echo "<p>No session data found. Please register first.</p>";
        }
} 

?>
