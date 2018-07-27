<?php

include_once 'profileClass.php';
$obj=new profileClass();
$name=$_REQUEST['name'];
$age=$_REQUEST['age'];
$phone=$_REQUEST['phone'];
$pin=$_REQUEST['pin'];
$obj->name=$name;
$obj->age=$age;
$obj->phone=$phone;
$obj->pin=$pin;
$result=$obj->insertData();
if($result>0)
{
    echo '<script>alert("inserted")</script>';
}else
{
    echo '<script>alert("Error")</script>'; 
}
 echo '<script>window.location.replace("addnew.php")</script>';
?>
