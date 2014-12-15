
<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_User extends Controller_Common {
 
    // Главная страница
    public function action_index()
    {
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
                ->bind('video', $video);
        
        
        $posts_url = 'wall/'.$id;
        $posts = Request::factory($posts_url)->execute();
        
        $video_url = 'user_video/'.$id;
        $video = Request::factory($video_url)->execute();
                
                
             
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
        $this->template->content = $content;
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