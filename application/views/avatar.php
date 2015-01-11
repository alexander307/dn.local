<?php
$id = Request::current()->param('id');
$k = ORM::factory('maininformation', $id)->as_array();
$m = (string)$k['ava'];
if ($m != null) {

?>
<img id= "avatar_photo" src ="<?php echo URL::base(); ?>public/photo/<?php echo "$id/$m" ?>"   height =77% width = 100%/> 

<?php } else { ?>

<img id= "avatar_photo" src ="<?php echo URL::base(); ?>public/images/no_ava.png"   height =77% width = 100%/>
    
<?php } ?>
<div id = 'downloadava'>
   <?php if ($id == Cookie::get('user', 'no user')) { ?> 
<form enctype="multipart/form-data" action ="" method ="POST">
    
     <input id= "2" type ="file" name ="avatarfile" value = 'Выбери изображение для авы' />
     <br/>
     
    <input id ="1" type='image' src = '<?php echo URL::base()."public/images/downloadava.png"; ?>' value ="avochka" width = '60%' height="60%"/>
   <input type='hidden' name = 'send1' value = 'send1' width = 0 height="0">
  
  
</form>
  </div>


   <div id = 'deleteava'> 
    <form action='' method='post'>
        
<input  type='image' src = '<?php echo URL::base()."public/images/deleteava.png"; ?>' height="50%" width = "50%" />
<input type='hidden' name = 'send' value = 'delete' width = 0 height="0">
    </form>
     <?php }
     ?>   
   </div>

  