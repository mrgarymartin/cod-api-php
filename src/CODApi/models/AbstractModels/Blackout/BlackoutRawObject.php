<?php
/**
 * Created by PhpStorm.
 * User: gary
 * Date: 2018-12-07
 * Time: 14:44
 */

namespace mrgarymartin\CODApi\models\AbstractModels\Blackout;

/**
 * Class BlackoutRawObject
 * @package mrgarymartin\CODApi\models\AbstractModels\Blackout
 *
 * @property string $status
 * @property BlackoutData $data
 */
abstract class BlackoutRawObject extends \mrgarymartin\CODApi\models\BaseClass
{
    public $status;
    public $data;

}
