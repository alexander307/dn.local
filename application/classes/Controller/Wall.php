
<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Wall extends Controller {
 
    
    // Главная страница
    public function action_index()
    {
        $outer_id = $this->request->param('id');
        $content = View::factory('/wall')
                ->bind('posts', $posts)
                ->bind('comments', $comments)
                ;
        
        $count = ORM::factory('post')
                ->where('outer_id', '=', $outer_id)
                ->find_all()
                ->as_array();
        
        
        
      foreach($count as $number)
{
    $a[] = $number->post;  
}
$i = count($a)-1;

         if(($_POST)&&($a[$i]!=Arr::get($_POST, 'post'))&&(Arr::get($_POST, 'post')!=null))
        {
$post = ORM::factory('post');
$post->post = Arr::get($_POST, 'post');
$post->outer_id = $outer_id;
$post->ava_id = Cookie::get('user', '0');
$post->save();
        } 
        
         if(($_POST))
        {
         
$a = Arr::get($_POST, 'send1');
$check = ORM::factory('post', $a)
                ->as_array();
//echo "<hr/>";
//print_r($check['id']);
//echo "<hr/>";
if ($check['id']!=null){
ORM::factory('post', $a)
        ->delete();

        }   } 
        
        
        

        $posts = ORM::factory('post')
                ->where('outer_id', '=', $outer_id)
                ->find_all()
                ->as_array();
        
        $comments = ORM::factory('comment')
                ->where('outer_id', '=', $outer_id)
                ->find_all()
                ->as_array();
        
        
       
       $this->response->body($content);
      
    }
}

