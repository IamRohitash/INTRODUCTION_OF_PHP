<?php
$text="The quick brown Fox jumps over the lazy Dog";
$words=explode(" ",$text);
$now=count($words);
$j=0;
for($i=0;$i<$now;$i++)
{
    if($words[$i]=="the" or $words=="The");
    {
        $j=$j+1;
    }
}
echo "No of words:$j";
?>