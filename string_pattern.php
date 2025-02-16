<?php
echo"-----------------------------------";
echo"<br>","Pattern 1:","<br>","<br>";
$str="BRISTY";

$count = strlen($str);

for($i=0; $i<$count; $i++)
{
    for($j=0; $j<=$i; $j++)
    {
        echo $str[$j];
    }
    echo "<br>";
}


echo"-----------------------------------";
echo"<br>","Pattern 2:","<br>","<br>";

for($i=$count; $i>=0; $i--)
{
    for($j=0; $j<$i; $j++)
    {
        echo $str[$j];
    }
    echo "<br>";
}
