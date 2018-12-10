<?php
/**
 * Created by PhpStorm.
 * User: gary
 * Date: 2018-12-07
 * Time: 14:35
 */

namespace mrgarymartin\CODApi\models\AbstractModels\Blackout;

/**
 * Class BlackoutMode
 * @package mrgarymartin\CODApi\models\AbstractModels\Blackout
 * @property BlackoutBaseStats $warzone_due
 * @property BlackoutBaseStats $warzone_quad
 * @property BlackoutBaseStats $warzone_solo
 */
abstract class BlackoutMode extends \mrgarymartin\CODApi\models\BaseClass
{
    /** @var \mrgarymartin\CODApi\models\Blackout\BlackoutOverall */
    public $warzone_duo;
    public $warzone_quad;
    public $warzone_solo;
}
