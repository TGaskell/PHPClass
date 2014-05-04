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
       //functions to add class to fields
        function ClearEmail(){
            $email = filter_input(INPUT_POST, 'email');
            $class = 'class="inputerror"';
            if(empty($email)&& empty($_POST)||!empty($email)&& !empty($_POST)){
               $class = ""; 
            }
            echo $class;
        }
        function ClearUsername(){
            $username = filter_input(INPUT_POST, 'username');
            $class = 'class="inputerror"';
            if(empty($username)&& empty($_POST)||!empty($username)&& !empty($_POST)){
               $class = ""; 
            }
            echo $class;
        }
        function ClearPassword(){
            $password = filter_input(INPUT_POST, 'password');
            $class = 'class="inputerror"';
            if(empty($password)&& empty($_POST)||!empty($password)&& !empty($_POST)){
               $class = ""; 
            }
            echo $class;
        }
        
        //function to add .error
        function Validator(){
            $email = filter_input(INPUT_POST, 'email');
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');
            
            if(!empty($_POST)){              
                $errorMessages = array(
                    "email" =>'email is invalid',
                    "username" =>'username is not found',
                    "password" => 'password does not work',
                    );
                if(!empty($email)){
                    $errorMessages['email']='';                   
                }               
                else{
                    echo '<p class="error">',$errorMessages["email"], '</p>';
                }
                 if(!empty($username)){
                    $errorMessages['username']='';
                }
                else{
                    echo '<p class="error">',$errorMessages["username"], '</p>';
                }
                 if(!empty ($password)){
                    $errorMessages['password']='';
                }
                else{
                    echo '<p class="error">',$errorMessages["password"], '</p>';
                }
            }           
        }
 
            $email = filter_input(INPUT_POST, 'email');
            $username = filter_input(INPUT_POST, 'username');
        ?>
  
        <h2>Entry Form</h2>
        <form name="mainform" action="#" method="post">
            <?php echo Validator();?>
            Email: <input type="text" name="email"<?php echo ClearEmail();?> 
                          value="<?php echo $email; ?>"/><br /> 
            
            Username: <input type="text" name="username"<?php echo ClearUsername();?>
                             value="<?php echo $username;?>"/><br /> 
                    
            Password: <input type="password" name="password"<?php echo ClearPassword();?>
                             value=""/><br /><br />
            <input type="submit" value="Submit"/>                        
        </form>
    </body>
</html>