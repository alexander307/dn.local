<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Login extends Controller_Common {
 
    // Главная страница
    public function action_index()
    
    { 
      
            
        $content = View::factory('/login');
        $this->template->content = $content;
    }	
 
}

