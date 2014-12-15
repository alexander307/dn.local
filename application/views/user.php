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
                 
               <div><div id ="slide1"> <?php 
                            echo "<b> О главном</b> <hr/>";
                            echo "День рождения: ".$main_information['Birthday_date']."<br/>";
                            echo "Родной город: ".$main_information['Native_town']."<br/>";
                            echo "Семейное положение: ".$main_information['MS']."<br/><hr/>";
                            echo "<b>Контактная информация</b> <hr/>";
                            echo "Адрес: ".$adress['country'].", ".$adress['city'].", ".$adress['street'].", ".$adress['house'].".<br/>";
                            echo "Электронная почта: ".$unique_['email']."<br/>";
                            echo "<hr/>"; 
                            ?></div></div>
                <?php
                    echo "<div>Школьная скамья: <hr/><br/>" ;
                         echo "ВУЗ: ".$high_education['country'].", ".$high_education['city'].", ".$high_education['university'].", ".$high_education['year_1']."-".$high_education['year_2']."<br/>";
                            
                         echo "Воинская служба: ".$service['country'].", ".$service['military_unit'].", ".$service['year_1']."-".$service['year_2']."<br/>";
                         
                         echo "Моя любимая работа: ".$job['country'].", ".$job['city'].", ".$job['company'].", ".$job['post'].", ".$job['year_1']."-".$job['year_2']."<br/>";
                        echo "<hr/></div>";
                ?>
                <?php
                        echo "<div>О моих божественных интересах и увлекательнейших хобби: <hr/>";
                        echo "Музыка: ".$interests['music']."<br/>";
                        echo "Фильмы: ".$interests['films']."<br/>";
                        echo "Зомбоящик: ".$interests['TV-show']."<br/>";
                        echo "Литература: ".$interests['books']."<br/>";
                        echo "Игры: ".$interests['games']."<br/>";
                        echo "Цитаты: ".$interests['cities']."<br/>";
                        echo "Обо мне, Великом: ".$interests['about_me']."<br/></div>";
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