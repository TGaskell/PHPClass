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
        <title>SaaS Project - Login</title>
         <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
                
        <h1 id="logo"><span>&#x2728;</span>SaaS Project</h1>
        
        <?php
        // put your code here
        
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            
            $password = sha1($password);
            
            if ( Util::isPostRequest() ){
            
            $db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);
        
             if ( NULL != $db ) {
                $statement = $db->prepare('select * from users where email = :email and password = :password limit 1');
                $statement->bindParam(':email', $email, PDO::PARAM_STR);
                $statement->bindParam(':password', $password, PDO::PARAM_STR);
                $statement->execute();
                $result = $statement->fetch(PDO::FETCH_ASSOC);
                if ( is_array($result) && array_key_exists("user_id", $result) ) { 
                        $_SESSION['user_id'] = $result["user_id"];
                        Util::redirect('custompage');
                        
                 }
                else {
                
                    echo "<p>Email or password is incorrect</p>";
                    $_SESSION['user_id'] = 0;
                    
                }
            }
 }
            
        ?>
        
        <fieldset>
            <legend>Login</legend>
            <p> Not a member, <a href="signup.php">Signup</a></p>

                        
            <form name="mainform" action="#" method="post">

                <label>Email:</label> <input type="text" name="email" /> <br />
                <label>Password:</label> <input type="password" name="password" id="code" /> <br />

                <input type="submit" value="Submit" />

            </form>
        </fieldset>
        
        
    </body>
</html>
