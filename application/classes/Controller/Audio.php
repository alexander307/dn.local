<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Audio extends Controller {
 
    // Главная страница
    public function action_index()
    {
      $outer_id = $this->request->param('id');
        $content = View::factory('/audio')
                ->bind ('audio', $audio);
        $audio = ORM::factory('audio')
                ->where('outer_id', '=', $outer_id)
                ->find_all()
                ->as_array();
        
        
        $this->response->body($content);
    }
}
