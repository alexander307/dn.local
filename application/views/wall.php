<div id = "post_container">
    <form action="" method="post">
        Чем бы вы хотели поделится: <br />
        <textarea id = "post" name="post" cols="40" rows="5"></textarea><br /><br />
        <input name="send" type="submit" value="Отправить" />
    </form>
</div>
<a href="www.yandex.ru/" class="iframe" title="Yandex">Yandex</a>
<a href="/comments/1" class="iframe" title="Yandex">Yandex</a>

<?php 
//echo print_r($comments)."<br/>" ;
//echo $posts['post'];
$k = 0;
foreach($comments as $key => $c)
{
    $com[] = $c->post_id;
    $come[] = $c->comment_id;
    $co[] = $c->comment;
    $arr[] = array($com[$k],$co[$k]);
    
    //echo '</br>'.$com[$k].$come[$k].$co[$k].'</br>';
    $k++;
    
}


foreach($posts as $key => $post)
{
    $a[] = $post->post;
    $b[] = $post->post_id;
    

}
$i = count($a)-1;
 echo "<div id = wall1>";
for ($j = $i; $j>=$i; $j--)
{
echo "$a[$j]</br>";
echo "Номер поста: $b[$j]</br>";
echo "<div class = 'comment1'>Комментарии</div>";
 echo "<div class = 'comment2'></br>";
 
foreach ($arr as $x)
{
    
       if ($x[0] == $b[$j]) {
         
        echo $x[1];
        echo $x[0];
       echo '</br>'; }
}


   echo  "<form action='' method='post'>
        Покритикуйте этот пост: <br />
        <textarea name='comment' cols='20' rows='3'></textarea><br /><br />
        <input type = 'hidden' name = 'post_id' value = '".$b[$j]."' />
        <input name='send' type='submit' value='Отправить' />
    </form>
</div>";
echo '<hr/>';


}
echo "</div>";

 echo "<div id = wall2>";
 
for ($j = $i-1; $j>=0; $j--)
{
echo "$a[$j]</br>";
echo "Номер поста: $b[$j]</br>";

echo "<div class = 'comment1'>Комментарии</div>";

 echo "<div class = 'comment2'></br>";
foreach ($arr as $x)
{
    
       if ($x[0] == $b[$j]) {
         
        echo $x[1];
        echo $x[0];
       echo '</br>'; }
}


   echo  "<form action='' method='post'>
        Покритикуйте этот пост: <br />
        <textarea name='comment' cols='20' rows='3'></textarea><br /><br />
        <input type = 'hidden' name = 'post_id' value = '".$b[$j]."' />
        <input name='send' type='submit' value='Отправить' />
    </form>
</div>";
echo '<hr/>';

}
echo "</div>";

?>

