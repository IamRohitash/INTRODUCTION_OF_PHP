<?php
// echo and print command

echo("hello  how r u ..?<br>");
echo"Hello how r u .... <br>";
print("print the command<br>");

print "print the command<br>";
//difference between print and echo
//variable
$abc=10;
$Abc=20;
$ABC=30;
echo $abc." ".$Abc." ".$ABC."<br> ";
define("ABC",5,true);
echo abc;
// data type 
$dt1="Pankaj";
$dt2=5;
$dt3=3.3;
$dt4=true;
$dt5=null;


$dt6=array(2,3,45);

echo "<br><br>";
echo 'hello '. $dt1."<br>";
echo "hello $dt1 <br>";
echo "diffrence between double and single quote<br>";
echo '$dt1';
echo "<br>";
echo "$dt1";
//string manipulation function
$h="rohitash yadav";
echo "<br><br>";
echo "Length of string:<br>";


/// lenght of string
echo strlen($h);
echo "<br>cout  of word of string:<br>";


/// no of digit and character by using str_word_count
echo str_word_count($h);
echo "<br>reverse of string:<br>";

/// reverse the string by using strrev function
echo strrev($h);
echo "<br>replace of string:<br>";
echo str_replace("Hello"," ","Hello world");

// is_int() function
//is_float( ) function
// casting
$abcd=125.4;
$intnum=(int)$abcd; // cast float into int

echo "<br><br>";
var_dump(is_float($abcd)); //check  wheather the variable is 
 //float or not
echo $intnum;


//operators
//1.Arithmetic operator
//2.Relational operator
//3.Logical operator
//4.Assignment operator


//1.Arithmetic operator
//+, -, *, \, %, **;
$a=45;
$b=25;
$c=4;
$d=5;
echo "<br><br>";
echo "Addition of two no.:";
echo $a+$b;

echo "<br><br>";
echo "Substraction of two no.:";
echo $a-$b;

echo "<br><br>";
echo "Multiplication of two no.:";
echo $a*$b;

echo "<br><br>";
echo "divition of two no.:";
echo $a/$b;

echo "<br><br>";
echo "Module of two no.:";
echo $a%$b;

echo "<br><br>";
echo "power of two no.:";
echo $c**$d;




?>
