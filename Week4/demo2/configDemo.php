<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo Config::PAGE_TITLE; ?></title>
    </head>
    <body>
        
        <?php echo '<h1>', Config::PAGE_TITLE, '</h1>'; ?>
        
        
        
        <?php
        // put your code here
        
        /*
         * A const variable type is set to a value once and cannot be changed when
         * the program is complied.  this is good to set a value you do not want changed
         * anywhere else in the script/page.
         */
        echo Config::DB_DNS;
        echo '<br />';
        echo Config::DB_USER;
        
        
        ?>
    </body>
</html>
