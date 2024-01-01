<?php

namespace Botble\Banner\Models;

use Eloquent;

/**
 * Botble\Banner\Models\Banner
 *
 * @mixin \Eloquent
 */
class Banner extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'banners';

    /**
     * @var array
     */
    protected $fillable = [
        // 'name',
        'status',
        'banner_popup',
        'slideshow_01',
        'slideshow_02',
        'banner_31',
        'banner_32',
        'banner_33',
        'banner_41',
        'banner_42',
        'banner_43',
        'banner_44',
        'footer'
    ];
}
