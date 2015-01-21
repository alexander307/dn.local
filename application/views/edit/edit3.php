<div id = "registry"> 
   <form id ="border3" action ="" method = "post">
        
    <div id ="field3">
	<table>
            <tr><td>Музыка</td><td><textarea rows="5" cols="45" name="music" class = 'cell'> <?php echo $edit3['music']; ?> </textarea></td></tr>
        <tr><td>Фильмы</td><td><textarea rows="5" cols="45" name="films" class = 'cell'> <?php echo $edit3['films']; ?></textarea></td></tr>
        <tr><td>Телешоу</td><td><textarea rows="5" cols="45" name="TV_show" class = 'cell'> <?php echo $edit3['TV_show']; ?> </textarea></td></tr>
        <tr><td>Книги</td><td><textarea rows="5" cols="45" name="books" class = 'cell'> <?php echo $edit3['books']; ?></textarea></td></tr>
        <tr><td>Игры</td><td><textarea rows="5" cols="45" name="games" class = 'cell'> <?php echo $edit3['games']; ?></textarea></td></tr>
        <tr><td>Цитаты</td><td><textarea rows="5" cols="45" name="cities" class = 'cell'> <?php echo $edit3['cities']; ?> </textarea></td></tr>
        <tr><td>О себе</td><td><textarea rows="5" cols="45" name="about_me" class = 'cell'> <?php echo $edit3['about_me']; ?></textarea></td></tr>
        
        <tr><td><b>Не показывать интересы</b></td><td><input type = "checkbox" name = "inter_show" id = "cell1" value ="enable" /></td></tr>
        
        </table>
        
	
        </div>
  
       
    <div id="button3"> 
        <input type ="submit" id ="next" name = "submit" value = "Сохранить" />
    </div>
       
	  </form>
	</div>
