<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo Config::PAGE_TITLE; ?></title>
    </head>
    <body>
        <?php
        // put your code here
        
        /*
         * PDO is a built-in to PHP, you can use it to connect to a Database
         */
        $db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);
        
        /*
         * Once you are connected to can prepare a statement.
         */
       $dbs = $db->prepare('select * from signup');
       
       /*
        * after a statement is prepared you can execute or commit that statement.
        */
       $dbs->execute();
       
       /*
        * once the query is committed/executed you can fetch back the results.
        * in this case there is more than one result so we will fetch them all
        * the fetchall function takes a param, in this case we want the results to
        * come back as an associative array (key=>value) so it's easier to access
        * the data.  Note that this is a multidimensional array
        */
       $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
       
       
       /*
        * All results should return back as an array, otherwise the query failed
        * since this is a multidimensional array, the $key is the index of the array
        * and the value is the associative array with the key values being a column names
        * of the database table you selected
        */
       echo '<table border="1">'; 
       echo '<tr><th>Index</th><th>ID</th><th>Email</th>';
       echo '<th>username</th><th>password</th></tr>';
       foreach ($results as $key => $value) {
           echo '<tr>';
            echo '<td>', $key ,'</td>';
            echo '<td>', $value['id'] ,'</td>';
            echo '<td>', $value['email'] ,'</td>';
            echo '<td>', $value['username'] ,'</td>';
            echo '<td>', $value['password'] ,'</td>';          
           echo '</tr>';
       }
       echo '</table>';
       
       
         // print_r($results);      
          /*      
                
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
        */
        ?>
    </body>
</html>
