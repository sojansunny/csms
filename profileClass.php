<?php
include_once 'dbConnection.php';

class profileClass {
    
     function profileClass()
    {
         $this->dbConnection =new dbConnection();
    }
     function insertData()
    {
      $sql="insert into person(`name`,`age`,`phone`,`pin`) values('$this->name','$this->age','$this->phone','$this->pin')";
        $data=$this->dbConnection->query($sql); 
        return $data;
    }
    function selectdesig()
    {
       $sql="SELECT `designation` FROM `leave_tbl_designation` WHERE `desigcode`='$this->desig'";
        $data=$this->dbconnection->query($sql); 
        return $data; 
    }
    
}

