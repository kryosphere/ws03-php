<?php
$pageTitle = "WS 03";
$title = "wordless";
$author = "lan angeles";
$body;
$footer;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <style>
        html {
            height: 100%;
        }

        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow-x: hidden;
            background-image: linear-gradient(to bottom, rgb(244, 237, 212), rgb(201, 122, 143), rgb(90, 41, 136));
            background-attachment: fixed;
        }

        .liquidglass {
            border-radius: 2vh;
            box-shadow: inset 0vh 0.014vh 0.274vh rgba(62, 30, 62, 0.5), inset 0vh -0.014vh 0.274vh rgba(218, 159, 159, 0.8);
            backdrop-filter: blur(0.343vh);
            background-image: linear-gradient(to bottom, rgba(244, 237, 212, 0.8), rgba(201, 122, 143, 0.5), rgba(90, 41, 136, 0.3));
            filter: drop-shadow(0vh 0.412vh 0.48vh rgba(135, 71, 87, 1));
        }

        .header {
            position: fixed;
            display: flex;
            width: 50%;
            height: 10vh;
            transform: translate(-50%, -0%);
            min-width: 50vh;
            left: 50%;
            justify-content: space-between;
            margin: 0.343vh;
            z-index: 2;
        }

        .containerbox {
            display: block;
            position: absolute;
            width: 50%;
            height: 100vh;
            transform: translate(-50%, -50%);
            min-width: 50vh;
            left: 50%;
            top: 50%;
            justify-content: space-between;
            margin: 11vh 0.8vh 10vh 0.8vh;
            z-index: 0;
        }

        .titlebox {
            width: 40%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 25vh;
        }

        .authorbox {}

        .footerbox {}

        .titletext {
            font-family: 'Helvetica', 'sans-serif';
            font-weight: 900;
            width: fit-content;
            font-size: 2vh;
        }

        .bodytext {
            font-family: 'Helvetica', 'sans-serif';
            font-weight: 500;
            padding: 1vh;
        }

        .footertext {
            font-family: 'Helvetica', 'sans-serif';
            font-weight: 200;
        }
    </style>

</head>

<body>
    <div class="header">
        <div class="liquidglass titlebox">
            <div class="titletext">
                <?= $title ?>
            </div>
        </div>


        <div class="liquidglass titlebox">
            <div class="titletext">
                by: <?= $author ?>
            </div>
        </div>
    </div>

    <div class="containerbox liquidglass">
        <p class="bodytext">
            bisakla
        </p>
    </div>
</body>

</html>