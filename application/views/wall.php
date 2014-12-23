<!---- Форма для ввода поста --->
<div id = 'wall1'>
<div id = "post_container">
    <form action="" method="post">
        <b id = "napisat">Чем бы вы хотели поделится: </b><br />
        <textarea id = "post" name="post" cols="40" rows="5"></textarea><br /><br />
        <input name="send" type="image"  src = '<?php echo URL::base().'public/images/add.png' ?>' value="Отправить" class = "inline"/>
    </form>
</div>


<?php 
//Делаем массив комментириев, с помощью которого подсчитаем количество под каждым постом
$k = 0;
$arr = null;
foreach($comments as $key => $c)
{
    $com[] = $c->id;
    $come[] = $c->outer_id;
    $co[] = $c->comment;
    $arr[] = array($com[$k],$co[$k]);
   $k++;  
}
//Делаем массив постов, которые потом будем извлекать в обратном порядке
foreach($posts as $key => $post)
{
    $a[] = $post->post;
    $b[] = $post->id;

}

$i = count($a)-1; //всего постов
//Первый блок, который не будем скрывать
 //echo "<div id = 'wall1'>"; 
 //Выводим три последних поста
for ($j = $i; $j>=$i-2; $j--)
{
    echo "<div class = 'label'>";
echo "<div class = 'line'>$a[$j]</br>";
//echo "Номер поста: $b[$j]</br>";
echo "<div class = 'but'><a href= '/comments/$b[$j]' class= 'iframe' title= 'Комментировать'><img src = '".URL::base()."public/images/comm.png'></a></div>"; //Ссылка на фрейм комментария
//$p = 0;
 echo "<form  action='' method='post'><input type='hidden' name = 'send1' value = '".$b[$j]."'><input name='send' type='image' src = '".URL::base()."public/images/delete.png' /></form></div>";       
/*foreach ($arr as $x)
            {
                if ($x[0] == $b[$j]) 
                    {$p++; }
            }*/
//echo 'Комментириев:'; echo "$p";
echo '</div>';

}
echo "</div>";

 echo "<div id = 'wall2'>";
 
for ($j = $i-3; $j>=0; $j--)
{
    echo "<div class = 'label'>";
echo "<div class = 'line'>$a[$j]</br>";
//echo "Номер поста: $b[$j]</br>";
echo "<div class = 'but'><a href= '/comments/$b[$j]' class= 'iframe' title= 'Комментировать'><img src = '".URL::base()."public/images/comm.png'></a></div>";
echo "<form action='' method='post'><input type='hidden' name = 'send1' value = '".$b[$j]."'><input name='send' type='image' src = '".URL::base()."public/images/delete.png' title ='Удалить'/></form></div>";

 //$p = 0;
       /* foreach ($arr as $x)
        {
        if ($x[0] == $b[$j]) {
       
        $p++;
        }     
}*/
//echo 'Комментириев:'; echo "$p";
echo '</div>';
}
echo "</div>";

?>

