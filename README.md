# A PHP Wrapper for the Call of Duty API
[![Total Downloads](https://poser.pugx.org/rkmaier/pubgapi/downloads)](https://packagist.org/packages/rkmaier/pubgapi)
[![License](https://poser.pugx.org/rkmaier/pubgapi/license)](https://packagist.org/packages/rkmaier/pubgapi)

## Installation 

` composer require mrgarymartin/cod-api-php `


### PHP

```php

require_once 'vendor/autoload.php'; 

$codApi = new \mrgarymartin\CODApi($data); 
$codApi->region('pc-eu')->players('rkmaier,molnarz,Istvan92,zuuup,Aigialeusz')->get());

// Get Profile Data
$data = $codApi->getBO4Profile($username, ['type' => 'blackout']);

// Get Blackout Matches Stats with time limits
$data =  $codApi->blackout->getRawBlackoutMatchesStats($username,"2018-12-10","2018-12-11");

// Get Raw Blackout Matches Stats
$data =  $codApi->blackout->getRawBlackoutMatchesStats($username);

// get Duo Blackout Stats
$data =  $codApi->blackout->getDuoBlackoutStats($username);

// get Quad Blackout Stats
$data =  $codApi->blackout->getQuadBlackoutStats($username);

// Get Solo Blackout Stats
$data =  $codApi->blackout->getSoloBlackoutStats($username);



```


## License

CODApi is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright 2018 Gary Martin
