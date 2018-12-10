<?php
/**
 * This is part of the cod-api-php project.
 *
 * @author      : Gary Martin
 * @date        : 2018-12-10
 * @email       : gmartin@mainline.gg
 * @domain      : https://www.mainline.gg
 * @copyright   : Mainline
 *
 */

namespace mrgarymartin\CODApi\models;



class Mp extends BaseClass
{
    public $lifetime;
    public $weekly;
    public $level;
    public $maxLevel;
    public $levelXpRemainder;
    public $levelXpGained;
    public $prestige;
    public $prestigeId;
    public $maxPrestig;

    public function __construct($argument)
    {
        parent::__construct($argument);
        $this->lifetime = new LifeTimeStats($argument->lifetime);
    }

}
