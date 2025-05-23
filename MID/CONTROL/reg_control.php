<?php
//var_dump($_POST);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $Password = $_POST['pass'];
    $Confrimpass = $_POST['c_pass'];
    $Email = $_POST['mail'];
    $Phonenum = $_POST['ph_num'];
    $Date = $_POST['date'];
    $Shift = $_POST['shift'];
    $Working_hr = $_POST['working_hour'];
    $Id = $_POST['id_proof'];
    $Admin_reference = $_POST['reference'];
    $Admin_bio = $_POST['bio'];

    $valid = false;
    $valid_2 = false;
    $valid_3 = false;
    $valid_4 = false;

    // Password validation
    if (!empty($Password)) {
        for ($i = 0; $i < strlen($Password); $i++) {
            if ($Password[$i] == "@" || $Password[$i] == "$" || $Password[$i] == "&") {
                $valid = true;
                break;
            }
        }
    }

    // Name validation
    for ($i = 0; $i < strlen($name); $i++) {
        if (ctype_digit($name[$i])) {
            $valid_2 = false;
            break;
        } else {
            $valid_2 = true;
        }
    }


     // Validate Date (Year: 2000–2025, Month: 1–12, Day: 1–31)
    if (strlen($Date) == 10) {
        $month = (int)substr($Date, 0, 1);
        $day = (int)substr($Date, 3, 1);
        $year = (int)substr($Date, 6, 3);

        if($year < 2000 || $year > 2025 || $month < 1 || $month > 12 || $day < 1 || $day > 31) {
            $valid_3 = true;
        } else {
            $valid_3 = false;
        }
    } else {
        $valid_3 = false; 
    } 

    // Confirm password validation
    if ($Password === $Confrimpass) {
        $valid_4 = true;
    }

    // Email validation
    $valid_email = !empty($Email) && strpos($Email, '@') !== false;

    // Phone number validation
    $valid_phone = !empty($Phonenum) && strlen($Phonenum) == 11 && ctype_digit($Phonenum);

    // Shift, working hours, ID proof, reference, and bio validation
    $valid_shift = !empty($Shift);
    $valid_working_hr = !empty($Working_hr);
    $valid_id = !empty($Id);
    $valid_reference = !empty($Admin_reference);
    $valid_bio = !empty($Admin_bio);

    if ($valid && $valid_2 && $valid_3 && $valid_4 && $valid_email && $valid_phone &&
        $valid_shift && $valid_working_hr && $valid_id && $valid_reference && $valid_bio) {
      

      $data = [
            
        "Name" =>$_REQUEST['name'],
        "Password"=> $_REQUEST['pass'],
        "Email" => $_REQUEST['mail'],
        "Phone" => $_REQUEST['ph_num'],
        "Date" => $_REQUEST['date'],
        "Shift" => $_REQUEST['shift'],
        "Working_hour" => $_REQUEST['working_hour'],
        "Id_proof"=> $_REQUEST['id_proof'],
        "Reference" => $_REQUEST['reference'],
        "Bio" => $_REQUEST['bio'],
        
        
        ];
         
        $json = json_encode($data,JSON_PRETTY_PRINT);
         
        file_put_contents("../data/userdata.json",$json);


        if($json)  
            {
            echo '<h3>Data Saved into JSON file Successfully<br></h3>';
            echo '<h3>Please go to userdata.json to show the values</h3>';
            }
        else
         {
    echo "no data saved";
         } 
    } 
    else {
        echo "REGISTRATION ERROR: Please fill up all fields correctly.<br>";
        if (!$valid) echo "--Invalid password.Password Must contain @, $, or &.<br>";
        if (!$valid_2) echo "--Invalid name.Name should not contain numbers.<br>";
        if (!$valid_3) echo "--Invalid date.Date Format should be MM-DD-YYYY within valid range.<br>";
        if (!$valid_4) echo "--Password and confirm password do not match.<br>";
        if (!$valid_email) echo "--Invalid email.Must contain '@'.<br>";
        if (!$valid_phone) echo "--Invalid phone number.Must be 11 digits.<br>";
        if (!$valid_shift) echo "--Shift cannot be empty.Please select a shift<br>";
        if (!$valid_working_hr) echo "-- Working hour cannot be empty.Please select a working hour<br>";
        if (!$valid_id) echo "--ID proof cannot be empty.Please upload your ID<br>";
        if (!$valid_reference) echo "-- Reference cannot be empty.Please type in reference<br>";
        if (!$valid_bio) echo "-- Bio cannot be empty.Please give your bio<br>";
    }
}

?>
