<?php
// Set the response content type to JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

// Create a response array
$response = [
    [
        "_id" => 1,
        "todo" => "Jenkins"
    ],
    [
        "_id" => 2,
        "todo" => "Docker"
    ],
    [
        "_id" => 3,
        "todo" => "Kubernetes"
    ],
    [
        "_id" => 4,
        "todo" => "Terraform"
    ],
    [
        "_id" => 5,
        "todo" => "Ansible"
    ],
      [
        "_id" => 6,
        "todo" => "GIT"
    ],
      [
        "_id" => 7,
        "todo" => "Maven"
    ],
    [
        "_id" => 7,
        "todo" => "Linux"
    ]
    
];

// Encode the response array as JSON
$jsonResponse = json_encode($response);

// Output the JSON response
echo $jsonResponse;
