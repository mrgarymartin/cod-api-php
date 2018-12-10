<?php

namespace mrgarymartin\CODApi\models\AbstractModels\Blackout;


/**
 * Interface BlackoutOverall
 * @package common\components\CodApi
 *
 *
 * @property integer $topPlacementsAll
 * @property integer $accuracy
 * @property integer $damagePerMinute
 * @property integer $ekiadRatio
 * @property integer $killsEarlyPercentage
 * @property integer $winPercentage
 * @property integer $damagePerGame
 * @property integer $ekiaPerGame
 * @property integer $headshotPercentage
 * @property integer $topPlacementsPlayer
 * @property integer $topPlacementsTeam
 * @property integer $revivesPerGame
 * @property integer $avgLifeTime
 * @property integer $killsPerGame
 */
abstract class BlackoutOverall extends BlackoutBaseStats {
    public $topPlacementsAll;
    public $accuracy;
    public $damagePerMinute;
    public $ekiadRatio;
    public $killsEarlyPercentage;
    public $winPercentage;
    public $damagePerGame;
    public $ekiaPerGame;
    public $headshotPercentage;
    public $topPlacementsPlayer;
    public $topPlacementsTeam;
    public $revivesPerGame;
    public $avgLifeTime;
    public $killsPerGame;
}
