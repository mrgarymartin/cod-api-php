<?php
/**
 * Created by PhpStorm.
 * User: gary
 * Date: 2018-12-07
 * Time: 14:37
 */

namespace mrgarymartin\CODApi\models\AbstractModels\Blackout;

/**
 * Class LifeTime
 * @package mrgarymartin\CODApi\models\AbstractModels\Blackout
 * @property BlackoutBaseStats $all
 */
abstract class BlackoutLifeTime extends \mrgarymartin\CODApi\models\BaseClass
{
    /** @var BlackoutBaseStats */
    public $all;
    /** @var BlackoutMode */
    public $mode;

}
