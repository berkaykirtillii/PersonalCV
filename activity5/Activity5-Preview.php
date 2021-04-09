<?php

$name = $_REQUEST['Name'];
$username = $_REQUEST['Username'];
$password= $_REQUEST['Password'];
$address = $_REQUEST['Address'];
$country = $_REQUEST['Country'];
$zipcode = $_REQUEST['Zipcode'];
$email = $_REQUEST['E-mail'];
$gender = $_REQUEST['Gender'];
$language = $_REQUEST['Language'];
$about = $_REQUEST['About'];

$array = array("Name"=>$name,"Username"=>$username,"Password"=>$password,
"Address"=>$address,"Country"=>$country,"Zipcode"=>$zipcode,
"E-mail"=>$email,"Gender"=>$gender,"Language"=>$language,"About"=>$about);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Activity 5</title>   
  </head>
  <body>
    <?php 
      foreach($array as $key => $value){
        if($value != NULL){
          echo $value."<br/>";
        }
        else{
          echo $key.": Not Provided"."<br/>";
        }
      }
    ?>
  </body>
</html>