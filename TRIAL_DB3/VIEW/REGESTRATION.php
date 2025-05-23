<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regestration</title>
</head>

<body>
    <form action="../CONTROL/reg_control.php" method="post">
        <fieldset  >
            <legend>
                <h2>Admin Registration</h2>
            </legend>
        <table>


            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
    
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pass"></td>
            </tr>

            <tr>
                <td>Confirm Password</td>
                <td>:</td>
                <td><input type="password" name="c_pass"></td>
            </tr>
    
            <tr>
                <td>E-mail</td>
                <td>:</td>
                <td><input type="text" name="mail"></td>
            </tr>

            <tr>
                <td>Phone Number</td>
                <td>:</td>
                <td><input type="text" name="ph_num"></td>
            </tr>

            <tr>
                <td>Home Address</td>
                <td>:</td>
                <td><input type="text" name="address"></td>
            </tr>

            <tr>
                <td>Select Shift</td>
                <td>:</td>
                <td>
                    <input type="radio" name="shift" value="shift"> Morning
                    <input type="radio" name="shift" value="shift"> Noon
                    <input type="radio" name="shift" value="shift"> Night
                </td>
            </tr>

            <tr>
                <td>Select Working Hour</td>
                <td>:</td>
                <td>
                    <select name="working_hour">
                        <option value="" selected>Select a Working Hour</option>
                        <option value="8amto12pm">8:00 AM to 12:00 PM</option>
                        <option value="12to4pm">12:00 PM to 4:00PM</option>
                        <option value="4to8pm">4:00 PM to 8:00PM</option>
                        <option value="8to12am">8:00 PM to 12:00AM</option>
                       
                    </select>
                </td>
            </tr>

            <tr>
                <td>Upload ID Proof</td>
                <td>:</td>
                <td><input type="file" name="id_proof"></td>
            </tr>

          
            <tr>
                <td>Admin Joining Date</td>
                <td>:</td>
                <td><input type="date" name="date"></td>
            </tr>

            <tr>
                <td>Admin Reference Link</td>
                <td>:</td>
                <td><textarea name="reference" id="reference"></textarea></td>
            </tr>

            <tr>
                <td>Admin Bio</td>
                <td>:</td>
              <td><textarea name="bio" placeholder="bio"></textarea></td>  
            </tr>
           
            <tr>
                <td  align="center"><input type="submit" name="submit"> </td>
                <td  align="center"><input type="reset" name="reset"></td>
            </tr>
        </table>
    </fieldset>

    <tr>
        <td><h3>Are you done with Regesrtraion?</h3></td>
        <td> <a href="http://localhost/PASTRY SHOP V2/VIEW/LOGIN.html" target="_blank">Wanna Go to Login</a></td>
    </tr>
    </form>
    
</body>
</html>
    
</body>
</html>