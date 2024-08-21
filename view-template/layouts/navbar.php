<!-- Elements Begin -->
<?php
$logoEle = '<div class="logo">
        <a href="' . $url . '">
            <img src="' . $url . '/assets/images/logo.png" alt="' . $title . '" class="logo__image d-block">
        </a>
    </div>';

$cartBtn = '<button class="header-tools__item header-tools__cart js-open-aside" data-aside="cartDrawer" title="Cart">
        ' . $icon_cart . '
        <span class="cart-amount d-block position-absolute js-cart-items-count">3</span>
    </button>';

?>
<!-- Elements End -->

<!-- Desktop header begin -->
<header id="header" class="header header_sticky header-fullwidth">
    <!-- Topbar Begin -->
    <nav class="topbar">
        <div class="btn-wrapper d-flex align-items-center">
            <a href="<?= $url ?>men-collections" class="tag-btn active">Women</a>
            <a href="<?= $url ?>men-collections" class="tag-btn">Men</a>
            <button class="tag-btn">Kid</button>
        </div>
        <div class="link-wrapper d-flex align-items-center">
            <a class="navigation__link" href="<?= $url ?>about-us">About Us</a>
            <a class="navigation__link" href="<?= $url ?>contact">Contact Us</a>
        </div>
    </nav>
    <!-- Topbar End -->
    <div class="header-desk header-desk_type_1">

        <?= $logoEle ?>

        <nav class="navigation">
            <ul class="navigation__list list-unstyled d-flex">
                <li class="navigation__item">
                    <a href="<?= $url ?>collections" class="navigation__link">Collections</a>
                    <div class="box-menu start-0 w-100">
                        <div class="col pe-4">
                            <ul class="sub-menu__list list-unstyled">
                                <li class="sub-menu__item">
                                    <a href="<?= $url ?>collections/pants-womens" class="menu-link menu-link_us-s">
                                        Pants Women
                                    </a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="<?= $url ?>collections/thalapathy-leo" class="menu-link menu-link_us-s">
                                        Thalapathy Leo
                                    </a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="<?= $url ?>collections/t-shirt" class="menu-link menu-link_us-s">
                                        T-Shirt
                                    </a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="<?= $url ?>collections/sweat-shirt" class="menu-link menu-link_us-s">
                                        Swear Shirt
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col pe-4">
                            <ul class="sub-menu__list list-unstyled">
                                <li class="sub-menu__item">
                                    <a href="<?= $url ?>collections/oversized-t-shirt" class="menu-link menu-link_us-s">
                                        Oversized Shirt
                                    </a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="<?= $url ?>collections/couple-t-shirt" class="menu-link menu-link_us-s">
                                        Couple T-Shirt
                                    </a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="<?= $url ?>collections/hoodies" class="menu-link menu-link_us-s">
                                        Hoodies
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col pe-4">
                            <ul class="sub-menu__list list-unstyled">
                            <li class="sub-menu__item">
                                    <img src="<?= $url ?>assets/images/mocks/slider/1.png"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="navigation__item">
                    <a href="<?= $url ?>new-arrivals" class="navigation__link">Themes</a>
                </li>
                <li class="navigation__item">
                    <a href="<?= $url ?>new-arrivals" class="navigation__link">Shapes</a>
                </li>
            </ul>
        </nav>

        <div class="header-tools d-flex align-items-center">

            <form action="./" method="GET" class="header-search search-field d-none d-xxl-flex mx-4">
                <input class="header-search__input w-100" type="text" name="search-keyword" placeholder="Search products...">
                <button class="btn header-search__btn" type="submit" title="Search">
                    <?= $icon_search ?>
                </button>
            </form>

            <div class="header-tools__item hover-container">
                <button title="Get Started" class="header-tools__item js-open-aside" data-aside="customerForms">
                    <?= $icon_user ?>
                </button>
            </div>

            <a href="<?= $url ?>profile/wishlist" title="Wishlist" class="header-tools__item">
                <?= $icon_heart ?>
            </a>

            <?= $cartBtn ?>

            <a class="header-tools__item" href="#" data-bs-toggle="modal" data-bs-target="#siteMap">
                <svg class="nav-icon" width="25" height="18" viewBox="0 0 25 18" xmlns="http://www.w3.org/2000/svg">
                    <rect width="25" height="2" />
                    <rect y="8" width="20" height="2" />
                    <rect y="16" width="25" height="2" />
                </svg>
            </a>
        </div>
    </div>
</header>
<!-- Desktop header end -->

<!-- Mobile header begin -->
<div class="header-mobile header_sticky">
    <!-- Topbar Begin -->
    <nav class="topbar">
        <div class="btn-wrapper d-flex align-items-center">
            <button class="tag-btn active">Women</button>
            <button class="tag-btn">Men</button>
            <button class="tag-btn">Kid</button>
        </div>
    </nav>
    <!-- Topbar End -->
    <div class="container d-flex align-items-center h-100">
        <a class="mobile-nav-activator d-block position-relative" href="#">
            <svg class="nav-icon" width="25" height="18" viewBox="0 0 25 18" xmlns="http://www.w3.org/2000/svg">
                <rect width="25" height="2" />
                <rect y="8" width="20" height="2" />
                <rect y="16" width="25" height="2" />
            </svg>
            <span class="btn-close-lg position-absolute top-0 start-0 w-100"></span>
        </a>

        <?= $logoEle ?>
        <?= $cartBtn ?>

    </div>

    <nav class="header-mobile__navigation navigation d-flex flex-column w-100 position-absolute top-100 bg-body overflow-auto">
        <div class="container">
            <form action="search.html" method="GET" class="search-field position-relative mt-4 mb-3">
                <div class="position-relative">
                    <input class="search-field__input w-100 border rounded-1" type="text" name="search-keyword" placeholder="Search products">
                    <button class="btn-icon search-popup__submit pb-0 me-2" type="submit">
                        <?= $icon_search ?>
                    </button>
                    <button class="btn-icon btn-close-lg search-popup__reset pb-0 me-2" type="reset"></button>
                </div>

                <div class="position-absolute start-0 top-100 m-0 w-100">
                    <div class="search-result"></div>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="overflow-hidden">
                <ul class="navigation__list list-unstyled position-relative">

                    <li class="navigation__item">
                        <a href="#" class="navigation__link js-nav-right d-flex align-items-center">
                            Collections &nbsp;
                            <?= $icon_right_chevron ?>
                        </a>
                        <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                            <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2">
                                <?= $icon_left_chevron ?>&nbsp; Collections
                            </a>
                            <ul class="list-unstyled">
                                <li class="sub-menu__item">
                                    <a href="<?= $url ?>collections/pants-womens" class="menu-link menu-link_us-s">
                                        Pants Women
                                    </a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="<?= $url ?>collections/thalapathy-leo" class="menu-link menu-link_us-s">
                                        Thalapathy Leo
                                    </a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="<?= $url ?>collections/t-shirt" class="menu-link menu-link_us-s">
                                        T-Shirt
                                    </a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="<?= $url ?>collections/sweat-shirt" class="menu-link menu-link_us-s">
                                        Swear Shirt
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="navigation__item">
                        <a href="<?= $url ?>new-arrivals" class="navigation__link">Shapes</a>
                    </li>

                    <li class="navigation__item">
                        <a href="<?= $url ?>new-arrivals" class="navigation__link">Themes</a>
                    </li>

                    <li class="navigation__item">
                        <a href="<?= $url ?>about-us" class="navigation__link">About</a>
                    </li>

                    <li class="navigation__item">
                        <a href="<?= $url ?>contact" class="navigation__link">Contact</a>
                    </li>
                </ul>
            </div><!-- /.overflow-hidden -->
        </div>
    </nav>
</div>
<!-- Mobile header end-->