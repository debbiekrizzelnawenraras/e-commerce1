<?php
require_once __DIR__ . "/traccar_sms.php";
$myNumber = "+639123001457"; // replace with your real number
$msg = "Test OTP from localhost: 123456";
[$ok, $res] = traccar_send_sms($myNumber, $msg);
header("Content-Type: text/plain");
if (!$ok) {
echo "FAILED\n";
echo $res;
} else {
echo "SENT\n";
echo $res;
}