<?php

namespace App;

include "project.php";

// use Project\Table; 
// this will result in an error rather use the following line 
use Project\Table as ProjectTable;

class Table
{
    public static function get()
    {
        echo "Project .App.get \n";
    }
}
// Table::get();
ProjectTable::get();
