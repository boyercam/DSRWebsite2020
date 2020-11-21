<?php
$auth = base64_encode("public:default");
$context = stream_context_create([
    "http" => [
        "header" => "Authorization: Basic $auth"
    ]
]);
$liveShow = file_get_contents("https://members.drystoneradio.com/api/now/live/", false, $context );
$nextliveShow = file_get_contents("https://members.drystoneradio.com/api/next/live/", false, $context );
$data = json_decode($liveShow);
$toPrint = $data->title;
$nowImage = $data->img;

if ($data->img==""||$data->img==" "){
    $nowImage = "resources/images/DSR.png";
}

$dataNext = json_decode($nextliveShow);
$toPrintNext = $dataNext->title;
?>

<?php
    //Script assosiated with randomly choosing header background
    $imageNoUse = mt_rand(1, 12);
    $webpHeaderImagePath = "images/header/webp/".$imageNoUse.".webp";
    $webpInlineStyle = "background-image: linear-gradient(90deg, rgba(255, 255, 255, .45), rgba(255, 255, 255, .45)), url(resources/".$webpHeaderImagePath.");";
    $jpgHeaderImagePath = "images/header/jpg/".$imageNoUse.".jpg";
    $jpgInlineStyle = "background-image: linear-gradient(90deg, rgba(255, 255, 255, .45), rgba(255, 255, 255, .45)), url(resources/".$jpgHeaderImagePath.");";

?>
<div id="sitepartNowPlaying" style="<?php echo $jpgInlineStyle;?>">
    <div>
        <img src="<?php echo $nowImage?>" alt="<?php echo $toPrint?> Show Image">
        <div>
            <div>
                <a onclick="var myWindow=window.open('http://www2.drystoneradio.com/radioplayer','DrystoneLive', 'width=380,height=665,resizable=yes,scrollbars=no'); myWindow.focus();">
                    <span class="dsr-yellow"><i class="fas fa-play"></i></span>Listen <span class="dsr-yellow">Live</span>
                </a>
            </div>
            <div>
                <p><span class="dsr-yellow">On air now:</span> <?php echo $toPrint;?></p0>
                <p>Coming up: <?php echo $toPrintNext;?></p>
            </div>
            <div></div>
            <div>
                <p>Find us on</p>
                <a href="https://www.facebook.com/drystoneradio"><img src="resources/images/fb.png" alt="Facebook Button"></a>
                <a href="https://www.twitter.com/drystoneradiouk"><img src="resources/images/twitter.png" alt="Twitter Button"></a>
                <a href="https://www.instagram.com/drystone_radio/"><img src="resources/images/insta.png" alt="Instagram Button"></a>
            </div>
        </div>
    </div>
</div>