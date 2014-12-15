<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!-- <link href="<?php //echo URL::base(); ?>public/js/anythingSlider/anythingslider.css" 
    rel="stylesheet" type="text/css" /> -->

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


<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
    rel="stylesheet" type="text/css" />
    
    
<?php endforeach; ?>
  <link rel="shortcut icon" href="<?php echo URL::base(); ?>public/images/favicon.png" type="image/png"/>  
  <script>
$(document).ready(function()
{ //$('#slider').hide();
    $('#slider').anythingSlider(
            {
        theme: "cs-portfolio", //поменял стандартную тему - эта больше дизайну сайта соответствует
        easing: 'easeInOutBack', //анимация прокрутки
        animationTime: 1000, //время анимации
        buildStartStop: false //убрать кнопки Старт/Стоп     
            }
                );
                //$('#wall2').hide();
   
     
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
		width : '50%',
		height : '50%',
		titlePosition: 'outside'
	});// конец fancybox
   $(".youtube").fancybox({
            width : '100%',
		height : '100%'
            }); 
$('.comment2').hide();
$('.comment1').click(function()
    {
        
         $(this).next('.comment2').fadeToggle(800);
         
    }); 
    
   




	/*
	 * Instance CirclePlayer inside jQuery doc ready
	 *
	 * CirclePlayer(jPlayerSelector, media, options)
	 *   jPlayerSelector: String - The css selector of the jPlayer div.
	 *   media: Object - The media object used in jPlayer("setMedia",media).
	 *   options: Object - The jPlayer options.
	 *
	 * Multiple instances must set the cssSelectorAncestor in the jPlayer options. Defaults to "#cp_container_1" in CirclePlayer.
	 *
	 * The CirclePlayer uses the default supplied:"m4a, oga" if not given, which is different from the jPlayer default of supplied:"mp3"
	 * Note that the {wmode:"window"} option is set to ensure playback in Firefox 3.6 with the Flash solution.
	 * However, the OGA format would be used in this case with the HTML solution.
	 */

	var myCirclePlayer = new CirclePlayer("#jquery_jplayer_1",
	{
		m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
		oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
	}, {
		cssSelectorAncestor: "#cp_container_1",
		swfPath: "../../dist/jplayer",
		wmode: "window",
		keyEnabled: true
	});  
   
   

});
</script>       
</head>
<body id = "body">
    <!-- The jPlayer div must not be hidden. Keep it at the root of the body element to avoid any such problems. -->
			<div id="jquery_jplayer_1" class="cp-jplayer"></div>
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
</div>
</body>
</html>
