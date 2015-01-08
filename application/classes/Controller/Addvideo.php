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
$video->description = Arr::get($_POST, 'description');
$video->save();
echo "<h4>Вы удачно загрузили видео<br/>После перезагрузки страницы вы увидите его<br/>Вы можете еще добавить видео</h4>";
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

 public function action_vidvid()
    {
     $id = $this->request->param('id')
             ;
     $content = View::factory('/vidvid')
            ->bind('video', $video)
             ->bind('video_comments', $video_comments)
             ->bind('a', $a);
     
       if(($_POST)&&(Arr::get($_POST, 'video_comments')!=null))
        {
 
$video_comments = ORM::factory('videocomments');
$video_comments->comment = Arr::get($_POST, 'video_comments');
$video_comments->outer_id = $id;
$video_comments->save();
       

        } 
        
        
 if(($_POST))
        {
         
$a = Arr::get($_POST, 'send1');
$check = ORM::factory('videocomments', $a)
                ->as_array();
//echo "<hr/>";
//print_r($check['id']);
//echo "<hr/>";
if ($check['id']!=null){
ORM::factory('videocomments', $a)
        ->delete();

        }   } 
 
     $video = ORM::factory('video', $id)->as_array();
     $video_comments = ORM::factory('videocomments')
             ->where('outer_id', '=', $id)
             ->find_all()
             ->as_array();
     $this->response->body($content);   
    }

}