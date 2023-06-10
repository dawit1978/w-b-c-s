<?php

/**
 * Extend this Model class in every models
 *
 * @author Ozy
 */

abstract class Model {

    protected $connectdb;
    public function __construct() {
        //connect database
    
        $this->connectdb = new mysqli(SERVER, USERNAME, PASSWORD);
        
        if (!$this->connectdb){
            
        die('Could not connect: ' . mysqli_error());
        }
        
        mysqli_select_db($this->connectdb, DATABASE);
        
    }
    
    public function db_close(){
        
        mysqli_close($this->connectdb);
    }
}

?>
