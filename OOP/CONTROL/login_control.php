<?php
require("../MODEL/db.php");

if (isset($_POST['submit'])) {
    $username = $_POST['name'] ?? '';
    $password = $_POST['pass'] ?? '';

    if (!empty($username) && !empty($password)) {
        $auth = new admin();
        $auth->login($username, $password);
    } else {
        echo "Please fill in all fields.";
    }

    
}
?>
