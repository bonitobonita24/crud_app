<?php
require_once "script/pdocrud.php";
$pdocrud = new PDOCrud(false, "", "", array("autoSuggestion" => true, "showAllSearch" => false));
$pdocrud->dbOrderBy("last_update desc");
// $pdocrud->formDisplayInPopup();
$pdocrud->setSearchCols(array("id_number","last_name","first_name","address","batch_code","modified_by","last_update"));
$pdocrud->crudRemoveCol(array("fisherfolks_id"));
$pdocrud->fieldTypes("image", "FILE_NEW");
$pdocrud->fieldTypes("signature", "FILE_NEW");
$pdocrud->tableColFormatting("image", "image", array("width"=>"50px"));
$pdocrud->tableColFormatting("signature", "image", array("width"=>"50px"));
$pdocrud->viewColFormatting("image", "image", array("width"=>"50px"));
$pdocrud->viewColFormatting("signature", "image", array("width"=>"50px"));

echo $pdocrud->dbTable("fisherfolks")->render();
?>