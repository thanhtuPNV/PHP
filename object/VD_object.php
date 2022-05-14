<!-- require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php"; -->

<?php
class Rectangle
{
  // Declare properties
    public $length = 0;
    public $width = 0;
  // Method to get the perimeter
    public function getPerimeter(){
        return (2 * ($this->length + $this->width));
    }
  // Method to get the area
    public function getArea(){
        return ($this->length * $this->width);
   }
}
?>