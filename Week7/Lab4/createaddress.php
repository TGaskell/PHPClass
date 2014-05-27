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

         $states = States::getStates();
         
         $createAddress = new AddressBook;
         
         $dataModel = new AddressbookModel(filter_input_array(INPUT_POST));
              
          if ( Util::isPostRequest() ) {
            
              if ( $id = $createAddress->create($dataModel)){
                var_dump($id);
                echo '<p>Address created</p>';
              } else {
                   echo '<p>Address Could not be created</p>';
              }
           }       
        ?>
        
        
        <form name="createaddress" action="#" method="post"> 
           <fieldset>
		<legend>Create:</legend>
                <label for="name">Name:</label>
                <input id="name" type="text" name="name" value="<?php echo $dataModel->getName(); ?>" /> <br />
               
                <label for="address">Address:</label> 
                <input id="address" type="text" name="address" value="<?php echo $dataModel->getAddress(); ?>" /> <br />
               
                <label for="city">City:</label> 
                <input id="city" type="text" name="city" value="<?php echo $dataModel->getCity(); ?>" /> <br />
               
                <label for="state">State:</label> 
                <select name="state" >
                
                <?php
                //populate the combobox from the States class
                foreach($states as $stateid=>$state){
                    if( $dataModel->getName() === $state ){
                        echo'<option value="',$state,'" selected = "selected">',$state,'</option>';
                    }  else {
                      echo'<option value="',$state,'">',$state,'</option>';  
                    }
                }
                
                ?>
                </select><br />
                              
                <label for="zip">ZIP:</label> 
                <input id="zip" type="text" name="zip" value="<?php echo $dataModel->getZip(); ?>" /> <br />
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
        
  
    </body>
</html>
