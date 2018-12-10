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



use mrgarymartin\CODApi\models\Blackout\BlackoutMap;
use mrgarymartin\CODApi\models\Blackout\BlackoutMode;
use mrgarymartin\CODApi\models\Blackout\BlackoutOverall;

class LifeTimeStats extends BaseClass
{
    /** @var BlackoutOverall */
    public $all;

    /** @var BlackoutMode */
    public $mode;

    /** @var BlackoutMap */
    public $map;

    public function init(){

        foreach (get_object_vars($this)  as $k => $att) {

            if($k == 'all') {
                $this->{$k} = new BlackoutOverall($att);
            }
            if ($k == 'mode') {
                $this->{$k} = new BlackoutMode($att);
            }

        }
    }
}
