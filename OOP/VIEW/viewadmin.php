<?php
require("../MODEL/db.php"); // Include the admin class

// Create an instance of the admin class 
// <td>{$row['id']}</td>
$adminData = new admin();

// Fetch all admin data from the database
//<td><a href='deleteuser_control.php?id=".$row['id']."'>Delete</a></td>
$admins = $adminData->getAllAdmins("admin");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="legend1">Admin List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body2">
    <h2>Admin List</h2>
    <table border="1" class="table2">
        <thead>
            <tr>
                
                <th class="th">Name</th>
                <th class="th">Email</th>
                <th class="th">Phone</th>
                <th class="th">Date</th>
                <th class="th">Shift</th>
                <th class="th">Working Hours</th>
                <th class="th">Reference</th>
                <th class="th">Bio</th>
                <th class="th">Operation(update)</th>
                <th class="th">Operation(delete)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($admins) && is_object($admins)) {
                while ($row = $admins->fetch_assoc()) {
                    echo "<tr>
                           
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['phonenum']}</td>
                            <td>{$row['date']}</td>
                            <td>{$row['shift']}</td>
                            <td>{$row['workinghr']}</td>
                            <td>{$row['adminref']}</td>
                            <td>{$row['adminbio']}</td>
                            <td><a href='updateadminform.php?id=".$row['id']."'>Update</a></td>
                            <td>  <a href='../CONTROL/deleteadmin_control.php?id=".$row['id']."'>Delete</a></td>
                            
                          </tr>";
                }
               echo "<a href='updateadmin.php'>Update</a>";
            } else {
                echo "<tr><td colspan='9'>No admin data found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
