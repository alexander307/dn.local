<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Editmain extends Controller_Common {

 public function action_index()
    {
      $id = $this->request->param('id');
        
        $content = View::factory('/edit/edit')
                ->bind('edit1', $edit1)
                ->bind('edit2', $edit2)
                ->bind('edit3', $edit3)
                ->bind('edit4', $edit4);
        
        $edit1_url ='edit/edit1/'.$id;
         $edit2_url ='edit/edit2/'.$id;
          $edit3_url ='edit/edit3/'.$id;
           $edit4_url ='edit/edit4/'.$id;
           
        $edit1 = Request::factory($edit1_url)->execute();
        $edit2 = Request::factory($edit2_url)->execute();
        $edit3 = Request::factory($edit3_url)->execute();
        $edit4 = Request::factory($edit4_url)->execute();
           
        
        
        
        $this->template->content = $content;
    }
    
}