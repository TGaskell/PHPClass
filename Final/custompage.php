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
        <title>SaaS Project - Admin</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <?php
        // put your code here
                      
        if ( !isset( $_SESSION['user_id']) ) {
             $_SESSION['user_id'] = "false";
        } 
        
         $createCustompage = new Custompage();
  
         $dataModel = new CustompageModel(filter_input_array(INPUT_POST));
         
         if ( Util::isPostRequest() ) {
            
              if ( $id = $createCustompage->save($dataModel)){
                var_dump($id);
                //Util::redirect('login');
               }
           }
        ?>
        
        <h1 id="logo"><span>&#x2728;</span>SaaS Project</h1>
        
        <div id="corner"><a href="?logout=1">Logout</a></div>
        
         <fieldset>
        
        <legend>Customize your Page</legend>
                
        
        <div id="preview"> <a href="index.php?page=test" target="popup">View Page</a></div>
        
         <form name="mainform" action="#" method="post">
            
             <label> Title:</label> <input type="text" name="title" value="<?php echo $dataModel->getTitle(); ?>" /><br />            
             <label> Theme:</label> <select name="theme"> 
                 <?php 
                    $themelist = array("theme1" => 'Theme 1',
                                       "theme2"=> 'Theme 2',
                                       "theme3"=> 'Theme 3');
                    
                     foreach ($themelist as $key => $value) {
                        if ($dataModel->getTheme()=== $key){
                            echo '<option value="',$key,'" selected = "selected">',$key,'</option>';
                        }              
                     }  
                              
                 ?>
                <option value="theme1" >Theme 1</option>
                <option value="theme2" >Theme 2</option>
                <option value="theme3" >Theme 3</option>
                 </select>
             
            <br />
            
            <label> Address:</label> <input type="text" name="address" value="<?php echo $dataModel->getAddress(); ?>" /><br /> 
            <label> Phone:</label> <input type="text" name="phone" value="<?php echo $dataModel->getPhone(); ?>" /><br /> 
            <label> Email:</label> <input type="text" name="email" value="<?php echo $dataModel->getEmail(); ?>" /><br /> 
            <label> About:</label><br />
            <textarea name="about" cols="50" rows="10"  ><?php echo $dataModel->getAbout(); ?></textarea> <br /> 
            
            <input type="submit" value="Submit" />
            
        </form>
        
         </fieldset>
        
        <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>

