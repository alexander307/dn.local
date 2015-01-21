<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Edit extends Controller {
 
   
    public function action_edit1()
    {
        $id = $this->request->param('id');
         $content = View::factory('/edit/edit1')
                 ->bind('edit1', $edit1);
        $edit1 = ORM::factory('unique', $id)->as_array();
       if ($_POST)
        { 
$edit = ORM::factory('unique', $id);
$edit->password = Arr::get($_POST, 'password');
$edit->name = Arr::get($_POST, 'name');
$edit->surname = Arr::get($_POST, 'surname');
$edit->patronomyc = Arr::get($_POST, 'patronomyc');
$edit->nickname = Arr::get($_POST, 'nickname');
$edit->email = Arr::get($_POST, 'email');
$edit->save(); 
//HTTP::redirect(URL::site()."/edit/edit1/$id");
}
       
        
        $this->response->body($content);
      
    }
    
    public function action_edit2()
    {
        $id = $this->request->param('id');
         $content = View::factory('/edit/edit2')
                 ->bind('main', $main)
                  ->bind('adress', $adress);
         
        
          $main = ORM::factory('maininformation', $id)->as_array();
          $adress = ORM::factory('adress', $id)->as_array();
       print_r($main);
       echo "<br/>";
        print_r($adress);
        
        if ($_POST)
        {
          $registration2 = ORM::factory('maininformation', $id);
          $reg2 = ORM::factory('adress', $id);
          
          $year = Arr::get($_POST, 'year');
           $month = Arr::get($_POST, 'month');
           $day = Arr::get($_POST, 'day');        
$registration2->Male = Arr::get($_POST, 'sex');
$registration2->MS = Arr::get($_POST, 'family');
$registration2->Show = Arr::get($_POST, 'sp');
$registration2->Birthday_date = "$day-$month-$year";
$registration2->Native_town = Arr::get($_POST, 'native_town');

$reg2->country = Arr::get($_POST, 'country');
$reg2->city = Arr::get($_POST, 'city');
$reg2->street = Arr::get($_POST, 'street');
$reg2->house = Arr::get($_POST, 'number');

$registration2->save(); 
$reg2->save();
 //HTTP::redirect(URL::site()."/edit/edit2/$id");           
            
        }
       
        
        $this->response->body($content);
      
    }
    
     public function action_edit3()
    {
        $id = $this->request->param('id');
         $content = View::factory('/edit/edit3')
                 ->bind('edit3', $edit3);
        $edit3 = ORM::factory('interests', $id)->as_array();
      if ($_POST)
        {
            $registration3 = ORM::factory('interests', $id);
            $registration3->music = Arr::get($_POST, 'music');
            $registration3->films =Arr::get($_POST, 'films');
            $registration3->TV_show =Arr::get($_POST, 'TV_show');
            $registration3->books =Arr::get($_POST, 'books');
            $registration3->games =Arr::get($_POST, 'games');
            $registration3->cities =Arr::get($_POST, 'cities');
            $registration3->about_me =Arr::get($_POST, 'about_me');
            
            $registration3->save();
          //HTTP::redirect(URL::site()."/edit/edit3/$id");
        }
       
       
        
        $this->response->body($content);
      
    }
    
    public function action_edit4()
    {
        $id = $this->request->param('id');
         $content = View::factory('/edit/edit4')
                 ->bind('middle1', $middle1)
                ->bind('high1', $high1)
                 ->bind('job1', $job1)
                 ->bind('service1', $service1);
         
        
        $middle1 = ORM::factory('middleeducation',$id)->as_array();
            $high1 = ORM::factory('higheducation', $id)->as_array();
            $job1 = ORM::factory('job', $id)->as_array();
            $service1 = ORM::factory('service', $id)->as_array();
        if ($_POST)
        {
            $middle = ORM::factory('middleeducation',$id);
            $high = ORM::factory('higheducation',$id);
            $job = ORM::factory('job',$id);
            $service = ORM::factory('service',$id);
            
            
            $middle->country = Arr::get($_POST, 'country1');
            $middle->city = Arr::get($_POST, 'city1');
            $middle->school = Arr::get($_POST, 'school1');
            $middle->year_1 = Arr::get($_POST, 'year11');
            $middle->year_2 = Arr::get($_POST, 'year12');
            
            
            $high->country = Arr::get($_POST, 'country2');
            $high->city = Arr::get($_POST, 'city2');
            $high->university = Arr::get($_POST, 'school2');
            $high->year_1 = Arr::get($_POST, 'year21');
            $high->year_2 = Arr::get($_POST, 'year22');
          
            
            $job->country = Arr::get($_POST, 'country3');
            $job->city = Arr::get($_POST, 'city3');
            $job->company = Arr::get($_POST, 'school31');
            $job->post = Arr::get($_POST, 'school32');
            $job->year_1 = Arr::get($_POST, 'year31');
            $job->year_2 = Arr::get($_POST, 'year32');
           
            
            $service->country = Arr::get($_POST, 'country4');
            $service->military_unit = Arr::get($_POST, 'school4');
            $service->year_1 = Arr::get($_POST, 'year41');
            $service->year_2 = Arr::get($_POST, 'year42');
            
            
            
            $middle->save();
            $high->save();
            $job->save();
            $service->save();
            
            
            
          // HTTP::redirect(URL::site()."/edit/edit4/$id");
        }
       
        
        $this->response->body($content);
      
    }
    
}       

