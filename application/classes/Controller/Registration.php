<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Registration extends Controller_Common {
 

// Страница о сайте
    public function action_step1()
    {
        
        $content = View::factory('/registration/step1');
        $this->template->content = $content;
        if ($_POST)
        { 
$registration1 = ORM::factory('unique');
$article = ORM::factory('unique')->where('login', '=', Arr::get($_POST, 'login'))->find()->as_array();
print_r ($article);
if ((string)$article['login'] != (string)Arr::get($_POST, 'login') )
{
$registration1->login = Arr::get($_POST, 'login');
$registration1->password = Arr::get($_POST, 'password');
$registration1->name = Arr::get($_POST, 'name');
$registration1->surname = Arr::get($_POST, 'surname');
$registration1->patronomyc = Arr::get($_POST, 'patronomyc');
$registration1->nickname = Arr::get($_POST, 'nickname');
$registration1->email = Arr::get($_POST, 'email');
$registration1->save(); 

$article = ORM::factory('unique')->where('login', '=', Arr::get($_POST, 'login'))->find()->as_array();
$user_id = $article['id'];
Cookie::set('user_id', $article['id'] );
Cookie::set('user', $article['id']);

HTTP::redirect(URL::site()."/registration/step2");
}
else {echo "Такая запись уже есть!";}
           
        }
    }
    
    public function action_step2()
    {
      $content = View::factory('/registration/step2');
        $this->template->content = $content;  
        
       $user = (Cookie::get('user', 'no user'));
        $user_id = (Cookie::get('user_id', 'no user_id'));
         echo $user;
        echo  $user_id;
        if ($_POST)
        {
          $registration2 = ORM::factory('maininformation');
          $reg2 = ORM::factory('adress');
          $year = Arr::get($_POST, 'year');
           $month = Arr::get($_POST, 'month');
           $day = Arr::get($_POST, 'day');        
$registration2->Male = Arr::get($_POST, 'sex');
$registration2->MS = Arr::get($_POST, 'family');
$registration2->Show = Arr::get($_POST, 'sp');
$registration2->Birthday_date = "$day-$month-$year";
$registration2->Native_town = Arr::get($_POST, 'native_town');
$registration2->id = $user_id;
$reg2->country = Arr::get($_POST, 'country');
$reg2->city = Arr::get($_POST, 'city');
$reg2->street = Arr::get($_POST, 'street');
$reg2->house = Arr::get($_POST, 'email');
$reg2->id = $user_id;

$registration2->save(); 
$reg2->save();
            
            

           HTTP::redirect(URL::site()."/registration/step3");
        }
    }
    
     public function action_step3()
    {
      $content = View::factory('/registration/step3');
        $this->template->content = $content;  
         
       $user = (Cookie::get('user', 'no user'));
        $user_id = (Cookie::get('user_id', 'no user_id'));
        
        if ($_POST)
        {
            $registration3 = ORM::factory('interests');
            $registration3->music = Arr::get($_POST, 'music');
            $registration3->films =Arr::get($_POST, 'films');
            $registration3->TV_show =Arr::get($_POST, 'TV_show');
            $registration3->books =Arr::get($_POST, 'books');
            $registration3->games =Arr::get($_POST, 'games');
            $registration3->cities =Arr::get($_POST, 'cities');
            $registration3->about_me =Arr::get($_POST, 'about_me');
            $registration3->id = $user_id;
            $registration3->save();
           HTTP::redirect(URL::site()."/registration/step4");
        }
    }
    
     public function action_step4()
    {
       $content = View::factory('/registration/step4');
        $this->template->content = $content; 
         
       $user = (Cookie::get('user', 'no user'));
        $user_id = (Cookie::get('user_id', 'no user_id'));
        if ($_POST)
        {
            $middle = ORM::factory('middleeducation');
            $high = ORM::factory('higheducation');
            $job = ORM::factory('job');
            $service = ORM::factory('service');
            
            $middle->country = Arr::get($_POST, 'country1');
            $middle->city = Arr::get($_POST, 'city1');
            $middle->school = Arr::get($_POST, 'school1');
            $middle->year_1 = Arr::get($_POST, 'year11');
            $middle->year_2 = Arr::get($_POST, 'year12');
            $middle->id = $user_id;
            
            $high->country = Arr::get($_POST, 'country2');
            $high->city = Arr::get($_POST, 'city2');
            $high->university = Arr::get($_POST, 'school2');
            $high->year_1 = Arr::get($_POST, 'year21');
            $high->year_2 = Arr::get($_POST, 'year22');
            $high->id = $user_id;
            
            $job->country = Arr::get($_POST, 'country3');
            $job->city = Arr::get($_POST, 'city3');
            $job->company = Arr::get($_POST, 'school31');
            $job->post = Arr::get($_POST, 'school32');
            $job->year_1 = Arr::get($_POST, 'year31');
            $job->year_2 = Arr::get($_POST, 'year32');
            $job->id = $user_id;
            
            $service->country = Arr::get($_POST, 'country4');
            $service->military_unit = Arr::get($_POST, 'school4');
            $service->year_1 = Arr::get($_POST, 'year41');
            $service->year_2 = Arr::get($_POST, 'year42');
            
            
            
            $middle->save();
            $high->save();
            $job->save();
            $service->save();
            
            
            
           HTTP::redirect(URL::site()."/registration/step5");
        }
    }
    
    public function action_step5()
    {
       $content = View::factory('/registration/step5')
               ->bind('a', $a);
       
        $user = (Cookie::get('user', 'no user'));
        $user_id = (Cookie::get('user_id', 'no user_id'));
       
       $this->template->content = $content; 
       function rpHash($value) {
	$hash = 5381;
	$value = strtoupper($value);
	for($i = 0; $i < strlen($value); $i++) {
		$hash = (($hash << 5) + $hash) + ord(substr($value, $i));
	}
	return $hash;
}


if ($_POST){
if (rpHash($_POST['defaultReal']) == $_POST['defaultRealHash'])
{   if (!file_exists("public/photo/$user_id"))
{   //opendir('/public/photo');
    $papka = (string)$user_id;
    mkdir("public/photo/$papka");}
    
    HTTP::redirect(URL::site()."/user/$user_id"); }
else {$a =  "<p class='rejected'>You have NOT entered the 'real person' value correctly and the form has been rejected.</p>";}
       
    }
    
    }
    
    public function action_step6()
    {
       $content = View::factory('/registration/succes');
        $this->template->content = $content; 
        if ($_POST)
        {
            
           HTTP::redirect(URL::site()."/user/".$id); //Редирект на страницу пользователя
        }
    }

}

