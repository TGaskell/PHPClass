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
        $msg = "";
        
        if ( Util::isPostRequest()){
            $checkcode = new Passcode();
            if ( $checkcode->isValidPasscode()){
                
            }else{
                $msg = 'Passcode is not valid.';
            }
        }
        
        if (!empty($msg)){
            
            echo '<p>',$msg,'<p>';
        }
        
        ?>
        
        <form name="mainform" action="#" method="post">
            <fieldset>
                <legend>Data Form:</legend>
                <label for="code">Passcode</label> 
                <input type="password" name="passcode" id="code" />                
                <input type="submit" value="Submit" />
            </fieldset>
            
        </form>
        
    </body>
</html>
