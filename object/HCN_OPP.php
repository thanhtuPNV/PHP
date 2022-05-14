<?php
class Rectangle
{
    public $length = 0;
    public $width = 0;
    public function getPerimeter(){
        return (2*($this->length + $this->width));
    }
    public function getAria(){
        return ($this->length * $this->width);
    }
}
?>