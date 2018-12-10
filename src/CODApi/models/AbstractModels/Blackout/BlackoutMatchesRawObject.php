<?php
/**
 * Created by PhpStorm.
 * User: gary
 * Date: 2018-12-07
 * Time: 14:53
 */

namespace mrgarymartin\CODApi\models\AbstractModels\Blackout;


abstract class BlackoutMatchesRawObject extends \mrgarymartin\CODApi\models\BaseClass
{
    /** @var string */
    public $status;

    /** @var BlackoutMatchesData */
    public $data;

}
