<?php 
ob_start();
require_once 'admin/model/Mbasket.php';
$basket = new basket();
switch($action){
    case 'detail':
   	 if(isset($_SESSION['user_id'])){
   	     $user_id=$_SESSION['user_id'];
   	     $result=$basket->basket_list($user_id);
         }
         else{
             echo '<meta http-equiv="refresh" content="0; URL=index.php?c=user&a=login">'; 
         }
     break;
     
     case 'add':
   	 if(isset($_SESSION['user_id'])){
   	     $user_id=$_SESSION['user_id'];
   	     $pro_id=$_GET['pro_id'];
   	     $basket->basket_add($user_id, $pro_id);
   	     echo '<meta http-equiv="refresh" content="0; URL=index.php?c=basket&a=detail">'; 
         }
         else{
            echo '<meta http-equiv="refresh" content="0; URL=index.php?c=user&a=login">'; 
         }
         
         break;
     
         
      
     case 'omit':
        $id=$_GET['id'];
        $user_id=$_SESSION['user_id'];
        $basket->basket_omit($id,$user_id);
        echo '<meta http-equiv="refresh" content="0; URL=index.php?c=basket&a=detail">';
        break;
        

    case 'ajax':
        $pro_id=$_GET['pro_id'];
        $quantity=$_GET['quantity'];
        $basket->basket_ajax($pro_id,$quantity);
        break;
        
    case 'delete':
       $id=$_GET['id'];
       $basket->basket_delete($id);
       echo '<meta http-equiv="refresh" content="0; URL=index.php?c=basket&a=detail">'; 
       break; 
       
    case 'check':
   	 if(isset($_SESSION['user_id'])){
   	     $user_id=$_SESSION['user_id'];
   	     $result=$basket->basket_list($user_id);
         }
         else{
             echo '<meta http-equiv="refresh" content="0; URL=index.php?c=user&a=login">'; 
         }
     break;
    case 'pay':
   	 if(isset($_SESSION['user_id'])){
   	     $user_id=$_SESSION['user_id'];
   	     $result=$basket->basket_pay($user_id);
   	     echo '<meta http-equiv="refresh" content="0; URL=index.php">';
         }
         else{
             echo '<meta http-equiv="refresh" content="0; URL=index.php?c=user&a=login">'; 
         }
     break;
}
require_once 'view/'.$controller."/".$action.'.php';