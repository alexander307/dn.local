<div class="main">
		<h1>Галерея</h1>
		<div id="gallery">
                    <?php 
   $i = 0;
   $k = 0;
foreach ($photo as $f)
{ 
$id[] = $f->id;
$name[] = $f->name;
$desc[] = $f->description;
$oid[] = $f->outer_id;
    //echo $moovie[$i];
    
    } 
    $cou = count($photo);
    //echo $cou;
    //echo $oid[0];
    //echo $id[0];
    ?>
    
                 <?php for ($i==0; $i<$cou; $i++) { ?>  
		<a href="<?php echo URL::base(); ?>public/photo/<?php echo "/$oid[0]/$id[$i].jpg"?>" rel="gallery" title="<?php echo "$name[$i]" ?>">
                    <img src="<?php echo URL::base(); ?>public/photo/<?php echo "/$oid[0]/$id[$i].jpg"?>" width="70" height="70" alt="golf balls">
                    <?php if ((($i+1)%6) == 0)
                        echo "<br/>"; ?>
                </a>
                    
                 <?php } ?>  
	</div>



