<head>
<link rel="icon" href="https://is5-ssl.mzstatic.com/image/thumb/Purple123/v4/0b/43/c6/0b43c698-fdde-0599-06c0-ac35afd3d496/AppIcon-1x_U007emarketing-0-7-0-85-220.png/246x0w.png">
        <meta http-equiv="refresh" content="0.1;url=../log.php" />
</head>
<?php
include($_SERVER['DOCUMENT_ROOT']."config.php");
$fp = fopen($file_save, "r+");
ftruncate($fp, 0);
fclose($fp);
?>
