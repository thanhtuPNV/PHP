<?php
    // Include class definition
    require "VD_object.php";
    // Create multiple objects from the Rectangle class
    $obj1 = new Rectangle;
    $obj2 = new Rectangle;
    // Call the methods of both the objects
    echo $obj1->getArea(); // Output: 0
    echo "_";
    echo $obj2->getArea(); // Output: 0
    echo "_";
    // Set $obj1 properties values
    $obj1->length = 30;
    $obj1->width = 20;
         
    // Set $obj2 properties values
    $obj2->length = 35;
    $obj2->width = 50;
    
    // Call the methods of both the objects -again
    echo $obj1->getArea(); // Output: 600
    echo "_";
    echo $obj2->getArea(); // Output: 1750
    echo "_";
    echo $obj1->getPerimeter();
    echo "_";
    echo $obj2->getPerimeter();
?>