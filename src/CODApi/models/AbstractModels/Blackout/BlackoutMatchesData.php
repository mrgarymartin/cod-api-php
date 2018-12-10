<?php
/**
 * Created by PhpStorm.
 * User: gary
 * Date: 2018-12-07
 * Time: 14:50
 */

namespace mrgarymartin\CODApi\models\AbstractModels\Blackout;


/**
 * Class BlackoutMatchesData
 * @package mrgarymartin\CODApi\models\AbstractModels\Blackout
 */
abstract class BlackoutMatchesData extends \mrgarymartin\CODApi\models\BaseClass
{

    /** @var BlackoutMode | BlackoutBaseStats */
    public $summary;
    /** @var BlackoutMatch[] */
    public $matches;
}
