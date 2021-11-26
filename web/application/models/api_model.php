<?php
class api_model extends Model {

	public function getLogin($username, $password) {
        $query = "SELECT * FROM user WHERE username = :username AND password = :password";
        $query_params = array(         
            ':username' => $username,
            ':password' => sha1($password)
        );        
        return $this->getRecord($query, $query_params);       
    }
    
    public function postRegister($username, $email, $password){
        $query =
        "INSERT INTO user (username, email, password, registerdate, statusid) VALUES(:username, :email, :password, NOW(), 1)";
        $query_params = array( 
        ':username' => $username,
        ':email' => $email, 
        ':password' => $password
        );
        $result = $this->executeDML($query, $query_params);
        if (!empty($result)) {
            return "Registration failed: ".$result;
        }else{
            return null;
        }  
    }
}