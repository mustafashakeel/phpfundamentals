<?php

$a = 0;
$b = 0;
echo  " Atthe Begining  of the loop the value of a is $a and the value of B is $b ";
// For Loop 

for ($i = 0; $i < 10; $i++) {
    $a += 10;
    $b += 5;
}

echo  "<br/> Atthe end of the loop the value of a is $a and the value of B is $b ";


// While Loop 

$j = 0;
while ($j < 10) {


    $j++;
}
echo "<br/>  While loop is incrementing j and the val of j is $j <br/>";


$myarray = array("vancouver", "toronto", "edmonton");

foreach ($myarray as $key => $cities) {
    $num = $key + 1;
    echo " $num Cities in Canada $cities <br/>";
}
