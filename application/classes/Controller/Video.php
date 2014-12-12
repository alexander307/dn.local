<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Images extends Controller_Common {
 
    // Фотографии
    public function action_index()
    
    { 
       
        $content = View::factory('/video'); //изменить на user_#id/photo_название_альбома(если будет не лень, то поделю на альбомы фото. нет, так и оставолю
       $this->template->content = $content;
    }	
 
}

