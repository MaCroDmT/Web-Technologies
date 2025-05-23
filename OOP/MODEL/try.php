<?php
class admin
{
    private $connectionObject;

    function __construct()
    {
        // Connect to the database
        $DBHostname = "localhost";
        $DBusername = "root";
        $DBPassword = "";
        $DBname = "mydb";

        $this->connectionObject = new mysqli($DBHostname, $DBusername, $DBPassword, $DBname); // OBJECT CREATION

        if ($this->connectionObject->connect_error) {
            die("ERROR CONNECTING TO DB: " . $this->connectionObject->connect_error);
        }
    }

    function insertData()
    {
        $fame = "alice";
        $lname = "redd";
        $email = "alice@gmail.com";
        $age = 23;

        // Correct SQL query with $this->connectionObject
        $sql = "INSERT INTO Users (firstname, lastname, email, age) VALUES ('$fame', '$lname', '$email', $age)";
       

        if ($this->connectionObject->query($sql) === TRUE) {
            echo "regestration success";
        } else {
            echo "Error: " . $sql . "<br>" . $this->connectionObject->error;
        }
    }

    // Close the connection when done
    function __destruct()
    {
        $this->connectionObject->close();
    }
}

// Create an instance of the admin class and call insertData method 

$adminInstance = new admin();
$adminInstance->insertData(); 
?>
