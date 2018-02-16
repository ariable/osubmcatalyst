<?php  
$id=$_GET['id'];  
header("Content-type:text/html;Charset=utf-8");  
$ch =curl_init();  
curl_setopt($ch,CURLOPT_URL,"https://osu.ppy.sh/d/$id");  
  
$header = array();  
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);  
curl_setopt($ch,CURLOPT_HEADER,true);  
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);  
curl_setopt($ch, CURLOPT_REFERER, "https://osu.ppy.sh/s/$id");
curl_setopt($ch,CURLOPT_COOKIE,"your cookie");  
$content = curl_exec($ch);  
$info=curl_getinfo($ch);
curl_close($ch);

$returl=$info['redirect_url'];
echo $returl;
$acurl=preg_replace("/bm(\d).ppy.sh/","osu.pocdn.com","$returl");
echo $acurl;
?>
