<?php require_once "script/pdocrud.php"; 
//Login page code
$pdo_crud = new PDOCrud();
// (Optional step) before checking the login data if you want to peform any operation like password encryption etc/(optional)
 //$pdo_crud->addCallback("before_select", "beforeloginCallback");
 //only required fields to be display on form
 $pdo_crud->formFields(array("email", "password"));
 //set session variables - 1st parameter is the session variable name and 2nd is value to be matched in database table
 $pdo_crud->setUserSession("userName", "user_name");
 //You can set any no. of session variables
 $pdo_crud->setUserSession("userId", "user_id");
  
 $pdo_crud->setUserSession("role", "role");
  
 $pdo_crud->setUserSession("lastLoginTime", date("now"));
///redirect to some page after login (optional)-2nd parameter specify whether to redirect or not if no records found
 $pdo_crud->formRedirection("https://www.booleansolutionsenterprises.com/crud_app/after-login-page.php", true);
// set db table to your user table and call render function with select form
 echo $pdo_crud->dbTable("login")->render("selectform");

 ?>