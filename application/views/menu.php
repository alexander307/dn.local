<head>
 <?php $my_id = (Cookie::get('user', '0'));   ?>
    
   
<script src="<?php echo URL::base(); ?>public/js/nav1.1.min.js"></script>
    
    <script>
    $(document).ready(function() {
 $("#navigation").navPlugin({
   'itemWidth': 110,
   'itemHeight': 28,
   'navEffect': "slide",
   'speed': 250
 });
}); // end ready
</script>
    
</head>

<div id = "menu">
	<!--- <input type = "text" name = "search" size = "20" value = "Поиск..."/> ---->
<ul id ="navigation">        
    <li><a href = "<?php echo URL::base();?>/user/<?php echo $my_id ?>">домой</a></li>
    <li><a href = "#">граждане</a>
        <ul>
            <li><a href = "#">все граждане</a></li>
            <li><a href = "#">товарищи</a></li>
        </ul>
    </li>    
        <li><a href = "#">сообщества</a>
            <ul>
            <li><a href = "#">все сообщества</a></li>
            <li><a href = "#">мои сообщества</a></li>
        </ul>
        
        </li> 
        <li><a href = "#">музыка</a></li> 
        <li><a href = "#">видео</a></li>
        <li><a href = "#">F.A.Q.</a></li> 
        <li><a href = "#">поддержка</a></li>
        <li> <a href = "<?php echo URL::base(); ?>">выход</a></li>
            
      
 </ul>       
        
</div>

