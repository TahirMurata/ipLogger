<?php
/* Config */
$timezone = 'Asia/Tokyo';
$save_file = 'log.txt';

/* START IP LOGGER */
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
date_default_timezone_set($timezone);
$date = date('Y-m-d H:i:s');
$line_break = "\r\n";
$fp = fopen($save_file, 'a');
fwrite($fp, $line_break);
fwrite($fp, $ip . $line_break);
fwrite($fp, $date . $line_break);
fwrite($fp, "--------------------");
fclose($fp);
/* END IP LOGGER */
?>
