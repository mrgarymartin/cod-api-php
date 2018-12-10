<?php

namespace mrgarymartin\CODApi\models\Blackout;

class BlackoutMatch extends \mrgarymartin\CODApi\models\AbstractModels\Blackout\BlackoutMatch
{
    public function init()
    {

        foreach (get_object_vars($this) as $k => $att) {

            if ($k == 'playerStats') {

                $this->{$k} = new BlackoutPlayerStats($att);
            }
        }
    }
}
