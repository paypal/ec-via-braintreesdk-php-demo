# Express Checkout via Braintree SDK

This project is a PHP Web Application that demonstrates the [Express Checkout via Braintree SDK](https://developer.paypal.com/docs/accept-payments/express-checkout/ec-braintree-sdk/get-started/) payment experience using the Braintree client JavaScript SDKs and the server-side PHP SDK.

[Express Checkout via Braintree SDK](https://developer.paypal.com/docs/accept-payments/express-checkout/ec-braintree-sdk/get-started/) allows you to integrate Express Checkout using the Braintree SDK without a Braintree account.

There are two Payment Flows in the demonstration.  Mouse-over the buttons in the Shopping Cart to review the Payment Flow diagrams.

1. Payment Flow 1: The Buyer selects Shipping Address and Wallet inside the PayPal mini-browser and completes the payment on the Seller's website.

1. Payment Flow 2: The Buyer provides Shipping Address on the Seller's website then completes the payment inside the PayPal mini-browser.


## Prerequisites
1. 
    Update [`incl.conf.php`](include/incl.conf.php
)  with your 
[**ACCESS_TOKEN**](https://www.paypal.com/us/selfhelp/article/how-do-i-test-express-checkout---braintree-direct-ts1938). set **`ENVIRONMENT`** to **sandbox** or **production**. The merchant account needs to be set up with the currencies that will be accepted.

2. The Braintree PHP SDK requires PHP version 5.4.0 or higher and the PHP cURL extension.

3. Verify that all the files are in place by running and passing the Unit tests (process shown below).
	
	```
   wget https://phar.phpunit.de/phpunit-5.7.phar
   (Download a version of PHPunit consisent with your php version)

   mv phpunit-5.7.phar /usr/local/bin/phpunit

   chmod a+x  /usr/local/bin/phpunit

   phpunit --version

   phpunit Tests/unit_test.php
   	```

4. Web Server with PHP enabled.

5. Ensure you have the latest version of Braintree server PHP SDK ([https://developers.braintreepayments.com/start/hello-server/php]()). If a later version exists, replace this directory [(`braintree-php-3.30.0`) ](braintree-php-3.30.0)with the latest version of the libarary and update the [`incl.conf.php`](include/incl.conf.php)


## Quick Start Demo Deployment Using XAMPP


1. Download PHP server.
Use a server such as XAMPP (https://www.apachefriends.org/index.html) to be able to host the Demo code sample.

2. Browse to the htdocs directory of xampp. Unzip the downloaded demo code folder and place it in this htdocs directory.

3. Start the Apache server in XAMPP from the XAMPP control panel.

4. Open the website in the browser and access it as: http://<my_domain>/<php_code_folder_name>/index.php
   Here, <my_domain> will be localhost if hosting on your own machine.
   The <php_code_folder_name> is the name of the folder under which the downloaded code resides.

5. Read further instructions when index.php in opened in a browser.


## How the code works


The starting point is [`index.php`](index.php). Click the **PayPal Checkout** button (Payment flow 1) or **Proceed to Checkout** button (Payment flow 2) to start a payment flow.

In the PayPal mini-browser, depending on the flow configuration, you'll see a **Continue** button (Payment flow 1) or a **Pay Now** button (Payment flow 2) . If the flow is cancelled, you'll be redirected to [`cancel.php`](include/cancel.php).

[`index.php`](index.php) (Payment Flow 1) and `checkout.php` (Payment Flow 2) do the following:

* When a page is loaded containing client-side code (i.e. [`index.php`](index.php) and [`checkout.php`](bt/checkout.php)), an authorization token is returned by [`bt-get-client-token.php`](bt/bt-get-client-token.php).

* When the payment is submitted, the request parameters are posted to [`bt-transaction.php`](bt/bt-transaction.php).


Review the forms and JavaScript in [`index.php`](index.php) (Payment flow 1) and [`checkout.php`](bt/checkout.php) (Payment flow 2) to better understand the client configurations.

## License
Code released under [LICENSE](LICENSE.md)