<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_addvideo extends Controller {


public function action_index()
{
    
    $id = $this->request->param('id');
    if(($_POST)/*&&($a[$i]!=Arr::get($_POST, 'comment'))*/)
        {
 
$video = ORM::factory('video');
$video->link = Arr::get($_POST, 'link');
$video->outer_id = $id;
$video->name = Arr::get($_POST, 'name');
$video->save();
echo "Вы удачно загрузили видео<br/>После перезагрузки страницы вы увидите его<br/>Вы можете еще добавить видео";
      

        } 
    $content = View::factory('/add_video');
                
          $this->response->body($content); 
}

public function action_user()
        
{
    $id = $this->request->param('id');
    $video = ORM::factory('video')
                ->where('outer_id', '=', $id)
                ->find_all()
                ->as_array();
    $content = View::factory('/user_video')
                ->bind('video', $video);
          $this->response->body($content);
}

}