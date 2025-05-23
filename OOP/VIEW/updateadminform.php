<?php
require("../MODEL/db.php");

// Fetch admin data based on ID
$id = $_GET['id'];
$adminData = new admin();
$result = $adminData->getAdminById("admin", $id);

// Check if admin exists
if ($result->num_rows > 0) {
    $admin = $result->fetch_assoc(); //each line taking by single single input and showing the o/p
} else {
    die("Admin not found!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Admin</title>
</head>
<body>
    <h2>Update Admin Data</h2>
    <form action="../CONTROL/updateadmincontrol.php" method="post">
    
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td><label>ID:</label></td>
            <td>
                <input type="hidden" name="id" value="<?php echo $admin['id']; ?>">
                <?php echo $admin['id']; ?>
            </td>
        </tr>
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input id="name" type="text" name="name" value="<?php echo $admin['name']; ?>" required></td>
        </tr>
        <tr>
            <td><label>Email:</label></td>
            <td><input type="email" name="email" value="<?php echo $admin['email']; ?>" required></td>
        </tr>

        
        <tr>
            <td><label>Phone:</label></td>
            <td><input type="text" name="phonenum" value="<?php echo $admin['phonenum']; ?>" required></td>
        </tr>
        <tr>
            <td><label>Shift:</label></td>
            <td><input type="text" name="shift" value="<?php echo $admin['shift']; ?>" required></td>
        </tr>
        <tr>
            <td><label>Working Hours:</label></td>
            <td><input type="text" name="workinghr" value="<?php echo $admin['workinghr']; ?>" required></td>
        </tr>
        <tr>
            <td><label>Reference:</label></td>
            <td><textarea name="adminref"><?php echo $admin['adminref']; ?></textarea></td>
        </tr>
        <tr>
            <td><label>Bio:</label></td>
            <td><textarea name="adminbio"><?php echo $admin['adminbio']; ?></textarea></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit">Update</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
