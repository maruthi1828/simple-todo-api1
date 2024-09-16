<?php
// Set the response content type to JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

// Create a response array
$response = [
    [
        "_id" => 1,
        "todo" => "Todo 1"
    ],
    [
        "_id" => 2,
        "todo" => "Todo 2"
    ],
    [
        "_id" => 3,
        "todo" => "Todo 3"
    ],
    [
        "_id" => 4,
        "todo" => "Todo 4"
    ],
    [
        "_id" => 5,
        "todo" => "Todo 5"
    ],
      [
        "_id" => 6,
        "todo" => "Todo 6"
    ],
      [
        "_id" => 7,
        "todo" => "Satya Sree"
    ]
    
];

// Encode the response array as JSON
$jsonResponse = json_encode($response);

// Output the JSON response
echo $jsonResponse;
