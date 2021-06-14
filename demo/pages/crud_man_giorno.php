<html>  
    <head>  
        <title>Analisi Fermate Forno</title>
<?php
require_once "../../script/pdocrud.php";
$pdocrud = new PDOCrud();

$pdocrud->tableHeading("Fermate Forno");
// Change table subheading
$pdocrud->tableSubHeading("Approfondire gli aspetti che hanno procurato la fermata");


$pdocrud->where("dataora", "10", ">");
$pdocrud->where("dataora", "$data_finale", "<");
$pdocrud->formDisplayInPopup();
$pdocrud->colDataAttr( "dataora", array("width"=>"70px"));
$pdocrud->colRename("dataora", "Data e Ora Fermata Forno");
$pdocrud->colRename("durata", "Durata in Secondi");

$pdocrud->formRemoveFields(array("durata","dataora")); //non mostriamo questi due campi in modo da non permettere di modificarli
$pdocrud->fieldNotMandatory("macchina_guasta");

$pdocrud->setSettings("enumToSelect", true);

$pdocrud->fieldTypes("macchina_guasta", "select");//change type to select
$querycrud = "select nome_mac, descr_mac from macchine_forno order by nome_mac";
$pdocrud->fieldDataBinding("macchina_guasta", $querycrud,"nome_mac","descr_mac", "sql");

$pdocrud->fieldConditionalLogic("motivo", "Guasto Meccanico", "!=", "macchina_guasta", "hide");
$pdocrud->fieldConditionalLogic("motivo", "Guasto Elettrico", "!=", "macchina_guasta", "hide");

$pdocrud->fieldConditionalLogic("motivo", "Guasto Meccanico", "=", "macchina_guasta", "show");
$pdocrud->fieldConditionalLogic("motivo", "Guasto Elettrico", "=", "macchina_guasta", "show");

$pdocrud->tableColFormatting("commenti", "readmore", array("length"=>2,"showreadmore"=>true));//not showing read more

$pdocrud->fieldTooltip("macchina_guasta", "Selezionare la macchina che ha provocato il guasto dell'impianto");//tooltip
$pdocrud->setSkin("green");
echo $pdocrud->dbTable("tbl_fermate_forno")->render();

?>



    </head>  
    <body> 


		
    </body>  
</html>