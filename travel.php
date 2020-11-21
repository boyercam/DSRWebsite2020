<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel | Drystone Radio</title>
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
                <div style="background-color:var(--colour-drystone-blue);color:white;">
                    <h1>Traffic and Travel</h1>
                </div>
                <div>
                    <p>With Metro Go taxis of Skipton. Download the app or call 01756 633 333 to book and track your taxi.</p>
                </div>
            </div>
            
            <div class="siteContainerBlock">
                <div style="background-color:var(--colour-drystone-blue);color:white;">
                    <h1>Roads</h1>
                </div>
                <div>
                    <iframe style="width:100%;height:750px;border:none;" src="https://embed.waze.com/iframe?zoom=12&lat=53.929562909696145&lon=-1.9172859191894533"></iframe>
                    <p>
                        Map provided by Waze
                    </p>
                </div>
            </div>

            <div class="siteContainerBlock">
                <div style="background-color:var(--colour-drystone-blue);color:white;">
                    <h1>Rail</h1>
                </div>
                <div>
                    <p>
                    Click on the links below to find the latest arrival and departure times for trains from stations within Craven and Wharfedale
                    <br>
                    <br><a href="https://ojp.nationalrail.co.uk/service/ldbboard/arr/SKI" target="_none">Skipton Arrivals</a>/<a href="https://ojp.nationalrail.co.uk/service/ldbboard/dep/SKI" target="_none">Departures</a>
                    <br><a href="https://ojp.nationalrail.co.uk/service/ldbboard/arr/CEY" target="_none">Cononley Arrivals</a>/<a href="https://ojp.nationalrail.co.uk/service/ldbboard/dep/CEY" target="_none">Departures</a>
                    <br><a href="https://ojp.nationalrail.co.uk/service/ldbboard/arr/SON" target="_none">Steeton and Silsden Arrivals</a>/<a href="https://ojp.nationalrail.co.uk/service/ldbboard/dep/SON" target="_none">Departures</a>
                    <br><a href="https://ojp.nationalrail.co.uk/service/ldbboard/arr/KEI" target="_none">Keighly Arrivals</a>/<a href="https://ojp.nationalrail.co.uk/service/ldbboard/dep/KEI" target="_none">Departures</a>
                    <br>
                    <br><a href="https://ojp.nationalrail.co.uk/service/ldbboard/arr/ILK" target="_none">Ilkley Arrivals</a>/<a href="https://ojp.nationalrail.co.uk/service/ldbboard/dep/ILK" target="_none">Departures</a>
                    <br><a href="https://ojp.nationalrail.co.uk/service/ldbboard/arr/BUW" target="_none">Burley in Wharfedale Arrivals</a>/<a href="https://ojp.nationalrail.co.uk/service/ldbboard/dep/BUW" target="_none">Departures</a>
                    </p>
                </div>
            </div>

            <div class="siteContainerBlock">
                <div style="background-color:var(--colour-drystone-blue);color:white;">
                    <h1>Busses</h1>
                </div>
                <div>
                    <p>
                    Check live bus times for the area <a href="https://www.traveline.info/" target="_none">here.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("siteparts/footer.php");?>
</body>
</html>