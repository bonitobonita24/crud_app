﻿Installation instruction
1.	Copy script folder in your application
2.	Open script/config/config.php file
3.	Enter url till script folder in config file e.g. $config["script_url"] = "http://yourdomain.com/path-till-script-folder/"
4.	Enter database settings (hostname, dbname, username and pwd etc) 
5.	In your application, include the following file 
        require_once "script/ pdocrud.php";
6.	Now you can create object of pdocrud class and run various function to generate crud table.



Please check documentation and demo folder for more details about how to use various function.

Demo folder contains demo database sql file and also some forms.

Each function reference is given in function file.


Description about folders

Script - It contains main script code. 
Demo - It contains some example forms
Documentation - It contains all documentation related codes


Version 1.1- released
Initial release

Version 1.2- released
Fixed small bug for join statement
Added extra skins
Added french language
Added some more js plugins

Version 1.3- released
Added option of url in column formatting
PDOModel class support is added
Fixed bug related to pagination
Added more examples


Version 1.4- released
Added column switch operation
Added option to show left join data in view also
Many demo forms added
More plugins added
fixed bug related to join operation


Version 1.5- released
Recaptcha support
Option to add hidden fields to save against specific columns
Added option to add custom action buttons
fixed bug of select action hook data

Version 1.6 - released
Added more plugins
Image upload path will be added in the saved image url
Send form data on email - various template customization options

version 1.7 - released
Redirect to another url after form submission
Show/hide fields with conditional logic (this works with database fields only)
Added more options to format table columns (Sum, divide, merge etc)
bug fix - columns removed function is now working with the print function

version 1.8 - released
Advanced filter option is added
Added Option to specify col data from another table's column or array
Added option to Open insert,edit form directly in popup on button click (direct popup form was already there)
Added new column action url function to redirect to another page with primary key
Added more options to format table columns (date, string, number formatting)
Added more parameter options for jQuery date picker
Bug fix - Fixed a sqlite related bug in PDOModel part


Version 1.9 - released
Added crud table bulk data update operation to change values directly in crud table
Added option to import bulk data from csv, xml and excel file
Added function csvToArray(), excelToArray() and xmlToArray() to get these files data in array format
Added sumPerPage & sumTotal functions
Added new form elements e.g. slider, range picker etc. currently, it works one element per page
Added search operator to search using 'like', '>', '>=', '<','=<' etc, with default '=' operation.
Added one page template to show Form and Crud Table on single page.
Added various image functions (crop, resize, thumbnail, watermark, flip)

Version 2.0 
Add nested table and nested table in tabs feature
Added plugin ckeditor

Version 2.1 
Add more options to format table columns
fixed small bug related to responsive design
fixed bug related to sqlite

Version 2.2
Added sql server support ( >= 2012)
Added graphs/charts using direct code and plugin both 
Added function to set file upload/download folder instead of config
Added more plugins
Fixed small bug of inline edit position when checkbox column and id column is hidden
Fixed small bug related to sqlite
Fixed small bug related to php validation

version 2.3
Added Tags type field (fieldtype = tags)
Improved login management further by adding redirection
only after successful login etc.
Added Event calendar management javascript plugin
Added button for delete and edit in view, also option 
to hide/show all these buttons
Added extra option to specify the columns for the view
form also.
Added a new portfolio section to auto-generate portfolio 
like format directly from database
Extra Option for whether to delete the join table data or not

bugs
fixed small bug related to table column formatting.
fixed small bug related to search.


Version 2.4
Added direct function for forgot password
Added Trigger insert/update/delete operation in other table based on the main table operation
Added Left side action buttons display
Added jQuery data table plugin to display sql render data more efficiently
Added date range/time range/ datetime range search by setting search column type i.e. now you can pass from and to dates.
Changes in sql render function - removed pagination/records per page/totalrecords display in default display
Added more callback events in insert and update (after_insert and after_update)

bug fixed
Removed double slashes from the url addition
fixed bug of sql render function for print/export

Version 2.5
Added View Form formmatting options similar to tableColFormatting
Added option to upload multiple files
Added new file control to select and edit files. Edit form contains file url also.
Added formula function to modify fields before insert/update. Earlier this can be
done by using callback functions.
Added null value of date support.
Added french translations - provided by user "wazkero"
Improved validation

Bug Fixed
Resolved bug for pgsql


Version 2.6 - (changes in config and css file)
Improved overall view section
Added tabs and multi table relation in view forms
Examples: 
http://pdocrud.com/demo/pages/view-tabs
http://pdocrud.com/demo/pages/view-multi-table-relation-tabs

Added sidebar option in edit/view forms similar to profile
page design in many admin themes
http://pdocrud.com/demo/pages/add-sidebar

Improved filters - now you can also set like operator similar to search
http://pdocrud.com/demo/pages/filters

Option to hide form buttons
http://pdocrud.com/demo/pages/hide-button

Added option to change label(Column heading) of export/print
http://pdocrud.com/demo/pages/export-print-heading

BugFixed
Excel export not working properly with latest version of PHP,
now working properly after updating the excel library
Responsive issue fixed - make sure to clear your cache as there are changes
in css


Version 2.7 - (changes in config file)
Added searchOperator to set the search operator directly in config.
Default value is "like".
BugFixed
Filter bug resolved.
Export with filter resolved.


Version 3.0 - (changes in config file) 
Please take complete backup before upgrade.
Major change - You need to enter purchase code in config file. You can find purchase code details here https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-
If any one has having issue in entering the purchase details, please contact us via email using profile page.
Added pure bootstrap template that can be customized further as per requirement. (demo http://pdocrud.com/demo/pages/template-selection )
Added option to add action buttons on top (along with add button). (demo http://pdocrud.com/demo/pages/action-button-top )
Added year wise, month wise, day wise report buttons to generate the table data based on the date range (demo http://pdocrud.com/demo/pages/date-range-report )
You can pass array of columns in order by (dbOrderBy function) (demo http://pdocrud.com/demo/pages/order-by)
Reorder column display order (demo http://pdocrud.com/demo/pages/column-reorder) - code contribution by user:
Bug Resolved:
One page template page issue of multiple buttons resolved.
Search for all columns using where condition was ignoring where condition. It is resolved.


Version 3.1 - (changes in config file) 
Added option to map database field to static field (demo http://pdocrud.com/demo/pages/field-database-mapping)
Added Enum field to auto convert in select field (demo http://pdocrud.com/demo/pages/enum-field)
Added subtraction and multiplication to add new table column dynamically based on two columns value (http://pdocrud.com/demo/pages/table-col-add-col)
Improved inner join function

BugFixed
Fixed warning message for count due to changes in php version 7.2

Version 3.2 - (changes in config file) (make sure to clear cache)
Added complete user login management functionality to manage user logins easily (demo http://pdocrud.com/demo/pages/user-login-management)
Added clone row option to insert rows faster (demo http://pdocrud.com/demo/pages/clone-rows)
Added - Max. and min. date allowed to choose in date picker by setting value in config file
Added many callback functions

Bug Fixed
Enqueue Button Action multiple url action fixed.

Version 3.3 - (changes in config file)
Added new function editFormFields to allow separate form fields for edit and insert form (demo http://pdocrud.com/demo/pages/form-fields)
Added function to check duplicate record before insert (demo http://pdocrud.com/demo/pages/check-duplicate-before-insert)
Added bootstrap4 template - please note that our admin theme has bootstrap3 so it won't work with admin theme.
Increased size of maxSize parameter 

Bug Fixed
Fixed multi table relation auto insert of key
Added config parameter "preventXSS" to prevent xss attack if set true. 

Version 3.4 
Added export database function (demo http://pdocrud.com/demo/pages/export-db)
Added btn switch to trigger demo (demo http://pdocrud.com/demo/pages/btn-switch-with-trigger)

Bug Fixed 
Fixed lost password bug

Version 3.5
Added callback function for delete
Fixed a bug related to records per page

Version 3.5.2
Fixed bug related to the set search columns (demo http://pdocrud.com/demo/pages/set-search-cols)

Version 3.6 (Changes in template files, language file, config and js file, so make sure to clear your cache)
Added Google Chart feature with various chart types (demo http://pdocrud.com/demo/pages/google-chart)
CRUD Bulk update now supports more html elements i.e. select, textarea etc fields (demo http://pdocrud.com/demo/pages/crud-table-bulk-update)
Added Autosuggest feature for search box (demo http://pdocrud.com/demo/pages/autosuggestion)
Added reset form option in config to reset the form fields after submission, similar to "insert and new" (demo http://pdocrud.com/demo/pages/reset-form)
Added quick view of data on table/grid row click (demo http://pdocrud.com/demo/pages/quick-table-view)
Added field types  "range" and "rateit" and added column type "rateit" (demo http://pdocrud.com/demo/pages/plugin-rateit)
Added option to set encryption method for input type='password' (demo http://pdocrud.com/demo/pages/password-encryption)
Added settings for placeholder to show by default for input type='text' if set true (demo http://pdocrud.com/demo/pages/placeholder)
Added function to set records per page list (demo http://pdocrud.com/demo/pages/large-table-data)
Option to hide/show "Save and back button" and "back" button in settings page
Design Improvements

Added plugin bootstrap tags input (demo http://pdocrud.com/demo/pages/plugin-bootstrap-tag-input)
Added plugin bootstrap password strength (demo http://pdocrud.com/demo/pages/plugin-pwstrength)
Added plugin vertical timeline (demo http://pdocrud.com/demo/pages/plugin-vertical-timeline)
Added plugin rate it (demo http://pdocrud.com/demo/pages/plugin-rateit)
Added plugin input mask (demo http://pdocrud.com/demo/pages/plugin-input-mask)

Fixed bugs
1. Fixed bug related to inner join 

Version 3.7 (Changes in template file, config file and js file, so make sure to clear your cache)
Added option to select whether to load the template js and css files or not (demo http://pdocrud.com/demo/pages/loading-template-js-css)
Added single table cell edit feature similar to excel cell editing (demo http://pdocrud.com/demo/pages/table-cell-editing)
Added plugin summernote wysisyg editor (demo http://pdocrud.com/demo/pages/plugin-summernote)
Fixed bugs
1. Fixed bug related to select form 

Version 3.8 
1. Fixed bug related to multi select

Version 3.9
1. Fixed a small bug related to delete selected rows with popup.


Version 4.0 (Changes in template file, config file and js file, so make sure to take backup and clear your cache)
1. Added Related data feature - If your main table contains the fields related to other table, You can get dropdown list and data directly from other table (demo http://pdocrud.com/demo/pages/related-data ) 
2. fielddatabinding() - You can now pass valid select query to generate the data of fields directly by running queries.(demo http://pdocrud.com/demo/pages/field-data-binding ) 
3. fielddatabinding() - You can now combine two or more columns in the display value.(demo http://pdocrud.com/demo/pages/field-data-binding ) 
4. Added option to auto convert "SET" data type of mysql in multi select field (demo http://pdocrud.com/demo/pages/SET-Column-type )
5. On hover effect of grid rows(demo http://pdocrud.com/demo/pages/on-hover )
6. Change in setSkin function, now you can apply multiple skins together by passing it as an array
7. Added image display option in the edit form for file upload control 
8. Added few more example codes to make code more easy to understand.

Version 4.1 (Changes in config file and js file, make sure to take backup and clear your cache)
1. Fixed a small bug related to email with insert data.
2. Fixed a small bug related to related data.

Version 4.2 (make sure to take backup and clear your cache)
1. Added new way to perform complex where condition (demo http://pdocrud.com/demo/pages/where-condition )
2. Added where condition and order by in fieldDataBinding function. (demo http://pdocrud.com/demo/pages/field-data-binding )
3. Auto set of key field in multi table relation (nested table). (demo http://pdocrud.com/demo/pages/multi-table-relation )

Version 4.3 (make sure to take backup and clear your cache)
1. Ajax based calculation of field (demo http://pdocrud.com/demo/pages/ajax-actions )
2. Calculate field value from other fields dynamically (demo http://pdocrud.com/demo/pages/calculate-field-based-on-another-field-dynamically )
3. Added feature to completely hide the field with formFieldValue (demo https://pdocrud.com/demo/pages/set-field-value)
4. Added whereby and order by in related data function. (demo https://pdocrud.com/demo/pages/related-data )
5. Added option to set the field  having default database value as 'not required' 
(demo https://pdocrud.com/demo/pages/field-not-required)
6. Added tablheading and operation text in "view" operation
7. Added search on enter key press on search textbox with setting option


Fixed a bug related to PDOModel
Fixed a bug related to Google graph sql option

Version 4.4

1. Added bootstrap 4 css classes in bootstrap 4 template
2. Added Subquery option to generate dynamic columns (demo https://pdocrud.com/demo/pages/subselect-sql)
3. Added field animation option (demo https://pdocrud.com/demo/pages/plugin-animate)
4. Added option to get tcpdf object 
5. Added new field type, jquery spinner as field type  = "spinner"

Fixed a bug related to multitable relation

Version 4.5
1. Calculate invoice feature (demo https://pdocrud.com/demo/pages/dynamic-invoice)
2. Added javascript based dynamic field calculation feature (demo https://pdocrud.com/demo/pages/dynamic-js-actions)
3. Added related data feature for view also
4. Added "percentage" option in tableColAddition() 

Version 4.6
1. Fixed a bug related to relation


Version 4.7
1. Added new plugin with feature of show/hide password icon (demo https://pdocrud.com/demo/pages/plugin-password)
2. Added new feature of "enable" and "disable" in field condition logic

Fixed a bug related to the one page 
Fixed a bug related to the field condition logic

Version 4.8
 Added new plugin emojionarea (demo https://pdocrud.com/demo/pages/plugin-emojionearea)
 Added new functional documentation
 Fixed a bug related to the related data