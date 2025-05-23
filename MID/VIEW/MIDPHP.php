<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>


<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"]; 

foreach ($car as $x => $y) {
 echo "$x: $y <br>";
}

?>


<?php 
$x = 1;
while($x <= 5) {
    echo

    "The number is: $x <br>"; $x++;}
    ?>


<?php
 $x =5;
 do {echo "The number is: $x <br>";
  $x++;} while ($x <=5);
  ?>


<?php $colors = array("red","green", "blue","yellow");
foreach($colors as $value) 
{
    echo "$value <br>";

}?>



<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php// to change a session variable, 
        $_SESSION['favcolor'] ="yellow";
       // print_r($_SESSION);
       // echo "$_SESSION['favcolor']";

       session_unset();
        session_destroy();
        ?>

        
        </body>
        </html>


        <?xml 
        version="1.0"
        encoding="UTF-8“ ?>
        <note>
            <to>Tove</to>
            <from>Jani</from>
            <heading>Reminder</heading>
            <body>Don't forget me this weekend!</body>
        </note> 

        <?php
        $xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
        print_r($xml);
echo $xml[0]->note[0]->to;
?>





