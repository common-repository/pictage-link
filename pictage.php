<?php
//importing the configuration file
include('config.php');
?>


<!-- JQuery slider effect onHover -->
<script>

$(document).ready(function() { 
 $('.fade').hover(function() { //mouse in 
  $(this).animate({  paddingLeft: '20px' }, 400); 
	   }, function() { //mouse out 
    $(this).animate({  paddingLeft: 0 }, 400); 
	}); 
}); 

</script>



<?php
//running a few curl functions to read source of EZLink's API.
function getPage($url=""){
 $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL, $url);
 curl_setopt($ch,CURLOPT_FRESH_CONNECT,TRUE);
 curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
 curl_setopt($ch,CURLOPT_TIMEOUT,10);
 $html=curl_exec($ch);
 if($html==false){
  $m=curl_error(($ch));
  error_log($m);
 }
 curl_close($ch);
 return $html;
}

//curl is now reading the source code from the following link
$full = "http://external.pictage.com/external/PHTINTEG?photog=$studio";
$html=getPage($full);

//lets get rid of that fugly <hr> bar and put in a class tags
$html = str_replace('target="PICTAGE"', 'class="fade piclinks"', $html);
$html = str_replace("<hr>", " ", $html);
?>

<?php
//outputting the page
echo $html;  
?>

