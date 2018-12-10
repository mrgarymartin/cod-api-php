<?php
/**
 * Created by PhpStorm.
 * User: gary
 * Date: 2018-12-07
 * Time: 14:41
 */

namespace mrgarymartin\CODApi\models\AbstractModels\Blackout;

/**
 * Class BlackoutData
 * @package mrgarymartin\CODApi\models\AbstractModels\Blackout
 *
 * @property string $title
 * @property string $platform
 * @property string $username
 * @property string $engagement
 *
 * @property BlackoutMp $mp
 */
abstract class BlackoutData extends \mrgarymartin\CODApi\models\BaseClass
{
    /** @var string */
    public $title;
    /** @var string */
    public $platform;
    /** @var string */
    public $username;
    /** @var BlackoutMp */
    public $mp;

    public $engagement;
}
