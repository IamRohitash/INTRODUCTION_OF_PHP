<?php
//write a program to create a calculator
$First_num=$Second_num=$Result="";
if(isset($_POST["operator"]))
{
    $First_num=$_POST["First_num"];
    $Second_num=$_POST["Second_num"];
    $operator=$_POST["operator"];
    switch($operator)
    {
        case "Add":
            $Result=$First_num + $Second_num;
        break;
        case "Sub":
            $Result=$First_num - $Second_num;
        break;
        case "Mul":
            $Result=$First_num * $Second_num;
        break;
        case "Div":
            $Result=$First_num / $Second_num;
        break;
        case "Mod":
            $Result=$First_num % $Second_num;
        break;
        case "Pow":
            $Result=$First_num ** $Second_num;
        
    }
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
   <h1>Simple-PHP-Calculater</h1>
   <form method="POST">
   <div class="form-group">
    <label for="exampleInputEmail1">Enter No. first:</label>
    <input type="Number" name="First_num"class="form-control" id="exampleInputEmail1"value="<?php echo $First_num ;?>" aria-describedby="emailHelp" placeholder="Enter Numeric value only!"/>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter No. Second:</label>
    <input type="Number" name="Second_num"class="form-control" id="exampleInputEmail1"value="<?php echo $Second_num; ?>" aria-describedby="emailHelp" placeholder="Enter Numeric value only!"/>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Result:</label>
    <input readonly="readonly" type="Number" name="Result"class="form-control" id="exampleInputEmail1"value="<?php echo $Result; ?>" aria-describedby="emailHelp" />
  </div>
    <button type="submit" name="operator" value="Add" class="btn btn-primary">Add</button>
    <button type="submit" name="operator" value="Sub" class="btn btn-primary">Sub</button>
    <button type="submit" name="operator" value="Mul"class="btn btn-primary" >Mul</button>
    <button type="submit" name="operator" value="Div"class="btn btn-primary" >Div</button>
    <button type="submit" name="operator" value="Mod"class="btn btn-primary" >Mod</button>
    <button type="submit" name="operator" value="Pow" class="btn btn-primary">Pow</button>
   </form>

</div>

    
</body>
</html>

