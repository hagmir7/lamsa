<header id="header" class="header style-02 header-dark header-sticky header-transparent" style="padding:40px ">
    <div class="header-wrap-stick" style="height: 90px;">
        <div class="header-position">
            <div class="header-middle">
                <div class="lynessa-menu-wapper"></div>
                <div class="header-middle-inner">
                    <div class="header-search-menu">
                        <div class="block-menu-bar">
                            <a class="menu-bar menu-toggle" href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-logo-nav d-flex align-items-center">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="rawaaBeauty" style="height: 47px;" src="/assets/imgs/rounded-logo.png" class="logo sticky-logo">
                            </a>
                        </div>
                        <div class="box-header-nav menu-nocenter" style="margin: auto">
                            <ul id="menu-primary-menu"
                                class="clone-main-menu lynessa-clone-mobile-menu lynessa-nav main-menu">
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu ">
                                    <a class="lynessa-menu-item-title black-links tajawal"
                                        href="/">Accueil</a>
                                </li>

                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu ">
                                    <a class="lynessa-menu-item-title black-links tajawal"
                                        href="/comments">Inspirations</a>
                                </li>
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu ">
                                    <a class="lynessa-menu-item-title black-links tajawal" title="Collections"  href="/about">À propos</a>
                                </li>
                                <li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 item-megamenu ">
                                    <a class="lynessa-menu-item-title black-links tajawal"
                                        href="/contact">Contactez nous</a>
                                </li>

                                <li class="menu-item lynessa-dropdown block-language menu_lang" style="display: none">
                                    <span class="toggle-submenu"></span>
                                    <ul class="sub-menu">
                                    </ul>
                                </li>

                                @livewire('category-menu')
                            </ul>
                        </div>
                    </div>
                   @livewire('side-cart')
                </div>
            </div>
        </div>
    </div>
    @livewire('side-cart-mobile')
</header>
