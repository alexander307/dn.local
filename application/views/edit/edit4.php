<head>
   <script src="<?php echo URL::base(); ?>public/js/jquery-1.7.1.min.js"></script> 
   <script type="text/javascript" src="<?php echo URL::base(); ?>public/js/jquery.validate.min.js"></script>
   <script>
   $(document).ready(function()
{ 
            
     $('#border1').validate({
         
         rules: {
            video_comments: {rangelength: [4,16]},               
            login: {required: true, rangelength: [4,16]},
            password:{required: true,rangelength: [4,16] },
            password1:{equalTo: '#password'},
                            name:{required: true},
                            surname:{required: true},
                            patronomyc:{required: true},
                             nickname:{required: true},
                             sex:{required: true},
                             family: {required: true},
                             day: {required: true},
                             month: {required: true},
                             year: {required: true},
                             native_town: {required: true},
                             country: {required: true},
                             city: {required: true},
                             street: {required: true},
                             number: {required: true, digits: true},
                             email: {required: true, email: true},
                             country1: {required: true},
                             country2: {required: true},
                             country3: {required: true},
                             country4: {required: true},
                             city1: {required: true},
                             city2: {required: true},
                             city3: {required: true},
                             city4: {required: true},
                             school1: {required: true},
                             school2: {required: true},
                             school31: {required: true},
                             school32: {required: true},
                             school4: {required: true},
                             year11: {required: true},
                             year12: {required: true},
                             year21: {required: true},
                             year22: {required: true},
                             year31: {required: true},
                             year32: {required: true},
                             year41: {required: true},
                             year42: {required: true}
                             
                             
                             
                     
         },
         messages:
                 {
                     login:
                     { required: "Введи свой логин, как без этого то?"},
                  password:
                     { required: "Тебе не нужен пароль?",
                rangelength: "Пароль должен быть от 4 до 16ти символов" },
                password1:
                     { equalTo: "Пароль не совпадает"},
                     name: {required: "Как тебя зовут то?"},
                    surname:{required: "Фамилия есть, Шариков?"},
                     patronomyc:{required: "Как вас по отчеству?"},
                             nickname:{required: "Никнейм?"},
                             sex:{required: "Да ВАМ в самую пору на Евровидение!"},
                             family: {required: "Асоциальный Вы типчик!"},
                             day: {required: "К сожаленью день рожденья..."},
                             month: {required: "К сожаленью день рожденья..."},
                             year: {required: "К сожаленью день рожденья..."},
                             native_town: {required: "Где ты родился, Землянин?"},
                             country: {required: "Рожденный в СССР"},
                             city: {required: "Не бойся, вводи, мы не ЧК"},
                             street: {required: "Не бойся, вводи, мы не ЧК"},
                             number: {required: "Не бойся, вводи, мы не ЧК", digits: "Милейший, это ж цифры!"},
                             email: {required: "Без почты ну никак нельзя!", email: "Это не электронная почта!"}
                     },
                     
                      errorPlacement: function(error, element) {
    error.appendTo( element.parent("td").next("td") );
  }
                     
                    
     });             
             //Капча
       

});
</script>
    
    
</head>

<body> 
   <form action ="" method = "post" id ="border1">
    
   <table border = "2" color = "blue">
       <tr><th colspan = "3">Среднее образование</th></tr>
        <tr><th>Страна, город</th><th>
                
<select id = "cell" name ="country1"><option value = '<?php echo $middle1['country'] ?>'><?php echo $middle1['country'] ?></option>
                   
                   <?php
            $countries = array ('Россия', 'Украина', 'Беларусь', 'Молдова', 'Азейбарджан', 'Узбекистан', 'Казахстан', 'Туркменистан', 'Остальные страны' );
                   for ($count = 0; $count < count($countries); $count++ ) {
                   echo "<option value = '$countries[$count]'>$countries[$count]</option>"; }
                    ?>   
        </select>
            </th><th><input type = "text" name = "city1" size = "20" value = "<?php echo $middle1['city'] ?>" class = "cell"/></th></tr>
        <tr><th>Школа</th><th colspan = "2"><input type = "text" name = "school1" size = "20" value = "<?php echo $middle1['school'] ?>" class = 'cell'/></th></tr>
        <tr><th>Годы обучения</th><th>
                
                <select name = "year11"><option value="<?php echo $middle1['year_1'] ?>" ><?php echo $middle1['year_1'] ?></option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
                
                
            </th><th>
                
                <select name = "year12"><option value="<?php echo $middle1['year_2'] ?>" ><?php echo $middle1['year_2'] ?></option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
                
            </th></tr>
        <tr><th colspan = "3"></th></tr>
        <tr><th colspan = "3">Высшее образование</th></tr>
        <tr><th>Страна, город</th><th>
                
               <select id = "cell" name ="country2"><option value = '<?php echo $high1['country'] ?>'><?php echo $high1['country'] ?></option>
                   
                   <?php
            $countries = array ('Россия', 'Украина', 'Беларусь', 'Молдова', 'Азейбарджан', 'Узбекистан', 'Казахстан', 'Туркменистан', 'Остальные страны' );
                   for ($count = 0; $count < count($countries); $count++ ) {
                   echo "<option value = '$countries[$count]'>$countries[$count]</option>"; }
                    ?>   
        </select>
            
            </th><th>
                
                <input type = "text" name = "city2" size = "20" value = "<?php echo $high1['city'] ?>" class = "cell"/>
            
            </th></tr>
        <tr><th>ВУЗ</th><th colspan = "2"><input type = "text" name = "school2" size = "20" value = "<?php echo $high1['university'] ?>" /></th></tr>
        <tr><th>Годы обучения</th><th>
                
                <select name = "year21"><option value="<?php echo $high1['year_1'] ?>" ><?php echo $high1['year_1'] ?></option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
            
            </th><th>
                
                <select name = "year22"><option value="<?php echo $high1['year_2'] ?>" ><?php echo $high1['year_2'] ?></option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
            
            
            </th></tr>
        <tr><th colspan = "3"></th></tr>
        <tr><th colspan = "3">Работа</th></tr>
        <tr><th>Компания / Должность</th><th><input type = "text" name = "school31" size = "20" value = "<?php echo $job1['company'] ?>" /></th><th><input type = "text" name = "school32" size = "20" value = "<?php echo $job1['post'] ?>" /></th></tr>
        <tr><th>Страна, город</th><th>
                
                
               <select id = "cell" name ="country3"><option value = '<?php echo $job1['country'] ?>'><?php echo $job1['country'] ?></option>
                   
                   <?php
            $countries = array ('Россия', 'Украина', 'Беларусь', 'Молдова', 'Азейбарджан', 'Узбекистан', 'Казахстан', 'Туркменистан', 'Остальные страны' );
                   for ($count = 0; $count < count($countries); $count++ ) {
                   echo "<option value = '$countries[$count]'>$countries[$count]</option>"; }
                    ?>   
        </select>
            </th><th>
          <input type = "text" name = "city3" size = "20" value = "<?php echo $job1['city'] ?>" class = "cell"/>
            
            </th></tr>
        <tr><th>Годы работы</th><th>
                
                
                <select name = "year31"><option value="<?php echo $job1['year_1'] ?>" ><?php echo $job1['year_1'] ?></option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
            
            </th><th>
                
                <select name = "year32"><option value="<?php echo $job1['year_2'] ?>" ><?php echo $job1['year_2'] ?></option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select>
            
            
            </th></tr>
        <tr><th colspan = "3"></th></tr>
        <tr><th colspan = "3">Воинская служба</th></tr>
        <tr><th>Страна</th><th colspan="2">
                
                
                <select id = "cell" name ="country4"><option value = '<?php echo $service1['country'] ?>'><?php echo $service1['country'] ?></option>
                   
                   <?php
            $countries = array ('Россия', 'Украина', 'Беларусь', 'Молдова', 'Азейбарджан', 'Узбекистан', 'Казахстан', 'Туркменистан', 'Остальные страны' );
                   for ($count = 0; $count < count($countries); $count++ ) {
                   echo "<option value = '$countries[$count]'>$countries[$count]</option>"; }
                    ?>   
        </select>
            
            </th></tr>
        <tr><th>Часть</th><th colspan = "2"><input type = "text" name = "school4" size = "20" value = "<?php echo $service1['military_unit'] ?>" class = "cell" /></th></tr>
        <tr><th>Годы службы</th><th><select name = "year41"><option value="<?php echo $service1['year_1'] ?>" ><?php echo $service1['year_1'] ?></option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select></th><th>
                <select name = "year42"><option value="<?php echo $service1['year_2'] ?>" ><?php echo $service1['year_2'] ?></option>
            <?php
                   for ($year = 1900; $year < 2015; $year++ ) {
                   echo "<option value = '$year'>$year</option>"; }
                    ?>
 
        </select></th></tr>
        <tr><th colspan="3"> 
        <input type ="submit"  name = "submit" value = "Сохранить" />
    </th>
        </table>

</form>
    
</body>

