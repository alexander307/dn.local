<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<!-- Website Design By: www.happyworm.com -->
<title>Demo : jPlayer as an audio playlist player</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="<?php echo URL::base(); ?>public/js/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/lib/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/dist/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/dist/add-on/jplayer.playlist.min.js"></script>


<script>
//<![CDATA[
<?php
foreach($audio as $key => $player)
{
    $outer_id[] = $player->outer_id;
    $id[] = $player->id;
    $artist[] = $player->artist;
    $track [] = $player->track;
   
}

$cou = count($audio);
$i = 0;
?>
    
$(document).ready(function(){

	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
            <?php for ($i==0; $i < $cou-1; $i++) { ?>
		{
			title:"<?php echo $artist[$i]." - ".$track[$i] ?>",
			mp3:"<?php echo URL::base(); ?>public/mp3/<?php echo $outer_id[$i]."/".$id[$i].".mp3";  ?>"
                        
                       
		},
		
            <?php } ?>
		
	],
        {
  playlistOptions: {
    enableRemoveControls: true
  }},
        
        {
		swfPath: "<?php echo URL::base(); ?>public/js/dist/jplayer",
		supplied: "oga, mp3",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
                
	});
});
//]]>
</script>
</head>
<body>
    <?php //echo "$cou"; ?>
<div id="jquery_jplayer_1" class="jp-jplayer"></div>
<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
	<div class="jp-type-playlist">
		<div class="jp-gui jp-interface">
			<div class="jp-controls">
				<button class="jp-previous" role="button" tabindex="0">previous</button>
				<button class="jp-play" role="button" tabindex="0">play</button>
				<button class="jp-next" role="button" tabindex="0">next</button>
				<button class="jp-stop" role="button" tabindex="0">stop</button>
			</div>
			<div class="jp-progress">
				<div class="jp-seek-bar">
					<div class="jp-play-bar"></div>
				</div>
			</div>
			<div class="jp-volume-controls">
				<button class="jp-mute" role="button" tabindex="0">mute</button>
				<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
			</div>
			<div class="jp-time-holder">
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
			</div>
			<div class="jp-toggles">
				<button class="jp-repeat" role="button" tabindex="0">repeat</button>
				<button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
			</div>
		</div>
		<div class="jp-playlist">
			<ul>
                            <li>&nbsp;</li>
			</ul>
                  
		</div>
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>
</body>

</html>