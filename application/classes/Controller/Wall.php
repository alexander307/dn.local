
<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Wall extends Controller {
 
    
    // Главная страница
    public function action_index()
    {
        $id = $this->request->param('id');
        $content = View::factory('/wall')
                ->bind('posts', $posts)
                ->bind('comments', $comments)
                ;
        
        $count = ORM::factory('post')
                ->where('id', '=', $id)
                ->find_all()
                ->as_array();
        
      foreach($count as $number)
{
    $a[] = $number->post;  
}
$i = count($a)-1;

         if(($_POST)&&($a[$i]!=Arr::get($_POST, 'post')))
        {
$post = ORM::factory('post');
$post->post = Arr::get($_POST, 'post');
$post->id = $id;
$post->save();
        } 
        
        
        
        
        if(($_POST)&&($a[$i]!=Arr::get($_POST, 'comment')))
        {
 
$comment = ORM::factory('comment');
$comment->comment = Arr::get($_POST, 'comment');
$comment->post_id = Arr::get($_POST, 'post_id');
$comment->id = $id;
$comment->save();
       

        } 
        $posts = ORM::factory('post')
                ->where('id', '=', $id)
                ->find_all()
                ->as_array();
        
        $comments = ORM::factory('comment')
                ->where('id', '=', $id)
                ->find_all()
                ->as_array();
        
        
       
       $this->response->body($content);
      
    }
}

