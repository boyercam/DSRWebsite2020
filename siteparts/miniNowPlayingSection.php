<?php
$auth = base64_encode("public:default");
$context = stream_context_create([
    "http" => [
        "header" => "Authorization: Basic $auth"
    ]
]);
$liveShowM = file_get_contents("https://members.drystoneradio.com/api/now/live/", false, $context );
$dataM = json_decode($liveShowM);
$toPrintM = $dataM->title;
?>
<div id="sitepartMiniNowPlaying">
    <div>
        <p><span class="dsr-yellow">On air now:</span> <?php echo $toPrintM;?></p>
        <div></div>
        <a onclick="var myWindow=window.open('http://www2.drystoneradio.com/radioplayer','DrystoneLive', 'width=380,height=665,resizable=yes,scrollbars=no'); myWindow.focus();">
            <span class="dsr-yellow"><i class="fas fa-play"></i></span>Listen <span class="dsr-yellow">Live</span>
        </a>
    </div>
</div>