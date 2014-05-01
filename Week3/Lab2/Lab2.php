<!DOCTYPE html>
<!--
Using PHP try to see how you would solve the issue of putting an error class
into each input.  I created the class for you, and the solution is solved
but in the refactoring phase there has to be a better way.  Also make sure
to populate the post values back into the field. 

Goals:
1.  Re-populate post values into the input fields.
2.  Put the "inputerror" class into the input form fields if 
    they are not populated on a post.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .error {
                border: 1px solid red;
                padding: 0.2em;
                color: red;
            }
            
            .inputerror {border: 1px solid red;}
        </style>
    </head>
    <body>
        <?php
        // put your code here
        
            if ( !empty($_POST)) {
                
                $errorMessages = array(
                  "email" => 'email is invalid',  
                  "username" => 'username is not found',  
                  "password" => 'password does not work',  
                );
                
                $email = filter_input(INPUT_POST, 'email');
                $username = filter_input(INPUT_POST, 'username');
                $password = filter_input(INPUT_POST, 'password');


                if (!empty($email)) {
                    $errorMessages['email'] = '';
                } 
                if (!empty($username)) {
                    $errorMessages['username'] = '';
                } 
                if (!empty($password)) {
                    $errorMessages['password'] = '';
                }             
             }
        ?>
        
        
    <h2> My Form Demo </h2>
       <form name="mainform" action="#" method="post">            
            Email: <input type="text" name="email" value="<?php echo $email; ?>" /> <br />           
            Username: <input type="text" name="username" value="<?php echo $username; ?>" /> <br />          
            Password: <input type="password" name="password" value="" /> <br />           
            <input type="submit" value="Submit" />                        
        </form>
    </body>
</html>