<?php
require "script/pdocrud.php";

$pdocrud = new PDOCrud();
$pdocrud->formDisplayInPopup();
$pdocrud->setSearchCols(array("user","email","role"));
$pdocrud->setSettings("printBtn","false");
$pdocrud->setSettings("pdfBtn","false");
echo $pdocrud->dbTable("users")->render();



?>