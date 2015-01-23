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
       <table>
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
 
</body>

