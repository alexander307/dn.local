 <head>
    <style>
      #vidos
      {
          border: 1px dotted gray;
          padding: 2px;
         }
         #red{
             padding-left: 10px;
             padding-right: 25px;
         }
          
   label { display: inline-block; width: 20%; }        
      
               

.error {
  font-size: 10pt;
  font-family: monospace;
  font-variant: normal;
  color: #F00;
  font-weight: bold;
  display: block;
 
}
input.error,  select.error  {
  background: #FFA9B8;
  border: 1px solid red;
}

      
    </style> 
    <script src="<?php echo URL::base(); ?>public/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/jquery.validate.min.js"></script>
<script>
$(document).ready(function()
{
$('#border1').validate({
         
         rules: {
            video_comments: {
                required: true,
                maxlength: 50}
                },
         messages:
                 {
                     video_comments:
                     {  required: "Ты либо уже пиши, либо не пиши!",
                         maxlength: "Воу-воу, это не Война и Мир!"}
                 },
                     
                      errorPlacement: function(error, element) {
    error.appendTo( element.parent("td").next("td") );
  }
                     
                    
     });
     
});
</script>

</head>
<body>
    <h1><?php echo "$video[name]"; ?></h1>
<iframe width="600" height="400" src="//<?php echo "$video[link]";?>" frameborder="0" allowfullscreen></iframe>
<br/>
<?php 
$i = 0;
$k = 0;
$a = null;
$l = null;

//echo "$video[link]</br>";
echo "$video[description]"; ?>
<div id = "registry">
    <form action="" method="post" id = "border1">
        <table>
            <tr><td>
        Ваш комментарий: <br />
        <textarea name="video_comments" cols="50" rows="3"></textarea>
                </td><td></td><td><input name="send" type="image"  src = '<?php echo URL::base().'public/images/add.png' ?>' value="Отправить" class = "inline"/>
        </td></tr>
        </table>
    </form>
</div><?php
echo "<hr/>";
 $c = "$video[outer_id]";
 $user = Cookie::get('user', 'no user');
 //echo $c;
foreach($video_comments as $key => $comment)
{
    $a[] = $comment->id;
    $b[] = $comment->comment;
    $l[] = $comment->ava_id;
   $i++;
}
$cou = count($a);

for ($k==0; $k<$i; $k++)
{
    echo "<table id = 'vidos'>";
    if (isset($a[$k])) {
        echo "<td id = 'red'><a href = '".URL::base()."user/$l[$k]'> <img src ='".URL::base()."public/photo/$l[$k]/ava.jpg'   height ='40px' width = '40px'/> </a></td>";
     //echo "$a[$k]"; 
     echo "<td width = 500px'>$b[$k]</td><td></td>";
     
     if ($c == Cookie::get('user', 'no user'))
{
    echo "<td><form action='' method='post'><input type='hidden' name = 'send1' value = '".$a[$k]."'><input name='send' type='image' src = '".URL::base()."public/images/delete.png' /></form></td>";
}
}} 
?>

</body>
