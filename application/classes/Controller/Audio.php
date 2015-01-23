<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Audio extends Controller {
 
    // Главная страница
    public function action_index()
    {
      $outer_id = $this->request->param('id');
        $content = View::factory('/audio_alt')
                ->bind ('audio', $audio);
        
        if(($_POST))
        {
         
$a = Arr::get($_POST, 'send1');
echo $a;
$check = ORM::factory('audio', $a)
                ->as_array();

if ($check['id']!=null){
ORM::factory('audio', $a)
        ->delete();
@unlink("public/mp3/$id/".$a.".mp3");

        }   } 
        
        
        $audio = ORM::factory('audio')
                ->where('outer_id', '=', $outer_id)
                ->find_all()
                ->as_array();
        
        
        $this->response->body($content);
    }
}
