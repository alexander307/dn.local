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
    error.appendTo( element.parent("td").next("td") );
  }
                     
                    
     });             
             //Капча
       

});
</script>
    
    
</head>

<body> 
   <form action ="" method = "post" id ="border1">
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
<input type ="submit"  name = "submit" value = "Сохранить" />
	  </form>
	
</body>