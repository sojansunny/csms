<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbConnection
 *
 * @author aes
 * created Date : 19/1/2013
 */
class dbConnection {
    
    //*******************************
    //Variable Declaration
    //*******************************
        var $con;
        var $ret;
        var $result;
        //*******************************
    
    function dbConnection()
    {
      
	$this->con=@mysql_connect("localhost","root","")or die('Unable to connect to Database Server'); 
        @mysql_select_db("mytest",$this->con)or die('Could not select database'); 
        return $this->con;
    }
    function query($sql)
    {
        $ret=mysql_query($sql,$this->con)or die(mysql_error());
        return $ret;
    }
    function scalarquery($sql)
    {
        $ret=mysql_query($sql,$this->con)or die(mysql_error());
        $id=mysql_insert_id($this->con);
        return $id;
    }
    FUNCTION fetch($sql) 
    {
          $data = ARRAY();
          $result = $this->query($sql);
 
          WHILE($row = mysql_fetch_assoc($result)) 
              {
               $data[] = $row;
          }
               RETURN $data;
     }
}

?>
