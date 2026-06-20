<?php

define("TRACCAR_URL", "http://10.195.201.173:8082/");
define("TRACCAR_TOKEN", "6ee272ae-bdca-428b-8136-65b42a64e7e5");

function traccar_send_sms($to, $message)
{

    $payload = json_encode([
        "to" => $to,
        "message" => $message
    ]);

    $ch = curl_init(TRACCAR_URL);

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: " . TRACCAR_TOKEN
    ]);

    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($error) {
        return [false, $error];
    }

    if ($http == 200) {
        return [true, "SMS sent"];
    }

    return [false, "HTTP ERROR " . $http];
}