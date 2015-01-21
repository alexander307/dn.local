<div id = "registry"> 
   <form id ="border1" action ="" method = "post">
       <table id ="step1">
       <tr><td>Семейное положение</td><td><select class = "cell" name = "family"><option value = ''><?php echo $main['MS']; ?></option><option value = '1'>в браке</option><option value = '2'>влюблен(а)</option><option value = '3'>встречаюсь</option><option value = '4'>все сложно</option><option value = '5'>не женат</option></select></td><td class = "mistakes"></td></tr>
       <tr><td>Не показывать СП</td><td><input type = "checkbox" name = "SP" id = "cell1" value ="disable" /></td><td class = "mistakes"></td></tr>
       <tr><td>День рождения </td><td><select name = "day"><option value="" >--</option>
                   <?php
                   for ($day = 1; $day < 32; $day++ ) {
                   echo "<option value = '$day'>$day</option>"; }
                    ?>
               </select>
        <select name = "month"><option value="" >----</option>
            <?php
            $months = array ('Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' );
                   for ($month = 0; $month < 12; $month++ ) {
                   echo "<option value = '$months[$month]'>$months[$month]</option>"; }
                    ?>   
        </select>
               
        <select name = "year"><option value="" >----</option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
           
           
           </td><td class = "mistakes"></td></tr>
       <tr><td> Родной город</td><td><input type = "text" name = "native_town" size = "20" value = "<?php echo $main['Native_town']; ?>" class = "cell"/></td><td class = "mistakes"></td></tr>
       <tr><td>Страна</td><td><select id = "cell" name ="country"><option value = ''><?php echo $adress['country']; ?></option>
                   
                   <?php
            $countries = array ('Россия', 'Украина', 'Беларусь', 'Молдова', 'Азейбарджан', 'Узбекистан', 'Казахстан', 'Туркменистан', 'Остальные страны' );
                   for ($count = 0; $count < count($countries); $count++ ) {
                   echo "<option value = '$countries[$count]'>$countries[$count]</option>"; }
                    ?>   
        </select>
               
        
               
               </select>
           </td><td class = "mistakes"></td></tr>
       <tr><td>Город</td><td><input type = "text" name = "city" size = "20" value = "<?php echo $adress['city']; ?>" class = "cell"/></td><td class = "mistakes"></td></tr>
       <tr><td>Улица и дом</td><td><input type = "text" name = "street" size = "20" value = "<?php echo $adress['street']; ?>" class = "cell"/><input type = "text" name = "number" size = "4" value = "<?php echo $adress['house']; ?>" class = "cell"/></td><td class = "mistakes"></td></tr>
       </table>
<input type ="submit" id ="next" name = "submit" value = "Сохранить" />
	  </form>
	</div>
