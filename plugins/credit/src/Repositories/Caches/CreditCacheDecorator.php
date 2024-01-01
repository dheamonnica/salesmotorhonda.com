<?php

namespace Botble\Credit\Repositories\Caches;

use Botble\Support\Repositories\Caches\CacheAbstractDecorator;
use Botble\Support\Services\Cache\CacheInterface;
use Botble\Credit\Repositories\Interfaces\CreditInterface;

class CreditCacheDecorator extends CacheAbstractDecorator implements CreditInterface
{
    /**
     * @var CreditInterface
     */
    protected $repository;

    /**
     * @var CacheInterface
     */
    protected $cache;

    /**
     * CreditCacheDecorator constructor.
     * @param CreditInterface $repository
     * @param CacheInterface $cache
     * @author Sang Nguyen
     */
    public function __construct(CreditInterface $repository, CacheInterface $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
    }

    public function getKreditMotor($post_id)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }

}
