<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://data-speedtest.p.rapidapi.com/fixed/v1/speeds/?country=argentina&area=buenos-aires&period=oct2023",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: data-speedtest.p.rapidapi.com",
		"X-RapidAPI-Key: 179929d24dmsh99bfb8efe258a28p184414jsnb901d0fe89e0"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
























