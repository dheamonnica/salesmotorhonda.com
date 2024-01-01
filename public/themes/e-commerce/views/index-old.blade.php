@php
$getFeaturedCategories = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getFeaturedCategories(5);
$getFeatured = app(\Botble\Blog\Repositories\Interfaces\PostInterface::class)->getFeatured(10);
$getByCategoryMatic = app(\Botble\Blog\Repositories\Interfaces\PostInterface::class)->getByCategory(6, 12, 10);
$getByCategoryBebek = app(\Botble\Blog\Repositories\Interfaces\PostInterface::class)->getByCategory(9, 12, 10);
$getByCategorySport = app(\Botble\Blog\Repositories\Interfaces\PostInterface::class)->getByCategory(11, 12, 10);

$getCategoryByIdMatic = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryId(6);
$getAllRelatedChildrenMatic = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryChild(6);
$getCategoryByIdBebek = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryId(9);
$getAllRelatedChildrenBebek = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryChild(9);
$getCategoryByIdSport = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryId(11);
$getAllRelatedChildrenSport = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryChild(11);
$getCategoryByIdPremium = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryId(24);
$getAllRelatedChildrenPremium = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryChild(24);
$getFeaturedCategories = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getFeaturedCategories(5);
$getFeaturedBanner = app(\Botble\Banner\Repositories\Interfaces\BannerInterface::class)->getFeatured();

@endphp

<div id="main" class="column1 wide clearfix no-breadcrumbs">
    <div class="container-fluid">
        <div class="row main-content-wrap">
            <div class="main-content col-lg-12">
                <div id="content" role="main">
                    <article class="post-143 page type-page status-publish hentry"><span class="entry-title" style="display: none;">Home</span><span class="vcard" style="display: none;"><span class="fn"><a href="author/porto_admin/index.html" title="Posts by Joe Doe" rel="author">Joe Doe</a></span></span><span class="updated" style="display:none">2020-10-24T08:01:32+00:00</span>
                        <div class="page-content">
                            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row row home-slider vc_row-no-padding">
                                <div class="vc_column_container col-md-12">
                                    <div class="wpb_wrapper vc_column-inner">
                                        <div class="porto-carousel owl-carousel m-b-none porto-standable-carousel home-banner-slider nav-pos-inside nav-style-4 show-nav-hover" data-plugin-options="{&quot;stagePadding&quot;:0,&quot;margin&quot;:0,&quot;autoplay&quot;:false,&quot;autoplayTimeout&quot;:5000,&quot;autoplayHoverPause&quot;:false,&quot;items&quot;:1,&quot;lg&quot;:1,&quot;md&quot;:1,&quot;sm&quot;:1,&quot;xs&quot;:1,&quot;nav&quot;:&quot;yes&quot;,&quot;dots&quot;:false,&quot;animateIn&quot;:&quot;&quot;,&quot;animateOut&quot;:&quot;&quot;,&quot;loop&quot;:false,&quot;center&quot;:false,&quot;video&quot;:false,&quot;lazyLoad&quot;:&quot;yes&quot;,&quot;fullscreen&quot;:false}">
                                        @foreach($getFeaturedBanner as $banner)
                                            <div class="porto-ultimate-content-box-container">
                                                <style>
                                                    #porto_ucb_1674 {
                                                        will-change: box-shadow;
                                                        box-shadow: none
                                                    }
                                                </style>
                                                <div class="porto-ultimate-content-box vc_custom_1569422980636 has-content-pos justify-content-center porto-lazyload" style="background-size: cover;background-repeat: no-repeat;background-position: center;background-color: rgba(0, 0, 0, 0);min-height:499px;background-position: unset;" data-original="{{ get_object_image($banner->slideshow_01) }}" id="porto_ucb_1674">
                                        <!--             <div class="porto-container container first-banner" data-appear-animation="fadeInUp" data-appear-animation-delay="100">
                                                        <h3 style="font-size: 1.9em;color: rgba(34,37,41,0.7);line-height: 1;font-weight:500" class="vc_custom_heading ls-80 mb-3 align-left">Find the Boundaries. Push Through!</h3>
                                                        <h2 style="font-size: 5.3em;line-height: 1;font-weight:700;letter-spacing:.005em" class="vc_custom_heading mb-0 align-left">Summer Sale</h2>
                                                        <h3 style="font-size: 9.4em;line-height: 1" class="vc_custom_heading mb-3 align-left">70% OFF</h3>
                                                        <div class="vc_row wpb_row vc_inner row">
                                                            <div class="vc_column_container col-md-12">
                                                                <div class="wpb_wrapper vc_column-inner">
                                                                    <h4 style="font-size: 1.2em;line-height: 1" class="vc_custom_heading mr-3 pull-left p-t-sm ls-n-20 align-left text-uppercase">Starting At</h4>
                                                                    <h4 style="font-size: 1.8em;line-height: 1" class="vc_custom_heading coupon-sale-text d-inline-block mr-2 align-left"><b><sup>$</sup>199<sup>99</sup></b></h4>
                                                                    <div class="vc_btn3-container mb-0 vc_btn3-inline"><button class="vc_btn3 vc_btn3-shape-default wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c btn btn-modern btn-lg btn-dark">Shop Now!</button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="porto-ultimate-content-box-container">
                                                <style>
                                                    #porto_ucb_8561 {
                                                        will-change: box-shadow;
                                                        box-shadow: none
                                                    }
                                                </style>
                                                <div class="porto-ultimate-content-box vc_custom_1569428338246 has-content-pos justify-content-center porto-lazyload" style="background-size: cover;background-repeat: no-repeat;background-position: center;background-color: rgba(0, 0, 0, 0);min-height:499px;background-position: unset;" data-original="{{ get_object_image($banner->slideshow_02) }}" id="porto_ucb_8561">
                                                    <div class="porto-container container d-flex justify-content-end" data-appear-animation="fadeInUp" data-appear-animation-delay="100">
                                                        <div class="vc_row wpb_row vc_inner row justify-content-center col-8 col-md-7 col-lg-6">
                                                            <div class="col-auto vc_column_container col-md-12">
                                                                <!-- <div class="wpb_wrapper vc_column-inner">
                                                                    <h4 style="font-size: 3.4em;color: #999999;line-height: 1;font-weight:500" class="vc_custom_heading mb-1 align-left">EXTRA</h4>
                                                                    <h3 style="font-size: 6.9em;line-height: 1" class="vc_custom_heading mb-2 align-left">20% OFF</h3>
                                                                    <div class="vc_custom_heading mb-3 align-left heading heading-border heading-dark heading-middle-border heading-middle-border-center heading-border-xl">
                                                                        <h4 style="font-size: 3.4em;line-height: 1" class="heading-tag">ACCESSORIES</h4>
                                                                    </div>
                                                                    <h2 style="font-size: 4em;line-height: 1;font-weight:700;letter-spacing:.005em" class="vc_custom_heading mb-4 align-left">Summer Sale</h2>
                                                                    <div class="vc_btn3-container ls-150 mb-0 vc_btn3-center"><button class="vc_btn3 vc_btn3-shape-default vc_btn3-block wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c btn btn-modern btn-xl btn-dark">SHOP ALL SALE</button></div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div class="vc_row wpb_row home-bar vc_custom_1595224570752 no-padding porto-inner-container" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                                <div class="porto-wrap-container container">
                                    <div class="row align-items-center">
                                        <div class="vc_column_container col-md-12">
                                            <div class="wpb_wrapper vc_column-inner">
                                                <div class="porto-carousel owl-carousel has-ccols ccols-xl-3 ccols-lg-3 ccols-md-3 ccols-sm-2 ccols-1 mb-0" data-plugin-options="{&quot;stagePadding&quot;:0,&quot;margin&quot;:2,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplayTimeout&quot;:3000,&quot;autoplayHoverPause&quot;:&quot;true&quot;,&quot;items&quot;:3,&quot;lg&quot;:3,&quot;md&quot;:3,&quot;sm&quot;:2,&quot;xs&quot;:1,&quot;nav&quot;:false,&quot;dots&quot;:false,&quot;animateIn&quot;:&quot;&quot;,&quot;animateOut&quot;:&quot;&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;center&quot;:false,&quot;video&quot;:false,&quot;lazyLoad&quot;:false,&quot;fullscreen&quot;:false}">
                                                    <div class="porto-sicon-box wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon">
                                                        <div class="porto-sicon-default">
                                                            <div class="porto-just-icon-wrapper porto-icon none" style="color:#222529;font-size:55px;"><i class="porto-icon-shipping"></i></div>
                                                        </div>
                                                        <div class="porto-sicon-header">
                                                            <h3 class="porto-sicon-title pb-2" style="font-weight:700;font-size:17px;line-height:14px;">Pengiriman</h3>
                                                            <p style="font-size:13px;line-height:17px;">Rute pengiriman ke seluruh daerah Jabodetabek, dijamin motor sampai dengan aman dan mulus kerumah Anda.</p>
                                                        </div>
                                                    </div>
                                                    <div class="porto-sicon-box wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon">
                                                        <div class="porto-sicon-default">
                                                            <div class="porto-just-icon-wrapper porto-icon none" style="color:#222529;font-size:55px;"><i class="porto-icon-home"></i></div>
                                                        </div>
                                                        <div class="porto-sicon-header">
                                                            <h3 class="porto-sicon-title pb-2" style="font-weight:700;font-size:17px;line-height:14px;">Proses Cepat dan Mudah</h3>
                                                            <p style="font-size:13px;line-height:17px;">Data kami jemput kerumah Anda. Hari ini survey, besok motor bisa kami kirim kerumah Anda.</p>
                                                        </div>
                                                    </div>
                                                    <div class="porto-sicon-box wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon">
                                                        <div class="porto-sicon-default">
                                                            <div class="porto-just-icon-wrapper porto-icon none" style="color:#222529;font-size:55px;"><i class="porto-icon-support"></i></div>
                                                        </div>
                                                        <div class="porto-sicon-header">
                                                            <h3 class="porto-sicon-title pb-2" style="font-weight:700;font-size:17px;line-height:14px;">Layanan Konsumen</h3>
                                                            <p style="font-size:13px;line-height:17px;">Online 24 jam melayani pertanyaan dan pemesanan Motor Honda. Hari libur tetap kami layani (via Whatsapp).</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row home-ads porto-inner-container">
                                <div class="porto-wrap-container container">
                                    <div class="row">
                                        @foreach($getFeaturedBanner as $banner)
                                        <div class="vc_column_container col-md-4" data-appear-animation="fadeInRight" data-appear-animation-delay="500">
                                            <div class="wpb_wrapper vc_column-inner">
                                                <div class="porto-ultimate-content-box-container">
                                                    <style>
                                                        #porto_ucb_4140 {
                                                            will-change: box-shadow;
                                                            box-shadow: none
                                                        }

                                                        #porto_ucb_4140:hover {
                                                            box-shadow: 0 0 20px 0 rgba(0, 0, 0, .1)
                                                        }
                                                    </style>
                                                    <div class="porto-ultimate-content-box vc_custom_1569495525126 has-content-pos justify-content-center porto-lazyload" style="background-size: cover;background-repeat: no-repeat;background-position: center;background-color: rgba(0, 0, 0, 0);min-height:175px;" data-original="{{ get_object_image($banner->banner_31) }}" id="porto_ucb_4140">
                                                        <!-- <h3 style="font-size: 1.5rem;line-height: 1" class="vc_custom_heading mb-2 align-left">Porto Watches</h3>
                                                        <h4 style="font-size: 1.8125rem;line-height: 1;font-weight:800" class="vc_custom_heading mb-3 align-left heading-primary"><sup><del><b>20%</b></del></sup>30%<sup>OFF</sup></h4>
                                                        <div class="vc_btn3-container mb-0 vc_btn3-inline"><button class="vc_btn3 vc_btn3-shape-default wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c btn btn-modern btn-md btn-dark">Shop Now</button></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-ads2 vc_column_container col-md-4" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
                                            <div class="wpb_wrapper vc_column-inner">
                                                <div class="porto-ultimate-content-box-container">
                                                    <style>
                                                        #porto_ucb_9017 {
                                                            will-change: box-shadow;
                                                            box-shadow: none
                                                        }

                                                        #porto_ucb_9017:hover {
                                                            box-shadow: 0 0 20px 0 rgba(0, 0, 0, .1)
                                                        }
                                                    </style>
                                                    <div class="porto-ultimate-content-box vc_custom_1569495546171 has-content-pos justify-content-center porto-lazyload" style="background-size: cover;background-repeat: no-repeat;background-position: center;background-color: rgba(0, 0, 0, 0);min-height:175px;" data-original="{{ get_object_image($banner->banner_32) }}" id="porto_ucb_9017">
                                                       <!--  <div class="vc_row wpb_row vc_inner row justify-content-center vc_row-o-content-middle vc_row-flex">
                                                            <div class="col-auto vc_column_container col-md-7">
                                                                <div class="wpb_wrapper vc_column-inner">
                                                                    <h3 style="font-size: 1.375rem;line-height: 1.35" class="vc_custom_heading mb-0 text-right align-left">DEAL PROMOS</h3>
                                                                    <h4 style="font-size: 0.9375rem;color: #777777;line-height: 1;font-weight:600" class="vc_custom_heading mb-0 align-right text-uppercase">STARTING AT $99</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto vc_column_container col-md-5">
                                                                <div class="wpb_wrapper vc_column-inner">
                                                                    <div class="vc_btn3-container my-2 vc_btn3-inline"><button class="vc_btn3 vc_btn3-shape-default wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c btn btn-modern btn-md btn-dark">Shop Now</button></div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_column_container col-md-4" data-appear-animation="fadeInLeft" data-appear-animation-delay="500">
                                            <div class="wpb_wrapper vc_column-inner">
                                                <div class="porto-ultimate-content-box-container">
                                                    <style>
                                                        #porto_ucb_4887 {
                                                            will-change: box-shadow;
                                                            box-shadow: none
                                                        }

                                                        #porto_ucb_4887:hover {
                                                            box-shadow: 0 0 20px 0 rgba(0, 0, 0, .1)
                                                        }
                                                    </style>
                                                    <div class="porto-ultimate-content-box vc_custom_1569497052948 has-content-pos justify-content-center porto-lazyload" style="background-size: cover;background-repeat: no-repeat;background-position: center;background-color: rgba(0, 0, 0, 0);min-height:175px;" data-original="{{ get_object_image($banner->banner_33) }}" id="porto_ucb_4887">
                                                       <!--  <h3 style="font-size: 1.5rem;line-height: 1" class="vc_custom_heading mb-2 align-right">Handbags</h3>
                                                        <h4 style="font-size: 0.9375rem;line-height: 1.4;font-weight:600" class="vc_custom_heading mb-2 align-right heading-secondary">STARTING AT $99</h4>
                                                        <div class="vc_btn3-container mb-0 vc_btn3-right"><button class="vc_btn3 vc_btn3-shape-default wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c btn btn-modern btn-md btn-dark">Shop Now</button></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 pt-5">
                                    <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                                        <h3 class="widget-title">Kategori</h3>
                                        <ul class="nav nav-list flex-column">
                           
                                            @foreach ($getFeaturedCategories as $cat)
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('public.single', $cat->slug) }}">
                                                    {{ $cat->name }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </aside>

                                </div>

                                <div class="col-lg-9">
                                    <div class="vc_row wpb_row pt-5 vc_custom_1597644638845 vc_row-has-fill porto-inner-container">
                                        <div class="porto-wrap-container container">
                                            <div class="row">
                                                <div class="vc_column_container col-md-12">
                                                    <div class="wpb_wrapper vc_column-inner">
                                                        <div id="porto-products-2648" class="porto-products wpb_content_element title-border-middle mb-3" data-appear-animation="fadeInLeft" data-appear-animation-delay="200">
                                                            <h2 class="section-title text-center slider-title"><span class="inline-title">MOTOR TERBARU</span><span class="line"></span></h2>
                                                            <div class="slider-wrapper">
                                                                <div class="woocommerce columns-4 pt-5">
                                                                    <ul class="products products-container products-slider owl-carousel nav-center-images-only nav-pos-outside nav-style-4 show-nav-hover pcols-lg-4 pcols-md-3 pcols-xs-3 pcols-ls-2 pwidth-lg-4 pwidth-md-3 pwidth-xs-2 pwidth-ls-1 is-shortcode" data-plugin-options="{&quot;autoplay&quot;: true,&quot;themeConfig&quot;:true,&quot;lg&quot;:3,&quot;md&quot;:3,&quot;xs&quot;:3,&quot;ls&quot;:1,&quot;nav&quot;:true}" data-product_layout="product-default">
                                                                        @foreach ($getFeatured as $post)
                                                                        <li class="product-col product-default product type-product post-1385 status-publish first instock product_cat-electronics product_cat-music has-post-thumbnail featured shipping-taxable purchasable product-type-variable">
                                                                            <div class="product-inner">
                                                                                <div class="product-image">
                                                                                    <a href="{{ route('public.single', $post->slug) }}">
                                                                                        <div class="labels">
                                                                                            @if ($post->label_hot)
                                                                                            <div class="onhot">{{ $post->label_hot }}</div>
                                                                                            @endif
                                                                                            @if ($post->label_discount)
                                                                                            <div class="onsale">{{ $post->label_discount }}</div>
                                                                                            @endif

                                                                                        </div>
                                                                                        <div class="inner img-effect"><img data-oi="{{ get_object_image($post->image, 'large') }}" class="porto-lazyload wp-post-image" alt="" />
                                                                                            <img src="{{ get_object_image($post->image, 'large') }}" data-oi="{{ get_object_image($post->image, 'large') }}" class="porto-lazyload hover-image" alt="" />
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="product-content">
                                                                                    <a class="product-loop-title" href="{{ route('public.single', $post->slug) }}">
                                                                                        <h3 class="woocommerce-loop-product__title">{{ $post->name }}</h3>
                                                                                    </a>
                                                                                    <!-- <span class="category-list">DP Mulai Dari</span> -->
                                                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($post->prices, 0, '.', '.') }}</bdi></span></span>
                                                                                    <div class="add-links-wrap">
                                                                                        <div class="add-links clearfix"><a href="{{ route('public.single', $post->slug) }}" class="viewcart-style-3 button product_type_variable add_to_cart_button">Lihat Detail</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="porto-products-2648" class="porto-products wpb_content_element title-border-middle mb-3 pt-5" data-appear-animation="fadeInLeft" data-appear-animation-delay="200">
                                                            <h2 class="section-title text-center slider-title"><span class="inline-title">MOTOR MATIC</span><span class="line"></span></h2>
                                                            <div class="slider-wrapper">
                                                                <div class="woocommerce columns-4 pt-5">
                                                                    <ul class="products products-container products-slider owl-carousel nav-center-images-only nav-pos-outside nav-style-4 show-nav-hover pcols-lg-4 pcols-md-3 pcols-xs-3 pcols-ls-2 pwidth-lg-4 pwidth-md-3 pwidth-xs-2 pwidth-ls-1 is-shortcode" data-plugin-options="{&quot;autoplay&quot;: true,&quot;themeConfig&quot;:true,&quot;lg&quot;:3,&quot;md&quot;:3,&quot;xs&quot;:3,&quot;ls&quot;:1,&quot;nav&quot;:true}" data-product_layout="product-default">
                                                                        @foreach ($getByCategoryMatic as $postcatmatic)
                                                                        <li class="product-col product-default product type-product post-1385 status-publish first instock product_cat-electronics product_cat-music has-post-thumbnail featured shipping-taxable purchasable product-type-variable">
                                                                            <div class="product-inner">
                                                                                <div class="product-image">
                                                                                    <a href="{{ route('public.single', $postcatmatic->slug) }}">
                                                                                        <div class="labels">
                                                                                            @if ($postcatmatic->label_hot)
                                                                                            <div class="onhot">{{ $postcatmatic->label_hot }}</div>
                                                                                            @endif
                                                                                            @if ($postcatmatic->label_discount)
                                                                                            <div class="onsale">{{ $postcatmatic->label_discount }}</div>
                                                                                            @endif

                                                                                        </div>
                                                                                        <div class="inner img-effect"><img data-oi="{{ get_object_image($postcatmatic->image, 'large') }}" class="porto-lazyload wp-post-image" alt="" />
                                                                                            <img src="{{ get_object_image($postcatmatic->image, 'large') }}" data-oi="{{ get_object_image($postcatmatic->image, 'large') }}" class="porto-lazyload hover-image" alt="" /></div>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="product-content">
                                                                                        <a class="product-loop-title" href="{{ route('public.single', $postcatmatic->slug) }}">
                                                                                            <h3 class="woocommerce-loop-product__title">{{ $postcatmatic->name }}</h3>
                                                                                        </a>
                                                                                        <!-- <span class="category-list">DP Mulai Dari</span> -->
                                                                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($postcatmatic->prices, 0, '.', '.') }}</bdi></span></span>
                                                                                        <div class="add-links-wrap">
                                                                                            <div class="add-links clearfix"><a href="{{ route('public.single', $postcatmatic->slug) }}" class="viewcart-style-3 button product_type_variable add_to_cart_button">Lihat Detail</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 pt-5 p-2">
                                    <aside id="text-4" class="widget sbg_widget productleftsidebar widget_text">
                                        <div class="textwidget">
                                            <p class="mb-0">
                                                @foreach($getFeaturedBanner as $banner)
                                                <img class="alignnone size-large wp-image-1358" src="{{ get_object_image($banner->banner_41) }}" alt="" width="269" height="322">
                                                @endforeach
                                            </p>
                                        </div>
                                    </aside>
                                </div>
                                <div class="col-lg-9">
                                    <div class="vc_row wpb_row vc_custom_1597644638845 vc_row-has-fill porto-inner-container">
                                        <div class="porto-wrap-container container">
                                            <div class="row">
                                                <div class="vc_column_container col-md-12">
                                                    <div class="wpb_wrapper vc_column-inner">
                                                        <div id="porto-products-2648" class="porto-products wpb_content_element title-border-middle mb-3" data-appear-animation="fadeInLeft" data-appear-animation-delay="200">
                                                            <h2 class="section-title text-center slider-title"><span class="inline-title">MOTOR BEBEK</span><span class="line"></span></h2>
                                                            <div class="slider-wrapper">
                                                                <div class="woocommerce columns-4 pt-5">
                                                                    <ul class="products products-container products-slider owl-carousel nav-center-images-only nav-pos-outside nav-style-4 show-nav-hover pcols-lg-4 pcols-md-3 pcols-xs-3 pcols-ls-2 pwidth-lg-4 pwidth-md-3 pwidth-xs-2 pwidth-ls-1 is-shortcode" data-plugin-options="{&quot;autoplay&quot;: true,&quot;themeConfig&quot;:true,&quot;lg&quot;:3,&quot;md&quot;:3,&quot;xs&quot;:3,&quot;ls&quot;:1,&quot;nav&quot;:true}" data-product_layout="product-default">
                                                                        @foreach ($getByCategoryBebek as $postcatbebek)
                                                                        <li class="product-col product-default product type-product post-1385 status-publish first instock product_cat-electronics product_cat-music has-post-thumbnail featured shipping-taxable purchasable product-type-variable">
                                                                            <div class="product-inner">
                                                                                <div class="product-image">
                                                                                    <a href="{{ route('public.single', $postcatbebek->slug) }}">
                                                                                        <div class="labels">
                                                                                            @if ($postcatbebek->label_hot)
                                                                                            <div class="onhot">{{ $postcatbebek->label_hot }}</div>
                                                                                            @endif
                                                                                            @if ($postcatbebek->label_discount)
                                                                                            <div class="onsale">{{ $postcatbebek->label_discount }}</div>
                                                                                            @endif

                                                                                        </div>
                                                                                        <div class="inner img-effect"><img data-oi="{{ get_object_image($postcatbebek->image, 'large') }}" class="porto-lazyload wp-post-image" alt="" />
                                                                                            <img src="{{ get_object_image($postcatbebek->image, 'large') }}" data-oi="{{ get_object_image($postcatbebek->image, 'large') }}" class="porto-lazyload hover-image" alt="" /></div>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="product-content">
                                                                                        <a class="product-loop-title" href="{{ route('public.single', $postcatbebek->slug) }}">
                                                                                            <h3 class="woocommerce-loop-product__title">{{ $postcatbebek->name }}</h3>
                                                                                        </a>
                                                                                        <!-- <span class="category-list">DP Mulai Dari</span> -->
                                                                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($postcatbebek->prices, 0, '.', '.') }}</bdi></span></span>
                                                                                        <div class="add-links-wrap">
                                                                                            <div class="add-links clearfix"><a href="{{ route('public.single', $postcatbebek->slug) }}" class="viewcart-style-3 button product_type_variable add_to_cart_button">Lihat Detail</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 pt-5 p-2">
                                        <aside id="text-4" class="widget sbg_widget productleftsidebar widget_text">
                                            <div class="textwidget">
                                                <p class="mb-0">
                                                    @foreach($getFeaturedBanner as $banner)
                                                    <img class="alignnone size-large wp-image-1358" src="{{ get_object_image($banner->banner_42) }}" alt="" width="269" height="322">
                                                    @endforeach
                                                </p>
                                            </div>
                                        </aside>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="vc_row wpb_row vc_custom_1597644638845 vc_row-has-fill porto-inner-container">
                                            <div class="porto-wrap-container container">
                                                <div class="row">
                                                    <div class="vc_column_container col-md-12">
                                                        <div class="wpb_wrapper vc_column-inner">
                                                            <div id="porto-products-2648" class="porto-products wpb_content_element title-border-middle mb-3" data-appear-animation="fadeInLeft" data-appear-animation-delay="200">
                                                                <h2 class="section-title text-center slider-title"><span class="inline-title">MOTOR SPORT</span><span class="line"></span></h2>
                                                                <div class="slider-wrapper">
                                                                    <div class="woocommerce columns-4 pt-5">
                                                                        <ul class="products products-container products-slider owl-carousel nav-center-images-only nav-pos-outside nav-style-4 show-nav-hover pcols-lg-4 pcols-md-3 pcols-xs-3 pcols-ls-2 pwidth-lg-4 pwidth-md-3 pwidth-xs-2 pwidth-ls-1 is-shortcode" data-plugin-options="{&quot;autoplay&quot;: true,&quot;themeConfig&quot;:true,&quot;lg&quot;:3,&quot;md&quot;:3,&quot;xs&quot;:3,&quot;ls&quot;:1,&quot;nav&quot;:true}" data-product_layout="product-default">
                                                                            @foreach ($getByCategorySport as $postcatsport)
                                                                            <li class="product-col product-default product type-product post-1385 status-publish first instock product_cat-electronics product_cat-music has-post-thumbnail featured shipping-taxable purchasable product-type-variable">
                                                                                <div class="product-inner">
                                                                                    <div class="product-image">
                                                                                        <a href="{{ route('public.single', $postcatsport->slug) }}">
                                                                                            <div class="labels">
                                                                                                @if ($postcatsport->label_hot)
                                                                                                <div class="onhot">{{ $postcatsport->label_hot }}</div>
                                                                                                @endif
                                                                                                @if ($postcatsport->label_discount)
                                                                                                <div class="onsale">{{ $postcatsport->label_discount }}</div>
                                                                                                @endif

                                                                                            </div>
                                                                                            <div class="inner img-effect"><img data-oi="{{ get_object_image($postcatsport->image, 'large') }}" class="porto-lazyload wp-post-image" alt="" />
                                                                                                <img src="{{ get_object_image($postcatsport->image, 'large') }}" data-oi="{{ get_object_image($postcatsport->image, 'large') }}" class="porto-lazyload hover-image" alt="" /></div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-content">
                                                                                            <a class="product-loop-title" href="{{ route('public.single', $postcatsport->slug) }}">
                                                                                                <h3 class="woocommerce-loop-product__title">{{ $postcatsport->name }}</h3>
                                                                                            </a>
                                                                                            <!-- <span class="category-list">DP Mulai Dari</span> -->
                                                                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($postcatsport->prices, 0, '.', '.') }}</bdi></span></span>
                                                                                            <div class="add-links-wrap">
                                                                                                <div class="add-links clearfix"><a href="{{ route('public.single', $postcatsport->slug) }}" class="viewcart-style-3 button product_type_variable add_to_cart_button">Lihat Detail</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <style type="text/css">
                                        .vc_custom_1595224749028{
                                            padding-top: 47px !important;
                                            padding-bottom: 161px !important;
                                            /* background-color: #222529 !important; */
                                            height: 100%;
                                        }
                                    </style>

                                    @foreach($getFeaturedBanner as $banner)
                                    <div data-vc-parallax="1" data-vc-parallax-image="{{ get_object_image($banner->footer) }}" class="vc_row wpb_row row-center vc_custom_1595224749028 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving porto-inner-container mb-5">
                                <!--         <div class="porto-wrap-container container">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 vc_column_container col-md-4" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
                                                    <div class="wpb_wrapper vc_column-inner">
                                                        <h2 style="font-size: 2.25rem;line-height: 1.15;text-align: center" class="vc_custom_heading text-sm-right mb-4 mb-sm-0 heading-light">TOP FASHION<br /> DEALS</h2>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 vc_column_container col-md-4 col-xl-3" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                                                    <div class="wpb_wrapper vc_column-inner">
                                                        <div class="vc_btn3-container mb-4 mb-sm-0 vc_btn3-center"><button class="vc_btn3 vc_btn3-shape-default wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c btn btn-modern btn-lg btn-quaternary">VIEW SALE</button></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 text-center text-sm-left vc_column_container col-md-4" data-appear-animation="fadeInRight" data-appear-animation-delay="600">
                                                    <div class="wpb_wrapper vc_column-inner">
                                                        <h5 style="font-size: 0.7rem;line-height: 1.4;text-align: center;font-weight:700" class="vc_custom_heading coupon-sale-text coupon-sale-light-bg m-b-sm text-sm-left"><b>Exclusive COUPON</b></h5>
                                                        <h5 style="font-size: 1rem;line-height: 1;font-weight:700" class="vc_custom_heading mb-0 coupon-sale-text d-inline-block align-left heading-light"><i>UP TO</i><b>$100</b> OFF</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    @endforeach

                                    <!-- <div class="vc_row wpb_row row">
                                        <div class="newsletter-notification-form vc_column_container col-md-12">
                                            <div class="wpb_wrapper vc_column-inner">
                                                <style>
                                                    .mfp-bg.mfp-fade {
                                                        background-color: rgba(119, 119, 119, .5)
                                                    }
                                                </style>
                                                <div class="porto-modal-input-wrapper">
                                                    <div data-trigger-id="porto-modal-60d8220b1932d1-95850607" data-type="inline" class="porto-modal-trigger porto-onload" data-overlay-class="mfp-fade" data-timeout="4000"></div>
                                                </div>
                                                <div id="porto-modal-60d8220b1932d1-95850607" class="mfp-hide newsletter-popup-form mx-auto">
                                                    <div class="porto-modal-content">
                                                        <div class="porto-block">
                                                            <style>
                                                                .vc_custom_1594797340331 {
                                                                    padding-top: 21rem !important;
                                                                    padding-right: 2.5rem !important;
                                                                    padding-bottom: 4rem !important;
                                                                    padding-left: 2.5rem !important;
                                                                    /* background-color: #ffffff; */
                                                                    background-position: 0 0 !important;
                                                                    background-repeat: no-repeat !important
                                                                }

                                                                @media only screen and (max-width: 600px) {
                                                                    .vc_custom_1594797340331 {
                                                                        padding-top: 11rem !important;
                                                                        padding-right: 2.5rem !important;
                                                                        padding-bottom: 4rem !important;
                                                                        padding-left: 2.5rem !important;
                                                                        /* background-color: #ffffff !important; */
                                                                        /* background-position: 0 0 !important; */
                                                                        background-repeat: no-repeat !important;
                                                                    }
                                                                    .mfp-wrap {
                                                                        direction: ltr;
                                                                        top: 0 !important;
                                                                    }

                                                                }

                                                                .newsletter-wrap {
                                                                    box-shadow: 0 0 50px rgba(0, 0, 0, .12);
                                                                    background-position: center !important;
                                                                    background-size: contain
                                                                }

                                                                .newsletter-wrap .widget_wysija .wysija-paragraph {
                                                                    flex: 1
                                                                }

                                                                .newsletter-wrap .wysija-input {
                                                                    height: 3rem;
                                                                    border: none;
                                                                    border-radius: 1.5rem 0 0 1.5rem;
                                                                    background: #f4f4f4;
                                                                    box-shadow: none !important;
                                                                    padding-left: 1.375rem
                                                                }

                                                                .newsletter-wrap .wysija-submit {
                                                                    height: 3rem;
                                                                    padding-left: 1.5rem;
                                                                    padding-right: 2rem;
                                                                    border-radius: 0 1.5rem 1.5rem 0;
                                                                    box-shadow: none !important;
                                                                    margin-right: .5rem;
                                                                    font-weight: 700
                                                                }

                                                                .newsletter-wrap .checkbox {
                                                                    font-size: .75rem
                                                                }

                                                                .newsletter-wrap input[type="checkbox"] {
                                                                    -webkit-appearance: none;
                                                                    -moz-appearance: none;
                                                                    border: 1px solid #ccc;
                                                                    width: 1.25rem;
                                                                    height: 1.25rem;
                                                                    margin-top: -.2rem;
                                                                    margin-left: 1px;
                                                                    vertical-align: middle;
                                                                    outline: none;
                                                                    border-radius: 3px;
                                                                    color: #555
                                                                }

                                                                .newsletter-wrap input[type="checkbox"]:checked:before {
                                                                    content: "\f00c";
                                                                    font-family: "Font Awesome 5 Free";
                                                                    font-weight: 900;
                                                                    margin: 0;
                                                                    width: 1.15rem;
                                                                    height: 1.2rem;
                                                                    line-height: 1.2rem;
                                                                    float: left;
                                                                    font-size: 11px;
                                                                    text-align: center
                                                                }

                                                                @media (max-width:400px) {
                                                                    .newsletter-wrap .vc_column_container {
                                                                        max-width: 100%;
                                                                        flex: 0 0 100%
                                                                    }
                                                                }
                                                            </style>
                                                            <div data-original="{{ get_object_image($banner->banner_popup) }}" class="vc_row wpb_row row newsletter-wrap mx-auto vc_custom_1594797340331 no-padding vc_row-has-fill porto-lazyload">
                                                                <div class="col-sm-8 pr-lg-4 vc_column_container col-md-7 col-10">
                                                                    <div class="wpb_wrapper vc_column-inner">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left mb-4 pb-1">
                                                                            <div class="wpb_wrapper">
                                                                                <div class="vc_single_image-wrapper vc_box_border_grey"><img class="porto-lazyload vc_single_image-img" width="111" height="44" src="{{ url(theme_option('logo')) }}" alt="external" /></div>
                                                                            </div>
                                                                        </div>
                                                                        <h3 style="font-size: 1.125rem;line-height: 1.2" class="vc_custom_heading mb-2 align-left text-uppercase">Subscribe To Newsletter</h3>
                                                                        <p style="font-size: 0.875rem;line-height: 1.8571;letter-spacing:-.02em" class="vc_custom_heading mb-4 align-left">Subscribe to the Porto mailing list to receive updates on new arrivals, special offers and our promotions.</p>
                                                                        <div role="form" class="wpcf7" id="wpcf7-f1529-p143-o1" lang="en-US" dir="ltr">
                                                                            <div class="screen-reader-response">
                                                                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                                                <ul></ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="sidebar-overlay"></div>
                </div>
            </div>
        </div>
    </div>