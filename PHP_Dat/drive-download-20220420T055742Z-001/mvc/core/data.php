<?php
    class Data {
        protected $con;
        protected $servername = "localhost";
        protected $username ="root";
        protected $password ="";
        protected $dataname = "otakuvn";

        function __construct(){
            $this -> con = mysqli_connect($this->servername, $this->username, $this->password);
            mysqli_select_db($this->con, $this->dataname);
            mysqli_query($this->con, "SET NAMES 'utf8'");
        }
    }
?>