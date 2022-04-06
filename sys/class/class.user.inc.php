<?php

include "config/init.inc.php";

class User{
    public $db;

    public function __construct(){
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if(mysqli_connect_errno()) {
            echo "Error Could not connect to database";
    }
}

    public function registerUser($firstname, $lastname, $email, $password){
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql  = "SELECT * FROM user WHERE email='$email'";

        //checking if the email is available in the db
        $checkEmail = $this->db->query($sql);
        $countRow = $checkEmail->num_rows;

        //if the email is not in db then insert to the taable
        if ($countRow == 0){
            $sql1="INSERT INTO user SET firstname='$firstname', lastname='$lastname', password ='$passwordHash', email='$email'";

            $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");

            return $result;

        }else{
            return false;
        }
}

    public function checkLogin($email, $password){
                $sql2="SELECT * from user WHERE email='$email'";

                //checking if the username is available in the table
                $db_password='';
                $result = mysqli_query($this->db,$sql2);
                if($result){
                    $count_row = $result->num_rows;
                    if ($count_row == 1) {
                // this login var will use for the session thing
                //$password = password_verify($password, $db_password);
                $user_data = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $db_password = $user_data['password'];

                $validPassword = password_verify($password, $db_password);

                if($validPassword){
                    $_SESSION['login'] = true;
                    $_SESSION['uid'] = $user_data['id'];
                    return true;
                }
            }
                else{
                        return false;
                    }
                }else{
                    return false;
                }
               


    }

    public function getFirstname($id){
        $sql3="SELECT firstname FROM user WHERE id = $id";
                    
        $result = mysqli_query($this->db,$sql3);
        $user_data = mysqli_fetch_array($result, MYSQLI_ASSOC);
        echo ucfirst($user_data['firstname']);
                    

    }

    public function getLastname($id){
        $sql3="SELECT lastname FROM user WHERE id = $id";
                    
        $result = mysqli_query($this->db,$sql3);
        $user_data = mysqli_fetch_array($result, MYSQLI_ASSOC);
        echo $user_data['lastname'];
    }


    public function getEmail($id){
        $sql3="SELECT email FROM user WHERE id = $id";
                    
        $result = mysqli_query($this->db,$sql3);
        $user_data = mysqli_fetch_array($result);
        echo $user_data['email'];
    }

    public function get_session(){
         return $_SESSION['login'];
         }
    
        public function user_logout() {
            $_SESSION['login'] = FALSE;
                 session_destroy();
                }
        
}