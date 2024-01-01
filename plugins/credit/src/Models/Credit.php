<?php

namespace Botble\Credit\Models;

use Eloquent;

/**
 * Botble\Credit\Models\Credit
 *
 * @mixin \Eloquent
 */
class Credit extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'credits';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'post_id',
        'uang_muka',
        'diskon',
        'bulan_11',
        'bulan_17',
        'bulan_23',
        'bulan_27',
        'bulan_29',
        'bulan_33',
        'bulan_35',
        'created_at',
        'updated_at',
    ];
}
