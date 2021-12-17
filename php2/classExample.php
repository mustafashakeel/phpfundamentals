<?php
class Books
{
    // Member variables 
    public $price;
    public $title;

    function __construct($par1, $par2)
    {
        $this->title = $par1;
        $this->price = $par2;
    }

    // Member functions 
    function setPrice($pr)
    {
        $this->price = $pr;
    }
    function getPrice()
    {
        echo "the price of the books is " . $this->price . "<br/>";
    }
    function setTitle($t)
    {
        $this->title = $t;
    }
    function getTitle()
    {
        echo "the Title  of the books is " . $this->title . "<br/>";
    }
}

class Publisher extends Books
{
    function message()
    {
        echo "this is a publisher class";
    }
}


$myBook = new Publisher("My Awesome Book ", 50);
$myBook->getTitle();
$myBook->message();
$myBook->title;
// $science = new Books("the complete science ", 14);
// $science->getTitle();
// $science->getPrice();


// $javascript = new Books;
// $css = new Books;
// $html = new Books;
// $javascript->setTitle('Beginner Javascript');
// $javascript->setPrice(20);

// $javascript->getTitle();

// $javascript->getPrice();


// class Student
// {
//     var $first_name;
//     var $last_name;
//     var $country = 'none';
// }

// $student1 = new Student;
// $student1->first_name = 'Mike';
// $student1->last_name = "Smith";
// $student2 = new Student;
// $student2->first_name = 'Tina';
// $student2->last_name = "Jones";

// echo $student1->first_name . '</br>';
// echo $student1->last_name . '</br>';

// $classes  = get_declared_classes();

// echo "Classes: " . implode(', ', $classes) . "<br />";

// $class_names = ['Product', 'Student', 'student'];
// foreach ($class_names as $class_name) {
//     // if (class_exists($class_name)) {
//     if (is_a($student1, $class_name)) {
//         echo "student1is a declared class " . "</br>";
//     } else {
//         echo "{$class_name} is a NOT a declared class " . "</br>";
//     }
// }
