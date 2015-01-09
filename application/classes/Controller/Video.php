<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Video extends Controller_Common {
 
    // Фотографии
    public function action_index()
    
    { 

$id = $this->request->param('id');
 if ((Cookie::get('user', 'no user'))== 'no user')
        {
            HTTP::redirect(URL::site()."/");
        }
 //->bind('moovie', $moovie);
        if(($_POST))
        {
         
$a = Arr::get($_POST, 'send1');
$check = ORM::factory('video', $a)
                ->as_array();
//echo "<hr/>";
//print_r($check['id']);
//echo "<hr/>";
if ($check['id']!=null){
ORM::factory('video', $a)
        ->delete();

}
         }
        
        $video = ORM::factory('video')
                ->where('outer_id', '=', $id)
                ->find_all()
                ->as_array();
      
     $content = View::factory('/video')
                ->bind('video', $video)
                  -> bind('menu', $menu);
     
     $menu_url = 'menu/'.$id;
        $menu = Request::factory($menu_url)->execute();
          $this->template->content = $content;
        
        
       
    }	

   
}