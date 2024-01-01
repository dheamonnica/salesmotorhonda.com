@php
$getCategoryByIdMatic = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryId(6);
$getAllRelatedChildrenMatic = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryChild(6);
$getCategoryByIdBebek = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryId(9);
$getAllRelatedChildrenBebek = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryChild(9);
$getCategoryByIdSport = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryId(11);
$getAllRelatedChildrenSport = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryChild(11);
$getCategoryByIdPremium = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryId(24);
$getAllRelatedChildrenPremium = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getCategoryChild(24);
$getFeaturedCategories = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->getFeaturedCategories(5);

$post_id = $post->id;
$getKreditMotor = app(\Botble\Credit\Repositories\Interfaces\CreditInterface::class)->getKreditMotor($post_id);
@endphp

<div class="row">
  <!--   <div class="col-lg-3 pt-2">
        <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
            <h3 class="widget-title">Kategori</h3>
            <ul class="nav nav-list flex-column">
                @foreach ($getCategoryByIdMatic as $cat)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('public.single', $cat->slug) }}">
                        {{ $cat->name }}
                    </a>
                </li>
                @foreach ($getAllRelatedChildrenMatic as $childcat)
                <li class="nav-item ml-3">
                    <a class="nav-link" href="{{ route('public.single', $childcat->slug) }}">
                        {{ $childcat->name }}
                    </a>
                </li>
                @endforeach
                @endforeach
            </ul>

            <ul class="nav nav-list flex-column">
                @foreach ($getCategoryByIdBebek as $cat)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('public.single', $cat->slug) }}">
                        {{ $cat->name }}
                    </a>
                </li>
                @foreach ($getAllRelatedChildrenBebek as $childcat)
                <li class="nav-item ml-3">
                    <a class="nav-link" href="{{ route('public.single', $childcat->slug) }}">
                        {{ $childcat->name }}
                    </a>
                </li>
                @endforeach
                @endforeach
            </ul>

            <ul class="nav nav-list flex-column">
                @foreach ($getCategoryByIdSport as $cat)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('public.single', $cat->slug) }}">
                        {{ $cat->name }}
                    </a>
                </li>
                @foreach ($getAllRelatedChildrenSport as $childcat)
                <li class="nav-item ml-3">
                    <a class="nav-link" href="{{ route('public.single', $childcat->slug) }}">
                        {{ $childcat->name }}
                    </a>
                </li>
                @endforeach
                @endforeach
            </ul>

            <ul class="nav nav-list flex-column">
                @foreach ($getCategoryByIdPremium as $cat)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('public.single', $cat->slug) }}">
                        {{ $cat->name }}
                    </a>
                </li>
                @foreach ($getAllRelatedChildrenPremium as $childcat)
                <li class="nav-item ml-3">
                    <a class="nav-link" href="{{ route('public.single', $childcat->slug) }}">
                        {{ $childcat->name }}
                    </a>
                </li>
                @endforeach
                @endforeach
            </ul>
        </aside>
    </div> -->

    <div class="col-lg-12 pt-2">
        <div class="">
            <div class="row">
                <div class="col-lg-7">
                    <h3 class="product_title entry-title show-product-nav text-uppercase">{{ $post->name }}</h3>
                    <div class="woocommerce-product-rating">
             <!--            <div class="star-rating" title="" data-original-title="5.00">
                            <span style="width:100%">
                                <strong class="rating">5.00</strong> out of 5 </span>
                            </div> -->
                            <div class="review-link">
                                @if (!$post->categories->isEmpty())
                                <span class="posted-in">
                                    <a href="{{ route('public.single', $post->categories->first()->slug) }}">Kategori : {{ $post->categories->first()->name }}</a>
                                </span>
                                @endif
                                | @if (!$post->tags->isEmpty())
                                Tags :
                                <span class="posted-in">
                                    @foreach ($post->tags as $tag)
                                    <a href="{{ route('public.single', $tag->slug) }}" class="label-tags">
                                      {{ $tag->name }}</a>
                                      @endforeach

                                  </span>
                                  @endif
                              </div>
                          </div>

                          <div class="summary-before col">
                            <div class="labels">
                                @if ($post->label_hot)
                                <div class="onhot">{{ $post->label_hot }}</div>
                                @endif
                                @if ($post->label_discount)
                                <div class="onsale">{{ $post->label_discount }}</div>
                                @endif
                            </div>
                            @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($post->id, POST_MODULE_SCREEN_NAME)))
                            <div class="product-images images">
                                <div class="product-image-slider owl-carousel show-nav-hover has-ccols ccols-1 owl-loaded ">
                                    <div class="owl-stage-outer owl-height" style="height: 478px;" >
                                        <div class="owl-stage" style="transform: translate3d(-1920px, 0px, 0px); transition: all 0.3s ease 0s;">
                                            @foreach ($galleries as $item)
                                            <div class="owl-item active" style="width: 480px;">
                                                <div class="img-thumbnail">
                                                    <div class="inner">
                                                        <img src="{{ get_object_image($item['img'], 'large') }}" class="img-responsive owl-lazy owl-lazy-loaded " id="{{ $item['description'] }}" name="image-swap">
                                                        <span style="display: none" id="warna">{{ $item['description'] }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div>
                                        <div class="owl-dots disabled"></div> -->
                                    </div>
                                </div>
                            </div>
                            @endif
                            <p class="pt-5">{{ $post->description }}</p>
                        </div>
                    </div>

                    <div class="col-lg-5">

                        <div class="pt-5 summary entry-summary">
                            <div class="pb-0 clearfix">
                                <div title="Rated 3 out of 5" class="float-left">
                                    <input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                                </div>
                            </div>

                            <span class="category-list text-price price">LENGKAPI DATA DIBAWAH INI : </span><br><br>
                            
                            @if($item['description'])
                            <div class="input-group">
                                <label class="mb-1 font-weight-medium">Warna<span class="required">*</span></label>
                            </div>
                            <select class="form-control" onchange="setImage(this);">
                                <option>- Pilih Warna -</option>
                                @foreach ($galleries as $item)
                                <option value="{{ get_object_image($item['img'], 'large') }}">{{ $item['description'] }}</option>
                                @endforeach
                            </select>
                            @endif

                            <div class="input-group">
                                <label class="mb-1 font-weight-medium">Uang Muka<span class="required">*</span></label>
                            </div>
                            <select class="form-control" name="pricelist_id" id="uang_muka" onchange="getPricelists()">
                                <option>- Pilih Uang Muka (DP) -</option>
                                @foreach($getKreditMotor as $kredit)
                                <option value="{{ $kredit->uang_muka }}" data-id="{{ $kredit->uang_muka }}" data-uang="{{ $kredit->uang_muka }}">Rp. {{ number_format($kredit->uang_muka, 0, '.', '.') }}</option>
                                @endforeach
                            </select>

                            <p class="price">
                                <span class="category-list text-price">Uang Muka (DP) Setelah Diskon Menjadi</span><br>
                                <span class="amount" id="diskon"></span>
                            </p>

                            <div class="input-group">
                                <label class="mb-1 font-weight-medium">Cicilan Per Bulan / Tenor</label>
                            </div>
                            <select class="form-control" id="tenor_cicilan">
                            </select>

                            <form class="woocommerce-form woocommerce-form-login login pt-3" method="post">

                                

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label class="mb-1 font-weight-medium" for="fullname">Nama Lengkap&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text line-height-xl" name="fullname" id="fullname" autocomplete="fullname" value="">
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide mb-2">
                                    <label class="mb-1 font-weight-medium" for="address">Alamat&nbsp;<span class="required">*</span></label>
                                    <span class="address-input"><input class="woocommerce-Input woocommerce-Input--text input-text line-height-xl" type="text" name="address" id="address" autocomplete="current-address"><span class="show-address-input"></span></span>
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide mb-2">
                                    <label class="mb-1 font-weight-medium" for="telp">Nomor Telepon&nbsp;<span class="required">*</span></label>
                                    <span class="telp-input"><input class="woocommerce-Input woocommerce-Input--text input-text line-height-xl" type="text" name="telp" id="telp" autocomplete="current-telp"><span class="show-telp-input"></span></span>
                                </p>


                            </form>

                            <style type="text/css">
                                .porto-sicon-box.default-icon {
                                    display: -ms-flexbox;
                                    display: inline-flex;
                                    -ms-flex-align: center;
                                    align-items: center;
                                }
                            </style>

                            <div class="custom-html p-3 d-lg-block">
                                <button onclick="myJavascriptFunction()" style="border: 2px solid #ed2128;background: #ed2128;padding: 10px;border-radius: 5px;cursor: pointer;width: 100%;">
                                <a target="_blank" >
                                    <div class="porto-sicon-box text-left mb-0 wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon">
                                        <div class="porto-sicon-default">
                                            <div class="porto-sicon-default">
                                                <div id="porto-icon-153233218260d8220a92159" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 7vh;margin-right:-8px;"><img class="img-icon" alt="" src="/uploads/2/icon/pngaaacom-3956830.png" width="30" height="31"></div>
                                            </div>
                                        </div>
                                       <div class="porto-sicon-header">
                                            <h3 class="porto-sicon-title mb-2" style="font-weight:600;font-size:17px;line-height:11px;color:white;">AJUKAN SEKARANG
                                                <br>
                                            </h3>
                                             <h3 class="porto-sicon-title" style="font-weight:600;font-size:12px;line-height:11px;color:white;">
                                                TIM KAMI AKAN MENGHUBUNGI ANDA
                                            </h3>

                                         <!--    <p style="font-weight:700;font-size:18px;line-height:18px;color:white;">+62 812 8131 8653</p> -->
                                        </div>
                                    </div>
                                </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col">
                        <div class="tabs tabs-product mb-2">
                            <ul class="nav nav-tabs">
                                <li class="nav-item active"><a class="nav-link py-3 px-4" href="#productDescription" data-toggle="tab">Informasi Motor</a></li>
                                <li class="nav-item"><a class="nav-link py-3 px-4" href="#productInfo" data-toggle="tab">Spesifikasi Motor</a></li>
                                <li class="nav-item"><a class="nav-link py-3 px-4" href="#productkredit" data-toggle="tab">Info Kredit</a></li>
                            </ul>
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link py-3 px-4" href="#productMesin" data-toggle="tab">Mesin</a></li>
                                <li class="nav-item"><a class="nav-link py-3 px-4" href="#productRangka" data-toggle="tab">Rangka & Kaki-Kaki</a></li>
                                <li class="nav-item"><a class="nav-link py-3 px-4" href="#productDimensi" data-toggle="tab">Dimensi & Berat</a></li>
                                <li class="nav-item"><a class="nav-link py-3 px-4" href="#productKapasitas" data-toggle="tab">Kapasitas</a></li>
                                <li class="nav-item"><a class="nav-link py-3 px-4" href="#productKelistrikan" data-toggle="tab">Kelistrikan</a></li>
                            </ul>
                            <div class="tab-content p-0">
                                <div class="tab-pane p-4 active" id="productDescription">
                                    {!! $post->content !!}
                                </div>
                                <div class="tab-pane p-4" id="productInfo">
                                    <table class="table m-0">
                                        <tbody>
                                            <tr>
                                                <th class="border-top-0">
                                                    Harga OTR 
                                                </th>
                                                <td class="border-top-0">
                                                    Rp {{ number_format($post->otw_prices, 0, '.', '.') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Kredit Dp Mulai Dari
                                                </th>
                                                <td>
                                                    Rp {{ number_format($post->prices, 0, '.', '.') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Angsuran Mulai Dari
                                                </th>
                                                <td>
                                                    Rp. {{ number_format($post->angsuran, 0, '.', '.') }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane p-4" id="productkredit">
                                    <img alt="" class="img-fluid" src="{{ get_object_image($post->img, 'large') }}">
                                </div>
                                <div class="tab-pane p-4" id="productMesin">
                                    {!! $post->mesin !!}
                                </div>
                                <div class="tab-pane p-4" id="productRangka">
                                    {!! $post->rangka !!}
                                </div>
                                <div class="tab-pane p-4" id="productDimensi">
                                    {!! $post->dimensi !!}
                                </div>
                                <div class="tab-pane p-4" id="productKapasitas">
                                    {!! $post->kapasitas !!}
                                </div>
                                <div class="tab-pane p-4" id="productKelistrikan">
                                    {!! $post->kelistrikan !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="main-box">
        <div class="main-box-header">
            <h3 class="widget-title">PRODUK LAINNYA</h3>    
        </div>
        <div class="main-box-content">
            <div class="box-style box-style-4">
                <div class="slider-wrapper">
                    <div class="woocommerce columns-4 pt-5">
                        <ul class="products products-container products-slider owl-carousel nav-center-images-only nav-pos-outside nav-style-4 show-nav-hover pcols-lg-4 pcols-md-3 pcols-xs-3 pcols-ls-2 pwidth-lg-4 pwidth-md-3 pwidth-xs-2 pwidth-ls-1 is-shortcode" data-plugin-options="{&quot;autoplay&quot;: true,&quot;themeConfig&quot;:true,&quot;lg&quot;:5,&quot;md&quot;:3,&quot;xs&quot;:3,&quot;ls&quot;:2,&quot;nav&quot;:true}" data-product_layout="product-default">
                            @foreach (getByCategoryExNews($post->slug, 6) as $related_item)
                            <li class="product-col product-default product type-product post-1385 status-publish first instock product_cat-electronics product_cat-music has-post-thumbnail featured shipping-taxable purchasable product-type-variable">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <a href="{{ route('public.single', $related_item->slug) }}">
                                            <div class="labels">
                                                @if ($related_item->label_hot)
                                                <div class="onhot">{{ $related_item->label_hot }}</div>
                                                @endif
                                                @if ($related_item->label_discount)
                                                <div class="onsale">{{ $related_item->label_discount }}</div>
                                                @endif

                                            </div>
                                            <div class="inner img-effect"><img data-oi="{{ get_object_image($related_item->image, 'large') }}" src="{{ get_object_image($related_item->image, 'large') }}" class="porto-lazyload wp-post-image" alt="" /></div>
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-loop-title" href="{{ route('public.single', $related_item->slug) }}">
                                            <h3 class="woocommerce-loop-product__title text-uppercase price">{{ $related_item->name }}</h3>
                                        </a>
                                        <!-- <span class="category-list">DP Mulai Dari</span> -->
                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($related_item->prices, 0, '.', '.') }}</bdi></span></span>
                                        <div class="add-links-wrap">
                                            <div class="add-links clearfix"><a href="{{ route('public.single', $related_item->slug) }}" class="viewcart-style-3 button product_type_variable add_to_cart_button">Lihat Detail</a>
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
    </section>

    <section class="main-box">
        <div class="main-box-header">
            <h3 class="widget-title">PROMO MENARIK</h3>    
        </div>
        <div class="main-box-content">
            <div class="box-style box-style-4">
                <div class="slider-wrapper">
                    <div class="woocommerce columns-4 pt-5">
                        <ul class="products products-container products-slider owl-carousel nav-center-images-only nav-pos-outside nav-style-4 show-nav-hover pcols-lg-4 pcols-md-3 pcols-xs-3 pcols-ls-2 pwidth-lg-4 pwidth-md-3 pwidth-xs-2 pwidth-ls-1 is-shortcode" data-plugin-options="{&quot;autoplay&quot;: true,&quot;themeConfig&quot;:true,&quot;lg&quot;:5,&quot;md&quot;:3,&quot;xs&quot;:3,&quot;ls&quot;:2,&quot;nav&quot;:true}" data-product_layout="product-default">
                            @foreach (getByCategoryNews($post->slug, 6) as $related_item)
                            <li class="product-col product-default product type-product post-1385 status-publish first instock product_cat-electronics product_cat-music has-post-thumbnail featured shipping-taxable purchasable product-type-variable">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <a href="{{ $related_item->link_news }}">
                                            <div class="labels">
                                            </div>
                                            <div class=""><img data-oi="{{ get_object_image($related_item->image, 'large') }}" src="{{ get_object_image($related_item->image, 'large') }}" class="porto-lazyload wp-post-image" alt="" /></div>
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-loop-title" href="{{ $related_item->link_news }}">
                                            <h3 class="woocommerce-loop-product__title price">{{ $related_item->name }}</h3>
                                        </a>
                                        <!-- <span class="category-list">DP Mulai Dari</span> -->
                                        <!-- <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp </span>{{ number_format($related_item->prices, 0, '.', '.') }}</bdi></span></span>
                                        <div class="add-links-wrap">
                                            <div class="add-links clearfix"><a href="{{ route('public.single', $related_item->slug) }}" class="viewcart-style-3 button product_type_variable add_to_cart_button">Lihat Detail</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function setImage(select){
          var image = document.getElementsByName("image-swap")[0];
          image.src = select.options[select.selectedIndex].value;
      }  
  </script>

  <script type="text/javascript">
    function myJavascriptFunction() { 
        var name = document.getElementById("fullname").value;
        var address= document.getElementById("address").value;
        var telp = document.getElementById("telp").value;
        var uang_muka =  $('#diskon').text();
        var select_cicilan = document.getElementById('tenor_cicilan');
        var option_cicilan = select_cicilan.options[select_cicilan.selectedIndex];
        var cicilan = option_cicilan.value;
        // var select = document.getElementById('uang_muka');
        // var option = select.options[select.selectedIndex];
        // var uang_muka = option.value;
        var warna =  $('#warna').text();
        var motor = "<?=$post->name ?>";
        var br = document.write("<br>");

        window.location.href = "https://api.whatsapp.com/send?phone={{ theme_option('no_wa_footer') }}&text=Nama Lengkap : " + name.valueOf() + "%0a" + "Alamat : " + address.valueOf() + "%0a" + "No.Telpon : " + telp.valueOf() + "%0a" + "Motor : " + motor.valueOf() + "%0a" + "Uang Muka : " + uang_muka.valueOf() + "%0a" + "Cicilan : " + cicilan.valueOf()  + "%0a" + "Warna : " + warna.valueOf();
    }
</script>

<script type="text/javascript">
    function getPricelists() {
        var select = document.getElementById('uang_muka');
        var option = select.options[select.selectedIndex];

        var motor_id = "<?=$post->id ?>";
        var uang_muka = option.value;
        var formatRupiah = new Intl.NumberFormat("id-ID");
        $.ajax({
            type: "get",
            url: '/getkredit?uang_muka=' + uang_muka,
            dataType: 'json',
            success: function (data) {
                $.each(data, function (i, data) {
                    $('#diskon').html('Rp ' + formatRupiah.format(data.diskon));
                    $('#tenor_cicilan').html(`
                        <option value="11 Bulan x Rp `+ formatRupiah.format(data.bulan_11) +`">Bulan 11 x Rp ` + formatRupiah.format(data.bulan_11) + `</option>
                        <option value="17 Bulan x Rp `+ formatRupiah.format(data.bulan_17) +`">Bulan 17 x Rp ` + formatRupiah.format(data.bulan_17) + `</option>
                        <option value="23 Bulan x Rp `+ formatRupiah.format(data.bulan_23) +`">Bulan 23 x Rp ` + formatRupiah.format(data.bulan_23) + `</option>
                        <option value="27 Bulan x Rp `+ formatRupiah.format(data.bulan_27) +`">Bulan 27 x Rp ` + formatRupiah.format(data.bulan_27) + `</option>
                        <option value="29 Bulan x Rp `+ formatRupiah.format(data.bulan_29) +`">Bulan 29 x Rp ` + formatRupiah.format(data.bulan_29) + `</option>
                        <option value="33 Bulan x Rp `+ formatRupiah.format(data.bulan_33) +`">Bulan 33 x Rp ` + formatRupiah.format(data.bulan_33) + `</option>
                        <option value="35 Bulan x Rp `+ formatRupiah.format(data.bulan_35) +`">Bulan 35 x Rp ` + formatRupiah.format(data.bulan_35) + `</option>
                        `);
                });
            },
            error: function (respone) {
                console.log(respone);
            }
        });
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
