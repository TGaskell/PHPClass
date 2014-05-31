<?php include 'dependency.php'; ?>
<?php

$websiteRequest = new WebsiteModel();
$websiteRequest->setWebsitename(filter_input(INPUT_POST, 'websitename'));

$checkWebsitename = array( "taken" => 'Available', 
                        "websitename" => $websitenameRequest->getWebsitename());

$login = new Login();

if ($login->websitenameTaken($websitenameRequest)){
    
    $checkWebsitename["taken"]= 'UnAvailable';
          
}

echo json_encode($checkWebsitename);