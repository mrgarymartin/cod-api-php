<?php

namespace mrgarymartin\CODApi\models\Blackout;

class BlackoutMatchesData extends \mrgarymartin\CODApi\models\AbstractModels\Blackout\BlackoutMatchesData
{
    public function init()
    {

        foreach (get_object_vars($this) as $k => $att) {

            if ($k == 'summary') {
                try {
                    foreach ($this->{$k} as $key => $values) {
                        $this->{$k}->$key = new BlackoutPlayerStats($values);
                    }
                } catch (\Exception $exception ) {
                    log($exception->getMessage());
                }

            }
            // todo figure out how to assign matches
            if ($k == 'matches') {

                foreach ($this->{$k} as $key => $values) {
                    $this->{$k}[$key] = new BlackoutMatch($values);
                }
            }
        }
    }

}
