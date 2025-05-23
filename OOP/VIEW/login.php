<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <form action="../CONTROL/login_control.php" method="POST">
    <fieldset class="fieldset2">  
    <legend class="legend1">LOG-IN</legend>
     
        <table>
          <tr>
            <td class="lname">Enter your name</td>
            <td>:</td>
            <td>
              <input type="text" name="name" />
            </td>
          </tr>

          <tr>
            <td class="lpass">Enter your password</td>

            <td>:</td>

            <td>
              <input type="text" name="pass" />
            </td>
          </tr>

          <tr>
            <td>
              <input type="submit" name="submit" />
            </td>

            <td><input type="reset" name="reset" /></td>
          </tr>
        </table>
      </fieldset>
    </form>
  </body>
</html>
