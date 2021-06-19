<?php
require "script/pdocrud.php";
$pdocrud = new PDOCrud();
$pdocrud->setPK("id");
echo $pdocrud->dbTable("fisherfolks")->render("VIEWFORM",array("id" =>"5"));


?>