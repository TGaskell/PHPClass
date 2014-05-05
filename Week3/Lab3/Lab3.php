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
         <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        // put your code here
            $signup = new Signup();   
            $signup2 = new Signup2();
              
        $errors = array();
        if ( Util::isPostRequest() ){
            
            if ( $signup2->entryIsValid() ) {
                echo '<p class="success">All fields are good</p>';
            } else {
                $errors = $signup2->getErrors();
                echo '<ul class="error">';
                foreach ($errors as $value) {
                    echo '<li>',$value,'</li>';
                }
                echo '</ul>';
            }
        }
              
        ?>
         
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Sign-up Form:</legend>
                <label for="email">E-mail:</label> 
                <input id="email" type="text" name="email" value="<?php echo $signup2->getEmail(); ?>" /> 
                <?php echo Util::getErrorMessageHTML('email', $errors); ?><br />
                
                <label for="username">Username:</label>
                <input id="username" type="text" name="username" value="<?php echo $signup2->getUsername(); ?>" />
                <?php echo Util::getErrorMessageHTML('username', $errors); ?><br /> 
                
                <label for="password">Password:</label>
                <input id="password" type="password" name="password" />            
                <?php echo Util::getErrorMessageHTML('password', $errors); ?><br />
                
                <label for="confirmpassword">Confirm Password:</label>
                <input id="confirmpassword" type="password" name="confirmpassword" />            
                <?php echo Util::getErrorMessageHTML('confirmpassword', $errors); ?><br />

                <input type="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>
