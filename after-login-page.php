<?php require_once "script/pdocrud.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="Crud, PDO Crud, PDO Database management system, PHP Mysql CRUD, PHP Mysql database abstraction, PHP ajax crud, no query PDO, PDO helper class, database management using PDO, Mysql crud, multi table join, PHP Sqlite CRUD" name="keywords" />
        <meta content="PDOCrud is an advance PHP based CRUD(Create, Read, Update and Delete) application. It supports Mysql, Pgsql and Sqlite database." name="description" />
         <!-- Page specific CSS to improve design of the form. This script is not about writing css to create beautiful forms, it is generating the form from
        database directly with minimal lines of code.-->
        <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="assets/css/form-elements.css" rel="stylesheet"/>
        <link href="assets/css/signup-form.css" rel="stylesheet"/>
        <link href="assets/css/style.css" rel="stylesheet"/>


        <style type="text/css">
            ul{ list-style: none;}
            .form-content{background: #ddd}
            .checkbox label, .radio label{
                float: left;
            }
        </style>

        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>

        <title>PDOCrud - Checking session and access of user form</title>

    </head>
    <body>
        <header>
            <div class="heading">
                <a href="#" class="PDOCrud-logo"> <h3> Title Here </h3></a>
            </div>
        </header>
        <!-- <div class="top-content"> -->
            <!-- <div class="inner-bg"> -->
                <div class="container">
                    <div class="row main-form">
                        <div class="col-sm-12">
                            <div class="col-sm-10 col-sm-offset-2 form-box">
                                <div class="form-head">
                                    <div class="form-head-left">
                                        <h3>After login form demo</h3>
                                    </div>
                                    <div class="form-head-right">
                                        <i class="fa fa-pencil"></i>
                                    </div> 
                                </div>
                                <div class="form-content">
                                    <?php
                                    $pdo_crud = new PDOCrud();
                                    if ($pdo_crud->checkUserSession("userId")) {
                                        if ($pdo_crud->checkUserSession("role", array("admin", "author", "editor"))) {
                                            echo "Welcome ".$pdo_crud->getUserSession("userName");
                                            echo $pdo_crud->dbTable("fisherfolks")->render();
                                        }
                                        else{
                                        echo "You don't have sufficient permission to access this page.";
                                        }
                                    } else {
                                        echo "You are not allowed to access this page. Please login to access page";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        <!-- </div> -->

        
        <!-- PHP brush scripts-->
        <script src="assets/js/shCore.js"></script>
        <script src="assets/js/shBrushPhp.js"></script>
    </body>
</html>