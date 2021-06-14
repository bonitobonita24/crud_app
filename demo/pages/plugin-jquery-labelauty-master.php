<?php include '../../script/pdocrud.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php include 'includes/topheader.php'; ?>
        <?php include 'includes/sidebar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Plugin jquery labelauty master example
                </h1>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $pdocrud->addPlugin("jquery-labelauty-master");//to add plugin      
                            $pdocrud->fieldTypes("gender", "radio");//change gender to radio button
                            $pdocrud->fieldDataBinding("gender", array("male","female"), "", "","array");//add data for radio button
                            echo $pdocrud->dbTable("users")->render("insertform");
                            echo $pdocrud->loadPluginJsCode("jquery-labelauty-master",".pdocrud-radio");//to add plugin call on input[type=text] elements
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Plugin jquery labelauty master example - PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->addPlugin("jquery-labelauty-master");//to add plugin      
                            $pdocrud->fieldTypes("gender", "radio");//change gender to radio button
                            $pdocrud->fieldDataBinding("gender", array("male","female"), "", "","array");//add data for radio button
                            echo $pdocrud->dbTable("users")->render("insertform");
                            echo $pdocrud->loadPluginJsCode("jquery-labelauty-master",".pdocrud-radio");//to add plugin call on input[type=text] elements
                            ?>
                        </div><!-- /.box-body -->
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <?php include 'includes/footer.php'; ?>   
        
</body>
</html>