<?php
    //Get the current news
    //$newsfile= file_get_contents($_SERVER['DOCUMENT_ROOT']."/library/data/lnc/weather/currently");
    //Development location
    $newsfile= file_get_contents("http://camradio.co.uk/cron/output/national-sport");

    $newsstories = preg_split( '/\r\n|\r|\n/', $newsfile );
    
    for($newsindex=0; $newsindex<=4; $newsindex++){
        $newsstoryparts = explode( '/,', $newsstories[$newsindex]);
        $news[$newsindex][0] = $newsstoryparts[0];
        if($newsindex==0){
            $news[$newsindex][1] = $newsstoryparts[1];
            $news[$newsindex][2] = $newsstoryparts[2];
            $news[$newsindex][3] = $newsstoryparts[3];
        }else{
            $news[$newsindex][2] = $newsstoryparts[1];
            $news[$newsindex][3] = $newsstoryparts[2];
        }
    }
?>
<style>
    .top_story, .additional_story{
        display: flex;
        background-color: #eaeaea;
        /*box-shadow: 0px 0px 4px 2px #cecece;*/
    }
    .top_story a, .additional_story a{
        color:var(--colour-drystone-blue);
        text-decoration:none;
    }
    .top_story h1{
        font-size:18pt;
    }
    .additional_story h1{
        font-size:14pt;
    }
    .top_story span:nth-child(2), .additional_story span:nth-child(2){
        flex:0px;
    }
    .top_story .half-size{
        width:50%;
        margin-right: 10px;
    }
    .top_story .half-size img, .additional_story img{
        width:100%;
    }
    .additional_stories{
        display:grid;
        grid-template-columns: calc(25% - 10px) calc(25% - 10px) calc(25% - 10px) calc(25% - 10px);
        grid-gap: 10px;
    }
    .additional_story{
        margin-top: 10px;
        flex-direction: column;
    }
    .additional_story span:nth-child(2){
        box-sizing: border-box;
        padding: 0px 5px;
    }
    @media screen and (max-width: 890px) {
        .additional_stories{
            grid-template-columns: calc(50% - 10px) calc(50% - 10px);
        }
    }
</style>
<div class="top_story">
    <span class="half-size">
        <a href="<?php echo $news[0][2];?>" target="_blank">
            <img src="<?php echo $news[0][3];?>">
        </a>
    </span>
    <span>
        <a href="<?php echo $news[0][2];?>" target="_blank">
            <h1><?php echo $news[0][0];?></h1>
        </a>
            <p><?php echo $news[0][1];?></p>
    </span>
</div>
<div class="additional_stories">
    <div class="additional_story">
        <span>
            <a href="<?php echo $news[1][2];?>" target="_blank">
                <img src="<?php echo $news[1][3];?>">
            </a>
        </span>
        <span>
            <a href="<?php echo $news[1][2];?>" target="_blank">
                <h1><?php echo $news[1][0];?></h1>
            </a>
        </span>
    </div>
    
    <div class="additional_story">
        <span>
            <a href="<?php echo $news[2][2];?>" target="_blank">
                <img src="<?php echo $news[2][3];?>">
            </a>
        </span>
        <span>
            <a href="<?php echo $news[2][2];?>" target="_blank">
                <h1><?php echo $news[2][0];?></h1>
            </a>
        </span>
    </div>
    
    <div class="additional_story">
        <span>
            <a href="<?php echo $news[3][2];?>" target="_blank">
                <img src="<?php echo $news[3][3];?>">
            </a>
        </span>
        <span>
            <a href="<?php echo $news[3][2];?>" target="_blank">
                <h1><?php echo $news[3][0];?></h1>
            </a>
        </span>
    </div>
    
    <div class="additional_story">
        <span>
            <a href="<?php echo $news[4][2];?>" target="_blank">
                <img src="<?php echo $news[4][3];?>">
            </a>
        </span>
        <span>
            <a href="<?php echo $news[4][2];?>" target="_blank">
                <h1><?php echo $news[4][0];?></h1>
            </a>
        </span>
    </div>
</div>
