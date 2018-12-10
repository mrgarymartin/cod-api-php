<?php
namespace mrgarymartin\CODApi\models\AbstractModels\Blackout;


use mrgarymartin\CODApi\models\BaseClass;

/**
 *
 * Class PubgPlayerStats
 *
 * @package common\components\CodApi
* @property  int $killsRevenge
* @property  int $top10PlacementTeam
* @property  int $kdratio
* @property  int $killsUnderwaterEnemy
* @property  int $downsEliminatedTeam
* @property  int $ekia
* @property  int $score
* @property  int $distanceTraveledWingsuit
* @property  int $rank
* @property  int $deaths
* @property  int $frackingBlastDoorsOpened
* @property  int $killsEliminated
* @property  int $wins
* @property  int $itemsDropped
* @property  int $squads2Eliminated
* @property  int $winStreak
* @property  int $distanceTraveledVehicleLand
* @property  int $headshotDamage
* @property  int $top5PlacementPlayer
* @property  int $revives
* @property  int $activationCountBroadcast
* @property  int $rankxp
* @property  int $placementxp
* @property  int $killsWithoutDamage
* @property  int $downsEliminated
* @property  int $shots
* @property  int $killsAfterRevive
* @property  int $top10PlacementTeamNoCircleDamage
* @property  int $timePlayedTotal
* @property  int $killxp
* @property  int $killsLongshotSniper
* @property  int $top15PlacementTeam
* @property  int $top5PlacementTeam
* @property  int $killsEquipment
* @property  int $winsLastAlive
* @property  int $itemsPickedUp
* @property  int $totalDamage
* @property  int $plevel
* @property  int $killsEnemyInVehicleWater
* @property  int $squads4Eliminated
* @property  int $downsRevived
* @property  int $misses
* @property  int $squadsEliminatedUnassisted
* @property  int $basketsMade
* @property  int $hitsHeadshot
* @property  int $killStreak
* @property  int $itemsHealthUsed
* @property  int $killsEnemyInVehicleLand
* @property  int $winxp
* @property  int $top10PlacementTeamPerks
* @property  int $hits
* @property  int $itemsBackpacksUsed
* @property  int $killsLongshot
* @property  int $challengexp
* @property  int $mostKillsInAGame
* @property  int $longestFiringRangeBullseye
* @property  int $killsVehiclePassenger
* @property  int $activationCountCrane
* @property  int $tanborFudgelyInteractions
* @property  int $losses
* @property  int $vehicleScavengerWater
* @property  int $totalGamesPlayed
* @property  int $killsUnderwater
* @property  int $killsEnemyInVehicleAir
* @property  int $winsWithoutDown
* @property  int $totalShots
* @property  int $wlratio
* @property  int $destroyEquipment
* @property  int $killsEarly
* @property  int $characterQuestsCompleted
* @property  int $distanceTraveledWingsuitMiles
* @property  int $downs
* @property  int $top5FirstInventory
* @property  int $distanceTraveledVehicleWater
* @property  int $curWinStreak
* @property  int $vehicleEscapes
* @property  int $distanceTraveledVehicleLandMiles
* @property  int $vehicleScavengerAir
* @property  int $killsUnarmed
* @property  int $killsAfterDamage
* @property  int $top25PlacementPlayer
* @property  int $vehiclesDestroyed
* @property  int $vehicleUsedAll
* @property  int $killsZombie
* @property  int $winsFirst
* @property  int $killsAfterDamageUnarmed
* @property  int $vehicleLockExits
* @property  int $distanceTraveledVehicleAir
* @property  int $killsWhileStunned
* @property  int $kills
* @property  int $distanceTraveledVehicleAirMiles
* @property  int $vehiclesDestroyedOccupied
* @property  int $top10PlacementPlayer
* @property  int $top5Avenger
* @property  int $vehicleDamageOccupied
* @property  int $activationCountJukebox
* @property  int $distanceTraveledFoot
* @property  int $killsVehicleDriver
* @property  int $headshots
* @property  int $assists
* @property  int $itemsPaintCansCollected
* @property  int $ties
* @property  int $vehicleDamage
* @property  int $longestDistanceKill
* @property  int $distanceTraveledVehicleWaterMiles
* @property  int $vehiclesDestroyedOccupiedUsingVehicle
* @property  int $itemsNPaintCansCollected
* @property  int $maxFiringRangeBullseye
* @property  int $itemsArmorUsed
* @property  int $killsAvenged
* @property  int $winsWithoutKills
* @property  int $cargoSupplyOpened
* @property  int $vehicleScavengerLand
* @property  int $mostDamageInAGame
* @property  int $timePlayedAlive
* @property  int $squads3Eliminated
 */
abstract class BlackoutBaseStats extends BaseClass {
    public $killsRevenge;
    public $top10PlacementTeam;
    public $kdratio;
    public $killsUnderwaterEnemy;
    public $downsEliminatedTeam;
    public $ekia;
    public $score;
    public $distanceTraveledWingsuit;
    public $rank;
    public $deaths;
    public $frackingBlastDoorsOpened;
    public $killsEliminated;
    public $wins;
    public $itemsDropped;
    public $squads2Eliminated;
    public $winStreak;
    public $distanceTraveledVehicleLand;
    public $headshotDamage;
    public $top5PlacementPlayer;
    public $revives;
    public $activationCountBroadcast;
    public $rankxp;
    public $placementxp;
    public $killsWithoutDamage;
    public $downsEliminated;
    public $shots;
    public $killsAfterRevive;
    public $top10PlacementTeamNoCircleDamage;
    public $timePlayedTotal;
    public $killxp;
    public $killsLongshotSniper;
    public $top15PlacementTeam;
    public $top5PlacementTeam;
    public $killsEquipment;
    public $winsLastAlive;
    public $itemsPickedUp;
    public $totalDamage;
    public $plevel;
    public $killsEnemyInVehicleWater;
    public $squads4Eliminated;
    public $downsRevived;
    public $misses;
    public $squadsEliminatedUnassisted;
    public $basketsMade;
    public $hitsHeadshot;
    public $killStreak;
    public $itemsHealthUsed;
    public $killsEnemyInVehicleLand;
    public $winxp;
    public $top10PlacementTeamPerks;
    public $hits;
    public $itemsBackpacksUsed;
    public $killsLongshot;
    public $challengexp;
    public $mostKillsInAGame;
    public $longestFiringRangeBullseye;
    public $killsVehiclePassenger;
    public $activationCountCrane;
    public $tanborFudgelyInteractions;
    public $losses;
    public $vehicleScavengerWater;
    public $totalGamesPlayed;
    public $killsUnderwater;
    public $killsEnemyInVehicleAir;
    public $winsWithoutDown;
    public $totalShots;
    public $wlratio;
    public $destroyEquipment;
    public $killsEarly;
    public $characterQuestsCompleted;
    public $distanceTraveledWingsuitMiles;
    public $downs;
    public $top5FirstInventory;
    public $distanceTraveledVehicleWater;
    public $curWinStreak;
    public $vehicleEscapes;
    public $distanceTraveledVehicleLandMiles;
    public $vehicleScavengerAir;
    public $killsUnarmed;
    public $killsAfterDamage;
    public $top25PlacementPlayer;
    public $vehiclesDestroyed;
    public $vehicleUsedAll;
    public $killsZombie;
    public $winsFirst;
    public $killsAfterDamageUnarmed;
    public $vehicleLockExits;
    public $distanceTraveledVehicleAir;
    public $killsWhileStunned;
    public $kills;
    public $distanceTraveledVehicleAirMiles;
    public $vehiclesDestroyedOccupied;
    public $top10PlacementPlayer;
    public $top5Avenger;
    public $vehicleDamageOccupied;
    public $activationCountJukebox;
    public $distanceTraveledFoot;
    public $killsVehicleDriver;
    public $headshots;
    public $assists;
    public $itemsPaintCansCollected;
    public $ties;
    public $vehicleDamage;
    public $longestDistanceKill;
    public $distanceTraveledVehicleWaterMiles;
    public $vehiclesDestroyedOccupiedUsingVehicle;
    public $itemsNPaintCansCollected;
    public $maxFiringRangeBullseye;
    public $itemsArmorUsed;
    public $killsAvenged;
    public $winsWithoutKills;
    public $cargoSupplyOpened;
    public $vehicleScavengerLand;
    public $mostDamageInAGame;
    public $timePlayedAlive;
    public $squads3Eliminated;
}
