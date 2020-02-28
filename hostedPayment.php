<html>
    <head>
        <script src="https://tyro.gateway.mastercard.com/checkout/version/54/checkout.js"
                data-error="errorCallback"
                data-cancel="cancelCallback">
        </script>

        <script type="text/javascript">
            function errorCallback(error) {
                  console.log(JSON.stringify(error));
            }
            function cancelCallback() {
                  console.log('Payment cancelled');
            }

            Checkout.configure({
                merchant: 'TYRO_68233',
                order: {
                    amount: 1,
                    currency: 'AUD',
                    description: 'Ordered goods',
                   id: Date.now()
                },
                interaction: {
                    operation: 'PURCHASE', // set this field to 'PURCHASE' for Hosted Checkout to perform a Pay Operation.
                    merchant: {
                        name: 'Your merchant name',
                        address: {
                            line1: '200 Sample St',
                            line2: '1234 Example Town'            
                        }    
                    }
                                                                }
            });
        </script>
    </head>
    <body onload="Checkout.showLightbox();">
        
    </body>
</html>
