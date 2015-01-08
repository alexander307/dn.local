<?php echo $menu; ?>
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
       echo "<td><iframe width='200' height='150' src= '//".$moovie[$k]."' frameborder='0' allowfullscreen></iframe><br/>$name[$k]<hr/><table><tr><td><a href= '/vidvid/$id[$k]' class= 'iframe youtube' title= 'Комментировать'><img src = '".URL::base()."public/images/comm.png'></a></td>";
       if (Request::current()->param('id') == Cookie::get('user', 'no user'))
       { echo  "<td><form action='' method='post'><input type='hidden' name = 'send1' value = '".$id[$k]."'><input name='send' type='image' src = '".URL::base()."public/images/delete.png' /></form></td>"; }
       echo "</tr></table></td>";
        }
        
        if (isset($moovie[$k+1]))
        {
            $p = $k+1;
       echo "<td><iframe width='200' height='150' src= '//".$moovie[$k+1]."' frameborder='0' allowfullscreen></iframe><br/>".$name[$k+1]."<hr/><table><tr><td><a href= '/vidvid/".$id[$k+1]."' class= 'iframe youtube' title= 'Комментировать'><img src = '".URL::base()."public/images/comm.png'></a></td>";
       if (Request::current()->param('id') == Cookie::get('user', 'no user'))
                {echo  "<td><form action='' method='post'><input type='hidden' name = 'send1' value = '".$id[$k+1]."'><input name='send' type='image' src = '".URL::base()."public/images/delete.png' /></form></td>";}
       echo "</tr></table></td>";
       }
    if (isset($moovie[$k+2]))
        {
       echo "<td><iframe width='200' height='150' src= '//".$moovie[$k+2]."' frameborder='0' allowfullscreen></iframe><br/>".$name[$k+2]."<hr/><table><tr><td><a href= '/vidvid/".$id[$k+2]."' class= 'iframe youtube' title= 'Комментировать'><img src = '".URL::base()."public/images/comm.png'></a></td>";
             
               if (Request::current()->param('id') == Cookie::get('user', 'no user'))
               { echo  "<td><form action='' method='post'><input type='hidden' name = 'send1' value = '".$id[$k+2]."'><input name='send' type='image' src = '".URL::base()."public/images/delete.png' /></form></td>"; }
        
               echo "</tr></table></td>";
               }
       echo "</tr>";
    }
 ?> 
   
</table>

     
</div>

  <?php 
 //echo $cid[0];
  if (Request::current()->param('id') == Cookie::get('user', 'no user'))
{
 echo "<div id = 'add_vid'><a  href= '/add_video/$cid[0]' class= 'iframe youtube' title= 'Добавить видео по ссылке'><img src = '".URL::base()."public/images/add.png' width = '200%' height = '200%'></a></div>";
 echo "<div id = 'how'><a  href= '".URL::base()."public/images/faq.png' class= 'iframe youtube' title= 'Инструкция'><img src = '".URL::base()."public/images/how.png' width = '200%' height = '200%'></a></div>";
 }
 ?>