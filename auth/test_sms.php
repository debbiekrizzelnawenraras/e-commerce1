<?php

require_once "traccar_sms.php";

$result = traccar_send_sms(
    "+639XXXXXXXXX",
    "OTP TEST 123456"
);

print_r($result);