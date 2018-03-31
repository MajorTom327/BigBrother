<?php
$cam = $_GET['cam'];
?>
<a href="./">
	<img id='cam' class='cam' src='http://scam.42.fr/cams/cam-<?php echo $cam?>.jpg' style="width: 100vw;"></img>
</a>
<button style="font-size: x-large; width: 48vw;" onclick="document.location = './';">Go back</button>
<button style="font-size: x-large; width: 48vw;" onclick="window.open('screenshot.php?cam=<?php echo $cam?>');">Save</button>
<script>
	setInterval(function()
	{
		var value = (0 + Math.floor((999999999999) * Math.random()));
		<?php
			echo "document.getElementById('cam').setAttribute('src', 'http://scam.42.fr/cams/cam-$cam.jpg?' + value);".PHP_EOL;
		?>
	}, 200);
</script>
