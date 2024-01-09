<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Inbox</title>

    <!-- Bootstrap core CSS -->
    <link href="../public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../public/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../public/admin/assets/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="../public/admin/css/style.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
  

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="../public/admin/js/html5shiv.js"></script>
    <script src="../public/admin/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo" style="text-transform: none;">Panel<span>    Admin</span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            
            <!--  notification end -->
        </div>
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="">
                        <span class="username"> <?php 
                                        echo $_SESSION['user_name'];
                                        ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        
                        <li><a href="../index.php?c=user&a=logout"><i class="icon-key"></i>خروج</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="index.php?c=index&a=index">
                        <i class="icon-dashboard"></i>
                       <span>صفحه اصلی</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>دسته بندی مجصولات </span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="index.php?c=procat&a=list">لیست دسته بندی  </a></li>
                        
                        <li><a class="" href="index.php?c=procat&a=add">افزودن دسته بندی  </a></li>
                    </ul>
                </li> 
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>  مجصولات </span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="index.php?c=pro&a=list">لیست محصولات  </a></li>
                        
                        <li><a class="" href="index.php?c=pro&a=add">افزودن محصول جدید    </a></li>
                    </ul>
                </li>  
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>  سفارشات  </span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="index.php?c=basket&a=list">لیست سفارشات</a></li>

                    </ul>
                </li>                  
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->