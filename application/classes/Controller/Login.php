<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Login extends Controller_Common {
 
    // Главная страница
    public function action_index()
    
    { 
     $content = View::factory('/login');
        $this->template->content = $content;
        Cookie::delete('user');
        
        if ($_POST)
        { $i =0;
        $flag = 0;
        $check2 = Arr::get($_POST, 'login_');
        $check3 = Arr::get($_POST, 'pass_');
           $check = ORM::factory('unique')
                ->find_all()
                ->as_array();
          foreach ($check as $val)
          {
              $a[] = $val->login;
              $b[] = $val->id;
              $c[] = $val->password;
          //echo $a[$i];
          //echo $check2;
            if (((string)$a[$i] == (string)$check2)&&(string)$c[$i] == (string)$check3)
            {
                Cookie::set('user', $b[$i]);
                HTTP::redirect(URL::site()."/user/$b[$i]");

            }
            else {
            
            $i++;
            }
            
           
 }
 echo "Вы ошибаетесь, пароль не верен, гнида!";
  }	
 
}
}

