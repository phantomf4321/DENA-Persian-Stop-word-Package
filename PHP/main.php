<?php
$apiUrl = 'https://sajjadranjbaryazdi.me/Dena_stopwords_API/V3/api/stopwords.php';
$token = 'YOUR_TOKEN';
$url = $apiUrl . '?token=' . urlencode($token);
$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 20,
    CURLOPT_HTTPHEADER => ['Accept: application/json'],
]);
$response = curl_exec($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
$result = json_decode($response, true);
$stopwords = $result['data'];
print_r($stopwords);
?>
