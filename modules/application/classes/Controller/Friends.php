<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Friends extends Controller_Common {
 

// Страница о сайте
    public function action_index()
    {
        $content = View::factory('/friends');
        $this->template->content = $content;
    }
}
