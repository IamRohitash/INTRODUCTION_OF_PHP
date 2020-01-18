<?php
  extract($_POST);  //this command is used to extract(collection)
  //var_dump($_POST);


  if(isset($sub1))  //is basically used to check weather the 
  {                 //submit button is procced or not
      $a=$text1;
      $b=$text2;
      $c=$a+$b;
      echo "<h3 align='center'>Result is:","$c </h3>";
  }
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
    <input type="text" name="text1" require class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter numeric value only!">
    
  </div>
  <div class="form-group">
    <label for="InputNo2">Enter no.2</label>
    <input type="Text" name="text2" require class="form-control" id="exampleInputPassword1" placeholder="Enter numeric value only!">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="sub1"class="btn btn-primary">Submit</button>
</form>
</div>
    
</body>
</html>
<?php

?>
