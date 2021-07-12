<?php
require_once "script/pdocrud.php";
$pdocrud = new PDOCrud();

$pdocrud->formFields(array("user","pass"));

$pdocrud->setUserSession("UserName","user");
$pdocrud->setUserSession("UserId","user_id");
$pdocrud->setUserSession("role","role_id");
$pdocrud->setUserSession("LastLoginTime", date("now"));

$pdocrud->addCallback("before_select", "beforelogincallback");

$pdocrud->formRedirection("https://www.booleansolutionsenterprises.com/crud_app/fisherfolks.php", true);

echo $pdocrud->dbTable("users")->render("selectform");


?>