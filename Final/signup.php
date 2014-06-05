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
        <title>SaaS Project - Sign-up</title>
         <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
          <?php
        // put your code here
  
         $createSignup = new Signup;
  
         $dataModel = new SignupModel(filter_input_array(INPUT_POST));
         
         if ( Util::isPostRequest() ) {
            
              if ( $id = $createSignup->save($dataModel)){
                var_dump($id);
                Util::redirect('login');
               }
           }       
          
         ?>      
        
        <h1 id="logo"><span>&#x2728;</span>SaaS Project</h1>
        
        <fieldset>
            <legend>Signup</legend>
         <p> Already a member, <a href="login.php">Login</a></p>
         <form name="mainform" action="#" method="post">
            
            <label>Web Site:</label> <input type="text" name="website" maxlength="30" value="<?php echo $dataModel->getWebsite(); ?>" /><span class="websitetaken"></span> <br />
            <label>Email:</label> <input type="text" name="email" value="<?php echo $dataModel->getEmail(); ?>" /> <br />
            <label>Password:</label> <input type="password" name="password" value="<?php echo $dataModel->getPassword(); ?>" /> <br />
               
            <input type="submit" value="Submit" />
                        
        </form>
        </fieldset>
        
        <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>
