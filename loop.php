<?php
//loop conrol structure
/*
1.while loop
2.do while loop
3.for loop
4.foreach loop
*/

//1.while loop
$a=1;
while($a<10)
{
    echo $a."<br>";
    $a++;
}
//
$x=1;
echo "The number is:";
while($x<=5)
{
    echo "$x<br>";
    $x++;
}
//
$x=0;
echo "The number is:";
while($x<=100)
{
    echo "$x<br>";
    $x+=10;
}
//2.do while loop
$x=1;
echo"Number is:<br>";
do{
    echo "$x<br>";
}while($x<=5);


?>

