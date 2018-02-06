<?php

class mysql
{
    var $conn = false;
    var $host = false;
    var $user = false;
    var $pass = false;
    var $dbname = false;

    public function __construct($host, $user, $pass, $dbname) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->connect();
    }


    // Database connection
    function connect(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if(!$this->conn){
            echo 'Probleem andmebaasi ühendusega';
            exit;
        }
    }


    // Run a database query
    function query($query){
        $result = mysqli_query($this->conn, $query);
        if(!$result){
            echo 'Probleem päringuga '.$query;
            return false;
        }
        return $result;
    }


    // Fetch database rows
    function getData($query){
        $result = $this->query($query); // saadame päring andmebaasi
        $data = array();

        while ($row = mysqli_fetch_assoc($result)){     //fetch row as an associative array
            $data[] = $row;
        }
        if(count($data) == 0){      //if no rows returned
            return false;
        }
        return $data;
    }
}