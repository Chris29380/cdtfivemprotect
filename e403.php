<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>403</title>
</head>
<body>
    <div class="content" id="content">
        <img src="/img/logo_fivemprotect.png"/>
    </div>
    <div class="footer" id="footer">
        <?php
            $ip = $_SERVER['HTTP_CLIENT_IP'];
            echo "<div id='infocli' class='infocli'>Your IP <span style='color:black'>$ip</span></div>";
        ?>
    </div>
</body>
</html>