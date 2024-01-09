<?php
    require_once 'admin/model/Mindex.php';
    require_once 'admin/model/Mpro.php';
    $class = new pro();
    $result=$class->pro_list();
switch($action) {
    case 'index':
        if(isset($_POST['search'])) {
            $search = $_POST['search'];
            $results = $class->pro_search($search);
            $output = '';
            if (count($results) > 0) {
                foreach ($results as $row) {
                    $output = "<li>" . $row->title . "</li>";
                }
            }else{
                $output = "موردی یافت نشد";
            }
            echo $output;
        }
    break;
}
   
    require_once 'view/index/index.php';