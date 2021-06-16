<?php
require "script/pdocrud.php";

$pdocrud = new PDOCrud();
$pdocrud->formDisplayInPopup();
$pdocrud->setSearchCols(array("user","email","role"));
$pdocrud->crudRemoveCol(array("user_id"));
$pdocrud->fieldTypes("photo", "FILE_NEW");

echo $pdocrud->dbTable("users")->render();
?>