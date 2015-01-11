<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Comments extends Controller {
 
    // Главная страница
    public function action_index()
    {
        $post_id = $this->request->param('post_id');
        $content = View::factory('/comments')
                ->bind('post',$post)
                ->bind('comments', $comments)
                 ->bind('a', $a);
        
        
        

         if(($_POST)&&(Arr::get($_POST, 'comment')!=null))
        {
 
$comment = ORM::factory('comment');
$comment->comment = Arr::get($_POST, 'comment');
$comment->post_id = $post_id;
$comment->ava_id = Cookie::get('user', '0');
$comment->save();
       

        } 
        
        
 if(($_POST))
        {
         
$a = Arr::get($_POST, 'send1');
$check = ORM::factory('comment', $a)
                ->as_array();
//echo "<hr/>";
//print_r($check['id']);
//echo "<hr/>";
if ($check['id']!=null){
ORM::factory('comment', $a)
        ->delete();

        }   }    
        
        $post = ORM::factory('post')
                ->where('id', '=', $post_id)
                ->find();
                
       
        
        $comments = ORM::factory('comment')
                ->where('post_id', '=', $post_id)
                ->find_all()
                ->as_array();
      
       $this->response->body($content);
      
    }
}

