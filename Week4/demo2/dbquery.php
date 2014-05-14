<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        //print_r($_GET);
        
        // dbquery.php?id=2  
        // dbquery.php?username=test
        
        /*
         * The code here works the same as DBtest.php
         * But notice that there is a where clause in the prepare function for the SQL query
         * You can use the colon(:) to set placeholder variables and replace them with a value
         * using the bindParam function.
         * 
         * We are getting our values using a $_GET super global built-into PHP
         * $_GET variables are passed in the url.
         * 
         * e.g.
         * URL => dbquery.php?id=2
         * PHP will set in the $_GET array
         * $_GET['id'] = 2;
         * 
         * You can access these values like you would with a $_POST
         * filter_input(INPUT_GET, 'id');
         */
        
        $id = filter_input(INPUT_GET, 'id');
        $username = filter_input(INPUT_GET, 'username');
        
        $db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);

        $dbs = $db->prepare('select * from signup where id = :id or username = :username limit 1');
        //$dbs = $db->prepare('insert into signup set email = :email, username = :username, password = :password');
        $dbs->bindParam(':id', $id, PDO::PARAM_INT);
        $dbs->bindParam(':username', $username, PDO::PARAM_STR);

        $dbs->execute();
        /*
         * Notice since we are only looking for 1 record we use the fetch function
         * not the fetchAll function.  Rather than a multidimensional array we get just
         * a plan associative array
         */
        $results = $dbs->fetch(PDO::FETCH_ASSOC);

        if ( is_array($results) && count($results) ) {
        echo '<table border="1">'; 
        echo '<tr><th>ID</th><th>Email</th>';
        echo '<th>username</th><th>password</th></tr>';

            echo '<tr>';            
             echo '<td>', $results['id'] ,'</td>';
             echo '<td>', $results['email'] ,'</td>';
             echo '<td>', $results['username'] ,'</td>';
             echo '<td>', $results['password'] ,'</td>';          
            echo '</tr>';

        echo '</table>';
        } else {
            echo '<p>No results found</p>';
        }
        ?>
    </body>
</html>
