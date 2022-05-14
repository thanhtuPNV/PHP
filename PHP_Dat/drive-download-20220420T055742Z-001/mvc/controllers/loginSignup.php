<?php
    class LoginSignup extends Controller{

        function index(){
            if (isset($_POST["login"])){
                $model = $this->model("UsersModel");
                $email = $_POST["email"];
                $password = $_POST["password"];
                if ($model->checkUser($email, $password)) {
                    return header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/home");
                } else {
                    return $this->view("layoutLoginSignup", ["title" => "Login", "page" => "login", "error" => "Incorrect account or password!"]);
                }
            }
            $this->view("layoutLoginSignup", ["title" => "Login", "page" => "login", "error" => ""]);

        }
        
        function signup(){
            if (!isset($_POST["signup-2"])){
                return $this -> view("layoutLoginSignup",["title"=>"Signupt" , "page"=>"signup", "error" => ""]);
            }
            $model = $this->model("UsersModel");
            $name = $_POST["name"];
            $phoneNumber = $_POST["phonenumber"];
            $address = $_POST["address"];
            $email = $_POST["emaillogin"];
            $password = $_POST["passwordlogin"];
            if($model->signUp($name, $phoneNumber, $address, $email, $password)){
                return header("Location: http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/loginSignup/login");
            }else{
                return $this->view("layoutLoginSignup", ["title" => "Signupt", "page" => "signup", "error" => "Email already exists!"]);
            }
    }

    }
?>