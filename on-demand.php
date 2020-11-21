<?php



// Podcast page specifics
$htmlCode="";
$auth = base64_encode("public:default");
$context = stream_context_create([
    "http" => [
        "header" => "Authorization: Basic $auth"
    ]
]);
$programmeJSON = file_get_contents("https://members.drystoneradio.com/api/programme/", false, $context );
$programmeData = json_decode($programmeJSON);
$programmsArray=array();
foreach($programmeData as $show) { //foreach element in $arr
    $pid = $show->id; //etc
    $showtitle = $show->name;
    $showdesc = $show->blurb;
    array_push($programmsArray,array($pid,$showtitle,$showdesc));
    //$showimage = $show->image;
}
//print_r($programmsArray);
$podcastJSON = file_get_contents("https://members.drystoneradio.com/api/podcast/", false, $context );
$podcastData = json_decode($podcastJSON);
foreach($podcastData as $show) { //foreach element in $arr
    $pid = $show->user; //etc
    $showtitle = $show->title;
    $showdesc = "No description available";
    
    //Use this to get the programme title
    foreach($programmsArray as $programmeById){
        #print_r($programmeById);
        if("p".$programmeById['0']==$pid){
            $showtitle = $programmeById['1'];
            $showdesc = $programmeById['2'];
        }
    }

    $showimage = $show->img;
    $showaudio = $show->mp3;
    $showbroadcasttime = $show->start;
    $showduration = $show->duration;

    $dtB = new DateTime();
    $dtB->setTimestamp($showbroadcasttime);
    $prettyBroadcastTime = $dtB->format('D jS M \a\t g:i:a');
    
    $dtD = new DateTime();
    $dtD->setTimestamp($showduration);
    $prettyDuration = $dtD->format('H\h m\m');

    $now = time(); // or your date as well
    $your_date = strtotime($dtB->format('Y-m-d'));
    $datediff = $now - $your_date;

    $wr = 4 - round($datediff / (60 * 60 * 24 * 7));

    $dr = 28 - round($datediff / (60 * 60 * 24));

    $hr = 672 - round($datediff / (60 * 60));

    if ($dr < 14){
        if ($dr<1){
            $remainingTime = $hr . " hours left";
        }else{
            $remainingTime = $dr . " days left";
        }
    }else{
        $remainingTime = $wr . " weeks left";
    }

    //Only list episodes that are within 28 days
    if($hr>1){
        $htmlCode=$htmlCode."<div class=\"podcastShow\"><a onclick=\"var rpAOD=window.open('http://www2.drystoneradio.com/radioplayer_v3/?rpAodUrl=".$showaudio."','DrystoneLive', 'width=380,height=710,resizable=no,scrollbars=no'); rpAOD.focus();\"><img class=\"podcastCover\" src=\"".$showimage."\"><p>".$showtitle."</p><p>".$prettyBroadcastTime."</p></a><p>".$showdesc."</p><div class=\"podcastDurBanner\"><p>".$prettyDuration."</p><p>".$remainingTime."</p></div></div>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>On Demand | Drystone Radio</title>
    <?php include_once("siteparts/crosssiteHeader.php");?>
    <link rel="stylesheet" href="resources\styles\basic.css">
    <link rel="stylesheet" href="resources\styles\catchup.css">
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
                    <h1>Drystone Radio On Demand</h1>
                </div>
                <div>
                    <p>You can listen again to any Drystone Radio show from the past 28 days.
                    </p>
                </div>
            </div>
        </div>

        <!-- Non-editable poodcast area -->
        <div class="podcastList">
            <?php echo $htmlCode;?>
        </div>
    </div>
    <?php include_once("siteparts/footer.php");?>
</body>
</html>