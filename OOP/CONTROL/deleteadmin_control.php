<?php
require("../MODEL/db.php"); // Include the admin class

if (isset($_GET['id'])) {
    $adminData = new admin(); // Create an instance of the admin class
    $id = intval($_GET['id']); // Sanitize the ID

    if ($adminData->deleteAdmin("admin", $id)) {
        echo "Admin deleted successfully.";
    } else {
        echo "Error deleting admin.";
    }
} else {
    echo "Invalid request!";
}

// Redirect back to the admin list
header("Location: ../VIEW/viewadmin.php");
exit();
?>

