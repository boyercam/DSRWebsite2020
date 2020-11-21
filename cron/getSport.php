<?php
	$url = 'https://www.skysports.com/rss/12040';
	$xml = simplexml_load_file($url);
	
	#Get all the main headline information
	$headline1=$xml->channel->item[0]->title;
	$description1=$xml->channel->item[0]->description;
	$link1=$xml->channel->item[0]->link;
	$image1=$xml->channel->item[0]->enclosure['url'];
	#Replace to a larger sized image
	$image1 = str_replace("70x70", "736x414", $image1);
	
	$headline2=$xml->channel->item[1]->title;
	$link2=$xml->channel->item[1]->link;
	$image2=$xml->channel->item[1]->enclosure['url'];
	$image2 = str_replace("70x70", "736x414", $image2);
	
	$headline3=$xml->channel->item[2]->title;
	$link3=$xml->channel->item[2]->link;
	$image3=$xml->channel->item[2]->enclosure['url'];
	$image3 = str_replace("70x70", "736x414", $image3);
	
	$headline4=$xml->channel->item[3]->title;
	$link4=$xml->channel->item[3]->link;
	$image4=$xml->channel->item[3]->enclosure['url'];
	$image4 = str_replace("70x70", "736x414", $image4);
	
	$headline5=$xml->channel->item[4]->title;
	$link5=$xml->channel->item[4]->link;
	$image5=$xml->channel->item[4]->enclosure['url'];	
	$image5 = str_replace("70x70", "736x414", $image5);
	
	$towrite = ($headline1 . "/," . $description1 . "/," . $link1 . "/," . $image1 . "\n" . 
				$headline2 . "/," . $link2 . "/," . $image2 . "\n" .
				$headline3 . "/," . $link3 . "/," . $image3 . "\n" .
				$headline4 . "/," . $link4 . "/," . $image4 . "\n" .
				$headline5 . "/," . $link5 . "/," . $image5 . "\n");

	$file = fopen ("national-sport","w") or die ("Unable to open database!");
	fwrite($file, $towrite);
	fclose($file);
	
	http_response_code(200);
?>