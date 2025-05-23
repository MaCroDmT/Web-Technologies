<?php
require("../MODEL/db.php");

// Validate POST data
$id = $_POST['id'] ?? null;
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$phonenum = $_POST['phonenum'] ?? null;
$shift = $_POST['shift'] ?? null;
$workinghr = $_POST['workinghr'] ?? null;
$adminref = $_POST['adminref'] ?? null;
$adminbio = $_POST['adminbio'] ?? null;
//$Password = $_POST['pass'] ?? null; 

// Check if all required fields are filled 
/*
if (!$id || !$name || !$email || !$phonenum || !$shift || !$workinghr || !$adminref || !$adminbio) {
    die("Error: All fields are required.");
} */

// Create an instance of the admin class
$adminData = new admin();

// Prepare data for update
$data = [
    'name' => $name,
    'email' => $email,
   // 'pass'  => $Password,
    'phonenum' => $phonenum,
    'shift' => $shift,
    'workinghr' => $workinghr,
    'adminref' => $adminref,
    'adminbio' => $adminbio
];

// Update admin data
if (method_exists($adminData, 'updateData')) {
    $adminData->updateData("admin", $id, $data);
    echo "Admin data updated successfully!";
  //  header('location:http://localhost/OOP/VIEW/viewadmin.php');
} else {
    die("Error: The method 'updateData' does not exist in the admin class.");
}
?>