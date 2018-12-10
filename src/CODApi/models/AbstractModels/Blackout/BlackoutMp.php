<?php
/**
 * Created by PhpStorm.
 * User: gary
 * Date: 2018-12-07
 * Time: 14:39
 */

namespace mrgarymartin\CODApi\models\AbstractModels\Blackout;


/**\
 * Class BlackoutMp
 * @package mrgarymartin\CODApi\models\AbstractModels\Blackout
 * @property BlackoutLifeTime $lifetime
 * @property integer $level
 * @property integer $maxLevel
 * @property integer $levelXpRemainder
 * @property integer $levelXpGained
 * @property integer $prestige
 * @property integer $prestigeId
 * @property integer $maxPrestige
 */
abstract class BlackoutMp extends \mrgarymartin\CODApi\models\BaseClass
{
    public $lifetime;
    public $level;
    public $maxLevel;
    public $levelXpRemainder;
    public $levelXpGained;
    public $prestige;
    public $prestigeId;
    public $maxPrestige;

}
