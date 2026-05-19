<?php
$pageTitle = "WS 03";
$title = "wordless";
$author = "lan angeles";
$body = "
    <span class=\"intro\">
    when life is viewed through barbed wire<br>
    and air smells like the blood i lost reaching out,<br>
    i am carnal, my voice scraped on the ground<br>
    like it had claws, it left filings of my innocence<br><br>
    
    my longing bore flames and met dead leaves<br>
    your feet once grew wisterias under,<br>
    i knew they had to come to you like wildfire,<br>
    insatiable for a luster only your eyes wore<br><br>
    
    was it convenient for you that you knew?<br>
    it took only a year-long elegy away,<br>
    just to seal my fate of letting this yearning go<br>
    \"<span class=\"italic\">to hell with romance and uncarved words</span>
    </span>\"<br><br>
    
    at a time, i felt my heart almost slip through my mouth, wearing what resembles sand under foggy skies, as i let my feet leap forward as i anticipate what you could've looked like beyond the portraits of you likenes behind a screen i stuck my eyes onto for hours<br><br>
    
    <span class=\"italic\">god</span>, i knew you were pulled out of the painting, like a fugitive on the run, a fleeting moment in time no camera could capture, in your jacket and baggy pants, rosy nose and lips, and upturned eyes. you could have always written about yourself so casually, but you did it so beautifully<br><br>
    
    i foraged for a meaning through pillars of incandescent lights, eating frozen yogurt with you and talking about how we were written, what dreams we caught in our sleep, and what lies in the forefront that could have been ours<br><br>
    
    i listened like a loser, my camera at the ready to shoot my shot, but all it left me was a zipper head crocheted flower of a bag i don't use anymore.you gave me a footnote–a testament of your affection, telling me to let go of someone i don't get to kneel to<br><br>
    
    and i knew it was worth it<br><br>
    
    <span class=\"end\">
    to the one i almost called mine,<br>
    i hope the winds take back the time we met,<br>
    and take us to your favorite cafe you called your own<br>
    so you'd remember me by when life holds stakes against your heart<br><br>

    as i've left the turfs wordless,<br>
    i could've been none the wiser to put this down<br>
    but if it means your soft pink skies and crocheted dreams stay the same,<br>
    then let this pass on to the gods of my longing i no longer praise
    </span>";
$footer = "in partial fulfillment of the final requirements for it-ws03";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <style>
        .content {
            position: fixed;
            top: 12vh;
            /* space for header */
            bottom: 12vh;
            /* space for footer */
            left: 50%;
            transform: translateX(-50%);
            width: 50%;
            min-width: 50vh;
            overflow-y: auto;
        }

        body {
            height: calc(100% + 10vh);
            margin: 0;
            /* space for header */
            padding-bottom: 15vh;
            /* space for footer */
            overflow: hidden;
            background-image: linear-gradient(to top, rgb(244, 237, 212), rgb(201, 122, 143), rgb(90, 41, 136));
            background-attachment: fixed;
        }

        .liquidglass {
            border-radius: 2vh;
            box-shadow: inset 0vh 0.014vh 0.274vh rgba(62, 30, 62, 0.5), inset 0vh -0.014vh 0.274vh rgba(218, 159, 159, 0.8);
            backdrop-filter: blur(0.343vh);
            background-image: linear-gradient(to top, rgba(244, 237, 212, 0.8), rgba(201, 122, 143, 0.5), rgba(90, 41, 136, 0.3));
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
            margin-top: 0.343vh;
            z-index: 2;
        }

        .containerbox {
            display: block;
            position: absolute;
            width: 50%;
            transform: translateX(-50%);
            min-width: 50vh;
            left: 50%;
            justify-content: space-between;
            margin-top: 12vh;
            margin-bottom: 50vh;
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

        .footerbox {
            display: flex;
            position: fixed;
            width: 50%;
            height: 10vh;
            transform: translateX(-50%);
            min-width: 50vh;
            left: 50%;
            bottom: 0;
            margin-bottom: 0.343vh;
            justify-content: center;
            z-index: 0;
        }

        .titletext {
            font-family: 'Helvetica', 'sans-serif';
            font-weight: 900;
            width: fit-content;
            font-size: 2vh;
        }

        .bodytext {
            font-family: 'Helvetica', 'sans-serif';
            font-weight: 500;
            padding: 2vh;
            margin: 2vh;
            filter: drop-shadow(0vh 0.412vh 0.48vh rgba(135, 71, 87, 1));
        }

        .footertext {
            font-family: 'Helvetica', 'sans-serif';
            padding: 2vh;
            margin: 2vh;
            width: fit-content;
            font-size: 1.5vh;
        }

        .italic {
            font-style: italic;
        }

        .intro {
            font-weight: 100;
        }

        .middle {}

        .end {
            font-weight: 900;
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

    <div class="content liquidglass">
        <p class="bodytext">
            <?= $body ?>
        </p>
    </div>

    <div class="footerbox liquidglass">
        <div class="footertext">
            <?= $footer ?>
        </div>
    </div>
</body>

</html>