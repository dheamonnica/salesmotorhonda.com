<!-- <div style="position: relative; margin-bottom: 10px;">
    <div class="c-content-media-2-slider" data-slider="owl" data-single-item="true" data-auto-play="4000">
        @if ($category != null)
            <div class="c-content-label">{{ $category }}</div>
        @endif
        <div class="owl-carousel owl-theme c-theme owl-single">
            @foreach ($galleries as $image)
                @if ($image)
                    <div class="item">
                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url('{{ url(array_get($image, 'img')) }}'); min-height: 380px;">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div> -->

<div class="slider-wrapper">
    <div class="woocommerce columns-4 pt-5">
        <ul class="products products-container products-slider owl-carousel nav-center-images-only nav-pos-outside nav-style-4 show-nav-hover pcols-lg-4 pcols-md-3 pcols-xs-3 pcols-ls-2 pwidth-lg-4 pwidth-md-3 pwidth-xs-2 pwidth-ls-1 is-shortcode" data-plugin-options="{&quot;autoplay&quot;: true,&quot;themeConfig&quot;:true,&quot;lg&quot;:1,&quot;md&quot;:1,&quot;xs&quot;:1,&quot;ls&quot;:1,&quot;nav&quot;:true}" data-product_layout="product-default">
            @foreach ($galleries as $images)
            <li class="product-col product-default product type-product post-1385 status-publish first instock product_cat-electronics product_cat-music has-post-thumbnail featured shipping-taxable purchasable product-type-variable">
                <div class="product-inner">
                    <div class="product-image">
                        <div class="inner img-effect"><img data-oi="{{ get_object_image(array_get($image, 'img')) }}" src="{{ get_object_image(array_get($image, 'img')) }}" class="porto-lazyload wp-post-image" alt="" />
                         <img src="{{ get_object_image(array_get($image, 'img')) }}" data-oi="{{ get_object_image(array_get($image, 'img')) }}" class="porto-lazyload hover-image" alt="" /></div>
                    </div>

                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>