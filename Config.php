<?php

/*
 * Author: Hugo (CodeColors)
 * Description: Config page for desaw
 */

class Config
{

    private $config = [];

    /*
     * DATABASE CONNECTION
     */
    private $isDbUsed = true;

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "desaw";

    function __construct(){
        if($this->isDbUsed){
            $this->constructDatabaseObj(); // Creating database object
        }else{
            $this->config['database'] = false;
        }

        return $this->config; // Exporting config object
    }

    public function constructDatabaseObj()
    {

        $this->config['database'] = function () {
            try {
                $db = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
                $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $db;
            } catch (Exception $e) {
                return false;
            }
        };

    }

    

}