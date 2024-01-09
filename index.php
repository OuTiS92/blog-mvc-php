<?php
include_once 'public/include/config.php';
if($_GET['a']!='search') {

    include_once 'controller/Clayout.php';
    include_once 'view/layout/header.php';
    $controller = @$_GET['c'] ? $_GET['c'] : 'index';
    $action = @$_GET['a'] ? $_GET['a'] : 'index';
    if (file_exists('controller/C' . $controller . '.php')) {
        require_once 'controller/C' . $controller . '.php';
    }
    include_once 'view/layout/footer.php';
}
else{
    require_once 'admin/model/Mpro.php';
    $class=new pro();
    $search = $_POST['search'];
    $results = $class->pro_search($search);
    $output = ' ';
    if (count($results) > 0) {
        foreach ($results as $row) {
            $output .= "<li>" . $row->title . "</li>";
        }
    }else{
        $output = "موردی یافت نشد";
    }
    echo $output;
}