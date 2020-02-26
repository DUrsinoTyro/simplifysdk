<?php
 
require_once("./lib/Simplify.php");
 
Simplify::$publicKey = 'sbpb_MzEyMWJkNWItNTg3OS00YmU0LTlmNGItNGRkYzY2OTBlMjhk';
Simplify::$privateKey = 'JydmDxLjlX3YB';
 
$cardToken = Simplify_CardToken::createCardToken(array(
        'card' => array(
           'addressState' => 'MO',
           'expMonth' => '11',
           'expYear' => '35',
           'addressCity' => 'OFallon',
           'cvc' => '123',
           'number' => '4111111111111111'
        )
));
 
print_r($cardToken);
 
?>