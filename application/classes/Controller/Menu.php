<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Menu extends Controller {
 
    // Главная страница
    public function action_index()
    {
        $id = $this->request->param('id');
        
        $content = View::factory('/menu')
                ->bind('unique_', $unique_);
       
                
                
             
        //$unique_ = Model::factory('User')->get_info($id);
        $unique_ = ORM::factory('unique', $id)->as_array();
        
        
       $this->response->body($content);
       
    }
}
