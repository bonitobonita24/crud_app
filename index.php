<?php
require "script/pdocrud.php";

$pdocrud = new PDOCrud();
$pdocrud->formDisplayInPopup();
$pdocrud->setSearchCols(array("user","email","role"));
$pdocrud->fieldGroups("Name",array("user","pass"));
$pdocrud->fieldGroups("Name2",array("email","role"));
$pdocrud->fieldGroups("Name3",array("photo"));
$pdocrud->crudRemoveCol(array("user_id"));
$pdocrud->fieldTypes("photo", "FILE_NEW");

echo $pdocrud->dbTable("users")->render();
?>