<div id = "registry"> 
   <form id ="border1" action ="" method = "post">
       <table id ="step1">
       <tr><td>Пароль</td><td><input type = "text" name = "password" size = "20" value = "<?php echo $edit1['password']; ?>" class = "cell" id = "password"/></td><td class = "mistakes"></td></tr>
       <tr><td>Повторите пароль</td><td><input type = "text" name = "password1" size = "20" value = "<?php echo $edit1['password']; ?>" class = "cell" /></td><td class = "mistakes"></td></tr>
       <tr><td>Имя </td><td><input type = "text" name = "name" size = "20" value = "<?php echo $edit1['name']; ?>" class = "cell"/></td><td class = "mistakes"></td></tr>
       <tr><td> Фамилия</td><td><input type = "text" name = "surname" size = "20" value = "<?php echo $edit1['surname']; ?>" class = "cell"/></td><td class = "mistakes"></td></tr>
       <tr><td>Отчество</td><td><input type = "text" name = "patronomyc" size = "20" value = "<?php echo $edit1['patronomyc']; ?>" class = "cell"/></td><td class = "mistakes"></td></tr>
       <tr><td>Девичья фамилия/Никнейм</td><td><input type = "text" name = "nickname" size = "20" value = "<?php echo $edit1['nickname']; ?>" class = "cell"/></td><td class = "mistakes"></td></tr>
       <tr><td>Электронная почта</td><td><input type="text"  name = "email" size = "20" value = "<?php echo $edit1['email']; ?>" class = "cell"></td><td class = "mistakes"></td></tr>
       <tr><td callspan = 3> <input type ="submit"  name = "submit" value = "Сохранить" /></td></tr>
       </table>

	  </form>
	</div>


