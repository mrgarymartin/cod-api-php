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



class Profile extends BaseClass
{
    public $title;
    public $platform;
    public $username;

    /** @var Mp */
    public $mp;

    public $zombies;

    public function __construct($argument)
    {
        parent::__construct($argument);
        $this->mp = new Mp($argument->mp);

    }

}
