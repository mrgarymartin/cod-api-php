# A PHP Wrapper for the Call of Duty API
[![Total Downloads](https://poser.pugx.org/rkmaier/pubgapi/downloads)](https://packagist.org/packages/rkmaier/pubgapi)
[![License](https://poser.pugx.org/rkmaier/pubgapi/license)](https://packagist.org/packages/rkmaier/pubgapi)

## Installation 

` composer require mrgarymartin/cod-api-php `

###### Get API Status

```php
CODApi::status()
```

###### Set Region

```php
CODApi::region('pc-na')
```

###### Filter by Player Names

```php
CODApi::region('pc-na')->players('shroud')->get();
```

###### Get Player Info

```php
CODApi::region('pc-eu')->player('<PLAYER_ID>')->get();
```
```php
CODApi::region('pc-eu')->player('<PLAYER_NAME')->get();
```
###### Get Seasons

```php
CODApi::region('pc-eu')->seasons()->get();
```

###### Get Player Stats

```php
CODApi::region('pc-eu')->playerStats('<PLAYER_NAME')->get;
```



```php
CODApi::region('pc-eu')->playerStats('<PLAYER_NAME')->get(); // Current Season by default 
```

```php
CODApi::region('pc-eu')->playerStats('<PLAYER_NAME','SEASON_ID')->get;
```

```php
CODApi::region('pc-eu')->playerStats('<PLAYER_NAME')->stat('duo-fpp');
```

```php
CODApi::region('pc-eu')->playerStats('<PLAYER_NAME','<SEASON_ID>')->stat('duo-fpp');
```

###### Get Player Match IDs

```php
CODApi::region('pc-eu')->player('<PLAYER_NAME')->matches();
```


###### Filter by Match ID

```php
CODApi::region('pc-eu')->match('<MATCH_ID>')->get();
```

###### Pagination

```php
CODApi::region('pc-eu')->players('<PLAYER_ID1>','<PLAYER_ID2>','<PLAYER_ID3>')->limit(1)->offset(2)->get();
```


### PHP

```php

require_once 'vendor/autoload.php'; 

$codApi = new \mrgarymartin\CODApi($data); 
$codApi->region('pc-eu')->players('rkmaier,molnarz,Istvan92,zuuup,Aigialeusz')->get());

```


## License

CODApi is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright 2018 Gary Martin
