<?php 
$i = 0;
foreach ($video as $v) 
{ 
$moovie[] = $v->link;
$name[] = $v->name;
//$id[] = $v->id;
//$cid[] = $v->outer_id;
    //echo $moovie[$i];
    $i++;
    } 
$cou = count($moovie);
?>
<div id = "video1"><?php echo "<td><iframe width='100%' height='100%' src= '//".$moovie[$cou-1]."' frameborder='0' allowfullscreen></iframe><br/><a href='http://".$moovie[$cou-1]."' class='youtube iframe' title= 'Видос'>Смотреть: ".$name[$cou-1]."</a>"; ?></div>
<div id = "video2"><?php echo "<td><iframe width='100%' height='100%' src= '//".$moovie[$cou-2]."' frameborder='0' allowfullscreen></iframe><br/><a href='http://".$moovie[$cou-2]."' class='youtube iframe' title= 'Видос'>Смотреть: ".$name[$cou-2]."</a>"; ?></div>
