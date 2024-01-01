<?php

namespace Botble\Credit\Repositories\Eloquent;

use Botble\Support\Repositories\Eloquent\RepositoriesAbstract;
use Botble\Credit\Repositories\Interfaces\CreditInterface;
use DB;

class CreditRepository extends RepositoriesAbstract implements CreditInterface
{
    /**
     * @var string
     */
    protected $screen = CREDIT_MODULE_SCREEN_NAME;

    public function getKreditMotor($post_id) {
	
	$data = DB::select("SELECT * FROM `credits` LEFT JOIN (SELECT id as id_product FROM posts)s ON credits.post_id=s.id_product WHERE post_id=$post_id");

    return $this->applyBeforeExecuteQuery($data, $this->screen);
    }
}
