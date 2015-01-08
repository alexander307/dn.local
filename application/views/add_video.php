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
      #wide
      {width: 400px;
      float: right
      }
               

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
            name: {required: true,maxlength: 20},
                link: {required: true},
                description: {required: true}
                },
                
         messages:
                 {
                     name:
                     {required: "Ты либо уже пиши, либо не пиши!",
             maxlength: "Это название видео, или Война и Мир?"
                },
                     link: {required: "Как же так без ссылка?"},
                description: {required: "Введи описание! Пусть они знают!"}
               
                 },
                 
                     
                      errorPlacement: function(error, element) {
    error.appendTo( element.parent("td").next("td") );
  }
                     
                    
     });
     
});
</script>

</head>
<body>
<div id = "vidos">
    <form action="" method="post" id = "border1">
        Добавить видео: <br />
        <table id ="vidos">
            <tr>
                <td>Введите название</td>
                <td><input type = "text" name = "name" size = "40"  class = "cell" /></td>
                <td id = "wide"></td>
            </tr>
            <tr>
                <td>Введите ссылку на видео</td>
                <td><textarea  name="link" cols="40" rows="2"></textarea></td>
                <td></td>
            </tr>
            <tr>
                <td>Введите описание видео</td>
                <td><textarea  name="description" cols="40" rows="4"></textarea></td>
                <td></td>
            </tr>
        <br />
        <input name="send2" type="submit" value="Отправить" />
        </table>
    </form>
</div>
</body>

