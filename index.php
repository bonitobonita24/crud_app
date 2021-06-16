<?php
require "script/pdocrud.php";

$pdocrud = new PDOCrud();
echo $pdocrud->dbTable("users")->render();






?>