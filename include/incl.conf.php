<?php
/*
 * Configure constants for Braintree's JavaScript Client SDKs, Server SDK, and Access Token for
 * Express Checkout via Braintree SDK
 */

// sandbox | production
define("ENVIRONMENT", 'sandbox');

define("ACCESS_TOKEN", 'access_token$sandbox$9wyz9gr9w6w3nhq7$fddc66ab5ee3f60df65e1b1e0e56a79d');

define("BT_JAVASCRIPT_CLIENT", 'https://js.braintreegateway.com/web/3.30.0/js/client.min.js');
define("BT_JAVASCRIPT_PAYPAL", 'https://js.braintreegateway.com/web/3.30.0/js/paypal-checkout.min.js');
define("PP_CHECKOUT", 'https://www.paypalobjects.com/api/checkout.js');

define("BRAINTREE_PHP_SDK", 'braintree-php-3.30.0/lib/Braintree.php');
define("BRAINTREE_PHP_SDK1", '../braintree-php-3.30.0/lib/Braintree.php');
define("CHANNEL", 'PP-DemoPortal-EC_BT-php');
?>