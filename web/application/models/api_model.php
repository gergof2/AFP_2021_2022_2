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
}