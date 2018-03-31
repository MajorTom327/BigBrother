<!DOCTYPE html>
<html>
	<head>
		<title>Big Brother</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<div id="onglet_header" class="floating_win">
			<ul>
				<li><button onclick="change_state_bb();">Big Brother</button></li>
				<li><button onclick="change_state_yt();">Sound</button></li>
				<li><button onclick="change_state_whats();">WhatsApp</button></li>
			</ul>
		</div>
		<div class="onglet floating_win" id="bb">
			<div class="list_cam">
				<?php
				$cams = array(
					"kfet-resto-ne",
					"kfet-cuisine-se",
					"kfet-bar-no",
					"e1-sm-so",
					"ext-rie-nord",
					"ext-rie-sud",
					"e0-amphi-rue",
					"e0-amphi-resto"
				);
				foreach ($cams as $cam)
				{
					echo "<a href='cam.php?cam=$cam'><img id='$cam' class='cam' src='http://scam.42.fr/cams/cam-$cam.jpg'></img></a>";
				}
				?>
			</div>
			<div class="list_friend">
				<table cellspacing="0">
					<?php
						$friend_list = ['vthomas'];
						sort($friend_list);
						$i = 0;

						foreach ($friend_list as $friend)
						{
							if ($i % 2)
								$style = "pair";
							else
								$style = "impair";


							echo <<<EOD
							<tr class="{$style}">
								<td class='td_img_profile'><a href="https://profile.intra.42.fr/users/{$friend}" target="_blank"><img src="https://cdn.intra.42.fr/users/medium_{$friend}.jpg" class="img_profile"></img></a></td>
								<td style="text-align: center;">
									<a href="https://profile.intra.42.fr/users/{$friend}" target="_blank">{$friend}</a>
								</td>
								<td style="text-align: center; width: 20vw;">
									<a href="https://stud42.fr/users/{$friend}" target="_blank">
										Stud<sub><img src="https://profile.intra.42.fr/assets/42_logo-7dfc9110a5319a308863b96bda33cea995046d1731cebb735e41b16255106c12.svg" style="height: 2vh; background-color: #0A0A0A;"></img></sub>
									</a>
								</td>
								<td style="text-align: center; width: 30vw;">
									<a href="https://projects.intra.42.fr/projects/graph?login={$friend}" target="_blank">Graph Project</a>
								</td>
							</tr>
EOD;
							$i++;
						}
					?>
				</table>
			</div>
		</div>
		<div class="onglet floating_win" id="yt" style="display: none;">
			<div class="yt_iframe">
				<iframe marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" width="1280" height="720" src="https://www.youtube.com/embed/rTfa-9aCTYg?list=PL8t64B4s2pUs4-YfiFMI7bFlonfEyHeYx" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="yt_iframe">
				<iframe marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" width="1280" height="720" src="http://www.dailymotion.com/embed/video/x15rrgb?autoPlay=1" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="onglet floating_win" id ="whatsapp" style="display: none;">
			<iframe marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" width="95%" height="99%" src="http://web.whatsapp.com"></iframe>
		</div>
		<script type="text/javascript">
		var en = true;
		function updateCam()
		{
			var value = (0 + Math.floor((999999999999) * Math.random()));
			<?php
				foreach ($cams as $cam)
				{
					echo "document.getElementById('$cam').setAttribute('src', 'http://scam.42.fr/cams/cam-$cam.jpg?' + value);".PHP_EOL;
				}
			?>
			if (en == true)
				setTimeout(updateCam, 2000);
		}
		setTimeout(updateCam, 2000);

		function change_state_bb()
		{
			document.getElementById('bb').style.display = 'block';
			document.getElementById('yt').style.display = 'none';
			document.getElementById('whatsapp').style.display = 'none';
			en = true;
			setTimeout(updateCam, 2000);
		}
		function change_state_yt()
		{
			document.getElementById('yt').style.display = 'block';
			document.getElementById('bb').style.display = 'none';
			document.getElementById('whatsapp').style.display = 'none';
			en = false;
		}

		function change_state_whats()
		{
			document.getElementById('whatsapp').style.display = 'block';
			document.getElementById('bb').style.display = 'none';
			document.getElementById('yt').style.display = 'none';
			en = false;
		}
		</script>
	</body>
</html>
