
<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Comments extends Controller {
 
    // Главная страница
    public function action_index()
    {
        $post_id = $this->request->param('post_id');
        $content = View::factory('/comments')
                ->bind('post',$post)
                ->bind('comments', $comments);
        
     /*    $count = ORM::factory('comment')
                ->where('post_id', '=', $post_id)
                ->find_all()
                ->as_array();
        
      foreach($count as $number)
{
    $a[] = $number->comment;  
}
$i = count($a)-1; */

         if(($_POST)/*&&($a[$i]!=Arr::get($_POST, 'comment'))*/)
        {
 
$comment = ORM::factory('comment');
$comment->comment = Arr::get($_POST, 'comment');
$comment->post_id = $post_id;
$comment->save();
       

        } 
        
        $post = ORM::factory('post')
                ->where('post_id', '=', $post_id)
                ->find();
                
       
        
        $comments = ORM::factory('comment')
                ->where('post_id', '=', $post_id)
                ->find_all()
                ->as_array();
      
       $this->response->body($content);
      
    }
}

