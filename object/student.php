<?php
class student
{
    private $name;
    private $age;
    private $class;
    private $exam1;
    private $exam2;

    public function __construct($name, $age, $class, $exam1, $exam2)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> class= $class;
        $this -> exam1 = $exam1;
        $this -> exam2 = $exam2;
    }
    public function getName()
    {
        return $this -> name;
    }
    public function setName($name)
    {
        $this -> name = $name;
    }
    // 
    public function getAge()
    {
        return $this -> age;
    }
    public function setAge($age)
    {
        $this -> age = $age;
    }
    // 
    public function getClass()
    {
        return $this -> class;
    }
    public function setClass($class)
    {
        $this -> class = $class;
    }
    // 
    public function getExam1()
    {
        return $this -> exam1;
    }
    public function setExam1($exam1)
    {
        $this -> exam1 = $exam1;
    }
    // 
    public function getExam2()
    {
        return $this -> exam2;
    }
    public function setExam2($exam2)
    {
        $this -> exam2 = $exam2;
    }
    // total là hành vi
    public function getTotal()
    {
        return ($this -> exam1 + $this -> exam2)/2;
    }
}
if (isset($_POST["submit"]))
{
    if (!empty($_POST["name"]) && !empty($_POST["age"]) && !empty($_POST["class"]) && !empty($_POST["exam1"]) && !empty($_POST["exam2"]))
    {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $class = $_POST["class"];
        $exam1 = $_POST["exam1"];
        $exam2 = $_POST["exam2"];

        if (is_numeric($age) && is_numeric($exam1) && is_numeric($exam2))
        {
            if ($age > 0 && $exam1 >= 0 && $exam1 <= 10 && $exam2 >= 0 && $exam2 <= 10)
            {
                $data = new student($name, $age, $class, $exam1, $exam2);
            }else
            {
                $message = "Age, exam1, exam2 must be greater than 0!";
            }
        }else
        {
            $message = "Age, exam1, exam2 are numeric! Please try again!";
        }
    }else
    {
        $message = "Please fill all blanks!";
    }
}
?>