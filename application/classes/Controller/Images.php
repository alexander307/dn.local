<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Images extends Controller_Common {
 
    // Фотографии
    public function action_index()
    
    { 
       $id = $this->request->param('id');
        
        
       $photo = ORM::factory('photo')
                ->where('outer_id', '=', $id)
                ->find_all()
                ->as_array();
      
     $content = View::factory('/photo')
                ->bind('photo', $photo);
          $this->template->content = $content;
    }	
 
}

