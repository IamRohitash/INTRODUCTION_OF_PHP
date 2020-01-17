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
echo strlen($h);
echo "<br>cout  of word of string:<br>";
echo str_word_count($h);
echo "<br>reverse of string:<br>";
echo strrev($h);
echo "<br>replace of string:<br>";
echo str_replace("rohitash",,$h);




?>
