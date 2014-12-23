<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Audio extends Controller_Common {
 
    // Главная страница
    public function action_index()
    {
      $id = $this->request->param('id');
        $content = View::factory('/audio') ;
        $this->template->content = $content;
    }
}
