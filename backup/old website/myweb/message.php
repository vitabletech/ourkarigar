<?php

$fields = array(
    "sender_id" => "FSTSMS",
    "message" => "This is Test message",
    "language" => "english",
    "route" => "p",
    "numbers" => "7047353676,7000636149",
    "flash" => "1"
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: oklZJGpmQ0wVgnwDsjgVEKKy1nyyc85kBZ3oS4mPmSTXeuz5vbn66XBPirhW",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
#Sample Success Response
{
    "return": true,
    "request_id": "lwdtp7cjyqxvfe9",
    "message": [
        "Message has been sent successfully."
    ]
}