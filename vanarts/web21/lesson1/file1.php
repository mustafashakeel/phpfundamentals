<h2>hello world </h2>


<?php



?>

<!--  This is a Comment  -->

<?php echo "hello universe"
?>
<br />
<?php

//  This is a a comment 
/*  

this is  a multi line 
comment 

*/


$name = 'Vanarts';   // This is a String 
$name2 = "World";
$number = 15;    // This is a Number 
$floatVar = 34.3333;
$boolVar  = false;
echo var_dump($name);
echo var_dump($number);
echo var_dump($floatVar);
echo var_dump($boolVar);


?>

<h4> PHP can also output HTML Elements

</h4>

<?php

echo " <h1> Welcome to $name ! Universe </h1>";

$num1 = 10;
$num2 = 15;
$num3 = 17.5;

echo  $num1 + $num2 . "<br/>";
echo  $num1 - $num2 . "<br/>";
echo  $num1 * $num2 . "<br/>";
echo $num1 / $num2 . "<br/>";

echo " hello " . "world ";
echo $name . $name2;




if ($num1 > $num2) {

    echo " $num1 is a bigger number ";
} else {
    echo " $num2 is as bigger number ";
}


$subject1 = 'javascript';
$subject2 =  'php';


// if the subject is Javascript and PHP echo  this is Web Dev  
// else if  the subject is photoshop or illustrator  print Web Graphics 

if ($subject1 == 'illustrator' or $subject2 == 'photoshop') {
    echo " this is a part of web dev \n";
}
$words = "if the subject is Javascript and PHP echo  this is Web Dev ";
$name = "vanarts";
echo "the length of $name is " . strlen($name) . '<br/>';  // to count the charactors of a 

echo '  there are about ' . str_word_count($words) . " in the words variable< br/>";
echo "Javascript is positioned at " . strpos($words, "Javascript");

$subjects = ["javscript ", "php"];
echo $subjects[0];
$graphics = array(
    "photoshop", "illustrator",
    array("JQuery", "Python")
);
echo $graphics[1];

array_push($subjects, "CSS");

echo " Subject array  $subjects[1]  = : " . var_dump($subjects);
echo " <br/>Multidimentional Array " . var_dump($graphics);
echo " print a value from 2 dimentional array " . $graphics[2][1];
include 'file2.php';

?>