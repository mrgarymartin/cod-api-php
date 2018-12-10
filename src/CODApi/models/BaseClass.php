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


class BaseClass
{
    static $__ClassName = __CLASS__;

    static function getClassName()
    {
        return static::$__ClassName;
    }

    public function __construct($argument)
    {
        foreach ($argument as $k => $value) {
            $this->{$k} = $value;
        }
        $this->init();

    }

    public function init(){}
}
