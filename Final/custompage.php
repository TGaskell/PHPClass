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
                 
        <h1 id="logo"><span>&#x2728;</span>SaaS Project</h1>
        
        <div id="corner"><a href="?logout=1">Logout</a></div>
        
         <fieldset>
        
        <legend>Customize your Page</legend>
                
        
        <div id="preview"> <a href="index.php?page=test" target="popup">View Page</a></div>
        
         <form name="mainform" action="#" method="post">
            
             <label> Title:</label> <input type="text" name="title" value="Test title page" /><br />            
             <label> Theme:</label> <select name="theme">
                <option value="theme1" >Theme 1</option>
                <option value="theme2" selected="selected">Theme 2</option>
                <option value="theme3" >Theme 3</option>
                 </select>
            <br />
            
            <label> Address:</label> <input type="text" name="address" value="123 Main Street, Anywhere, CT 06360" /><br /> 
            <label> Phone:</label> <input type="text" name="phone" value="555-555-5555" /><br /> 
            <label> Email:</label> <input type="text" name="email" value="test@test.com" /><br /> 
            <label> About:</label><br />
            <textarea name="about" cols="50" rows="10">Comments - looks good.</textarea><br /> 
            
            <input type="submit" value="Submit" />
            
        </form>
        
         </fieldset>
        
    </body>
</html>

