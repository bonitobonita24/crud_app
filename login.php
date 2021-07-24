<?php require_once "script/pdocrud.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="Boolean Solutions Enterprises Fisherfolk Registration System" name="keywords" />
        
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

        <title>Booleans Solutions - Fisherfolk Registration | Login</title>

    </head>
    <body>
        <header>
            <div class="heading">
                <a href="#" class="PDOCrud-logo"> <h3> Booleans Solutions - Fisherfolk Registration </h3></a>
            </div>
            <div class="nav form-buttons">
                <!-- <ul class="nav navbar-nav navbar-right">
                    <li>
                        <button type="button" class="btn btn-shadow btn-primary" data-toggle="modal" data-target="#code">
                            View Code
                        </button>
                    </li>                   
                </ul> -->
            </div>
        </header>
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row main-form">
                        <div class="col-sm-12">
                            <div class="col-sm-8 col-sm-offset-2 form-box">
                                <div class="form-head">
                                    <div class="form-head-left">
                                        <h3>Login</h3>
                                    </div>
                                    <div class="form-head-right">
                                        <i class="fa fa-pencil"></i>
                                    </div> 
                                </div>
                                <div class="form-content">
                                   
                                    <?php
                                    //Login page code
                                    $pdo_crud = new PDOCrud();
                                    // (Optional step) before checking the login data if you want to peform any operation like password encryption etc/(optional)
                                    //  $pdo_crud->addCallback("before_select", "beforeloginCallback");
                                     //only required fields to be display on form
                                     $pdo_crud->formFields(array("email", "password"));
                                     //set session variables - 1st parameter is the session variable name and 2nd is value to be matched in database table
                                     $pdo_crud->setUserSession("userName", "user_name");
                                     //You can set any no. of session variables
                                     $pdo_crud->setUserSession("userId", "user_id");
                                     
                                     $pdo_crud->setUserSession("role", "role");
                                     
                                    //  $pdo_crud->setUserSession("lastLoginTime", date("now"));
                                    $pdo_crud->setUserSession("last_login_date", date("now"));
                                    ///redirect to some page after login (optional)-2nd parameter specify whether to redirect or not if no records found
                                     $pdo_crud->formRedirection("https://www.booleansolutionsenterprises.com/crud_app/after-login-page.php", true);
                                    // set db table to your user table and call render function with select form
                                     echo $pdo_crud->dbTable("login")->render("selectform");
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