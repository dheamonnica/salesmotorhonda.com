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

<div class="container-fluid">
    <div class="row main-content-wrap">
      <div class="main-content col-lg-12">
        <div id="content" role="main">
          <article class="post-143 page type-page status-publish hentry">
            <span class="entry-title" style="display: none;">Home</span>
            <span class="vcard" style="display: none;">
              <span class="fn">
                <a href="author/porto_admin/index.html" title="Posts by Joe Doe" rel="author">Joe Doe</a>
              </span>
            </span>
            <span class="updated" style="display:none">2020-10-24T08:01:32+00:00</span>
            <div class="page-content">
              <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row row home-slider vc_row-no-padding">
                <div class="vc_column_container col-md-12">
                  <div class="wpb_wrapper vc_column-inner">
                    <div class="porto-carousel owl-carousel m-b-none porto-standable-carousel home-banner-slider nav-pos-inside nav-style-4 show-nav-hover" data-plugin-options="{&quot;stagePadding&quot;:0,&quot;margin&quot;:0,&quot;autoplay&quot;:false,&quot;autoplayTimeout&quot;:5000,&quot;autoplayHoverPause&quot;:false,&quot;items&quot;:1,&quot;lg&quot;:1,&quot;md&quot;:1,&quot;sm&quot;:1,&quot;xs&quot;:1,&quot;nav&quot;:&quot;yes&quot;,&quot;dots&quot;:false,&quot;animateIn&quot;:&quot;&quot;,&quot;animateOut&quot;:&quot;&quot;,&quot;loop&quot;:false,&quot;center&quot;:false,&quot;video&quot;:false,&quot;lazyLoad&quot;:&quot;yes&quot;,&quot;fullscreen&quot;:false}"> @foreach($getFeaturedBanner as $banner) <div class="porto-ultimate-content-box-container">
                        <style>
                          #porto_ucb_1674 {
                            will-change: box-shadow;
                            box-shadow: none
                          }
                        </style>
                        <div class="porto-ultimate-content-box vc_custom_1569422980636 has-content-pos justify-content-center porto-lazyload" style="background-size: cover;background-repeat: no-repeat;background-position: center;background-color: rgba(0, 0, 0, 0);min-height:499px;background-position: unset;" data-original="{{ get_object_image($banner->slideshow_01) }}" id="porto_ucb_1674"></div>
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
                              <div class="col-auto vc_column_container col-md-12"></div>
                            </div>
                          </div>
                        </div>
                      </div> @endforeach
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
                              <div class="porto-just-icon-wrapper porto-icon none" style="color:#222529;font-size:55px;">
                                <i class="porto-icon-shipping"></i>
                              </div>
                            </div>
                            <div class="porto-sicon-header">
                              <h3 class="porto-sicon-title pb-2" style="font-weight:700;font-size:17px;line-height:14px;">Pengiriman</h3>
                              <p style="font-size:13px;line-height:17px;">Rute pengiriman ke seluruh daerah Jabodetabek, dijamin motor sampai dengan aman dan mulus kerumah Anda.</p>
                            </div>
                          </div>
                          <div class="porto-sicon-box wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon">
                            <div class="porto-sicon-default">
                              <div class="porto-just-icon-wrapper porto-icon none" style="color:#222529;font-size:55px;">
                                <i class="porto-icon-home"></i>
                              </div>
                            </div>
                            <div class="porto-sicon-header">
                              <h3 class="porto-sicon-title pb-2" style="font-weight:700;font-size:17px;line-height:14px;">Proses Cepat dan Mudah</h3>
                              <p style="font-size:13px;line-height:17px;">Data kami jemput kerumah Anda. Hari ini survey, besok motor bisa kami kirim kerumah Anda.</p>
                            </div>
                          </div>
                          <div class="porto-sicon-box wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon">
                            <div class="porto-sicon-default">
                              <div class="porto-just-icon-wrapper porto-icon none" style="color:#222529;font-size:55px;">
                                <i class="porto-icon-support"></i>
                              </div>
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
                  <div class="row"> @foreach($getFeaturedBanner as $banner) <div class="vc_column_container col-md-4" data-appear-animation="fadeInRight" data-appear-animation-delay="500">
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
                          <div class="porto-ultimate-content-box vc_custom_1569495525126 has-content-pos justify-content-center porto-lazyload" style="background-size: cover;background-repeat: no-repeat;background-position: center;background-color: rgba(0, 0, 0, 0);min-height:175px;" data-original="{{ get_object_image($banner->banner_31) }}" id="porto_ucb_4140"></div>
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
                          <div class="porto-ultimate-content-box vc_custom_1569495546171 has-content-pos justify-content-center porto-lazyload" style="background-size: cover;background-repeat: no-repeat;background-position: center;background-color: rgba(0, 0, 0, 0);min-height:175px;" data-original="{{ get_object_image($banner->banner_32) }}" id="porto_ucb_9017"></div>
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
                          <div class="porto-ultimate-content-box vc_custom_1569497052948 has-content-pos justify-content-center porto-lazyload" style="background-size: cover;background-repeat: no-repeat;background-position: center;background-color: rgba(0, 0, 0, 0);min-height:175px;" data-original="{{ get_object_image($banner->banner_33) }}" id="porto_ucb_4887"></div>
                        </div>
                      </div>
                    </div> @endforeach
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 pt-5 pr-5">
                  <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                    <h3 class="widget-title">Kategori</h3>
                    <ul class="nav nav-list flex-column"> @foreach ($getFeaturedCategories as $cat) <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.single', $cat->slug) }}">
                          {{ $cat->name }}
                        </a>
                      </li> @endforeach </ul>
                  </aside>
                  <aside id="text-4" class="widget sbg_widget productleftsidebar widget_text">
                  <div class="textwidget">
                    <p class="mb-0"> @foreach($getFeaturedBanner as $banner) <img class="alignnone size-large wp-image-1358" src="{{ get_object_image($banner->banner_44) }}" alt="" width="269" height="322"> @endforeach </p>
                  </div>
                </aside>
                </div>
                <div class="col-lg-9">
                  <div class="vc_row wpb_row pt-5 vc_custom_1597644638845 vc_row-has-fill porto-inner-container">
                    <div class="porto-wrap-container container">
                      <div class="row">
                        <div class="vc_column_container col-md-12">
                          <div class="wpb_wrapper vc_column-inner">
                            <div id="porto-products-2648" class="porto-products wpb_content_element title-border-middle mb-3" data-appear-animation="fadeInLeft" data-appear-animation-delay="200">
                              <h2 class="section-title text-center slider-title">
                                <span class="inline-title">MOTOR TERBARU</span>
                                <span class="line"></span>
                              </h2>
                              <div class="slider-wrapper">
                                <div class="woocommerce columns-4 pt-5">
                                  <ul class="products products-container products-slider owl-carousel nav-center-images-only nav-pos-outside nav-style-4 show-nav-hover pcols-lg-4 pcols-md-3 pcols-xs-3 pcols-ls-2 pwidth-lg-4 pwidth-md-3 pwidth-xs-2 pwidth-ls-1 is-shortcode" data-plugin-options="{&quot;autoplay&quot;: true,&quot;themeConfig&quot;:true,&quot;lg&quot;:3,&quot;md&quot;:3,&quot;xs&quot;:3,&quot;ls&quot;:1,&quot;nav&quot;:true}" data-product_layout="product-default"> @foreach ($getFeatured as $post) <li class="product-col product-default product type-product post-1385 status-publish first instock product_cat-electronics product_cat-music has-post-thumbnail featured shipping-taxable purchasable product-type-variable">
                                      <div class="product-inner">
                                        <div class="product-image">
                                          <a href="{{ route('public.single', $post->slug) }}">
                                            <div class="labels"> @if ($post->label_hot) <div class="onhot">{{ $post->label_hot }}</div> @endif @if ($post->label_discount) <div class="onsale">{{ $post->label_discount }}</div> @endif </div>
                                            <div class="inner img-effect">
                                              <img data-oi="{{ get_object_image($post->image, 'large') }}" class="porto-lazyload wp-post-image" alt="" />
                                              <img src="{{ get_object_image($post->image, 'large') }}" data-oi="{{ get_object_image($post->image, 'large') }}" class="porto-lazyload hover-image" alt="" />
                                            </div>
                                          </a>
                                        </div>
                                        <div class="product-content">
                                          <a class="product-loop-title" href="{{ route('public.single', $post->slug) }}">
                                            <h3 class="woocommerce-loop-product__title">{{ $post->name }}</h3>
                                          </a>
                                          <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                              <bdi>
                                                <span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($post->prices, 0, '.', '.') }}
                                              </bdi>
                                            </span>
                                          </span>
                                          <div class="add-links-wrap">
                                            <div class="add-links clearfix">
                                              <a href="{{ route('public.single', $post->slug) }}" class="viewcart-style-3 button product_type_variable add_to_cart_button">Lihat Detail</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </li> @endforeach </ul>
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
              <div class="col-lg-3 pt-5 pr-5">
                <aside id="text-4" class="widget sbg_widget productleftsidebar widget_text">
                  <div class="textwidget pt-5">
                    <p class="mb-0"> @foreach($getFeaturedBanner as $banner) <img class="alignnone size-large wp-image-1358 pt-5" src="{{ get_object_image($banner->banner_43) }}" alt="" width="269" height="322"> @endforeach </p>
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
                            <h2 class="section-title text-center slider-title">
                              <span class="inline-title">MOTOR MATIC</span>
                              <span class="line"></span>
                            </h2>
                            <div class="slider-wrapper">
                              <div class="woocommerce columns-4 pt-5">
                                <ul class="products products-container products-slider owl-carousel nav-center-images-only nav-pos-outside nav-style-4 show-nav-hover pcols-lg-4 pcols-md-3 pcols-xs-3 pcols-ls-2 pwidth-lg-4 pwidth-md-3 pwidth-xs-2 pwidth-ls-1 is-shortcode" data-plugin-options="{&quot;autoplay&quot;: true,&quot;themeConfig&quot;:true,&quot;lg&quot;:3,&quot;md&quot;:3,&quot;xs&quot;:3,&quot;ls&quot;:1,&quot;nav&quot;:true}" data-product_layout="product-default"> @foreach ($getByCategoryMatic as $postcatmatic) <li class="product-col product-default product type-product post-1385 status-publish first instock product_cat-electronics product_cat-music has-post-thumbnail featured shipping-taxable purchasable product-type-variable">
                                    <div class="product-inner">
                                      <div class="product-image">
                                        <a href="{{ route('public.single', $postcatmatic->slug) }}">
                                          <div class="labels"> @if ($postcatmatic->label_hot) <div class="onhot">{{ $postcatmatic->label_hot }}</div> @endif @if ($postcatmatic->label_discount) <div class="onsale">{{ $postcatmatic->label_discount }}</div> @endif </div>
                                          <div class="inner img-effect">
                                            <img data-oi="{{ get_object_image($postcatmatic->image, 'large') }}" class="porto-lazyload wp-post-image" alt="" />
                                            <img src="{{ get_object_image($postcatmatic->image, 'large') }}" data-oi="{{ get_object_image($postcatmatic->image, 'large') }}" class="porto-lazyload hover-image" alt="" />
                                          </div>
                                        </a>
                                      </div>
                                      <div class="product-content">
                                        <a class="product-loop-title" href="{{ route('public.single', $postcatmatic->slug) }}">
                                          <h3 class="woocommerce-loop-product__title">{{ $postcatmatic->name }}</h3>
                                        </a>
                                        <span class="price">
                                          <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                              <span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($postcatmatic->prices, 0, '.', '.') }}
                                            </bdi>
                                          </span>
                                        </span>
                                        <div class="add-links-wrap">
                                          <div class="add-links clearfix">
                                            <a href="{{ route('public.single', $postcatmatic->slug) }}" class="viewcart-style-3 button product_type_variable add_to_cart_button">Lihat Detail</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </li> @endforeach </ul>
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
              <div class="col-lg-3 pt-5 pr-5">
                <aside id="text-4" class="widget sbg_widget productleftsidebar widget_text">
                  <div class="textwidget pt-5">
                    <p class="mb-0"> @foreach($getFeaturedBanner as $banner) <img class="pt-5 alignnone size-large wp-image-1358" src="{{ get_object_image($banner->banner_41) }}" alt="" width="269" height="322"> @endforeach </p>
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
                            <h2 class="section-title text-center slider-title">
                              <span class="inline-title">MOTOR BEBEK</span>
                              <span class="line"></span>
                            </h2>
                            <div class="slider-wrapper">
                              <div class="woocommerce columns-4 pt-5">
                                <ul class="products products-container products-slider owl-carousel nav-center-images-only nav-pos-outside nav-style-4 show-nav-hover pcols-lg-4 pcols-md-3 pcols-xs-3 pcols-ls-2 pwidth-lg-4 pwidth-md-3 pwidth-xs-2 pwidth-ls-1 is-shortcode" data-plugin-options="{&quot;autoplay&quot;: true,&quot;themeConfig&quot;:true,&quot;lg&quot;:3,&quot;md&quot;:3,&quot;xs&quot;:3,&quot;ls&quot;:1,&quot;nav&quot;:true}" data-product_layout="product-default"> @foreach ($getByCategoryBebek as $postcatbebek) <li class="product-col product-default product type-product post-1385 status-publish first instock product_cat-electronics product_cat-music has-post-thumbnail featured shipping-taxable purchasable product-type-variable">
                                    <div class="product-inner">
                                      <div class="product-image">
                                        <a href="{{ route('public.single', $postcatbebek->slug) }}">
                                          <div class="labels"> @if ($postcatbebek->label_hot) <div class="onhot">{{ $postcatbebek->label_hot }}</div> @endif @if ($postcatbebek->label_discount) <div class="onsale">{{ $postcatbebek->label_discount }}</div> @endif </div>
                                          <div class="inner img-effect">
                                            <img data-oi="{{ get_object_image($postcatbebek->image, 'large') }}" class="porto-lazyload wp-post-image" alt="" />
                                            <img src="{{ get_object_image($postcatbebek->image, 'large') }}" data-oi="{{ get_object_image($postcatbebek->image, 'large') }}" class="porto-lazyload hover-image" alt="" />
                                          </div>
                                        </a>
                                      </div>
                                      <div class="product-content">
                                        <a class="product-loop-title" href="{{ route('public.single', $postcatbebek->slug) }}">
                                          <h3 class="woocommerce-loop-product__title">{{ $postcatbebek->name }}</h3>
                                        </a>
                                        <span class="price">
                                          <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                              <span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($postcatbebek->prices, 0, '.', '.') }}
                                            </bdi>
                                          </span>
                                        </span>
                                        <div class="add-links-wrap">
                                          <div class="add-links clearfix">
                                            <a href="{{ route('public.single', $postcatbebek->slug) }}" class="viewcart-style-3 button product_type_variable add_to_cart_button">Lihat Detail</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </li> @endforeach </ul>
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
              <div class="col-lg-3 pt-5 pr-5">
                <aside id="text-4" class="widget sbg_widget productleftsidebar widget_text">
                  <div class="textwidget pt-5">
                    <p class="mb-0"> @foreach($getFeaturedBanner as $banner) <img class="pt-5 alignnone size-large wp-image-1358" src="{{ get_object_image($banner->banner_42) }}" alt="" width="269" height="322"> @endforeach </p>
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
                            <h2 class="section-title text-center slider-title">
                              <span class="inline-title">MOTOR SPORT</span>
                              <span class="line"></span>
                            </h2>
                            <div class="slider-wrapper">
                              <div class="woocommerce columns-4 pt-5">
                                <ul class="products products-container products-slider owl-carousel nav-center-images-only nav-pos-outside nav-style-4 show-nav-hover pcols-lg-4 pcols-md-3 pcols-xs-3 pcols-ls-2 pwidth-lg-4 pwidth-md-3 pwidth-xs-2 pwidth-ls-1 is-shortcode" data-plugin-options="{&quot;autoplay&quot;: true,&quot;themeConfig&quot;:true,&quot;lg&quot;:3,&quot;md&quot;:3,&quot;xs&quot;:3,&quot;ls&quot;:1,&quot;nav&quot;:true}" data-product_layout="product-default"> @foreach ($getByCategorySport as $postcatsport) <li class="product-col product-default product type-product post-1385 status-publish first instock product_cat-electronics product_cat-music has-post-thumbnail featured shipping-taxable purchasable product-type-variable">
                                    <div class="product-inner">
                                      <div class="product-image">
                                        <a href="{{ route('public.single', $postcatsport->slug) }}">
                                          <div class="labels"> @if ($postcatsport->label_hot) <div class="onhot">{{ $postcatsport->label_hot }}</div> @endif @if ($postcatsport->label_discount) <div class="onsale">{{ $postcatsport->label_discount }}</div> @endif </div>
                                          <div class="inner img-effect">
                                            <img data-oi="{{ get_object_image($postcatsport->image, 'large') }}" class="porto-lazyload wp-post-image" alt="" />
                                            <img src="{{ get_object_image($postcatsport->image, 'large') }}" data-oi="{{ get_object_image($postcatsport->image, 'large') }}" class="porto-lazyload hover-image" alt="" />
                                          </div>
                                        </a>
                                      </div>
                                      <div class="product-content">
                                        <a class="product-loop-title" href="{{ route('public.single', $postcatsport->slug) }}">
                                          <h3 class="woocommerce-loop-product__title">{{ $postcatsport->name }}</h3>
                                        </a>
                                        <span class="price">
                                          <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                              <span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($postcatsport->prices, 0, '.', '.') }}
                                            </bdi>
                                          </span>
                                        </span>
                                        <div class="add-links-wrap">
                                          <div class="add-links clearfix">
                                            <a href="{{ route('public.single', $postcatsport->slug) }}" class="viewcart-style-3 button product_type_variable add_to_cart_button">Lihat Detail</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </li> @endforeach </ul>
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
              .vc_custom_1595224749028 {
                padding-top: 47px !important;
                padding-bottom: 161px !important;
                height: 100%;
              }
            </style> @foreach($getFeaturedBanner as $banner) <div data-vc-parallax="1" data-vc-parallax-image="{{ get_object_image($banner->footer) }}" class="vc_row wpb_row row-center vc_custom_1595224749028 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving porto-inner-container mb-5"></div> @endforeach
        </div>
        </article>
      </div>
    </div>
    <div class="sidebar-overlay"></div>
  </div>
</div>
</div>
</div>