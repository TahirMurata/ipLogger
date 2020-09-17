<link rel="icon" href="https://is5-ssl.mzstatic.com/image/thumb/Purple123/v4/0b/43/c6/0b43c698-fdde-0599-06c0-ac35afd3d496/AppIcon-1x_U007emarketing-0-7-0-85-220.png/246x0w.png">
<?php include('config.php'); ?>
<?php 
    $content="<code><pre><h2>log.txt</h2>".htmlspecialchars(file_get_contents($save_file))."</pre></code>";
    echo $content;
?>
