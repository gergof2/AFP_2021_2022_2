<?php

class Model {

    public function getConnection() {
        $connection = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME.';',DB_USER, DB_PASS);
        return $connection;
    }

    public function getList($queryString, $queryParams = []) {
        $connection = $this->getConnection();  
        $statement = $connection->prepare($queryString);
        $success = $statement->execute($queryParams);
        $result = $success ? $statement->fetchAll() : $statement->errorInfo()[2];
        $statement->closeCursor();
        $connection = null;
        return $result;
    }
    
    public function getRecord($queryString, $queryParams = []) {
        $connection = $this->getConnection();  
        $statement = $connection->prepare($queryString);
        $success = $statement->execute($queryParams);
        $result = $success ? $statement->fetch() : $statement->errorInfo()[2];
        $statement->closeCursor();
        $connection = null;
        return $result;
    }
}