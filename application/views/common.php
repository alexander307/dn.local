<!DOCTYPE HTML > <!----PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"---->
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!-- <link href="<?php //echo URL::base(); ?>public/js/anythingSlider/anythingslider.css" 
    rel="stylesheet" type="text/css" /> -->
<link href="<?php echo URL::base(); ?>public/js/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::base(); ?>public/js/anythingSlider/theme-cs-portfolio.css" 
    rel="stylesheet" type="text/css" />
<link href="<?php echo URL::base(); ?>public/js/fancybox/jquery.fancybox-1.3.4.css" 
    rel="stylesheet" type="text/css" />


<script src="<?php echo URL::base(); ?>public/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo URL::base(); ?>public/js/jquery.easing.1.3.js"></script>
<script src="<?php echo URL::base(); ?>public/js/anythingSlider/jquery.anythingslider.js"></script>
<script src="<?php echo URL::base(); ?>public/js/fancybox/jquery.fancybox-1.3.4.min.js"></script>


<link rel="stylesheet" href="<?php echo URL::base(); ?>public/js/skin/circle.player/circle.player.css">

<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/dist/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/lib/jquery.transform2d.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>public/jslib/jquery.grab.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/lib/mod.csstransforms.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/lib/circle.player.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/jquery.validate.min.js"></script>

<script src="//cdn.ckeditor.com/4.4.6/full/ckeditor.js"></script> <!--- заменить на ссылку из паки js --->



<!------Подключение стилей ------>
<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
    rel="stylesheet" type="text/css" />
<?php endforeach; ?>
    
  <!------Иконка ДН на вкладке ------>  
  <link rel="shortcut icon" href="<?php echo URL::base(); ?>public/images/favicon.png" type="image/png"/>  
  <?php $post_id = Request::current()->action();
if ($post_id == "step5") { ?>
  <!---капча--->
<link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>public/css/jquery.realperson.css"> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/jquery.plugin.js"></script> 
<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/jquery.realperson.js"></script>

<script>
$(function() {
	$('#defaultReal').realperson(
                {regenerate:	'Изменить'});
});
</script>
<?php };?>



  <script>
      
      
  
      
$(document).ready(function()
{ //$('#slider').hide();
     $('.cell').focus(function(){
            var field = $(this);
            if (field.val()==field.attr('value')){
                field.val('');
            }
        }); 
    
    $('#slider').anythingSlider(
            {
        theme: "cs-portfolio", //поменял стандартную тему - эта больше дизайну сайта соответствует
        easing: 'easeInOutBack', //анимация прокрутки
        animationTime: 1000, //время анимации
        buildStartStop: false //убрать кнопки Старт/Стоп     
            }
                );
                //$('#wall2').hide();
       $('#slid').anythingSlider(
            {
        theme: "cs-portfolio", //поменял стандартную тему - эта больше дизайну сайта соответствует
        easing: 'easeInOutBack', //анимация прокрутки
        animationTime: 1000, //время анимации
        buildStartStop: false, //убрать кнопки Старт/Стоп   
        resizeContents: true
            }
                );         
                
   
     
    $('#wall1').click(function()
    {
        
         $('#wall2').slideToggle(800);
         $('#sign').slideToggle(  //разобраться почему не работает функция Анимейт
                 10000, 'easeOutBounce'
                );
         
         
         $('#footer').fadeToggle(10000,'easeOutBounce');
    }); 
    
    
    $('#gallery a').fancybox({
		overlayColor: '#060',
		overlayOpacity: .3,
		transitionIn: 'elastic',
		transitionOut: 'elastic',
		easingIn: 'easeInSine',
		easingOut: 'easeOutSine',
		titlePosition: 'outside' ,		
		cyclic: true
	});
    $('.iframe').fancybox({
		width : '60%',
		height : '50%'	
	});// конец fancybox
        
        
                $('#music').click(function()
        {$("#fancybox-outer").css( {right: '-55%',
                top: '10px',
         position: 'fixed' 
        });
        });
        
        
        $('#content').click(function()
        {$("#fancybox-outer").css( {right: '0px',
        position: 'relative'    
        });
        });
        
        $(".musica").fancybox({
        height: '150%',
        //titlePosition: 'inside',
        width: '40%',
        overlayOpacity: 0.5
        //hideOnOverlayClick: false,
        
        });
        
        
   $(".youtube").fancybox(
           
                {
        width : '53%',
	height : '100%'
            }); 
            
            
     $('#border1').validate({
         
         rules: {
            video_comments: {rangelength: [4,16]},               
            login: {required: true, rangelength: [4,16]},
            password:{required: true,rangelength: [4,16] },
            password1:{equalTo: '#password'},
                            name:{required: true},
                            surname:{required: true},
                            patronomyc:{required: true},
                             nickname:{required: true},
                             sex:{required: true},
                             family: {required: true},
                             day: {required: true},
                             month: {required: true},
                             year: {required: true},
                             native_town: {required: true},
                             country: {required: true},
                             city: {required: true},
                             street: {required: true},
                             number: {required: true, digits: true},
                             email: {required: true, email: true},
                             country1: {required: true},
                             country2: {required: true},
                             country3: {required: true},
                             country4: {required: true},
                             city1: {required: true},
                             city2: {required: true},
                             city3: {required: true},
                             city4: {required: true},
                             school1: {required: true},
                             school2: {required: true},
                             school31: {required: true},
                             school32: {required: true},
                             school4: {required: true},
                             year11: {required: true},
                             year12: {required: true},
                             year21: {required: true},
                             year22: {required: true},
                             year31: {required: true},
                             year32: {required: true},
                             year41: {required: true},
                             year42: {required: true}
                             
                             
                             
                     
         },
         messages:
                 {
                     login:
                     { required: "Введи свой логин, как без этого то?"},
                  password:
                     { required: "Тебе не нужен пароль?",
                rangelength: "Пароль должен быть от 4 до 16ти символов" },
                password1:
                     { equalTo: "Пароль не совпадает"},
                     name: {required: "Как тебя зовут то?"},
                    surname:{required: "Фамилия есть, Шариков?"},
                     patronomyc:{required: "Как вас по отчеству?"},
                             nickname:{required: "Никнейм?"},
                             sex:{required: "Да ВАМ в самую пору на Евровидение!"},
                             family: {required: "Асоциальный Вы типчик!"},
                             day: {required: "К сожаленью день рожденья..."},
                             month: {required: "К сожаленью день рожденья..."},
                             year: {required: "К сожаленью день рожденья..."},
                             native_town: {required: "Где ты родился, Землянин?"},
                             country: {required: "Рожденный в СССР"},
                             city: {required: "Не бойся, вводи, мы не ЧК"},
                             street: {required: "Не бойся, вводи, мы не ЧК"},
                             number: {required: "Не бойся, вводи, мы не ЧК", digits: "Милейший, это ж цифры!"},
                             email: {required: "Без почты ну никак нельзя!", email: "Это не электронная почта!"}
                     },
                     
                      errorPlacement: function(error, element) {
    error.appendTo( element.parent("td").next("td") );
  }
                     
                    
     });             
             //Капча
       

});
</script>  



</head>
<body id = "body">
    
 <div id = "container" >
    <div id = "header">
        <div id = "header1"><a href="<?php echo URL::site(); ?>"><img width = "300px" height="173px" src="<?php echo URL::base(); ?>public/images/header1.png"></div></a>
     
     <div id = "header2"><img width = "500px" height="173px" src="<?php echo URL::base(); ?>public/images/ussr.png"></div>
     
<div id = "header3">
<table border = "2" color = "blue">
<tr>
    <th colspan="5"><a href ="1. Russia.png"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/1. Russia.png"></a></th>
    <th colspan="5"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/2. Ukraine.png"></th>
    <th colspan="5"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/3. Belarus.png"></th>
    <th colspan="5"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/4.Moldova.png"></th>
	
</tr>
<tr>
	<th colspan="2"></th>
        <th colspan="6"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/5. Estonia.png"></th>
        <th colspan="6"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/6.Lithuania.png"></th>
        <th colspan="6"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/7.Latvia.png"></th>
	
        
        
</tr>
<tr>
	<th colspan="2"></th>
        <th colspan="6"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/8. Azerbaijan.png"></th>
        <th colspan="6"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/9. Armenia.png"></th>
        <th colspan="6"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/10. Georgia.png"></th>
</tr>
<tr>
    <th colspan="4"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/11. Kazakhstan.png"></th>
    <th colspan="4"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/12. Kyrgyzstan.png"></th>
    <th colspan="4"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/13. Uzbekistan.png"></th>
    <th colspan="4"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/14. Tajikistan.png"></th>
    <th colspan="4"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/15. Turkmenistan.png"></th>
</tr>
</table>
</div> 
</div>
 
		
                    <?php echo $content; ?>
		
<div id = "sign">
			<div id = "sign1"><a href="http://kohanaframework.su/" target="_blank"><img src="http://kohanaframework.su/kohana.png" border="0" alt="Фреймворк Kohana v3.2. Документация. Обучение" title="Фреймворк Kohana v3.2. Документация. Обучение"/></a></div>
			<div id = "sign2">Большая реклама 2</div>
			<div id = "sign3">
				<div id = "sign31">Реклама поменьше 1</div>
				<div id = "sign32">
				<table border = "2" color = "blue" id = "table1">
					<tr><th>Еще меньше1</th><th>Еще меньше2</th></tr>
					<tr><th>Уще меньше3</th><th>Еще меньше4</th></tr>
				</table>
				</div>
				<div id = "sign33">Реклама поменьше 2</div>
				<div id = "sign34">
				<table border = "2" color = "blue" id = "table1">
					<tr><th>вот</th><th>бы</th><th>вся</th><th>ре</th></tr>
					<tr><th>кла</th><th>ма</th><th>была</th><th>та</th></tr>
					<tr><th>кой</th><th>же</th><th>мале</th><th>нь</th></tr>
					<tr><th>кой</th><th>и не</th><th>на вяз</th><th>чивой</th></tr>
				</table>	
				</div>
			</div>
			</div>
  <footer id = "footer">
    <marquee> Copyright Александр Ковальчук </marquee>
  </footer>
		</div>

</body>
</html>
