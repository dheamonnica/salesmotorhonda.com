<?php

namespace Botble\Banner\Repositories\Eloquent;

use Botble\Support\Repositories\Eloquent\RepositoriesAbstract;
use Botble\Banner\Repositories\Interfaces\BannerInterface;

class BannerRepository extends RepositoriesAbstract implements BannerInterface
{
    /**
     * @var string
     */
    protected $screen = BANNER_MODULE_SCREEN_NAME;

    public function getFeatured()
    {
        $data = $this->model
            ->where([
                'banners.status' => 1,
            ])
            ->orderBy('banners.created_at', 'desc');

        return $this->applyBeforeExecuteQuery($data, $this->screen)->get();
    }
}
