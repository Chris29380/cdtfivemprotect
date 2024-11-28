<?php
    $url = parse_url($_SERVER['REQUEST_URI']);

    $path = isset($url['path']) ? $url['path'] : '/';
    $parts = explode("&", $url['query']);
    print_r ($parts[0]);

    if ($parts[0] != '') {
        $loc = explode("=", $parts[0]);
        $act = explode("=", $parts[1]);
        if ($loc[1]="panel") {
            if ($act[1]="login") {
                header('Location: /panel/login');
            } else {
                if ($act[1]="logout") {
                    header('Location: /panel/logout');
                }
            }
        }
    }
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>cdtfivemprotect</title>
</head>
<body>
    <div class="content" id="content">
        <img src="/img/logo_fivemprotect.png"/>
    </div>
</body>
</html>