<?php
if(!empty($_POST['xh'])){
	$xh=$_POST['xh'];
$url='http://202.194.48.11:9004/setReportParams';
$post="LS_XH=$xh";
$ch = curl_init($url) ;
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0) ;
curl_setopt($ch, CURLOPT_POST,1) ; 
curl_setopt($ch, CURLOPT_POSTFIELDS,$post); 
curl_exec($ch);
curl_close($ch);
}
?>

<form method="post">
<input type="text" name="xh">
<input type="submit" value="罪恶">
</form>