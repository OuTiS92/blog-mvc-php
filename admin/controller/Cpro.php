<?php
require_once 'model/Mpro.php';

    $class = new pro();
    switch($action){
        case 'list':
         $pro=$class->pro_list();
        break;
        case 'add':
            $res=$class->procat_list();
            if($_POST){
                $data=$_POST['frm'];
                $exts=array('image/jpeg','image/png');
                $to=$class->uploaderImage('image','../public/uploader',$exts);
                $class->pro_add($data,$to);
            }
        break;
        case 'delete':
            $id=$_GET['id'];
            $class->pro_delete($id);
            echo '<meta http-equiv="refresh" content="0; URL=index.php?c=pro&a=list">';
        break;
        case 'edit':
            $id=$_GET['id'];
            $results=$class->pro_showEdit($id);
            if($_POST){
                $data=$_POST['frm'];               
                $class->pro_edit($data,$id);
                echo '<meta http-equiv="refresh" content="0; URL=index.php?c=pro&a=list">';
            }
        break;
    }
   require_once 'view/'.$controller."/".$action.'.php';