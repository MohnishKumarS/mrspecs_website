<div class="checkout-steps">
    <a href="<?= $url ?>cart" class="checkout-steps__item active">
        <span class="checkout-steps__item-number">01</span>
        <span class="checkout-steps__item-title">
            <span>Shopping Bag</span>
            <em>Manage Your Items List</em>
        </span>
    </a>
    <a href="<?= $url ?>checkout" class="checkout-steps__item<?= ($step??0) > 1 ? "  active" : "" ?>">
        <span class="checkout-steps__item-number">02</span>
        <span class="checkout-steps__item-title">
            <span>Shipping and Checkout</span>
            <em>Checkout Your Items List</em>
        </span>
    </a>
    <a href="<?= $url ?>confirm" class="checkout-steps__item<?= ($step??0) == 3 ? "  active" : "" ?>">
        <span class="checkout-steps__item-number">03</span>
        <span class="checkout-steps__item-title">
            <span>Confirmation</span>
            <em>Review And Submit Your Order</em>
        </span>
    </a>
</div>