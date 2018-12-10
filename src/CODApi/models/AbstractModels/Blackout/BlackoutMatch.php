<?php
/**
 * Created by PhpStorm.
 * User: gary
 * Date: 2018-12-07
 * Time: 14:47
 */

namespace mrgarymartin\CODApi\models\AbstractModels\Blackout;


abstract class BlackoutMatch extends \mrgarymartin\CODApi\models\BaseClass
{
    /** @var number */
    public $utcStartSeconds;
    /** @var number */
    public $utcEndSeconds;
    /** @var string */
    public $map;
    /** @var string */
    public $mode;
    /** @var string */
    public $matchID;
    /** @var number */
    public $duration;
    /** @var number */
    public $version;
    /** @var string */
    public $gameType;
    /** @var number */
    public $playerCount;
    /** @var * */
    public $playlistName;
    /** @var BlackoutBaseStats */
    public $playerStats;
    /** @var boolean */
    public $draw;
    /** @var boolean */
    public $privateMatch;
}
