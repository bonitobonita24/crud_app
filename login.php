<?php
require "script/pdocrud.php";

$pdocrud = new PDOCrud();
// we need to add actions 
// before checking the login data if you want to peform any operation like password encryption etc/(optional)
 $pdocrud->addCallback("before_select", "beforeloginCallback");
// after login, we generally want to save the data in session
 $pdocrud->addCallback("after_select", "afterLoginCallBack");
 //only required fields to be display on form
 $pdocrud->formFields(array("user", "pass"));
///redirect to some page after login (optional)
 $pdocrud->formRedirection("https://www.booleansolutionsenterprises.com/crud_app/fisherfolks.php");
// set db table to your user table and call render function with select form
 echo $pdocrud->dbTable("users")->render("selectform");


//After this add following code in script/pdocrud.php. This is basically callback functions so must be present in the script/pdocrud.php

//example of how to add action function
function beforeloginCallback($data, $obj) {  
//do something like if your passwords are md5 encrypted then change the value
$data["users"]["pass"] = md5($data["users"]["pass"]);
return $data;
}



function afterLoginCallBack($data, $obj) {
@session_start();
if (count($data)) {
//save data in session
    $_SESSION["data"] = $data;
}
else{
    //no record found so don't redirect
    $obj->formRedirection("");
}
}


?>