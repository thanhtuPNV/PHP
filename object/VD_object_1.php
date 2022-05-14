<?php
    // Include class definition
    require "VD_object.php";
    // Create a new object from Rectangle class
    $obj = new Rectangle;
    // Get the object properties values
    echo $obj->length; // Output: 0
    echo "_";
    echo $obj->width; // Output: 0
    echo "_";
    // Set object properties values
    $obj->length = 30;
    $obj->width = 20;
    // Read the object properties values again to show the change
    echo $obj->length; // eutput: 30
    echo "_";
    echo $obj->width; // Output: 20
    echo "_";
    // Call the object methods
    echo $obj->getPerimeter(); // Output: 100
    echo "_";
    echo $obj->getArea(); // Output: 600
?>