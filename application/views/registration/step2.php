<div id = "registry"> 
   <form id ="border1" action ="" method = "post">
       <table id ="step1">
           <tr><td>Пол</td><td><select class = "cell" name ="sex"><option value = ''>пол</option><option value ="male">Я мужчина</option><option value ="female">Я женщина</option></select></td><td class = "mistakes"></td><td rowspan = 7><div id="button"> <input type ="submit" id ="next" name = "submit" value = ">" /></div></td></tr>
       <tr><td>Семейное положение</td><td><select class = "cell" name = "family"><option value = ''>---</option><option value = '1'>в браке</option><option value = '2'>влюблен(а)</option><option value = '3'>встречаюсь</option><option value = '4'>все сложно</option><option value = '5'>не женат</option></select></td><td class = "mistakes"></td></tr>
       <tr><td>Не показывать СП</td><td><input type = "checkbox" name = "SP" id = "cell1" value ="enable" /></td><td class = "mistakes"></td></tr>
       <tr><td>День рождения </td><td><select name = "day"><option value="" >--</option><option value = '1'>1</option><option value = '2'>2</option></select>
        <select name = "month"><option value="" >----</option><option value = '1'>январь</option><option value = '2'>февраль</option></select>
        <select name = "year"><option value="" >----</option><option value = '1'>1900</option><option value = '2'>1902</option></select></td><td class = "mistakes"></td></tr>
       <tr><td> Родной город</td><td><input type = "text" name = "native_town" size = "20" value = "Родной город..." class = "cell"/></td><td class = "mistakes"></td></tr>
       <tr><td>Страна</td><td><select id = "cell" name ="country"><option value = ''>---</option><option value = '1'>Выбрать</option><option value = '2'>Страну</option></select></td><td class = "mistakes"></td></tr>
       <tr><td>Город</td><td><input type = "text" name = "city" size = "20" value = "Город" class = "cell"/></td><td class = "mistakes"></td></tr>
       <tr><td>Улица и дом</td><td><input type = "text" name = "street" size = "20" value = "Улица" class = "cell"/><input type = "text" name = "number" size = "4" value = "Дом" class = "cell"/></td><td class = "mistakes"></td></tr>
       </table>

	  </form>
	</div>
