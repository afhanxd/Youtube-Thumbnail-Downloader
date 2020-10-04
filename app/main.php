<?php
if(isset($_REQUEST['url']) && !empty($_REQUEST['url'])){
$url = $_REQUEST['url'];
    
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params); 
    
    $v = $params['v'];
    
    if(!$params['v']){
        if(strpos($url, 'https://youtu.be/') === 0){
           $v = ltrim($url,"https://youtu.be/");
        }
    }
    
    $apikey = 'AIzaSyBtayT9vKDrEuaLYrKyriRpVNA_5u0ELBs';
    $googleApiUrl = 'https://www.googleapis.com/youtube/v3/videos?id=' . $v . '&key=' . $apikey . '&part=snippet';
    
	$ch = curl_init();
    
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
        
    curl_close($ch);
        
    $data = json_decode($response);
        
    $value = json_decode(json_encode($data), true);
        
    $title = $value['items'][0]['snippet']['title'];
    $description = $value['items'][0]['snippet']['description'];
    
    $max = "https://img.youtube.com/vi/$v/maxresdefault.jpg";
    $hd = "https://img.youtube.com/vi/$v/sddefault.jpg";
    $sd = "https://img.youtube.com/vi/$v/hqdefault.jpg";
    $md = "https://img.youtube.com/vi/$v/mqdefault.jpg";

echo '{
    "success": true,
    "id": "",
    "title": "'.$title.'",
    "default": "<center><a href=\"'.$hd.'\"><img src=\"'.$hd.'\" height=\"200\" width=\"300\" class = \"img-responsive\"><\/a><\/center>",
    "links": {
        "Download High (1080P) Quality": "'.$max.'",
        "Download HD (720P) Quality": "'.$hd.'",
        "Download SD (480P) Quality": "'.$sd.'",
        "Download Medium (360P) Quality": "'.$md.'"
    }
}';


}