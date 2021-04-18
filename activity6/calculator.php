<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Activity 6</title>  

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
  <body>

    <form action="" method="POST">
      <?php
         if(isset($_POST["amount"]) && isset($_POST["from"]) && isset($_POST["to"])){
            $amount = $_POST["amount"];
            $from = $_POST["from"];
            $to = $_POST["to"];
  
            $currencies = array("usd"=>8,"eur"=>9.5,"try"=>1);
  
            foreach($currencies as $key => $value){
                if($key == $from){
                    $fromVal = $value;
                }
                if($key == $to){
                  $toVal = $value;
              }
            }
  
              $result = $amount * $fromVal / $toVal;
  
          }
          else{
              $amount = "";
              $from = "";
              $to = "";
              $result = "";
          } 
       

        echo 
        "
        <div class='row'>
          <div class='col-md-3 offset-3 left-col'>
            <label>From: </label>
            <input type='number' name='amount' value='$amount' class='form-input'>  
          </div>
          <div class='col-md-3'>
            <label>Currency: </label>
            <select required name='from'>
              <option value='' >Choose Currency</option>
              <option value='usd' "; if($from == 'usd') echo 'selected'; echo ">US Dollar</option>
              <option value='eur' "; if($from == 'eur') echo 'selected'; echo ">Euro</option>
              <option value='try' "; if($from == 'try') echo 'selected'; echo ">Turkish Lira</option>
            </select>
          </div>
        </div>

        <div class='row'>
          <div class='col-md-3 offset-3 left-col'>
            <label>To: </label>
            <output id='output'>";
            echo $result;
            echo "</output>
          </div>
          <div class='col-md-3'>
            <label>Currency: </label>
            <select  name ='to' required>
              <option value=''>Choose Currency</option>
              <option value='usd' "; if($to == 'usd') echo 'selected'; echo ">US Dollar</option>
              <option value='eur' "; if($to == 'eur') echo 'selected'; echo ">Euro</option>
              <option value='try' "; if($to == 'try') echo 'selected'; echo ">Turkish Lira</option>
            </select>
          </div>
        </div>

      <input type='submit' value='convert' class='offset-7'>";
        
       ?>


    </form>

  </body>
</html>
