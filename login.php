<?php
require "script/pdocrud.php";
$pdocrud = new PDOCrud();

$pdocrud->formFields(array("email","password"));
echo $pdocrud->dbTable("users")->render();


?>