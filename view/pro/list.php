	<!-- Breadcrumb -->
<div class="breadcrumb-holder">
    <!-- Content Row -->
    <div class="row">
        <ul class="breadcrumbs small-12 medium-8 large-8 columns">
            <li><a href="#" title="Homepage">صفحه اصلی</a></li>
            <li>دسته بندی</li>
        </ul>
    </div>
    <!-- End Content Row -->
</div>
<!-- End BreadCrumb -->

<!-- Page Content Holder -->
<div class="row">
    <!-- Widget Right -->
    <div class="small-12 small-centered medium-3 large-3 large-uncentered medium-uncentered  columns">
        <!-- Category Listing Module -->
        <div class="lft-module-heading">

            گروه ها
        </div>
        <!-- Listing -->
        <ul class="cat-listing">
        <?php foreach($res as $procat): ?>
            <li>
                <a href="index.php?c=pro&a=list&procat=<?php echo $procat['id']; ?>" title="Dress">
                  <?php echo $procat['title'];?>
                </a>
            </li>
            <?php endforeach; ?>
           
        </ul>
        <!-- End Category Listing Module -->

        <!-- BestSeller Module -->
        <div class="lft-module-heading">
دیگر محصولات 
        </div>
        <!-- Listings -->
        <?php foreach( $result as $value): ?>
        <div class="bst-seller-list">
            <div class="bst-seller-thumb">
                <img src="shop/<?php echo $value['image']; ?>" alt="thumbnail1" />
            </div>
            <div class="bst-seller-content">
                <div class="bst-seller-title">
                    <a href="#" title="turtle neck">
			<?php echo $value['title']; ?>
                    </a>
                </div>
                <div class="bst-seller-price"><?php echo $value['price']; ?></div>
                <div class="bst-seller-cart">
                    <a href="index.php?c=basket&a=add&pro_id=<?php echo $value['id']; ?>" title="Add to cart"><i class="icon-cart"></i>اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="clearing"></div>
            
        </div>

        <?php endforeach; ?>
        <!-- Ennd Bestseller Module -->

        <!-- ADVERTISEMENT -->
        <div class="right-ad text-center">
            <img src="img/ads/product-list.jpg" alt="Advertisement" />
        </div>
    </div>
    <!-- End Widget Right -->

    <!-- Featured Product Module -->
    <div class="small-12 small-centered medium-9 medium-uncentered large-9 large-uncentered featured-row columns">

        <h1>آخرین پوشاک مجموعه</h1>
        <div class="heading-summary"></div>

        <!-- End Heading  -->

        <!-- Sorting -->
        
        <!-- End Sorting -->

        <!-- PRODUCT LISTING -->










    <?php foreach ($result as $value): ?>

        <!-- Item -->
        <div class="small-12 medium-12 small-centered medium-uncentered large-12 large-uncentered columns product-list">
            <!-- Product Thumb -->
            <div class="product-list-thumb small-5 medium-5 large-3 columns">
                <!-- Sale Tag -->
                
                <!-- End Sale Tag -->
                <img src="shop/<?php echo $value['image']; ?>" alt="Product 1" />

            </div>
            <!-- End Product thumb -->

            <!-- Product RIght -->
            <div class="small-7 medium-7 large-9 text-right columns">
                <!-- Product Link -->
                <div class="product-link">
                    <a href="index.php?c=pro&a=detail&id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a>
                </div>

                <!-- Product Rating -->
                

                <!-- Product Descipriont -->
                <div class="product-list-description">
                    <?php echo $value['text']; ?>                </div>

                <!-- Product Price -->
                <div class="f-product-price text-right">
                    <span class="f-product-price-old"></span> <?php echo number_format($value['price']); ?>
                </div>

                <!-- AddtoCart Buttons -->
                <div class="f-product-hover text-right">
                    <div class="f-button">
                        <a href="index.php?c=basket&a=add&pro_id=<?php echo $value['id']; ?>" title="Add to Cart"><i class="icon-cart"></i></a>
                        
                    </div>
                </div>
                <!-- End AddtoCart Buttons -->

            </div>
            <!-- End Product Left -->
            <div class="clearing"></div>
        </div>
        <!-- End item -->
      <?php endforeach; ?>




























        <!-- END PRODUCT LISTING -->

        <div class="clearing"></div>
        <!-- Border --> <div class="fr-border"></div>


        <!-- Pagination -->
        <div class="small-10 small-centered medium-6 medium-uncentered large-6 large-uncentered columns">
            <div class="pagination">قبلی</div>
            <div class="pagination"><a href="#" title="Page 1">1</a></div>
            <div class="pagination"><a href="#" title="Page 2">2</a></div>
            <div class="pagination"><a href="#" title="Page 3">3</a></div>
            <div class="pagination"><a href="#" title="Page 4">4</a></div>
            <div class="pagination"><a href="#" title="last Page">بعدی</a></div>
        </div>
        <!-- End Pagination -->

        <div class="small-12 small-centered medium-5 medium-uncentered large-uncentered large-6 cnt-btn columns">
            <div class="continue-button"><a href="#">ادامه</a></div>
        </div>


        <div class="clearing"></div>
        <!-- Clearing -->
        <!-- Border -->
        <div class="fr-border"></div>



    </div>

    <!-- End Featured Products -->

    <div class="clearing"></div>

</div>
<!-- End Page Content Holder -->
