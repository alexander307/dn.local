<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Avatar extends Controller {
 
    // Главная страница
    public function action_index()
    {
       $post_id = $this->request->param('id');
         $content = View::factory('/avatar')
                 ->bind('a', $a);
          $this->response->body($content);
        print_r($_FILES);
          //$a = $_FILES['avatarfile']['error'];
          
        
        
        //добавление фото
        if ($_POST)
          {
          if ($a == UPLOAD_ERR_OK)
         {
             $ext = strtolower(pathinfo($_FILES['avatarfile']['name'], PATHINFO_EXTENSION));
             switch($ext)
             {
                 case 'jpg': case 'jpeg': case'gif': case'png': case'bmp':
                     break;
                 default:
                     throw new InvalidFileTypeException($ext);
             }
             $_FILES['avatarfile']['name'] = 'ava.'.$ext;
             $id = Cookie::get('user', 'no user');
             $destfile = "public/photo/$id/".basename($_FILES['avatarfile']['name']);
             $b = basename($_FILES['avatarfile']['name']);
            print_r($b);
             $ret = @move_uploaded_file($_FILES['avatarfile']['tmp_name'],$destfile);
             if ($ret === false)
                 echo "невозможно ту мув юзер фото!";
             else     
             echo "Передвинуто юзер аватар то фотос директори"; 
             
             }
 else {
     echo "ошибки, ошибки ошибки";
 }
    }       
      
      
    }
}

