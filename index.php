<?php
/*
Pattern:1
*
**
***
****
*****
*/ 
echo"-----------------------------------";
echo"<br>","Pattern 1:","<br>","<br>";
for($i=1; $i<=5; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo"*";
    }
    echo"<br>";
}

/*
Pattern:2
1
22
333
4444
55555
*/ 
echo"-----------------------------------";
echo"<br>","Pattern 2:","<br>","<br>";
for($i=1; $i<=5; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo $i;
    }
    echo"<br>";
}

/*
Pattern:3
1
12
123
1234
12345
*/ 
echo"-----------------------------------";
echo"<br>","Pattern 3:","<br>","<br>";
for($i=1; $i<=5; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo $j;
    }
    echo"<br>";
}

/*
Pattern:4
*****
****
***
**
*
*/ 
echo"-----------------------------------";
echo"<br>","Pattern 4:","<br>","<br>";
for($i=5; $i>=1; $i--)
{
    for($j=1; $j<=$i; $j++)
    {
        echo "*";
    }
    echo"<br>";
}

/*
Pattern:5(Pyramid)
    *
   ***
  *****
 *******
  
*/ 
echo"-----------------------------------";
echo"<br>","Pattern 5:","<br>","<br>";
$n = 5;
for($i=1; $i<=$n; $i++){

    for($j=1; $j<=(2*$n)-1; $j++){
        if($j>=$n-($i-1) && $j<=$n+($i-1)){
            echo"*";
        }else{
            echo"&nbsp;&nbsp;";
        }
    }
    echo"<br>";
}
