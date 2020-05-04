<?php

require_once "db.class.php"; 


class get_P extends db {


    public $sql ;
    public $result ;

    public function show_phone (){
        $this->sql = "SELECT * FROM Product GROUP BY id_phone DESC";
        $this->result = mysqli_query($this->con,$this->sql) or die(mysqli_error("sql error sql"));
        return $this->result; 
    }
}

?>