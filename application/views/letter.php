
<?php 
foreach ($letter_out as $key => $value)
{
    $array_id = $value->id;
    $my_id = $value->my_id;
    $friend_id = $value->friend_id;
    $message = $value->message;
    echo "$array_id, $my_id, $friend_id, $message";
    $letters_out[$array_id] = array($array_id, $my_id, $friend_id, $message);
}
print_r($letters_out);
foreach ($letter_in as $key => $value)
{
    $array_id = (string)$value->id;
    $my_id = $value->my_id;
    $friend_id = $value->friend_id;
    $message = $value->message;
    echo "$array_id, $my_id, $friend_id, $message";
    $letters_in[] = array($array_id, $my_id, $friend_id, $message);
   
}
@print_r($letters_in);

$all_letters = array_merge($letters_out, $letters_in);
echo "<br/>";
print_r($all_letters);
echo "<br/>";

foreach($all_letters as $key => $value)
{
    $id = $value[0];
 $all_letter_right[$id] = array($value[1], $value[2], $value[3]);   
}

print_r($all_letter_right);
echo "<br/>";
$all = ksort($all_letter_right);
print_r($all); 
?>


<div style="padding:10px;">
    <form action="" method="post">
        Письмо другу <br />
        <textarea name="comment" cols="25" rows="3"></textarea><br /><br />
        <input name="send" type="submit" value="Отправить" />
    </form>
</div>
</body>

