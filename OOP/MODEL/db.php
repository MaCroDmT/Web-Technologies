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
        $DBname = "admin";

        $this->connectionObject = new mysqli($DBHostname, $DBusername, $DBPassword, $DBname); //OBJECT CREATION

        if ($this->connectionObject->connect_error) {
            die("ERROR CONNECTING TO DB: " . $this->connectionObject->connect_error);
        }
    }



    function insertData($table, $name,$Password,$Confrimpass,$Email,$Phonenum,$Date,$Shift,$Working_hr,$Admin_reference,$Admin_bio)
    {
        
        $sql = "INSERT INTO $table (name, pass, confrimpass, email, phonenum, date, shift, workinghr, adminref, adminbio) 
                VALUES ('$name', '$Password', '$Confrimpass', '$Email', '$Phonenum', '$Date', '$Shift', '$Working_hr', '$Admin_reference', '$Admin_bio')";

        
        if ($this->connectionObject->query($sql) === TRUE) {
            echo "regestration success";
        } else {
            echo "Error: " . $sql . "<br>" . $this->connectionObject->error;
        }
    }

   
    function getAllAdmins($table)
    {
        $sql = "SELECT * FROM $table";
        $result = $this->connectionObject->query($sql);

        if ($result->num_rows > 0) {
            return $result; 
        } else {
            return []; 
        }
    }


    function getAdminById($table, $id) {
        $sql = "SELECT * FROM $table WHERE id = $id";
        return $this->connectionObject->query($sql); 
    }

    public function updateData($table, $id, $data) {
        $set = []; 
        foreach ($data as $key => $value) {
            $set[] = "$key='" . $this->connectionObject->real_escape_string($value) . "'";
        }
        $setQuery = implode(", ", $set);
    
        $query = "UPDATE $table SET $setQuery WHERE id='$id'";
        if ($this->connectionObject->query($query) === TRUE) {
            return true;
        } else {
            die("Error updating record: " . $this->connectionObject->error);
        }
    }

    //delete admin 

    public function deleteAdmin($table, $id) {
        $sql = "DELETE FROM $table WHERE id = $id";
        if ($this->connectionObject->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    
    

    
  //for login

    public function login($username, $password)
    {
        $username = $this->connectionObject->real_escape_string($username);
        $password = $this->connectionObject->real_escape_string($password);

        // Query to check user credentials
        $sql = "SELECT * FROM admin WHERE name='$username' AND pass='$password'";
        $result = $this->connectionObject->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: ../VIEW/home.php");
            exit();
        } else {
            echo "Invalid username or password!";
        }
    }
    

   

    // Close the connection when done
     function __destruct()
    {
        $this->connectionObject->close();
    }
}
?>



