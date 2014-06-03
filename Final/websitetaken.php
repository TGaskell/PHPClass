<?php include 'dependency.php'; ?>
<?php

$websiteRequest = new WebsiteModel();
$websiteRequest->setWebsite(filter_input(INPUT_POST, 'website'));

$checkWebsite = array( "taken" => 'Available', 
                        "website" => $websiteRequest->getWebsite());

$login = new Login();

if ($login->websiteTaken($websiteRequest)){
    
    $checkWebsite["taken"]= 'UnAvailable';
          
}

echo json_encode($checkWebsite);