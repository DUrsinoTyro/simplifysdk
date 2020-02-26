<?php
       $amount = $_GET["amount"];
       $simplifyToken = $_GET["simplifyToken"];
       $currency = $_GET["currency"]
       


   require_once("./lib/Simplify.php");
    Simplify::$publicKey = 'sbpb_MzEyMWJkNWItNTg3OS00YmU0LTlmNGItNGRkYzY2OTBlMjhk';
    Simplify::$privateKey = 'JydmDxLjlX3YB+6bLxejH7g2zqU/z2ZSkSxU5GIag+t5YFFQL0ODSXAOkNtXTToq';
    $token = $_POST['simplifyToken'];
    $payment = Simplify_Payment::createPayment(array(
            'amount' => <?echo $amount?>,
            'token' => <?echo $simplifyToken?>,
            'description' => 'prod description',
            'currency' => <?echo $currency?>
    ));

?>
