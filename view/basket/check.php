<div class="row featured-row">

    <h1>سبد خرید</h1>
    <div class="fr-border"></div>
    <!-- Item List -->


    <?php
    require_once 'admin/model/Mpro.php';
    $pro = new pro();
    foreach ($result as $basket):
        if (@$basket['status'] == 0) {
            $res = $pro->pro_basket_list($basket['pro_id']);
            ?>


            <div class="small-10 small-centered large-12 medium-12 medium-uncentered large-uncentered columns shopping-cart-list  ">
                <div class="small-12 small-centered medium-2 medium-uncentered large-2 shopping-cart-thumb large-uncentered columns">
                    <img src="shop/<?php echo $res['image']; ?>" alt="Product 1"/>
                </div>
                <!-- End Thumb -->
                <!-- Content -->
                <div class="small-12 small-centered medium-8 medium-uncentered large-9 large-uncentered columns list-wrapper">
                    <!-- Title -->
                    <div class="product-detail-title  shopping-cart-item-title">
                        <a href="#" title="Coolwater Perfume">
                            <?php echo $res['title']; ?>
                             |                     قیمت واحد <?php echo $res['price']; ?>
                        </a>
                    </div>
                    <!-- End Title -->
                    <input class='price' type="hidden" value="<?php echo $res['price'] ?>" style="display: none;"/>
                    <div class="main-price shopping-cart-item-price">
                        <?php echo($res['price'] * $basket['tedad']); ?> تومان
                    </div>

                    <!-- Product Size -->
                    <div class="small-12 small-centered medium-12 medium-uncentered large-12 large-uncentered shopping-cart-product-size columns">
                        <div class="product-attr-text">
                            اندازه:
                        </div>
                        <div class="product-size">
                            <a href="#" title="Small">
                                S
                            </a>
                        </div>


                    </div>
                    <!-- End Product Size -->


                    <!-- Product Quantity -->
                    <div class="small-12 small-centered medium-12 medium-uncentered large-12 large-uncentered columns number-wrapper">
                        <div class="product-attr-text q-lineheight">
                            تعداد:
                        </div>

                        <div class="quantity-inp">
                            <input type="text"  class="quantity-input" id="<?php echo $res['id'] ?>"
                                   value="<?php echo $basket['tedad'] ?>" readonly />
                        </div>

                    </div>
                    <!-- End Product Quantity -->


                </div>
                <!-- End Content  -->

                <!-- Remove Button -->
                <div class="small-12 text-center medium-1 large-1 large-uncentered shp-remove-btn medium-uncentered columns">
                    
                </div>
                <div class="clearing">
                </div>
            </div>
            <!-- End item list -->

        <?php } endforeach; ?>


    <!-- Total -->
    <?php
    if (count($result) > 0) {

        ?>
        <div class="small-12 small-centered large-uncentered medium-uncentered large-6 medium-6 cart-total columns sum">
            مجموع: <input type="text" value="" disabled placeholder=""/> <span>تومان</span>

        </div>
    <?php } else {echo "سبد خرید شما خالی است.";} ?>

    <!-- Check out button -->

    <div class="small-12 large-5 cart-checkout-button left medium-6 columns">
        

        <a href="index.php?c=basket&a=pay" class="small-6 large-6 medium-6 btn btn-3 btn-3a icon-lock">پرداخت </a>
    </div>

</div>
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
        
    });
</script>