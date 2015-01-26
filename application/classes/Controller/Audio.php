<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Audio extends Controller {
 
    // Главная страница
    public function action_index()
    {
      $outer_id = $this->request->param('id');
        $content = View::factory('/audio_alt')
                ->bind('a', $a)
                ->bind ('audio', $audio);
        
        
        
        
        
        
        
        
           if ($_POST&&((Arr::get($_POST, 'send'))=='send'))
          {
          if ($a == UPLOAD_ERR_OK)
         {
             $ext = strtolower(pathinfo($_FILES['track']['name'], PATHINFO_EXTENSION));
              print_r($ext);
             print_r($_FILES);
           
             switch($ext)
             {
                 case 'mp3': 
                     break;
                 default:
                     //throw new InvalidFileTypeException($ext);
                     echo "MP выбери, #сука!";
             }
             
             $audio_name = ORM::factory('audio')
                 ->where('outer_id', '=', $outer_id)
                ->find_all()
                ->as_array();
             
             foreach ($audio_name as $key=>$value)
             {
                 $count[] = $value->id;
             }
             $max_id = count($count)-1;
             $k =  (string)($count[$max_id]+1);
             echo $k;
             $_FILES['track']['name'] = $k.".".$ext;
            $c = $k.".".$ext;
            echo $c;
             $id = Cookie::get('user', 'no user');
             $destfile = "public/mp3/$outer_id/".basename($_FILES['track']['name']);
             $b = basename($_FILES['track']['name']);
            //print_r($destfile);
             $ret = @move_uploaded_file($_FILES['track']['tmp_name'],$destfile);
 
             if ($ret === false)
                 echo "невозможно ту мув юзер фото!";
            else     
             echo "Передвинуто юзер аватар то фотос директори";
               if ($c!= null)
             {  
              $save = ORM::factory('audio', $outer_id);
             $save->id = $k;
             $save->artist = Arr::get($_POST, 'artist');
             $save->track = Arr::get($_POST, 'track');
             $save->outer_id = $outer_id;
             $save->save();
             //HTTP::redirect(URL::site()."/audio/".$outer_id);
             } 
             
             }
 else {
     echo "ошибки, ошибки ошибки";
 }
    } 
        
        
        
        if(($_POST)&&(Arr::get($_POST, 'send1')!=0))
        {
         
$a = Arr::get($_POST, 'send1');
echo $a;
$check = ORM::factory('audio', $a)
                ->as_array();

if ($check['id']!=null){
@unlink("public/mp3/$outer_id/".$a.".mp3");    
ORM::factory('audio', $a)
        ->delete();


        }   } 
        $audio = ORM::factory('audio')
                ->where('outer_id', '=', $outer_id)
                ->find_all()
                ->as_array();
      $this->response->body($content);  
        
        
        
    }
}
