<?php require_once "script/pdocrud.php";
$pdocrud = new PDOCrud();
$pdocrud->setPK("fisherfolks_id");
echo $pdocrud->dbTable("fisherfolks")->render("VIEWFORM",array("id" =>"5"));


?>