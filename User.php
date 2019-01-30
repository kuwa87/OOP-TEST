<?php

require "Database.php";

class user extends Database{
    public function get_users(){
        //query
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);

        //initialize an array
        $rows = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;

        } else{
            return $this->conn->error;
        }
    }

    public function insert($username,$password,$firstname,$lastname,$email){

        $sqlFirst = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->conn->query($sqlFirst);

        if ($result->num_rows > 0) {
            echo 'Username is already taken.';
        } else{

        $sql = "INSERT INTO users(username,password,firstname,lastname,email,status) VALUES ('$username','$password','$firstname','$lastname','$email','1')";
        $result = $this->conn->query($sql);
        
        // if($result) {            
        if($result == TRUE) {            
            header("Location: userlist.php");
        }else
            echo 'Error in inserting record' .$this->conn->error;

    }
    
}

//get_user
public function get_user($user_id){

    $sql = "SELECT * FROM users WHERE user_id=$user_id";
    $result = $this->conn->query($sql);

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        return $row;
    }
    else{
        echo "Error: ".$this->conn->error;
    }
    }

//change
public function change($username,$password,$firstname,$lastname,$email,$user_id){

    $sqlFirst = "SELECT * FROM users WHERE username = '$username' AND user_id!= '$user_id'";
    $result = $this->conn->query($sqlFirst);

    if ($result->num_rows > 0) {
        echo 'Username is already taken.';
    } else{

    $sql = "UPDATE users SET username='$username',password='$password',email='$email',firstname='$firstname',lastname='$lastname' WHERE user_id=$user_id";

    $result = $this->conn->query($sql);

    if($result) {
        header("Location: userlist.php");
    }
    else{
        echo "Error: ".$this->conn->error;
    }
    }   
    }

//delete
public function delete($user_id){

    $sql = "DELETE FROM users WHERE user_id=$user_id";
    $result = $this->conn->query($sql);

    if($result) {
        header("Location: userlist.php");
    }
    else{
        echo "Error: ".$this->conn->error;
    }
    }


}
?>