<!--This is script sources for the cart -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mycart.min.js"></script>
<script>
$(function () {

var goToCartIcon = function($addTocartBtn){
  var $cartIcon = $(".my-cart-icon");
  var $image = $('<img style="width:30px;height:30px;" src=" class="cartimage"' + $addTocartBtn.data("firstimage") + '"/>').css({"position": "fixed", "z-index": "999"});
  $addTocartBtn.prepend($image);
  var position = $cartIcon.position();
  $image.animate({
    top: position.top,
    left: position.left
  }, 500 , "linear", function() {
    $image.remove();
  });
}

$('.my-cart-btn').myCart({
  currencySymbol: '$',
  classCartIcon: 'my-cart-icon',
  classCartBadge: 'my-cart-badge',
  classProductQuantity: 'my-product-quantity',
  classProductRemove: 'my-product-remove',
  classCheckoutCart: 'my-cart-checkout',
  affixCartIcon: true,
  showCheckoutModal: true,

  clickOnAddToCart: function($addTocart){
    goToCartIcon($addTocart);
  },
  afterAddOnCart: function(products, totalPrice, totalQuantity) {
    console.log("afterAddOnCart", products, totalPrice, totalQuantity);
  },
  clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
    console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
  },
  checkoutCart: function(products, totalPrice, totalQuantity) {
    var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
    $.each(products, function(){
        shoppingcart(this.itemid, this.quantity, this.price * this.quantity);
    });
    console.log("checking out", products, totalPrice, totalQuantity);
  },
  getDiscountPrice: function(products, totalPrice, totalQuantity) {
    console.log("calculating discount", products, totalPrice, totalQuantity);
    return totalPrice * 0.99;
  }
});

});
    function shoppingcart(allitemid,allquantity,allprice){
        var myorder = "<?php echo $order ?>";
        $.post('order.php',{ui:'1', itemid:allitemid, aq:allquantity, ap:allprice, shopping:'shopping', order:myorder});
    }
</script>
<style>
        .badge-notify{
        background:red;
        position:relative;
        top: -10px;
        right: 10px;
    }
    .my-cart-icon-affix {
        position: relative;
        z-index: 999;
    }
</style>