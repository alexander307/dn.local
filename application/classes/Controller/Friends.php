<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Friends extends Controller_Common {
 

// Страница о сайте
    public function action_index()
    {
        
        $user_id = $this->request->param('id');
        if ((Cookie::get('user', 'no user'))!=$user_id)
        {
           
            HTTP::redirect(URL::site()."/");
        }
        
        
        $content = View::factory('/friends')
                ->bind('friends', $friends)
                ->bind('menu', $menu)
                ->bind('request', $request);
        
        $this->template->content = $content;
        
        $menu_url = 'menu/'.$user_id;
        $menu = Request::factory($menu_url)->execute(); 
        $request = ORM::factory('friends')
                ->where('outer_id', '=', $user_id)
                ->and_where('index', '=', '1')
                ->find_all()
                ->as_array();
        $friends = ORM::factory('friends')
                ->where('outer_id', '=', $user_id)
                ->and_where('index', '=', '2')
                ->find_all()
                ->as_array();
        
        
        
   if (isset($_POST['add']))
        {
       $moove_id = Arr::get($_POST, 'add');
       $moove_id1 = Arr::get($_POST, 'add1');
        $moove =  ORM::factory('friends', $moove_id);
         $moove->index = '2';
         $moove->save();
         $moove1 = ORM::factory('friends');
         $moove1->index = '2';
         $moove1->friend_id = $user_id;
         $moove1->outer_id = $moove_id1;
         $moove1->save();
         
         HTTP::redirect(URL::site()."/friends/$user_id");
        }    
        
        if (isset($_POST['del1']))
        {
         $del_id = Arr::get($_POST, 'del1');
        $del = ORM::factory('friends', $del_id)
                 ->delete();
         
         HTTP::redirect(URL::site()."/friends/$user_id");
        }
        
       if (isset($_POST['letter']))
        {
           $friend_id = Arr::get($_POST, 'letter');
         HTTP::redirect(URL::site()."/letter/$friend_id");
        } 
        
      
        
        if (isset($_POST['del2']))
        {
         $del_id = Arr::get($_POST, 'del2');
         
        //$del = ORM::factory('friends', $del_id)
            //     ->delete();
        $del = ORM::factory('friends', $del_id)->as_array();
        $del2 = ORM::factory('friends')
                ->where('outer_id', '=', $del['friend_id'])
                ->and_where('friend_id', '=', $del['outer_id'])
                ->find()
                ->as_array();
       // print_r($del);
        //echo "<br/>";
        //print_r($del2);
        //echo $del2['id'];
       
        $del4 = ORM::factory('friends', $del_id);
               if ($del4!=null)
                {$del4->delete();}
        
         $del3 = ORM::factory('friends', $del2['id']);
                if ($del3!=null)
                {$del3->delete();}
         HTTP::redirect(URL::site()."/friends/$user_id");
        }
   
       
        
        
    }
}
