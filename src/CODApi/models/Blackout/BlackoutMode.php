<?php

namespace mrgarymartin\CODApi\models\Blackout;

class BlackoutMode extends \mrgarymartin\CODApi\models\AbstractModels\Blackout\BlackoutMode
{

    public function init()
    {
        foreach (get_object_vars($this) as $k => $att) {
            $this->{$k} = new BlackoutBaseStats($att);
//                $this->{$k} = new BlackoutOverall($att);
        }
    }
}
