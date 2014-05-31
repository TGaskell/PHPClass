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
            $msg = '';
            if ( ! isset($_SESSION['validcode']) ) {
                $_SESSION['validcode'] = false;   
            }
            if ( Util::isPostRequest() ) {
                $checkcode = new Passcode();

                if ( $checkcode->isValidPasscode() ) {
                    $_SESSION['validcode'] = true;
                    Util::redirect('custompage');                   
                } else {                    
                    $msg = 'Password is not valid.';
                }
            }

            if ( !empty($msg)) {
                echo '<p>', $msg, '</p>';
            }
        ?>
        
        <fieldset>
            <legend>Login</legend>
            <p> Not a member, <a href="signup.php">Signup</a></p>

                        
            <form name="mainform" action="#" method="post">

                <label>Email:</label> <input type="text" name="email" /> <br />
                <label>Password:</label> <input type="password" name="password" /> <br />

                <input type="submit" value="Submit" />

            </form>
        </fieldset>
        
        
    </body>
</html>
