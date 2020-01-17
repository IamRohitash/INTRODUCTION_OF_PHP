<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>My first php page</h1>
    <?php
    
    echo "hello world";
    ?>
</body>
<body>
   <h1>Case Sensitivity</h1>
   <?php
   echo "Hello world!<br>";
   Echo "Hello world!<br>";
   eChO "Hello world!<br>";
   ?>

</body>
<body>
   <h1>Case Sensitivity for variable</h1>
   <?php
   $color="red";
   echo "My car is".$color."<br>";
   Echo "My car is".$cOlor."<br>";
   eChO "My car is".$coLor."<br>";
   ?>

</body>
<body>
   <h1>Comment in php</h1>
   <?php
  // this is a single line comment
  #this is also single line comment
  /* this is a 
    multiple line comment
    in php language 
    */
    $a=10;
    $b=20;
    $c=$a /* +15-10 */ +$b;
    echo "sum of two number:".$c."<br>";

   ?>

</body>
<body>
   <h1>Variable</h1>
   <?php
  $txt="W3Schools.com";
  echo "I love:".$txt."<br>";
   ?>

</body>
<body>
   <h1>Sum of variale:</h1>
   <?php
  $a=10;
  $b=10;
  echo $a+$b;
   ?>

</body>
<body>
   <h1>Scope of variable:</h1>
   <?php
     $a=10;
     function myTest()
     {
         echo "<p>Variable a inside function is:$a<p>";
     }
     echo "<p>Variable a outside function is:$a<p>";
   ?>

</body>

</html>