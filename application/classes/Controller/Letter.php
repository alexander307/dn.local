<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Letter extends Controller {
 
    // Главная страница
    public function action_index()
    {
        $id = $this->request->param('id');
        $content = View::factory('/letter')
                ->bind('letter',$letter)
                ->bind('letter_out', $letter_out)
                ->bind('letter_in', $letter_in)
               ;
        
        
        

       /*  if(($_POST)&&(Arr::get($_POST, 'letter')!=null))
        {
 
$letter = ORM::factory('letter');
$letter->message = Arr::get($_POST, 'letter');
$letter->friend_id = $friend_id;
$letter->my_id = Cookie::get('user', '0');
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

        }   }    */
        
   $my_id = Cookie::get('user', '0');
    $friend_id = $id;            
       
        
        $letter_out = ORM::factory('letter')
                ->where('my_id', '=', $my_id)
                ->and_where('friend_id', '=', $friend_id)
                ->find_all()
                ->as_array();
        //print_r($letter_out);
        $letter_in = ORM::factory('letter')
                ->where('my_id', '=', $friend_id)
                ->and_where('friend_id', '=', $my_id)
                ->find_all()
                ->as_array();
      
       $this->response->body($content);
      
    }
}

