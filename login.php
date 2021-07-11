<?php
require "script/pdocrud.php";
$pdocrud = new PDOCrud();

$pdocrud->formFields(array("user","pass"));
echo $pdocrud->dbTable("users")->render();


?>