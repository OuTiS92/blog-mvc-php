<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>سایت فروشگاهی</title>

    <!-- app.css if the Grid file (Contains grid style only) -->
    <link rel="stylesheet" type="text/css" href="public/default/stylesheets/app.css" />
    <!-- Droid Sans From Google -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main stylesheet -->
    <link rel="stylesheet" type="text/css" href="public/default/stylesheets/base.css" />
    <!-- Icon Font (icomoon.io) -->
    <link rel="stylesheet" type="text/css" href="public/default/fonts/style.css" />
    <!-- CSS3 Animation Lib -->
    <link rel="stylesheet" type="text/css" href="public/default/stylesheets/animations.css" />
    <!-- Flexslider -->
    <link rel="stylesheet" type="text/css" href="public/default/stylesheets/slider.css" media="all" />
    <!-- Jquery Selectric -->
    <link rel="stylesheet" type="text/css" href="public/default/stylesheets/selectric.css" />
    <!-- Owl Carousel Assets -->
    <link href="public/default/owl-carousel/owl.carousel.css" rel="stylesheet" />
    <link href="public/default/owl-carousel/owl.theme.css" rel="stylesheet" />

    <script src="public/default/javascripts/vendor/custom.modernizr.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

<!-- Header -->
<div class="header">
    <!-- Header top -->
    <div class="headertop">

        <!-- Content Row -->
        <div class="row">

            <!-- Welcome Txt -->
            <div class="small-12 medium-5 large-5 welcome-guest-text columns">
                <div class="topHeader">
                <?php
                if(isset($_SESSION['user_id'])){
                    echo $_SESSION['user_name']." <h style=' padding: 10px;    ' > عزیز خوش آمدید </h>  ";
                    echo "<a color: red; href='index.php?c=user&a=logout' style='padding-right:20px; color:black;'>خروج</a>";
                }
                else{
                    echo "  کاربر مهمان خوش آمدید ";
                    echo "<a href='index.php?c=user&a=register' style='padding-right:20px; color:black;' >ثبت نام</a>";
                    echo "<a href='index.php?c=user&a=login' style='padding-right:20px; color:black;' >ورود</a>";
                }
                ?>
                </div>


            </div>
            <!-- End Welcome Txt -->
            <!-- Currency -->
            

            <!-- Topcart -->
            <div class="small-12 medium-5 large-4 left topcartbg columns">
                <!-- Carticon -->
                <div class="topcart-icon text-center">
                
                    <i class="icon-cart2"></i>
                </div>
                <!-- End Carticon -->

                <!-- Topcart Text -->
                <div class="topcart-text">
                <?php 
                	if(isset($_SESSION['user_id'])){
                	    $count=count($class->basket_list($_SESSION['user_id']));
                	    echo "شما ".$count." را انتخاب کرده اید ";
                	}else{
                	     echo "<a href='index.php?c=user&a=login' style='padding-right:20px; color:black;' >لطفا ابتدا وارد اکانت خود شوید !</a>"; 
                	}
                
                
                
                ?>
                </div>
                <!-- End Topcart Text -->

                <!-- Topcart Arrow Down -->
                <div class="topcart-arrow-down">
                    <a href="#">
                        <i class="icon-arrow-down"></i>

                    </a>


                </div>
                <!-- End Topcart Arrow Down -->

                <!-- Cart items -->
                <div class="small-12 medium-12 large-4 cart-dropdown">

                    <!-- Item List -->
                    
                     <?php 

                     if(isset($_SESSION['user_id'])){
            
                     foreach ($class->basket_list_pro($_SESSION['user_id']) as $pro) : ?>
                            <!-- Item List -->
                            <div class="cart-item-list">

                                <!-- Thumb -->
                                <div class="cart-item-thumb right">
                                    <img src="shop/<? echo $pro['image'] ?>" height="100" alt="Cart product 1" style="width: 50px;" />
                                </div>
                                <!-- End thumb -->

                                <!-- Content -->
                                <div class="cart-item-content">
                                    <!-- {product name} -->
                                    <div class="cart-item-title">
                                        <a href="#"> <?echo $pro['title'] ?></a>
                                    </div>
                                    <!-- PRice -->
                                    <div class="cart-item-price">
                                     <?php echo number_format($pro['price']); ?>
                                    </div>
                                    

                                </div>
                                <!-- End Content -->

                                <!-- Clearing -->
                                <div class="clearing"></div>

                            </div>
                            <!-- End item list -->
                        <?php
                         endforeach;
                        }
                         ?>
   

                    <!-- Total -->
                    <div class="small-12 large-12 text-center medium-12 columns cart-total">
                    <?php
                     if(isset($_SESSION['user_id'])){
                     foreach ($class->basket_list_pro($_SESSION['user_id']) as $product){
                    @$total +=$product['price'];
                    }
                    }
                     ?>
                        مجموع: 
                        <?php echo number_format($total); ?>
                        تومان 
                    </div>
                    <button class="small-12 large-12 btn btn-3 btn-3a icon-arrow-left">

                        <a href="index.php?c=basket&a=detail">  سبد خرید</a>
                        </button>
                   

                </div>
                <!-- End Cart item -->
            </div>
            <!-- End Topcart -->

        </div>
        <!-- End Content Row -->

    </div>
    <!-- End Header top -->

    <!-- Header Bottom -->
    <div class="headerbottom">
        <!-- Content Row -->
        <div class="row headerbottomrow">

            <!-- Logo -->
            <div class="small-12 medium-3 large-2 small-centered large-uncentered text-center logo columns">
                <a href="index.php" title="nexx Homepage"><img src="public/default/img/logo.png" alt="Nexx Store" /></a>
            </div>
            <!-- End Logo -->
            <!-- Menu Icon For Mobile -->
            <div class="menu-icon"><i class="icon-menu"></i>

            </div>

            <!-- Main Navigation -->
            <div class="small-12 medium-12 large-7 mainnav columns">

                <ul class="navigation">
                    <?php foreach ($list_procat as $value): ?>
                    <li>
                        <a href="woman.html"><?php echo $value['title']; ?></a>
                        <!-- dropdown -->
                        <div class="dropdown-menu">
                            <!-- Dropdown Links -->
                            <ul class="dropdown">

                            <?php
                                $under_list=$class->procat_under_list_default($value['id']);
                                foreach ($under_list as $val):
                            ?>
                                <li><a href="index.php?c=pro&a=list&procat=<?php echo $val['id']; ?>" title="Product Grid">
                                        <?php echo $val['title']; ?>
                                    </a></li>
                            <?php endforeach; ?>

                            </ul>
                            <!-- End Dropdown Links -->
                        </div>
                        <!-- End dropdown -->

                    </li>
                    <?php endforeach;?>
                </ul>

            </div>
            <!-- End Main Navigation -->

            <!-- Searchbox -->
            <div class="small-12 medium-12 large-3 searchinputholder columns">

            <input type="text" class="searchinput" id="search_text"  placeholder=" جستجوی محصول" />
            <ul id="result">
                    <script>
                        $(document).ready(function () {
                            $("#result").fadeOut(0);
                            $('#search_text').click(function(){
                                $(this).next("#result").fadeIn(0);
                            });
                            $('#search_text').keyup(function () {
                                var txt = $(this).val();
                                if (txt !== '') {
                                    $.ajax({
                                        type: 'post',
                                        data: {search: txt},
                                        url: "index.php?c=index&a=search",
                                        dataType: 'text',
                                        success: function (res) {
                                            $("#result").html(res);
                                        }
                                    });
                                }
                                else {
                                    $("#result").html('');
                                }
                            });
                            $('#search_text').blur(function(){
                               $(this).next("#result").fadeOut(0);
                            });
                        });
                    </script>
                </ul>
            </div>
            <!-- End Searchbox -->

            <!-- Sub Navigation -->
            
            <!-- End Sub Navigation -->

        </div>
        <!-- End Content Row -->

    </div>
    <!-- End Header Bottom -->
</div>
<!-- End header -->
<script type="text/javascript">
    $(document).ready(function () {
        var total = 0;
        $(".price").each(function () {
            var each_single_price = $(this).val();
            var numbers = $(this).siblings('.number-wrapper').children('.quantity-inp').children('.quantity-input').val();
            var result = each_single_price * numbers;
            total += result;
        });


        $(".sum").children("input").attr("placeholder", total);

        $(".quantity-input").each(function () {
            $(this).on("input", function () {
                var all = 0;
                var quantity = $(this).val();
                var pro_id = $(this).attr("id");
                $.ajax({
                    type: 'post',
                    url: "index.php?c=basket&a=ajax&pro_id=" + pro_id + "&quantity=" + quantity
                });

                $("#number_<?= $res['id'];?>").text('تعداد (' + quantity + ')');
                var price = $(this).parents(':eq(1)').siblings('.price').val();
                $(this).parents(':eq(1)').siblings('.price').text('');
                var multiply = price * quantity;
                $(this).parents(':eq(1)').siblings('.main-price').text(multiply + " تومان");
                $(".quantity-input").each(function () {
                    var number = $(this).val();
                    var cost = $(this).parents(':eq(1)').siblings('.price').val();
                    var each_total = number * cost;
                     all += each_total;
                });
                $(".sum").children("input").attr("placeholder", all);
            });
        });
    });


</script>
