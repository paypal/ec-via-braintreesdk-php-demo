<?php

class test extends PHPUnit_Framework_TestCase
{

    public function test_checkVariousDefinitions()
    {
        require_once (dirname(__FILE__) . "/../include/incl.conf.php");
        // These tests should be running on Sandbox!
        $this->assertEquals(ENVIRONMENT, "sandbox");
        // JavaScript braintree reference exist or not
        $this->assertNotEmpty(BT_JAVASCRIPT_CLIENT);
        $this->assertNotEmpty(BT_JAVASCRIPT_PAYPAL);
        $this->assertNotEmpty(PP_CHECKOUT);
        $this->assertNotEmpty(BRAINTREE_PHP_SDK);
        $this->assertNotEmpty(CHANNEL);
        $this->assertEquals(PP_CHECKOUT, "https://www.paypalobjects.com/api/checkout.js");
        $this->assertEquals(BT_JAVASCRIPT_PAYPAL, "https://js.braintreegateway.com/web/3.31.0/js/paypal-checkout.min.js");
    }
}
?>