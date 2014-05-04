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
            $states = States::getStates();
            $formInput = new MyForm();
            
            if ($formInput->isPostRequest()){
                
                echo "Full Name: ",$formInput->getFullname(),"<br />";
                echo "State: ",$formInput->getState(),"<br />";
                echo "Post Date: ",$formInput->getDate(),"<br />";                
                echo "Comments: ",$formInput->getComments(),"<br />";
                
            }
            
        ?>
        
        <form name="mainform" action="#" method="post">            
            Full Name: <input type="text" name="fullname" value="<?php echo $formInput->getFullname(); ?>"/> <br />
            State: <select name="state" >
                
                <?php
                
                foreach($states as $stateid=>$state){
                    if( $formInput->getState()=== $state ){
                        echo'<option value="',$state,'" selected = "selected">',$state,'</option>';
                    }  else {
                      echo'<option value="',$state,'">',$state,'</option>';  
                    }

                }
                
                ?>
                </select><br />
            Comments:<textarea name="comments" ><?php echo $formInput->getComments(); ?></textarea> <br />
            <input type="submit" value="Submit" />                        
        </form>
    </body>
</html>
