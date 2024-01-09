<?php
require_once 'model/Muser.php';
require_once 'model/Mpro.php';
require_once 'model/Mbasket.php';

    $basket = new basket();
    switch($action){
        case 'list':
         $result=$basket->basket_pay_list();
        break;
        
    }
   require_once 'view/'.$controller."/".$action.'.php';