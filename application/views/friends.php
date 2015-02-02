<?php echo $menu; ?>
<div class = 'friends'>
    <h3>Заявки в друзья</h3>
    <?php 
    $i = null;
    $zayavka = null;
    if ($request!=null){
    foreach ($request as $key => $value)
        {
        $zayavka[] = $value->friend_id;
       
        $main_id1[] = $value->id;
         }
        $zavky = count($zayavka);
        for($i = 0; $i < $zavky; $i++)
        {
         $avatar_url = 'avatar/index/'.$zayavka[$i]; //$id;
        $avatar = Request::factory($avatar_url)->execute();?> 
    <table><tr><td>
    <div class ='friends'>
    <div id ="avatar2">
     
       <?php  echo $avatar; ?>
     
    </div></td>
    <td> <?php $name = ORM::factory('unique', $zayavka[$i])->as_array();
     //print_r($name);
     echo $name['name']." ".$name['patronomyc']." ".$name['surname'];
     ?>
     </td>
    <td>
<div id ="friends_right">
        <form action ="" method ="post">
            <input type='hidden' name = 'add' value = '<?php echo $main_id1[$i]?>'>
            <input type='hidden' name = 'add1' value = '<?php echo $zayavka[$i]?>'>
            <input name="send" type="submit"  value="Добавить" /> 
        </form>
        
        <form action ="" method ="post">
            <input type='hidden' name = 'del1' value = '<?php echo $main_id1[$i]?>'>
            <input name="send" type="submit"  value="Не добавлять" /> 
        </form>
</div>
</div>
            </td></tr></table><hr/>
    <?php }}
   ?>
</div> 

       

<div class ='friends'>
    <h3>Друзья</h3>
      <?php 
    $j = null;
    if ($friends!=null){
    foreach ($friends as $key => $value)
        {
        $friend[] = $value->friend_id;
        $main_id2[] =$value->id;
         }
        $count = count($friend);
        for($j = 0; $j < $count; $j++)
        {
         $avatar_url = 'avatar/index/'.$friend[$j]; //$id;
        $avatar = Request::factory($avatar_url)->execute();?> 
    <table><tr><td>
    <div class = 'friends'>
    <div id ="avatar2">
       <?php  echo $avatar; ?>
 </div>
    </td>
    <td> <?php $name = ORM::factory('unique', $friend[$j])->as_array();
     //print_r($name);
     echo $name['name']." ".$name['patronomyc']." ".$name['surname'];
     ?>
     </td>
    <td>
    <div id ="friends_right">
        <form action ="" method ="post">
            <input type='hidden' name = 'letter' value = '<?php echo $main_id2[$j]?>'>
            <input name="send" type="submit"  value="Письмо" /> 
        </form>
        
        <form action ="" method ="post">
            <input type='hidden' name = 'del2' value = '<?php echo $main_id2[$j]?>'>
            <input name="send" type="submit"  value="Не друг" /> 
        </form>
</div>
</div>
            </td></tr></table><hr/>
    <?php }}?>
</div>

