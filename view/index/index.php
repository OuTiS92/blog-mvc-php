
<!-- Main Banners -->
<div class="mainbanner">

    <!-- SLIDER -->
    <div class="slider_container">
        <div class="flexslider">
            <ul class="slides">
        
                <!-- Slide 1 -->
                <li>
                    <a href="#"><img style="width: 100%;" src="public/default/img/slideshow/apparel-clothing-model-zv-1920x1080.jpg" alt="" title="" /></a>
                    <!-- Slide Caption -->
                    <div class="flex-caption slideDown">
                        
                        <!-- Clear  -->
                        <div class="clearing"></div>
                        
                        <!-- Button -->
                        <div class="clearing"></div>
                        

                    </div>
                </li>
                <!-- Slide 2 -->
                <li>
                    <a href="#"><img style="width: 100%;" src="public/default/img/slideshow/camera_photographer_hands_124259_1920x1080.jpg" alt="" title="" /></a>
                    <!-- Slide Caption -->
                    <div class="flex-caption slideDown">
                        
                        <!-- Clear  -->
                        <div class="clearing"></div>
                        
                        <!-- Button -->
                        <div class="clearing"></div>
                        

                    </div>
                </li>
                
                 <li>
                    <a href="#"><img style="width: 100%;" src="public/default/img/slideshow/cropped-image-from-rawpixel-id-413980-jpeg.jpg" alt="" title="" /></a>
                    <!-- Slide Caption -->
                    <div class="flex-caption slideDown">
                        
                        <!-- Clear  -->
                        <div class="clearing"></div>
                        
                        <!-- Button -->
                        <div class="clearing"></div>
                        

                    </div>
                </li>
                
                <!-- End slide 2 -->
               
               <li>
                    <a href="#"><img style="width: 100%;" src="public/default/img/slideshow/RZQhLW.jpg" alt="" title="" /></a>
                    <!-- Slide Caption -->
                    <div class="flex-caption slideDown">
                        
                        <!-- Clear  -->
                        <div class="clearing"></div>
                        
                        <!-- Button -->
                        <div class="clearing"></div>
                        

                    </div>
                </li><li>
                    <a href="#"><img  style="width: 100%;"src="public/default/img/slideshow/SE4nMa.jpg" alt="" title="" /></a>
                    <!-- Slide Caption -->
                    <div class="flex-caption slideDown">
                        
                        <!-- Clear  -->
                        <div class="clearing"></div>
                        
                        <!-- Button -->
                        <div class="clearing"></div>
                        

                    </div>
                </li>

            </ul>
        </div>
    </div>
    <!-- End Slider -->

</div>
<!-- End Main Banners -->

<!-- Horizontal Border -->
<div class="contentborder">

</div>
<!-- End Horizontal Border -->

<!-- Advertisements -->
<div class="adbg">
    <!-- Content Row -->
    <div class="row">

        <!-- Ad 1 -->
        <div class="small-9 medium-4 medium-uncentered small-centered large-uncentered large-4 columns">
            <img src="public/default/img/ads/1.jpg" alt="ad1" />
        </div>
        <!-- End Ad 1 -->

        <!-- Ad 2 -->
        <div class="small-9 medium-4 medium-uncentered small-centered large-uncentered large-4 columns">
            <img src="public/default/img/ads/2.jpg" alt="ad2" />
        </div>
        <!-- End Ad 2 -->

        <!-- Ad 2 -->
        <div class="small-9 medium-4 medium-uncentered small-centered large-uncentered large-4 columns">
            <img src="public/default/img/ads/3.jpg" alt="ad2" />
        </div>
        <!-- End Ad 2 -->

    </div>
    <!-- End Row -->

</div>
<!-- End Advertisements -->


<!-- Featured Products -->

<!-- Heading -->
<div class="row featured-row">
    <h1 class="text-center">برجسته</h1>
    <div class="heading-summary text-center">            آخرین مجموعه ای از آیتم</div>
    <div class="fr-border"></div>
</div>
<!-- End Heading -->

<!-- Product Listing -->
<div class="row">



<?php foreach($result as $res): ?>

    <!-- Item -->
    <div class="small-8 medium-3 small-centered medium-uncentered large-3 large-uncentered columns f-product">
        <!-- Sale Tag -->
        
        <!-- End Sale Tag -->
        <div class="compare">
         <input type="checkbox" value="<?= $res['id']; ?>" name="compareItem">
            مقایسه
        </div> 
        <img src="shop/<?php  echo $res['image'];?>" style="width:300px; height:260px; padding: 18px;" alt="Product 1" />
        <!-- Product Link -->
        <div class="product-link text-center">
            <a href="#"> <?php  echo $res['title'];?></a>
        </div>

        <!-- Product Rating -->
        
        <!-- End Product Rating -->

        <!-- Product Price -->
        <div class="f-product-price">
            <?php echo number_format($res['price']);?> تومان 
        </div>

        <!-- AddtoCart Buttons -->
        <div class="f-product-hover">
            <div class="f-button">
                <a href="index.php?c=basket&a=add&pro_id=<?php  echo $res['id'];?>"><i class="icon-cart"></i></a>
                
            </div>
        </div>
        
        <!-- End AddtoCart Buttons -->
    </div>
    <!-- End item -->
    
<?php endforeach; ?>
   
<div class="row">

<a id="compare" class="btn btn-block" href="" style="background:#51acbd ; margin:0 auto; padding:5px 10px ; color:#fff; display:none">
مقایسه 
</a>

</div>
 
</div>
<!-- End Product Listing -->

<!-- End Featured Products -->

<!-- Social Widgets -->

<!-- End Social Widget -->
<script>
    $(document).ready(function () {
        var number = 0;
        var ids = [];
        $(".compare input:checkbox").each(function () {
            $(this).on("click", function () {
                if ($(this).prop('checked') == true) {
                    number++;
                    var id = $(this).val();
                    ids.push(id);
                }
                else {
                    var id = $(this).val();
                    ids = ids.filter(function (item) {
                        return item !== id;
                    });
                    number--;
                }

                check(number);
                var query = "index.php?c=pro&a=compare&";
                for (var i = 0; i <= ids.length - 1; i++) {
                    if (ids.length == 1) {
                        query += "id" + i + "=" + ids[i];
                    }
                    else {
                        if (i == ids.length - 1) {
                            query += "id" + i + "=" + ids[i];
                        }
                        else {
                            query +="id"+i+"="+ids[i]+"&";
                        }
                    }
                }
                var count=number;
                $("#compare").attr("href",query+"&count="+count);
            });
        });
        function check(number) {
            if (number > 0) {
                $("#compare").fadeIn(500);
            }
            else {
                $("#compare").fadeOut(500);
            }
        }
    });

</script>
