<div id ='video'>
<table border ='2px'id = 'vtable'>
    <caption align = 'cener'>Мои видеозаписи</caption>
   <?php 
   $i = 0;
   $k = 0;
foreach ($video as $v)
{ 
$moovie[] = $v->link;
$name[] = $v->name;
$id[] = $v->id;
$cid[] = $v->outer_id;
    //echo $moovie[$i];
    $i++;
    } 

$cou = count($moovie);
//echo $cou;


    for ($k == 0; $k < ($cou); $k = $k+3)
    {
        echo "<tr>";
        if (isset($moovie[$k]))
        {
       echo "<td><iframe width='200' height='150' src= '//".$moovie[$k]."' frameborder='0' allowfullscreen></iframe><hr/><br/><a href='http://".$moovie[$k]."' class='youtube iframe' title= 'Видос'>Смотреть: ".$name[$k]."</a>"
               . "<form action='' method='post'><input type='hidden' name = 'send1' value = '".$id[$k]."'><input name='send' type='image' src = '".URL::base()."public/images/delete.png' /></form></td>";
       
        }
        if (isset($moovie[$k+1]))
        {
            $p = $k+1;
       echo "<td><iframe width='200' height='150' src= '//".$moovie[$k+1]."' frameborder='0' allowfullscreen></iframe><hr/><br/><a href='http://".$moovie[$k+1]."' class='youtube iframe' title= 'Видос2'>Смотреть: ".$name[$k+1]."</a>"
                . "<form action='' method='post'><input type='hidden' name = 'send1' value = '".$id[$k+1]."'><input name='send' type='image' src = '".URL::base()."public/images/delete.png' /></form></td>";
        }
    if (isset($moovie[$k+2]))
        {
       echo "<td><iframe width='200' height='150' src= '//".$moovie[$k+2]."' frameborder='0' allowfullscreen></iframe><hr/><br/><a href='http://".$moovie[$k]."' class='youtube iframe' title= 'Видос3'>Смотреть: ".$name[$k+2]."</a>"
                . "<form action='' method='post'><input type='hidden' name = 'send1' value = '".$id[$k+2]."'><input name='send' type='image' src = '".URL::base()."public/images/delete.png' /></form></td>";
        }
       echo "</tr>";
    }
    
    
    


    ?> 
   
</table>

 <?php 
 //echo $cid[0];
 echo "<a href= '/add_video/$cid[0]' class= 'iframe' title= 'Добавить видео'>Добавить видео</a>"; ?>
</div>