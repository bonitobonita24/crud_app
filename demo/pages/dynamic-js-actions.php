<?php require_once '../../script/pdocrud.php'; ?>
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
                    Dynamic javascript action
                    <small>Apply simple math functions to calculate fields using js (Added in version 4.5) </small>
                </h1>
                <p>
                    You can apply simple math functions to calculate fields using javascript. For example, if you want to get sum of two or more fields, or get sum of field with
                    multiplication. 
                </p>
                <p>
                   In the below example, we are getting sum of three fields and substracting one 
                   field on change event. If you don't specify the $eventFields argument then
                   it will automatically apply change event on each of the formula fields so it
                   will calculate on the change on the all these four fields.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                $pdocrud = new PDOCrud();

                 /**
                 * Set/Call js actions for the form elements on some js event
                 * @param   string   $element                     Main element, On which element, calculated value should be displayed

                 * @param   string   $formula                     Formula to be applied
                 * @param   string   $event                       Javascript event, this will be applied on formula fields  if no event fields passed
                 * @param   string   $eventFields                 Event fields if any
                 * return   object                                Object of class
                 */
                $pdocrud->setJsActions("order_total", "{order_sub_total} + {tax} + {shipping} - {discount}","change");

                echo $pdocrud->dbTable("x_ordertable")->render("insertform");
                                </pre>
                            </section>  
                    </div>
                </div>  
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();

                 /**
                 * Set/Call js actions for the form elements on some js event
                 * @param   string   $element                     Main element, On which element, calculated value should be displayed

                 * @param   string   $formula                     Formula to be applied
                 * @param   string   $event                       Javascript event, this will be applied on formula fields  if no event fields passed
                 * @param   string   $eventFields                 Event fields if any
                 * return   object                                Object of class
                 */
                $pdocrud->setJsActions("order_total", "{order_sub_total} + {tax} + {shipping} - {discount}","change");

                echo $pdocrud->dbTable("x_ordertable")->render("insertform");
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>