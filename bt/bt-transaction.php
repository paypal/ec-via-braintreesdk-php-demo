<?php
require_once ('../include/incl.conf.php');
require_once ('../' . BRAINTREE_PHP_SDK);

// data for transaction
$total_amount = (isset($_POST["total-amount"])) ? $_POST["total-amount"] : "USD";
$currency = (isset($_POST["currency"])) ? $_POST["currency"] : "";
$payment_method_nonce = (isset($_POST["payment-method-nonce"])) ? $_POST["payment-method-nonce"] : "";
$item_description = (isset($_POST["item-description"])) ? $_POST["item-description"] : "";

$order = date("D M j G:i:s T Y"); // Mapped to PayPal Invoice Number
$custom = "Custom message";

// setup gateway
$gateway = new Braintree_Gateway(array(
    'accessToken' => ACCESS_TOKEN
));

// transaction
$result = $gateway->transaction()->sale([
    "amount" => $total_amount,
    "channel" => CHANNEL,
    "paymentMethodNonce" => $payment_method_nonce,
    'merchantAccountId' =>  $currency ,
    "orderId" => $order,
    "options" => [
        "submitForSettlement" => true,
        "paypal" => [
            "customField" => $custom,
            "description" => $item_description
        ]
    ]
]);

// test response
if ($result->success) {
    
    $status = "approved";
    $transactionid = $result->transaction->paypalDetails->captureId;
    
    require_once ('../include/incl.success.php');
} else {
    require_once ('../include/incl.error.php');
}

?>