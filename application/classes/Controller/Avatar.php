<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Avatar extends Controller {
 
    // Главная страница
    public function action_index()
    {
       $post_id = $this->request->param('id');
         $content = View::factory('/avatar')
                 ->bind('a', $a);
          $this->response->body($content);
        //print_r($_FILES);
          //$a = $_FILES['avatarfile']['error'];
 //добавление фото
        if ($_POST&&((Arr::get($_POST, 'send1'))=='send1'))
          {
          if ($a == UPLOAD_ERR_OK)
         {
             $ext = strtolower(pathinfo($_FILES['avatarfile']['name'], PATHINFO_EXTENSION));
             switch($ext)
             {
                 case 'jpg': case 'jpeg': case'gif': case'png': case'bmp':
                     break;
                 default:
                     //throw new InvalidFileTypeException($ext);
                     echo "Файл выбери, сука!";
             }
             $_FILES['avatarfile']['name'] = 'ava.'.$ext;
            $c = 'ava.'.$ext;
            echo $c;
             $id = Cookie::get('user', 'no user');
             $destfile = "public/photo/$id/".basename($_FILES['avatarfile']['name']);
             $b = basename($_FILES['avatarfile']['name']);
            //print_r($destfile);
             $ret = @move_uploaded_file($_FILES['avatarfile']['tmp_name'],$destfile);
 
             if ($ret === false)
                 echo "невозможно ту мув юзер фото!";
             else     
             //echo "Передвинуто юзер аватар то фотос директори";
               if ($c!= null)
             {  
              $save = ORM::factory('maininformation', $post_id);
             $save->ava = (string)$c;
        
             $save->save();}
             
             }
 else {
     echo "ошибки, ошибки ошибки";
 }
    }  
    
    
    if ($_POST&&(Arr::get($_POST, 'send')=='delete'))
    {
        echo (Arr::get($_POST, 'send'));
@unlink("public/photo/1/".(string)$c);
$save = ORM::factory('maininformation', $post_id);
        $save->ava = null;
        $save->save();
        
    }
      
      
    }
}

