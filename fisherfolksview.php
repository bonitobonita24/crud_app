<?php
require "script/pdocrud.php";
$pdocrud = new PDOCrud();
$pdocrud->setPK("fisherfolks_id");
echo $pdocrud->dbTable("fisherfolks")->render("VIEWFORM",array("fisherfolks_id" =>"5"));


?>