<?php
include_once('../vendor/autoload.php');

use mrgarymartin\CODApi\CODApi;

$username  = urlencode('shroud#1882');
$codApi = new CODApi();

/** @var \GuzzleHttp\Psr7\Response $response */

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





