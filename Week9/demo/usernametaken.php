<?php include 'dependency.php'; ?>
<?php

$usernameRequest = new UsernameModel();
$usernameRequest->setUsername(filter_input(INPUT_POST, 'username'));

$checkUsername = array( "taken" => 'Available', 
                        "username" => $usernameRequest->getUsername());

$login = new Login();

if ($login->usernameTaken($usernameRequest)){
    
    $checkUsername["taken"]= 'UnAvailable';
          
}

echo json_encode($checkUsername);