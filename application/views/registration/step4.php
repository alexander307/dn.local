<div id = "registry"> 
   <form id ="border1" action ="" method = "post">
    
   <table border = "2" color = "blue" id = "step1">
       <tr><th colspan = "3">Среднее образование</th><th rowspan = '19'><div id="button4"> 
        <input type ="submit" id ="next" name = "submit" value = ">" />
    </div></th></tr>
        <tr><th>Страна, город</th><th>
                
                <select id = "cell" name ="country1"><option value = ''>---</option>
                   
                   <?php
            $countries = array ('Россия', 'Украина', 'Беларусь', 'Молдова', 'Азейбарджан', 'Узбекистан', 'Казахстан', 'Туркменистан', 'Остальные страны' );
                   for ($count = 0; $count < count($countries); $count++ ) {
                   echo "<option value = '$$countries[$count]'>$countries[$count]</option>"; }
                    ?>   
        </select>
            </th><th><input type = "text" name = "city1" size = "20" value = "Город" class = "cell"/></th></tr>
        <tr><th>Школа</th><th colspan = "2"><input type = "text" name = "school1" size = "20" value = "Название школы" class = 'cell'/></th></tr>
        <tr><th>Годы обучения</th><th>
                
                <select name = "year11"><option value="" >----</option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
                
                
            </th><th>
                
                <select name = "year12"><option value="" >----</option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
                
            </th></tr>
        <tr><th colspan = "3"></th></tr>
        <tr><th colspan = "3">Высшее образование</th></tr>
        <tr><th>Страна, город</th><th>
                
               <select id = "cell" name ="country2"><option value = ''>---</option>
                   
                   <?php
            $countries = array ('Россия', 'Украина', 'Беларусь', 'Молдова', 'Азейбарджан', 'Узбекистан', 'Казахстан', 'Туркменистан', 'Остальные страны' );
                   for ($count = 0; $count < count($countries); $count++ ) {
                   echo "<option value = '$$countries[$count]'>$countries[$count]</option>"; }
                    ?>   
        </select>
            
            </th><th>
                
                <input type = "text" name = "city2" size = "20" value = "Город" class = "cell"/>
            
            </th></tr>
        <tr><th>ВУЗ</th><th colspan = "2"><input type = "text" name = "school2" size = "20" value = "Название школы" /></th></tr>
        <tr><th>Годы обучения</th><th>
                
                <select name = "year21"><option value="" >----</option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
            
            </th><th>
                
                <select name = "year22"><option value="" >----</option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
            
            
            </th></tr>
        <tr><th colspan = "3"></th></tr>
        <tr><th colspan = "3">Работа</th></tr>
        <tr><th>Компания / Должность</th><th><input type = "text" name = "school31" size = "20" value = "Название школы" /></th><th><input type = "text" name = "school32" size = "20" value = "Название школы" /></th></tr>
        <tr><th>Страна, город</th><th>
                
                
               <select id = "cell" name ="country3"><option value = ''>---</option>
                   
                   <?php
            $countries = array ('Россия', 'Украина', 'Беларусь', 'Молдова', 'Азейбарджан', 'Узбекистан', 'Казахстан', 'Туркменистан', 'Остальные страны' );
                   for ($count = 0; $count < count($countries); $count++ ) {
                   echo "<option value = '$countries[$count]'>$countries[$count]</option>"; }
                    ?>   
        </select>
            </th><th>
          <input type = "text" name = "city3" size = "20" value = "Город" class = "cell"/>
            
            </th></tr>
        <tr><th>Годы работы</th><th>
                
                
                <select name = "year31"><option value="" >----</option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
            
            </th><th>
                
                <select name = "year32"><option value="" >----</option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
            
            
            </th></tr>
        <tr><th colspan = "3"></th></tr>
        <tr><th colspan = "3">Воинская служба</th></tr>
        <tr><th>Страна</th><th>
                
                
                <select id = "cell" name ="country4"><option value = ''>---</option>
                   
                   <?php
            $countries = array ('Россия', 'Украина', 'Беларусь', 'Молдова', 'Азейбарджан', 'Узбекистан', 'Казахстан', 'Туркменистан', 'Остальные страны' );
                   for ($count = 0; $count < count($countries); $count++ ) {
                   echo "<option value = '$countries[$count]'>$countries[$count]</option>"; }
                    ?>   
        </select>
            
            </th><th>
                
                
                <input type = "text" name = "city4" size = "20" value = "Город" class = "cell"/>
            
            
            </th></tr>
        <tr><th>Часть</th><th colspan = "2"><input type = "text" name = "school4" size = "20" value = "Название школы" class = "cell" /></th></tr>
        <tr><th>Годы службы</th><th><select name = "year41"><option value="" >----</option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select></th><th>
                <select name = "year42"><option value="" >----</option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select></th></tr>
        </table>

	  </form>
	</div>
