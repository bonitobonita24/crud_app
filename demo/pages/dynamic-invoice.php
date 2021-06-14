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
                    Dynamic Invoice - beta version
                    <small>Create and manage invoices directly from database (Added in version 4.5) </small>
                </h1>
                <p>
                    Now, pdocrud support invoice generation directly from database. A new invoice layout
                    is added to support the generation of invoice easily. Currently it is in beta release.
                    We will release full featured invoice generation in next version. Please check the 
                    comments of the code to understand how it works. 
                </p>
                <p> PDF generation helps you automate various tasks including automatic calculations
                    of various totals, generation of pdf in various invoice format. You will need 
                    <a href="https://codecanyon.net/item/xinvoice-sales-purchase-order-invoices-/22831714">xInvoice - Generate beautifully designed invoices dynamically </a> in order to
                    generate invoice pdf. You need to put xinvoice script in the library folder. 
                </p>
                <p>
                    Database used for this demo contains 5 tables. You can design the database as
                    you want.
                    <ul>
                        <li> Client table - Contains the information about client you are sending invoice </li>
                        <li> Company table - Contains the information about your company </li>
                        <li> Product table - Contains the information about the products </li>
                        <li> Order table - It contains the main details about the order. We will save main details like order number, date, total amount etc in this table </li>
                        <li> Order item table - It contains the information about items of order, it will be joined to main order table using order_id primary of main order table.</li>
                    </ul>
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                $pdocrud = new PDOCrud();
                // set header fields of invoice. These fields basically will be shown before the
                // items table. Rest fields will be shown after the items table
                $headerFields = array("order_number", "order_date","company_id","client_id", "order_due_date");
                $pdocrud->setInvoiceDetails($headerFields);

                // This will add the print invoice pdf button. Please note that you need to 
                // buy xinvoice script to use this operation.
                $text = '<i class="fa fa-external-link" aria-hidden="true"></i>';
                $pdocrud->enqueueBtnActions("printpdf", "javascript:;", "printpdf", $text);

                // This is the sql that will be used to create the invoice pdf. You can learn 
                // more about the how to create this sql here 
                // http://xinvoice.biz/demo/pages/database-invoice-creation
                $sql = "SELECT ot.order_number as invoice__no, ot.order_date as invoice__date, ot.order_due_date as invoice__due_date, ot.shipping as total__shipping, ot.tax as total__tax,ot.discount as total__discount, ot.order_total  as total_grandtotal, ot.payment_method as payment__method1, co.company_name as from__name,co.address1 as from__address1, co.address2 as from_address2, co.city as from__city, co.country as from__country, co.state as from__state,co.email as from__email, cl.client_name as to__name, cl.address1 as to__address1, cl.address2 as to__address2, cl.city as to__city, cl.state as to__state, cl.country as to_country, cl.email as to__email, oi.item_name as item__name, oi.item_desc as item__desc, oi.item_qty as item__qty, oi.item_qty as item__qty, oi.item_rate as item__rate, oi.item_total as item__total FROM x_ordertable as ot INNER JOIN x_order_items as oi on ot.order_id = oi.order_id INNER JOIN x_company as co on ot.company_id = co.company_id INNER JOIN x_clients as cl on ot.client_id = cl.client_id where ot.order_id = {order_id}";
                 
                //set invoice complete data
                $pdocrud->invoicePrint($sql);

                // set javascript based calculations to dynamically calculation fields totals
                $pdocrud->setJsActions("order_total", "{order_sub_total} + {tax} + {shipping} - {discount}","change");

                // this is also dynamic calculation, You need to set the column 
                $pdocrud->setLeftJoinJsActions("col5", "col3 * col4","change", array("col3"=>"input",
                    "col4" => "input"));


                // below functions are not required for invoice generation, you know these functions
                // already. Since we are using company table and client table, we can easily manage 
                // this using our related table function.
                $pdocrud->relatedData('company_id','x_company','company_id',array("company_name","address1", "city" ,"state", "country"));
                $pdocrud->relatedData('client_id','x_clients','client_id',array("client_name","address1", "city" ,"state", "country"));                
                // Order table and order items table needs to be joined.
                $pdocrud->joinTable("x_order_items", "x_order_items.order_id = x_ordertable.order_id", "LEFT JOIN");
                // lets convert the item table to dropdown and get the data from products table.
                $pdocrud->fieldTypes("item_name", "select");
                $pdocrud->fieldDataBinding("item_name", "x_products", "product_id", array("product_name"), "db", "-", array(), array("product_name"));
                                
                echo $pdocrud->dbTable("x_ordertable")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                // set header fields of invoice. These fields basically will be shown before the
                // items table. Rest fields will be shown after the items table
                $headerFields = array("order_number", "order_date","company_id","client_id", "order_due_date");
                $pdocrud->setInvoiceDetails($headerFields);

                // This will add the print invoice pdf button. Please note that you need to 
                // buy xinvoice script to use this operation.
                $text = '<i class="fa fa-external-link" aria-hidden="true"></i>';
                $pdocrud->enqueueBtnActions("printpdf", "javascript:;", "printpdf", $text);

                // This is the sql that will be used to create the invoice pdf. You can learn 
                // more about the how to create this sql here 
                // http://xinvoice.biz/demo/pages/database-invoice-creation
                $sql = "SELECT ot.order_number as invoice__no, ot.order_date as invoice__date, ot.order_due_date as invoice__due_date, ot.shipping as total__shipping, ot.tax as total__tax,ot.discount as total__discount, ot.order_total  as total_grandtotal, ot.payment_method as payment__method1, co.company_name as from__name,co.address1 as from__address1, co.address2 as from_address2, co.city as from__city, co.country as from__country, co.state as from__state,co.email as from__email, cl.client_name as to__name, cl.address1 as to__address1, cl.address2 as to__address2, cl.city as to__city, cl.state as to__state, cl.country as to_country, cl.email as to__email, oi.item_name as item__name, oi.item_desc as item__desc, oi.item_qty as item__qty, oi.item_qty as item__qty, oi.item_rate as item__rate, oi.item_total as item__total FROM x_ordertable as ot INNER JOIN x_order_items as oi on ot.order_id = oi.order_id INNER JOIN x_company as co on ot.company_id = co.company_id INNER JOIN x_clients as cl on ot.client_id = cl.client_id where ot.order_id = {order_id}";
                 
                //set invoice complete data
                $pdocrud->invoicePrint($sql);

                // set javascript based calculations to dynamically calculation fields totals
                $pdocrud->setJsActions("order_total", "{order_sub_total} + {tax} + {shipping} - {discount}","change");

                // this is also dynamic calculation, You need to set the column 
                $pdocrud->setLeftJoinJsActions("col5", "col3 * col4","change", array("col3"=>"input",
                    "col4" => "input"));


                // below functions are not required for invoice generation, you know these functions
                // already. Since we are using company table and client table, we can easily manage 
                // this using our related table function.
                $pdocrud->relatedData('company_id','x_company','company_id',array("company_name","address1", "city" ,"state", "country"));
                $pdocrud->relatedData('client_id','x_clients','client_id',array("client_name","address1", "city" ,"state", "country"));                
                // Order table and order items table needs to be joined.
                $pdocrud->joinTable("x_order_items", "x_order_items.order_id = x_ordertable.order_id", "LEFT JOIN");
                // lets convert the item table to dropdown and get the data from products table.
                $pdocrud->fieldTypes("item_name", "select");
                $pdocrud->fieldDataBinding("item_name", "x_products", "product_id", array("product_name"), "db", "-", array(), array("product_name"));
                                
                echo $pdocrud->dbTable("x_ordertable")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>