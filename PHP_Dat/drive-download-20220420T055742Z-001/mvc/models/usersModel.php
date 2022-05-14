<?php
    require_once "./mvc/models/email.php";
    class UsersModel extends Data{

        public function getUserList(){
            $results = mysqli_query($this->con, "SELECT * FROM users");
            $userList = [];
            while ($row = $results->fetch_assoc()) {
                array_push($userList, $row);
            }
            return $userList;
        }

        public function getUser($id)
        {
            $result = mysqli_query($this->con, "SELECT * FROM users WHERE id={$id}");
            return $result->fetch_assoc();
        }

        public function checkUser($email,$password){
            $userList = $this->getUserList();
            foreach($userList as $user){
                if($email == $user["email"] &&  $password == $user["password"]){
                    session_start();
                    $_SESSION["userId"] = $user["id"];
                    $_SESSION["userName"] = $user["name"];
                    return true;
                }
            }
            return false;
        }

        public function checkSignUp($email){
            $userList = $this->getUserList();
            foreach ($userList as $user) {
                if ($email == $user["email"]) {
                    return true;
                }
            }
            return false;
        }

        public function signUp($name, $phoneNumber, $address, $email, $password){
            if(!$this->checkSignUp($email)){
                $sql = "INSERT INTO users(name,phoneNumber,address,email,password) 
                VALUES('$name','$phoneNumber','$address','$email','$password')";
                $result = mysqli_query($this->con, $sql);
                $subject = "[Chaitan] Notification";
                $content = "Hello $name, <br> Account Registration Successful <br>Account Information: <br>$name<br>$phoneNumber<br>$address <br> Have a nice day.";
                sendEmail($email, $name, $subject, $content);
                return $result;
            }
            return false;
        }

        public function updateUser($id, $name, $phoneNumber, $address, $password){
            $sql = "UPDATE users SET name = '$name', phoneNumber = '$phoneNumber', address = '$address', password = '$password' WHERE id ={$id}";
            return $this->con->query($sql);
        }
    }
?>