<?php
$url = $_POST['url'];

if($url == "") {
	$file = "image.png";

	function data_uri($file, $mime) {
		$contents = file_get_contents($file);
		$base64 = base64_encode($contents);
		return "data:$mime;base64,$base64";
	}
} else {

	$file = $url;

	function data_uri($file, $mime) {
		$contents = file_get_contents($file);
		$base64 = base64_encode($contents);
		return "data:$mime;base64,$base64";
	}
}

?>

<center>
<h1>devXive - research and development<br><i>IMAGE ENCODER APP</i></h1>
<br>
<h3>The Image to Encode</h3>

<img src="<?php echo data_uri($file, 'image/png'); ?>" alt="The encoded image" title="The encoded image"><br>
<br>
<h3>Your base64 Image-Code</h3>
<textarea cols="80" rows="20"><?php echo data_uri($file, 'image/png'); ?></textarea>
<br>
<!-- 
	34 = "
	39 = '
	40 = (
	41 = )
	60 = <
	62 = >
-->
IMG-TAG: <input style="width: 550px;" name="img-code" value="&#60;img src=&#34;<?php echo data_uri($file, 'image/png')?>&#34; alt=&#34;image&#34; /&#62;">
<br>
<br>
<br>
<br>
<br>
<!-- Quelle: <a href="http://en.wikipedia.org/wiki/Data_URI_scheme" target="_blank">http://en.wikipedia.org/wiki/Data_URI_scheme</a> -->
</center>