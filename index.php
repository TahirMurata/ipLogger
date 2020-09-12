<?php
/* START IP LOGGER */
    include 'config.php';
      if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
      else
    {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
        date_default_timezone_set($timezone);
        $date = date('Y-m-d H:i:s');
        $line_break = "\r\n";
        $file = $save_file;
        $fp = fopen($file, 'a');
        fwrite($fp, $line_break);
        fwrite($fp, $ip . $line_break);
        fwrite($fp, $date . $line_break);
        fwrite($fp, "--------------------");      
        fclose($fp);
/* END IP LOGGER */
?>
