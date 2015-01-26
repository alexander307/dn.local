<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Images extends Controller_Common {
 
    // Фотографии
    public function action_index()
    
    { 
       $outer_id = $this->request->param('id');
        
        
       $photo = ORM::factory('photo')
                ->where('outer_id', '=', $outer_id)
                ->find_all()
                ->as_array();
      
     $content = View::factory('/photo')
                ->bind('photo', $photo);
          $this->template->content = $content;
    }	
 
}

