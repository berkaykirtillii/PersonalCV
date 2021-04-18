<?php

$name = $_REQUEST["Name"];
$username = $_REQUEST["Username"];
$password= $_REQUEST["Password"];
$address = $_REQUEST["Address"];
$country = $_REQUEST["Country"];
$zipcode = $_REQUEST["Zipcode"];
$email = $_REQUEST["E-mail"];
$about = $_REQUEST["About"];

if(empty($_REQUEST["Gender"]) == true){
  $gender = NULL ;
}
else{
  $gender = $_REQUEST["Gender"];
}
$language = NULL;

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
    <h1>Preview</h1>
    <?php 
      foreach($array as $key => $value){
        if($value != NULL){ 
          echo $value."<br/>";
        }
        else{
          if($key == "Language" && empty($_REQUEST["Language"]) == false){
            for($i = 0 ; $i < count($_REQUEST["Language"]) ; $i++){
              echo $_REQUEST["Language"][$i]."<br/>";  
            }
          }
          else{
            echo $key.": Not Provided"."<br/>";
          }
        }
      }
    ?>
  </body>
</html>
