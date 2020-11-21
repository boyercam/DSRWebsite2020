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
    <!-- Facebook Timeline JavaSDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=2668353563199623" nonce="nbrb4QRR"></script>

    <?php include_once("siteparts/header.php");?>
    <?php include_once("siteparts/nowPlayingSection.php");?>
    <!--<?php include_once("siteparts/miniNowPlayingSection.php");?>-->
    <div id="pageContentContainer">
        <div class="editableArea">
            <div class="siteContainerBlock">
                <div style="background-color:var(--colour-drystone-blue);color:white;">
                    <h1>Welcome to Drystone Radio</h1>
                </div>
                <div>
                    <p>Welcome to the home of local radio for Craven and Wharfedale, Drystone Radio.
                    <br>
                    <br>Run by a team of dedicated volunteers, we broadcast hours of local and entertaining content to Craven and Wharfedale. We keep you informed with the latest local news and allow local businesses a platform to get their message out.
                    <br>
                    <br>We're offering a fresher sound on Drystone Radio.
                    </p>
                </div>
            </div>

            <div class="siteBanner">
                <a href="#">
                    <img src="resources/cml/SiteBanner.png">
                </a>
            </div>

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

            <div class="siteBanner">
                <a href="#">
                    <img src="resources/cml/businesslistbanner.png">
                </a>
            </div>

            <div class="siteContainerBlock">
                <div style="background-color:var(--colour-drystone-blue);color:white;">
                    <h1>Drystone Radio on Social Media</h1>
                </div>
                <div>
                    <div class="social-wall">
                        <!-- Facebook Timeline -->
                        <div class="social-container">
                            <div class="fb-page" data-href="https://www.facebook.com/DrystoneRadio/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/DrystoneRadio/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DrystoneRadio/">Drystone Radio</a></blockquote></div>
                        </div>
                        <div class="social-width-spacer"></div>
                        <!-- Twitter Feed -->
                        <div class="social-container" style="overflow-y: auto;">
                        <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/drystoneradiouk?ref_src=twsrc%5Etfw">Tweets by drystoneradiouk</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once("siteparts/footer.php");?>
</body>
</html>