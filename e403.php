<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403</title>
    <style>
        @font-face {
            font-family: 'myfont';
            src : url('/font/Amble-Regular.ttf')  format('truetype'), 
        }

        body {
            display: flex;
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgb(34, 34, 34);
            align-items: center;
            justify-content: center;
        }

        /* -------------------------------------------- */
        /* accueil */
        /* -------------------------------------------- */

        body .content {
            display: flex;
            flex-direction: column;
            position: relative;
            align-items: center;
            justify-content: center;
            background-color: rgba(44, 44, 44, 0.2);
            border-radius: 20px;
            width: 60%;
            height: 70%;
        }

        body .content:hover {
            background-color: rgba(44, 44, 44, 0.5);
            width: 60%;
            height: 70%;
        }

        body .content img{
            width: 45%;
            opacity: 0.2;
        }

        body .content .text {
            display: flex;
            flex-direction: column;
            position: absolute;
            align-items: center;
            justify-content: center;
            font-family: myfont;
            font-weight: bold;
            font-size: 40px;
            color: rgba(255, 0, 0, 0.8);
            width: 80%;
            height: 20%;
            background-color: rgba(255, 0, 0, 0.02);
            border-radius: 21px 0 21px 0;
        }

        body .footer {
            display: flex;
            position: absolute;
            justify-content: center;
            align-items: center;
            font-family: myfont;
            color: white;
            font-size: 14px;
            background-color: rgba(255, 0, 0, 0.5);
            width: 60%;
            height: 5%;
            margin-top: 36%;
            border-radius: 0 0 20px 20px;
            overflow: auto;
        }
        </style>
</head>
<body>
    <div class="content" id="content">
        <div class="text" id="text">
            403 - ACCES DENIED    
        </div>
    </div>
    <div class="footer" id="footer">
        <?php
            function get_client_ip() {
                return $_SERVER['HTTP_X_FORWARDED_FOR']
                ?? $_SERVER['REMOTE_ADDR']
                ?? $_SERVER['HTTP_CLIENT_IP']
                ?? '';
            }
            $uagent = $_SERVER['HTTP_USER_AGENT'];
            echo "<div class='ipcli' id='ipcli'> Your IP <span style='color:black'>".
                get_client_ip().
            "</span></div>";
            echo "<div class='useragent' id='useragent'> User-Agent <span style='color:black'>".
                $uagent.
            "</span></div>";
        ?>
    </div>
</body>
</html>