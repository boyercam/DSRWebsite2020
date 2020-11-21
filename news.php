<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News | Drystone Radio</title>
    <?php include_once("siteparts/crosssiteHeader.php");?>
    <link rel="stylesheet" href="resources\styles\basic.css">
    <link rel="stylesheet" href="resources\styles\siteparts\header.css">
    <link rel="stylesheet" href="resources\styles\siteparts\footer.css">
    <link rel="stylesheet" href="resources\styles\siteparts\nowPlaying.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>
    <?php include_once("siteparts/header.php");?>
    <?php include_once("siteparts/miniNowPlayingSection.php");?>
    <div id="pageContentContainer">
        <div class="editableArea">
            <div class="siteContainerBlock">
                <div style="background-color:var(--colour-drystone-pink);color:white;">
                    <h1>DrystoneNews</h1>
                </div>
                <div>
                    <span style="display:flex;align-items: center;">
                        <h2>National News Headlines</h2>
                        <div style="width:100%;flex:1;"></div>
                        <a href="https://news.sky.com"><img style="display:block;" src="resources/images/sky-news-logo-2018.png"></a>
                    </span>
                    <?php include("siteparts/nationalNewsWidget.php")?>
                </div>
            </div>

            <div class="siteContainerBlock">
                <div style="background-color:var(--colour-drystone-green);color:white;">
                    <h1>DrystoneNews Sport</h1>
                </div>
                <div>
                    <span style="display:flex;align-items: center;">
                        <h2>National Sport Headlines</h2>
                        <div style="width:100%;flex:1;"></div>
                        <a href="https://news.sky.com"><img style="display:block;" src="resources/images/sky-news-logo-2018.png"></a>
                    </span>
                    <?php include("siteparts/nationalSportWidget.php")?>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("siteparts/footer.php");?>
</body>
</html>