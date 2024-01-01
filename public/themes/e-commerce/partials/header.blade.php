@php
$getFeaturedCategories = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getFeaturedCategories(10);
@endphp
<header id="header" class="header-builder">
    <div class="header-top">
        <div class="header-row container">
            <div class="header-col header-left">
                <div class="custom-html text-uppercase font-weight-semibold d-none d-md-block">{{ theme_option('top_footer') }} <?php setlocale(LC_ALL, 'IND'); echo strftime('%B %Y'); ?></div>
            </div>
            <div class="header-col header-right">
                <span class="separator"></span>
                <div class="share-links">
                  <!--   <a target="_blank" rel="nofollow" class="share-facebook" href="{{ theme_option('ig_footer') }}" title="Facebook"></a>
                    <a target="_blank" rel="nofollow" class="share-twitter" href="#" title="Twitter"></a>
                    <a target="_blank" rel="nofollow" class="share-instagram" href="{{ theme_option('ig_footer') }}" title="Instagram"></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="header-row container">
            <div class="header-col header-left">
                <!-- <a class="mobile-toggle"><i class="fas fa-bars"></i></a> -->
                <h1 class="logo">
                    <a href="/" title="{{ setting('site_title') }}">
                        <img src="{{ url(theme_option('logo')) }}" alt="Spesialis Kredit Motor Honda" height="50">
                    </a>
                </h1>
            </div>
            <div class="header-col header-right">
                <div class="searchform-popup"><a class="search-toggle"><i class="fas fa-search"></i><span class="search-text">Search</span></a>
                    <form action="{{ route('public.search') }}" role="search" accept-charset="UTF-8" action="{{ route('public.search') }}" method="GET" class="searchform searchform-cats">
                        <div class="searchform-fields">
                            <span class="text"> <input type="text" value="" placeholder="Search&hellip;" autocomplete="off" name="q" /></span>

                            <span class="button-wrap">
                                <button class="btn btn-special js-btn-searchtop" title="Search" type="submit" id="tn-searchtop"><i class="fas fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <a href="{{theme_option('text_wa_footer')}}" target="_blank">
                    <div class="custom-html ml-5 mr-4">
                        <div class="porto-sicon-box text-left mb-0 wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon">
                            <div class="porto-sicon-default">
                                <div id="porto-icon-153233218260d8220a92159" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 10vh;margin-right:8px;"><img class="img-icon" alt="" src="/uploads/2/icon/whatsapp-logo-png-2266.png" style="width: 12vh"/></div>
                            </div>
                            <div class="porto-sicon-header">
                                <h3 class="porto-sicon-title" style="font-weight:600;font-size:2vh;line-height:11px;color:#777;">HUBUNGI KAMI</h3>
                                <p style="font-weight:700;font-size:2vh;line-height:18px;color:#222529;">+{{ theme_option('no_wa_footer') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="header-bottom main-menu-wrap">
        <div class="header-row container">
            <div class="header-col header-left">
                <ul id="menu-main-menu" class="main-menu mega-menu menu-hover-line show-arrow">
                    <li id="nav-menu-item-878" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-143 current_page_item narrow"><a href="/" class="current">Beranda</a></li>
                    <li id="nav-menu-item-2020" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub narrow"><a class="nolink" href="#">Produk</a>
                        <div class="popup">
                            <div class="inner" style="">
                                <ul class="sub-menu">
                                @foreach ($getFeaturedCategories as $cat)
                                    <li id="nav-menu-item-2021" class="menu-item menu-item-type-custom menu-item-object-custom" data-cols="1"><a href="{{ route('public.single', $cat->slug) }}">{{ $cat->name }}<span class="tip" style="">NEW</span></a></li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li id="nav-menu-item-847" class="menu-item menu-item-type-post_type menu-item-object-page narrow"><a href="/cara-pemesanan">Cara Pemesanan</a></li>
                    <li id="nav-menu-item-1008" class="menu-item menu-item-type-post_type menu-item-object-page narrow"><a href="/testimoni">Testimoni</a></li>
                    <li id="nav-menu-item-1548" class="menu-item menu-item-type-custom menu-item-object-custom narrow"><a href="/tentang-kami">Tentang Kami</a></li>
                    <li id="nav-menu-item-1548" class="menu-item menu-item-type-custom menu-item-object-custom narrow"><a href="/news-1">News</a></li>
                </ul>
            </div>
            <div class="header-col header-right">
                <div class="menu-custom-block">
                    <a href="#">Penawaran Spesial!<span class="tip text-color-light" style="">HOT</span></a>
                </div>
            </div>
        </div>
    </div>
</header>