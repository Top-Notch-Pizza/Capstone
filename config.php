<?php
require_once "stripe-php/init.php";
require('db.php');
include("auth_session.php");
$stripedetails=array(
"publishableKey"=>"pk_test_51MvZ4GGUXI7wa9NZ3KaHu0M0hVVfp0aMyGNWw5kmK5p08liuS0ZGQq6YuL241THoUXzeHsobTxZJ7mjSUk63M2kp00UjLQvsGu",
"secretKey"=>"sk_test_51MvZ4GGUXI7wa9NZAIPl4kkXrhTpdRmTFMVZHWis8TzrGveSkN9IVaQqZMu79E2SuibRZqh5WaxnjwSdxYcAUJTx004XSKtuIC"
);

\Stripe\Stripe::setApiKey($stripedetails["secretKey"]);
?>