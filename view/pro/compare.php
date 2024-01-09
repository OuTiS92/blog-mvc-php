<?php foreach ($results as $value): ?>
<div class="small-12 medium-12 small-centered medium-uncentered large-12 large-uncentered columns product-list">
<!-- Product Thumb -->
<div class="product-list-thumb small-5 medium-5 large-3 columns">
    <!-- Sale Tag -->
    
    <!-- End Sale Tag -->
    <img src="shop/<?= $value['image'];?>" alt="Product 1" />

</div>
<!-- End Product thumb -->

<!-- Product RIght -->
<div class="small-7 medium-7 large-9 text-right columns">
    <!-- Product Link -->
    <div class="product-link">
        <a href="#"><?= $value['title'];?></a>
    </div>

    <!-- Product Rating -->
    
    <!-- End Product Rating -->

    <!-- Product Descipriont -->
    <div class="product-list-description">
        <?= $value['text'];?>    </div>

    <!-- Product Price -->
    <div class="f-product-price text-right">
        <span >
        <?php echo number_format($value['price']);?>    </div></span>
    </div>

    <!-- AddtoCart Buttons -->
    <div class="f-product-hover text-right">
        <div class="f-button">
            <a href="#" title="Add to Cart"><i class="icon-cart"></i></a>
            <a href="#" title="Add to Wishlist"><i class="icon-heart"></i></a>
            <a href="#" title="Add to Compare"><i class="icon-tags"></i></a>
        </div>
    </div>
    <!-- End AddtoCart Buttons -->

</div>
<!-- End Product Left -->
<div class="clearing"></div>
</div>
<?php endforeach; ?>