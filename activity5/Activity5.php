<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Activity 5</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="KIRTILLI-Activity5.css" />
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  </head>
  <body>
    <h1>Registration Form</h1>
    <form action="Activity5-Preview.php" method="post">
      Name: <input type="text" name="Name"/><br/><br/> 
      Username: <input type="text" name="Username"/><br/><br/> 
	    Password: <input type="password" name="Password"><br/><br/> 
      Adress: <input type="text" name="Address"/><br/><br/> 
      <label>Country:</label>
      <select name="Country">
        <option value="">Choose Country </option> 
        <option value="America">America</option>
        <option value="Turkey">Turkey</option>
        <option value="England">England</option>
        <option value="Germany">Germany</option>
      </select><br/><br/> 
      ZIP Code: <input type="number" name="Zipcode"/><br/><br/> 
      E-mail: <input type="email" name="E-mail"/><br/> <br/> 
         <div class="gender">
         Sex:
            <div class="gender-input">
              <input type="radio" id="radio1" name="Gender" value="Male" >
              <label>Male</label>
              <input type="radio" name="Gender" value="Female" >
              <label>Female</label>
            </div>
         </div>
         <br/>
        <div class="language">
        Language: 
           <div class="language-input">
              <label> English</label>
              <input type="checkbox" name="Language[]" value="English" >
              <label> French</label>
              <input type="checkbox" name="Language[]" value="French">
              <label> German</label>
              <input type="checkbox" name="Language[]" value="German">
           </div>  
        </div> 
        <br/>
      About: <textarea type ="text" name="About" rows="3" cols="30"></textarea> <br/><br/> 
	    <input type="submit" value="submit"/>
	</form>

  </body>
</html>
