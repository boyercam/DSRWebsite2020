<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drystone Radio</title>
    <?php include_once("siteparts/crosssiteHeader.php");?>
    <link rel="stylesheet" href="resources\styles\basic.css">
    <link rel="stylesheet" href="resources\styles\siteparts\header.css">
    <link rel="stylesheet" href="resources\styles\siteparts\footer.css">
    <link rel="stylesheet" href="resources\styles\siteparts\nowPlaying.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>
    <?php include_once("siteparts/header.php");?>
    <?php include_once("siteparts/nowPlayingSection.php");?>
    <?php include_once("siteparts/miniNowPlayingSection.php");?>
    <div id="pageContentContainer">
        <div class="editableArea">
            <h1>Page Content Goes Here</h1>
        </div>
    </div>

    <?php include_once("siteparts/footer.php");?>
</body>
</html>