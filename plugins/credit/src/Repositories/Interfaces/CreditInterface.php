<?php

namespace Botble\Credit\Repositories\Interfaces;

use Botble\Support\Repositories\Interfaces\RepositoryInterface;

interface CreditInterface extends RepositoryInterface
{
    public function getKreditMotor($post_id);
}
