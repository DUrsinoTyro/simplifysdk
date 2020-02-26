<!DOCTYPE html>
<html data-wf-site="5582f9e5792714e458bb85b8" data-wf-page="5582f9e5792714e458bb85b9">
<head>
	<meta charset="utf-8">
	<title>Simplify Hosted Payment</title>

  <style>
    body {
      margin: 0;
    }
    iframe {
      display: block;       /* iframes are inline by default */
      border: none;         /* Reset default border */
      height: 100vh;        /* Viewport-relative units */
      width: 100vw;
    }
  </style>

  <?php
	$publicKey = getenv('SIMPLIFY_API_PUBLIC_KEY');
  $amount = $_GET["amount"];
	?>
</head>
	
<script>
    SimplifyCommerce.hostedPayments(
        function(response) {
            console.log(response);
            // add your custom handler code here
        }
    ).closeOnCompletion();
</script>
	
	
<body>
  <script type="text/javascript"
          src="https://www.simplify.com/commerce/simplify.pay.js"></script>
  <iframe name="my-hosted-form"
          data-sc-key="sbpb_MzEyMWJkNWItNTg3OS00YmU0LTlmNGItNGRkYzY2OTBlMjhk"
          data-name="Test Transaction"
          data-description="Test Checkout"
          data-reference="99999"
          data-amount="<?echo $amount?>"
          data-color="#12B830">
  </iframe>
</body>
</html>
