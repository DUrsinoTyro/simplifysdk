<?php
    require_once("./lib/Simplify.php");
    Simplify::$publicKey = 'sbpb_MzEyMWJkNWItNTg3OS00YmU0LTlmNGItNGRkYzY2OTBlMjhk';
    Simplify::$privateKey = 'JydmDxLjlX3YB+6bLxejH7g2zqU/z2ZSkSxU5GIag+t5YFFQL0ODSXAOkNtXTToq';
    $payment = Simplify_Payment::createPayment(array(
            "card" => array(
                "number" => "5555555555554444",
                "expMonth" => 11,
                "expYear" => 99,
                "cvc" => "123"
            ),
            'amount' => '<?echo $amount?>',
            'description' => '<?echo $text?>',
            'currency' => '<?echo $currency?>'
    ));
    if ($payment->paymentStatus == 'APPROVED') {
        echo "Payment approved\n";
    }
?>
