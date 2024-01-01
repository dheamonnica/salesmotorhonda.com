<?php

namespace Theme\ECommerce\Http\Controllers;

use Illuminate\Routing\Controller;
use Theme;

class ECommerceController extends Controller
{

    /**
     * @return \Response
     */
    public function test()
    {
        return Theme::scope('test')->render();
    }
}