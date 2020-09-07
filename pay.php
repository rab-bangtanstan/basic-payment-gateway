<?php

include 'Instamojo.php';
$api = new Instamojo\Instamojo(test_28174b7429b410b14173805242f,test_8d606e2fe8b9a7d65c8a0af33b9,
    'https://test.instamojo.com/api/1.1/');


    try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Donation",
        "amount" => "100",
        "send_email" => true,
        "email" => "foo@example.com"
        ));
   // print_r($response);
    $pay_url=$response['longurl'];
    header("location:$pay_url");
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }




?>
