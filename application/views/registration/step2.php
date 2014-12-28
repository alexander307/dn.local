<div id = "registry"> 
   <form id ="border" action ="" method = "post">
    <div id="title">
    Пол <br/>
    Семейное положение <br/>
    Не показываеть СП<br/>
    День рождения <br/>
    Родной город <br/>
    Страна <br/>
    Город <br/>
    Улица и дом<br/>
    
    </div>
        
    <div id ="field">
	
        <select class = "cell" name ="sex"><option value = ''>пол</option><option value ="male">Я мужчина</option><option value ="female">Я женщина</option></select><br/>
        <select class = "cell" name = "family"><option value = ''>---</option><option value = '1'>в браке</option><option value = '2'>влюблен(а)</option><option value = '3'>встречаюсь</option><option value = '4'>все сложно</option><option value = '5'>не женат</option></select> <br/>
	<input type = "checkbox" id = "cell1" value ="enable" /> <br/>
        
	<select name = "day"><option value="" >--</option><option value = '1'>1</option><option value = '2'>2</option></select>
        <select name = "month"><option value="" >----</option><option value = '1'>январь</option><option value = '2'>февраль</option></select>
        <select name = "year"><option value="" >----</option><option value = '1'>1900</option><option value = '2'>1902</option></select></br>
        
        
	<input type = "text" name = "native_town" size = "20" value = "Родной город..." class = "cell"/> <br/>
        <select id = "cell" name ="country"><option value = ''>---</option><option value = '1'>Выбрать</option><option value = '2'>Страну</option></select> <br/>
	<input type = "text" name = "city" size = "20" value = "Город" class = "cell"/></br> 
	<input type = "text" name = "street" size = "20" value = "Улица" class = "cell"/><input type = "text" name = "number" size = "4" value = "Дом" class = "cell"/>  <br/>
       
        </div>
  
       
    <div id="button"> 
        <input type ="submit" id ="next" name = "submit" value = ">" />
    </div>
       
	  </form>
	</div>

