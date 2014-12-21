 <div id = "menu">
	<input type = "text" name = "search" size = "20" value = "Поиск..."/>
	ГРАЖДАНЕ | СООБЩЕСТВА | МУЗЫКА | ВИДЕО | НОВОСТИ | F.A.Q. | ПОДДЕРЖКА |	
        <?php  echo " "." "." "." ".$unique_['name']." ".$unique_['patronomyc']." ".$unique_['surname'] ; ?> выход
</div>
<div id= "content">
    <div id = "content_left">
	<div id = "avatar">
            
            <img src ="<?php echo URL::base(); ?>public/images/ava.jpg"   height =100% width = 100%/>
        </div>
	<div id = "info">
            <div id ="slider">
                 
               <div><div class ="slide1"> <?php 
                            echo "<b> О главном</b> <hr/>";
                            echo "<b>День рождения: </b><i>".$main_information['Birthday_date']."</i><br/>";
                            echo "<b>Родной город: </b><i>".$main_information['Native_town']."</i><br/>";
                            echo "<b>Семейное положение:</b><i> ".$main_information['MS']."</i><br/><hr/>";
                            echo "<b>Контактная информация</b> <hr/>";
                            echo "<b>Адрес: </b><i>".$adress['country'].", ".$adress['city'].", ".$adress['street'].", ".$adress['house'].".</i><br/>";
                            echo "<b>Электронная почта: </b><i>".$unique_['email']."</i><br/>";
                            echo "<hr/>"; 
                            ?></div></div>
                <?php
                    echo "<div><div class ='slide1'><b>Где я только не учился:</b> <hr/><br/>" ;
                         echo "<b>ВУЗ: </b><i>".$high_education['country'].", ".$high_education['city'].", ".$high_education['university'].", ".$high_education['year_1']."-".$high_education['year_2']."</i><br/>";
                            
                         echo "<b>Воинская служба:</b> <i>".$service['country'].", ".$service['military_unit'].", ".$service['year_1']."-".$service['year_2']."</i><br/>";
                         
                         echo "<b>Моя любимая работа: </b><i>".$job['country'].", ".$job['city'].", ".$job['company'].", ".$job['post'].", ".$job['year_1']."-".$job['year_2']."</i><br/>";
                        echo "<hr/></div></div>";
                ?>
                <?php
                        echo "<div><div class ='slide1'><b>О моих божественных интересах и увлекательнейших хобби: </b><hr/>";
                        echo "<b>Музыка: </b><i>".$interests['music']."</i><br/>";
                        echo "<b>Фильмы: </b><i>".$interests['films']."</i><br/>";
                        echo "<b>Зомбоящик: </b><i>".$interests['TV-show']."</i><br/>";
                        echo "<b>Литература: </b><i>".$interests['books']."</i><br/>";
                        echo "<b>Игры: </b><i>".$interests['games']."</i><br/>";
                        echo "<b>Цитаты: </b><i>".$interests['cities']."</i><br/>";
                        echo "<b>Обо мне, Великом:</b> <i>".$interests['about_me']."</i><br/></div></div>";
                       //echo print_r($unique_)."<br/>" ;
                        //echo print_r($adress)."<br/>" ;
                 //echo print_r($interests)."<br/>" ;
                    //echo print_r($main_information)."<br/>" ;
                    //echo print_r($middle_education)."<br/>" ;
                    //echo print_r($high_education)."<br/>" ;
                //echo print_r($service)."<br/>" ;
                   //echo print_r($job)."<br/>" ; 
                 ?>
           </div>
         </div>
			<div id = "wall">
                         <?php echo $posts; ?>
                        </div>
    </div>
    <div id = "content_right">               
        <div id = "people"> люди</div>   
        <div id = "music">
          

			<!-- The container for the interface can go where you want to display it. Show and hide it as you need. -->

			<div id="cp_container_1" class="cp-container">
				<div class="cp-buffer-holder"> <!-- .cp-gt50 only needed when buffer is > than 50% -->
					<div class="cp-buffer-1"></div>
					<div class="cp-buffer-2"></div>
				</div>
				<div class="cp-progress-holder"> <!-- .cp-gt50 only needed when progress is > than 50% -->
					<div class="cp-progress-1"></div>
					<div class="cp-progress-2"></div>
				</div>
				<div class="cp-circle-control"></div>
				<ul class="cp-controls">
					<li><a class="cp-play" tabindex="1">play</a></li>
					<li><a class="cp-pause" style="display:none;" tabindex="1">pause</a></li> <!-- Needs the inline style here, or jQuery.show() uses display:inline instead of display:block -->
				</ul>
                        </div>
                        
            
            
        </div>
        <div id = 'usrvideo'>
            <?php echo $video ?>
        </div>
        
    		
    </div>
    
</div>