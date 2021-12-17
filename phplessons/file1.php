<html>

<body>
    <?php
    define('NA', 'MSQ');
    echo NA;

    $name = 'Mustafa Shakeel Qureshi';
    // single line comment 
    /*
    multiline comments 
    great



    */

    $favMeals = array("Nathan" => "Creme Brule", "Jenna" => "Tiramsu", "Amy" => "Creme Brule");
    print_r($favMeals);

    var_dump($favMeals);

    foreach ($favMeals as $name => $dessert) {
        //echo $name." ".$dessert."<br>";
        echo "$name $dessert<br>";
    }


    echo " \n Hello ! $name\' website \n ";
    echo '\n welcome to , ' . $name . ' !.';
    ?>

    <?= '2 Hello World ' ?>

    <?php
    print ' 3hello world ' ?>
</body>

</html>