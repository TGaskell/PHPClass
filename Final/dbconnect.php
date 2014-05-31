<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
            
        /*
         * One a database class instanced is created you can call the function
         * to get the Dabase Object.
         * PDO is a PHP built-in object that allows you to connect to many different 
         * databases, such as MySQL, Oracle, Microsoft SQL, etc.
         * All the work of security and maintenance is already done
         * 
         */
            $dbo = new DB(); // database object            
            $db = $dbo->getDB();
            
            $username = 'test';
            $password = sha1('password');
            
            if ( NULL != $db ) {
                $statement = $db->prepare('select * from login where username = :user and password = :password limit 1');
                $statement->bindParam(':user', $email, PDO::PARAM_STR);
                $statement->bindParam(':password', $password, PDO::PARAM_STR);
                $statement->execute();
                $result = $statement->fetch(PDO::FETCH_ASSOC);
                if ( is_array($result) && array_key_exists("username", $result) ) { 
                        $dbo->closeDB();
                        print_r($result);                     
                }
            }
            $dbo->closeDB();
            
        
        ?>
        
        
    </body>
</html>
