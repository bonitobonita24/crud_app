<?php require_once "script/pdocrud.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="PDO Database abstraction, PDO Crud, PDOModel, PHP SQlite helper class, PHP Mysql database abstraction, PDO Transactions, no query PDO, PDO helper class, database management using PDO, Mysql crud, multi table join, PHP Sqlite CRUD" name="keyword" />
        <meta content="PDOModel is a Database abstraction and helper class for PHP and Mysql, PDSql, SQLite database operations. It provides various simple functions to perform database related operation like insert, delete, update, selection without writing any queries." name="description" />
        <!-- Page specific CSS to improve design of the form. This script is not about writing css to create beautiful forms, it is generating the form from
        database directly with minimal lines of code.-->
        <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="assets/css/form-elements.css" rel="stylesheet"/>
        <link href="assets/css/signup-form.css" rel="stylesheet"/>
        <link href="assets/css/style.css" rel="stylesheet"/>
        
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
        
        <title>PDOCrud -  Registration form</title>

    </head>
    <body>
        <header>
            <div class="heading">
                <a href="#" class="PDOCrud-logo"> <h3> PDOCrud - Registration form demo </h3></a>
            </div>
            <div class="nav form-buttons">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <button type="button" class="btn btn-shadow btn-primary" data-toggle="modal" data-target="#code">
                            View Code
                        </button>
                    </li>                   
                </ul>
            </div>
        </header>
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>PDOCrud</strong> Login &amp; Register Forms</h1>
                            <div class="description">
                                <p>
                                    Generate this type of forms directly from DB with only few lines of code.... with few lines of css..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row main-form">
                       
                    
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>

                            
                        <div class="col-sm-5 form-box">
                            <div class="form-top">
                                <?php
                                
                                $pdocrud = new PDOCrud(true);
                                $pdocrud->formStaticFields("personalinfo", "html", "<div class='form-top-left'><h3>Sign up now</h3><p>Fill in the form below to get instant access:</p></div>"); // Add static field
                                $pdocrud->formStaticFields("personalinfo1", "html", "<div class='form-top-right'><i class='fa fa-pencil'></i></div>"); // Add static field
                                
                                $pdocrud->fieldDisplayOrder(array("personalinfo","personalinfo1"));
                                $pdocrud->formFields(array("personalinfo","personalinfo1","first_name", "last_name", "email","hobbies","about_yourself"));
                                
                                $pdocrud->fieldAttributes("first_name", array("placeholder"=>"First name"));//add placeholder attribute
                                $pdocrud->fieldAttributes("last_name", array("placeholder"=>"Last name"));//add placeholder attribute
                                $pdocrud->fieldAttributes("email", array("placeholder"=>"Email"));//add placeholder attribute
                                $pdocrud->fieldAttributes("about_yourself", array("placeholder"=>"About Your self"));//add placeholder attribute
                                
                                $pdocrud->fieldTypes("hobbies","multiselect");// add multiselect field
                                $pdocrud->fieldDataBinding("hobbies", array("games"=>"Games","drama"=>"Drama","art"=>"Art"), "", "","array");// multiselect options                        
                                
                                $pdocrud->fieldHideLable("first_name");// Hide label
                                $pdocrud->fieldHideLable("last_name");// Hide label
                                $pdocrud->fieldHideLable("email");// Hide label
                                $pdocrud->fieldHideLable("about_yourself");// Hide label
                                
                                $pdocrud->buttonHide("cancel");// Hide button
                                $pdocrud->setLangData("save", "Sign me up!"); // Change button text
                                
                                $pdocrud->fieldCssClass("first_name", array("form-first-name")); // add class 
                                $pdocrud->fieldCssClass("last_name", array("form-first-name")); // add class 
                                $pdocrud->fieldCssClass("email", array("form-first-name")); // add class 
                                $pdocrud->fieldCssClass("about_yourself", array("form-first-name")); // add class 
                                
                                
                                $pdocrud->enqueueCss("font-awesome.min", "http://localhost/formdoid/demo/moreforms/form1/assets/font-awesome/css/font-awesome.min.css");                    
                                $pdocrud->enqueueCss("form-elements", "http://localhost/formdoid/demo/moreforms/form1/assets/css/form-elements.css");
                                $pdocrud->enqueueCss("style", "http://localhost/formdoid/demo/moreforms/form1/assets/css/style.css");
                                
                                echo $pdocrud->dbTable("login")->render("insertform");
                                
                                ?>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 
        <!-- PHP brush scripts-->
        <script src="assets/js/shCore.js"></script>
        <script src="assets/js/shBrushPhp.js"></script>
    </body>
</html>