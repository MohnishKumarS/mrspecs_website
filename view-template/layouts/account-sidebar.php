<div class="col-lg-3">
    <ul class="account-nav">
        <li>
            <a href="<?= $url ?>profile/orders" class="menu-link menu-link_us-s<?= $active === "order" ? " menu-link_active" : "" ?>">Orders</a>
        </li>
        <li>
            <a href="<?= $url ?>profile/address" class="menu-link menu-link_us-s<?= $active === "address" ? " menu-link_active" : "" ?>">Addresses</a>
        </li>
        <li>
            <a href="<?= $url ?>profile/account" class="menu-link menu-link_us-s<?= $active === "account" ? " menu-link_active" : "" ?>">Account Details</a>
        </li>
        <li>
            <a href="<?= $url ?>profile/wishlist" class="menu-link menu-link_us-s<?= $active === "wishlist" ? " menu-link_active" : "" ?>">Wishlist</a>
        </li>
        <li>
            <a href="#" class="menu-link menu-link_us-s">Logout</a>
        </li>
    </ul>
</div>