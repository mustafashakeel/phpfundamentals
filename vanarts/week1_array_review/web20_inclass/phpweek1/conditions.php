<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conditionals</h1>
    <p>if statement, a rule, ... Controls the flow of a program based on a condition. Do something in certain conditions, do something else in other conditions.</p>

    <?php
    $age = 13;
    
    // // if($age > 19){
    // //     echo "Your are old!";
    // // } else {
    // //     echo "You are young";
    // // }
    // if($age === "13")
    // {
    //     echo "You are 13";
    // }

    $color = "Green";
    $tool = "Wrench";

    if(
        ($color == "Red" && $tool == "Hammer")
        ||
        ($color == "Blue" && $tool == "Wrench")
    ){
        echo "We have a match";
    } else {
        echo "no match";
    }

    // code will only match the first match... then it exits the conditional
    if($color=="Green"){
        echo "color matched";
    } else if ($tool == "Wrench"){
        echo "tool was wrench";
    } else {
        echo "no match";
    }

    // terinary... 
    // if($age > 13)
    // {
    //     $msg = "You are old";
    // } else {
    //     $msg = "Your are young";
    // }

    $msg = ($age>13) ? "You are old" : "You are young";
    echo $msg;


    // notes are wrong! yeah!
    $text1 = "Hello";
    $text2 = "World";
    $text1 .= $text2;
    echo $text1;
    ?>

</body>
</html>