<?php
/**
 * Created by PhpStorm.
 * User: gary
 * Date: 2018-12-07
 * Time: 14:46
 */

namespace mrgarymartin\CODApi\models\AbstractModels\Blackout;

/**
 * Class BlackoutPlayerStats
 * @package mrgarymartin\CODApi\models\AbstractModels\Blackout
 */
abstract class BlackoutPlayerStats extends \mrgarymartin\CODApi\models\BaseClass
{
    /** @var integer */
    public $kills;
    /** @var integer */
    public $playerBody;
    /** @var integer */
    public $matchXp;
    /** @var integer */
    public $lootTimePlayed;
    /** @var integer */
    public $averageSpeedDuringMatch;
    /** @var integer */
    public $scoreXp;
    /** @var integer */
    public $playerHead;
    /** @var integer */
    public $numUavCalled;
    /** @var integer */
    public $losses;
    /** @var integer */
    public $timePlayedMoving;
    /** @var integer */
    public $totalDistanceTravelled;
    /** @var integer */
    public $totalXp;
    /** @var integer */
    public $startXp;
    /** @var integer */
    public $score;
    /** @var integer */
    public $challengesCompletedCount;
    /** @var integer */
    public $headshots;
    /** @var integer */
    public $endRank;
    /** @var integer */
    public $assists;
    /** @var integer */
    public $gamesPlayed;
    /** @var integer */
    public $misses;
    /** @var integer */
    public $objectiveTime;
    /** @var integer */
    public $killsDenied;
    /** @var integer */
    public $deaths;
    /** @var integer */
    public $wins;
    /** @var integer */
    public $percentageOfTimeMoving;
    /** @var integer */
    public $averageKillDistance;
    /** @var integer */
    public $killsConfirmed;
    /** @var integer */
    public $totalTimePlayedS;
    /** @var integer */
    public $prestige;
    /** @var integer */
    public $playerPlacement;
    /** @var integer */
    public $hits;
    /** @var integer */
    public $endXp;
    /** @var integer */
    public $teamkills;
    /** @var integer */
    public $weaponPickupsCount;
    /** @var integer */
    public $suicides;
    /** @var integer */
    public $lootXpEarned;
    /** @var integer */
    public $timePlayedAlive;
    /** @var integer */
    public $startRank;
    /** @var integer */
    public $teamPlacement;
    /** @var integer */
    public $position;
    /** @var integer */
    public $escortTime;
}
