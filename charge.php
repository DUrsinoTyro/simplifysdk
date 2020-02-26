<?php
    require_once("./lib/Simplify.php");
    Simplify::$publicKey = 'YOUR_PUBLIC_API_KEY';
    Simplify::$privateKey = 'YOUR_PRIVATE_API_KEY';
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