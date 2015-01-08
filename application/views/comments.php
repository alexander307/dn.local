<?php 

$i = 0;
$k = 0;
$a = null;
echo $post->post;
echo "<br/><br/><hr/>";
 
foreach($comments as $key => $comment)
{
    $a[] = $comment->comment;
    $b[] = $comment->id;
   $i++;
}
$cou = count($a);

for ($k==0; $k<$i; $k++)
{
    if (isset($a[$k])) {
     echo "$a[$k]";
    echo "<form action='' method='post'><input type='hidden' name = 'send1' value = '".$b[$k]."'><input name='send' type='image' src = '".URL::base()."public/images/delete.png' /></form><br/>";
    
}}

?>


<div style="padding:10px;">
    <form action="" method="post">
        Ваш комментарий: <br />
        <textarea name="comment" cols="25" rows="3"></textarea><br /><br />
        <input name="send" type="submit" value="Отправить" />
    </form>
</div>
