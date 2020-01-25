
<?php
//write a program to check a number wether a positive or negative
  extract($_POST);  //this command is used to extract(collection)
  //var_dump($_POST);


  if(isset($sub1))  //is basically used to check weather the 
  {                 //submit button is procced or not
      $a=$text1;
      if($a>0)
      {
      echo "<h3 align='center'>Result is:","No. is positive </h3>";
      }
      else{
          echo "<h3 align='center'>Result is:","No. is negative </h3>";
      }
  }
  
   /*
   


   */
  
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<div class="container">
<form method="POST">
  <div class="form-group">
    <label for="InputNo1">Enter no.1:</label>
    <input type="text" name="text1" require class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter numeric value only!">
    </div>
  <button type="submit" name="sub1"class="btn btn-primary">Submit</button>
</form>
</div>
    
</body>
</html>
<?php

?>
