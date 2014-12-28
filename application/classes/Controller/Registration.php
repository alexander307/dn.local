<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Registration extends Controller_Common {
 

// Страница о сайте
    public function action_step1()
    {
        
        $content = View::factory('/registration/step1');
        $this->template->content = $content;
        if ($_POST)
        { 
/*$registration1 = ORM::factory('unique');
$registration1->login = Arr::get($_POST, 'login');
$registration1->password = Arr::get($_POST, 'password');
$registration1->name = Arr::get($_POST, 'name');
$registration1->surname = Arr::get($_POST, 'surname');
$registration1->patronomyc = Arr::get($_POST, 'patronomyc');
$registration1->nickname = Arr::get($_POST, 'nickname');
$registration1->save(); */
            
            
            
            
            
           HTTP::redirect(URL::site()."/registration/step2");
           
        }
    }
    
    public function action_step2()
    {
      $content = View::factory('/registration/step2');
        $this->template->content = $content;  
        if ($_POST)
        {
            
           HTTP::redirect(URL::site()."/registration/step3");
        }
    }
    
     public function action_step3()
    {
      $content = View::factory('/registration/step3');
        $this->template->content = $content;  
        if ($_POST)
        {
            
           HTTP::redirect(URL::site()."/registration/step4");
        }
    }
    
     public function action_step4()
    {
       $content = View::factory('/registration/step4');
        $this->template->content = $content; 
        if ($_POST)
        {
            
           HTTP::redirect(URL::site()."/registration/step5");
        }
    }
    
    public function action_step5()
    {
       $content = View::factory('/registration/step5');
        $this->template->content = $content; 
        if ($_POST)
        {
            
           HTTP::redirect(URL::site()."/registration/step6");
        }
    }
    
    public function action_step6()
    {
       $content = View::factory('/registration/succes');
        $this->template->content = $content; 
        if ($_POST)
        {
            
           HTTP::redirect(URL::site()."/user/".$id); //Редирект на страницу пользователя
        }
    }

}