<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     
    <link href="<?php echo URL::base(); ?>public/css/player.css" 
    rel="stylesheet" type="text/css" />
    <script src="<?php echo URL::base(); ?>public/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo URL::base(); ?>public/js/audiojs/audio.min.js"></script>
    <style>
        .left_
        {
            float: left;
        }
        .right_
        {
            float: right;
            position: relative;
            bottom: 30px;
        }
    </style>
    <script>
        $(document).ready(function()
{
      $(function() { 
        // Setup the player to autoplay the next track
        var a = audiojs.createAll({
          trackEnded: function() {
            var next = $('ol li.playing').next();
            if (!next.length) next = $('ol li').first();
            next.addClass('playing').siblings().removeClass('playing');
            audio.load($('a', next).attr('data-src'));
            audio.play();
          }
        });
        
        // Load in the first track
        var audio = a[0];
            first = $('ol a').attr('data-src');
        $('ol li').first().addClass('playing');
        audio.load(first);

        // Load in a track on click
        $('ol li').click(function(e) {
          e.preventDefault();
          $(this).addClass('playing').siblings().removeClass('playing');
          audio.load($('a', this).attr('data-src'));
          audio.play();
        });
        // Keyboard shortcuts
        $(document).keydown(function(e) {
          var unicode = e.charCode ? e.charCode : e.keyCode;
             // right arrow
          if (unicode == 39) {
            var next = $('li.playing').next();
            if (!next.length) next = $('ol li').first();
            next.click();
            // back arrow
          } else if (unicode == 37) {
            var prev = $('li.playing').prev();
            if (!prev.length) prev = $('ol li').last();
            prev.click();
            // spacebar
          } else if (unicode == 32) {
            audio.playPause();
          }
        })
      });
      
      });
    </script>
  </head>
  <body>
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
      
    <div id="wrapper">
      
      <div class="audiojs " classname="audiojs" id="audiojs_wrapper0"><audio preload="" src="<?php echo URL::base(); ?>audio/<?php echo $outer_id[0];  ?>"></audio>          <div class="play-pause">             <p class="play"></p>             <p class="pause"></p>             <p class="loading"></p>             <p class="error"></p>           </div>           <div class="scrubber">             <div class="progress" style="width: 0px;"></div>             <div class="loaded" style="width: 167.825410851748px;"></div>           </div>           <div class="time">             <em class="played">00:00</em>/<strong class="duration">03:57</strong>           </div>           <div class="error-message"></div></div>
      <ol>
          <?php for ($i==0; $i < $cou-1; $i++) { ?>
          <li><a href="<?php echo URL::base(); ?>audio/<?php echo $outer_id[$i];  ?>"
               data-src="<?php echo URL::base(); ?>public/mp3/<?php echo $outer_id[$i]."/".$id[$i].".mp3";  ?>">
                <?php echo $artist[$i]." - ".$track[$i] ?>
                  </a> 
      
        </li>
        <?php   echo "<div class = 'right_'><form action='' method='post'><input type='hidden' name = 'send1' value = '".$id[$i]."'><input name='send' type='submit' value = 'x' title ='Удалить'/></form></div>"; ?>
        <?php } ?>
        
      </ol>
    </div>
   <!---- <div id="shortcuts">
      <div>
        <h1>Горячие клавишы:</h1>
        <p><em>→</em> Следующий трек</p>
        <p><em>←</em> Предыдущий трек</p>
        <p><em>Space</em> Play/pause</p>
      </div>
    </div>----->
  <div id = 'downloadava'>
   <?php //if ($id == Cookie::get('user', 'no user')) { ?> 
<form enctype="multipart/form-data" action ="" method ="POST">
    
     <input  type ="file" name ="track"  />
     <br/>
     <input type = "text" name = "artist" size = "20" value = "Исполнитель" /><br/>
     <input type = "text" name = "track" size = "20" value = "Песня" /><br/>
    <input  type='submit'  value ="Загрузить" width = '60%' height="60%"/>
   <input type='hidden' name = 'send' value = 'send' width = 0 height="0">
  
  
</form>
  </div>
      <?php //}
     ?>

</body></html>