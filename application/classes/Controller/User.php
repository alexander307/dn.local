
<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_User extends Controller_Common {
 
    // Главная страница
    public function action_index()
    {
        if ((Cookie::get('user', 'no user'))== 'no user')
        {
           
            HTTP::redirect(URL::site()."/");
        }
        
        
        $id = $this->request->param('id');
        
        
        
        $content = View::factory('/user')
                ->bind('unique_', $unique_)
                ->bind('adress', $adress)
                ->bind('interests', $interests)
                ->bind('main_information', $main_information)
                ->bind('middle_education', $middle_education)
                ->bind('high_education', $high_education)
                ->bind('service', $service)
                ->bind('job', $job)
                ->set('user',$id)
                ->bind('posts',$posts)
                ->bind('video', $video)
                ->bind('menu', $menu)
                ->bind('avatar', $avatar)
                ->bind('proverka', $proverka)
                ->bind('id', $id);
        
        $avatar_url = 'avatar/index/'.$id;
        $avatar = Request::factory($avatar_url)->execute();
        
        $posts_url = 'wall/'.$id;
        $posts = Request::factory($posts_url)->execute();
        
        $video_url = 'user_video/'.$id;
        $video = Request::factory($video_url)->execute();
                
        $menu_url = 'menu/'.$id;
        $menu = Request::factory($menu_url)->execute();       
             
        //$unique_ = Model::factory('User')->get_info($id);
        $unique_ = ORM::factory('unique', $id)->as_array();
        $adress = ORM::factory('adress', $id)->as_array();
        $interests = ORM::factory('interests', $id)->as_array();
        $main_information = ORM::factory('maininformation', $id)->as_array();
        $middle_education = ORM::factory('middleeducation')
                ->where('id', '=', $id)
                ->find_all()
                ->as_array();
        $high_education = ORM::factory('higheducation', $id)->as_array();
        $service = ORM::factory('service', $id)->as_array();
        $job = ORM::factory('job', $id)->as_array();
        
        $my_id = (Cookie::get('user', '0'));
        
        $proverka = ORM::factory('friends')
                ->where('friend_id', '=', $id)
                ->and_where('outer_id', '=', $my_id )
                ->find()
                ->as_array();
        
        
        $this->template->content = $content;
        
         if (isset($_POST['wanttobe'])&&($_POST['wanttobe']=='go'))
        {
            
         
       $add = ORM::factory('friends');
                 $add->index = 1;
                 $add->friend_id = $my_id;
                 $add->outer_id = $id;
                 $add->save();
                 
         
         HTTP::redirect(URL::site()."/user/$id");
        }
        /*
         = array();
        $interests = array();
        $main_information = array();
        $middle_education = array();
        $high_education = array();
        $service = array();
        $job = array();
        
         */
         
        
    }
}