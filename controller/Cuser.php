<?php
require_once 'admin/model/Muser.php';
$user = new user();
switch($action){
    case 'register':
            if($_POST){
                $data=$_POST['frm'];
                $data['password']=sha1($data['password']);
                $id=$user->user_add($data);
                $_SESSION['user_id']=$id;
                $_SESSION['user_name']=$data['name'];
                echo '<meta http-equiv="refresh" content="0; URL=admin/index.php?c=index&a=index">';
               // mail($data['email'],'VC Subject',"<a href='academyit.net/vc.php?vc=$data[vc]'>Click Me </a>");
            }
        break;
    case 'login':
        if($_POST){
           $data=$_POST['frm'];
           $password=sha1($data['password']);
           $user=$user->user_login($data);
           if($user['password']==$password){
               $_SESSION['user_id']=$user['id'];
               $_SESSION['user_name']=$user['name'];
               echo '<meta http-equiv="refresh" content="0; URL=admin/index.php?c=index&a=index">';
           }
           else{
               echo '<meta http-equiv="refresh" content="0; URL=index.php?c=index&a=index&login=error">';
           }

        }

    break;
    case 'logout':
            session_destroy();
            echo '<meta http-equiv="refresh" content="0; URL=index.php?c=user&a=login">';
        break;
}
require_once 'view/'.$controller."/".$action.'.php';