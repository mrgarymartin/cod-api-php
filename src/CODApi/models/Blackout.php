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


use mrgarymartin\CODApi\CODApi;
use mrgarymartin\CODApi\models\Blackout\BlackoutMatchesData;

class Blackout extends CODApi
{

    /**
     * @param string $username
     *
     * @return AbstractModels\Blackout\BlackoutBaseStats
     * @throws \Exception
     */
    public function getSoloBlackoutStats(string $username) {
        $blackoutStats = $this->getRawBlackoutStats($username);
        return $blackoutStats->mp->lifetime->mode->warzone_solo;
    }

    /**
     * @param string $username
     *
     * @return Blackout\BlackoutOverall
     * @throws \Exception
     */
    public function getDuoBlackoutStats(string $username) {
        $blackoutStats = $this->getRawBlackoutStats($username);
        return $blackoutStats->mp->lifetime->mode->warzone_duo;
    }

    /**
     * @param string $username
     *
     * @return AbstractModels\Blackout\BlackoutBaseStats
     * @throws \Exception
     */
    public function getQuadBlackoutStats(string $username) {
        $blackoutStats = $this->getRawBlackoutStats($username);
        return $blackoutStats->mp->lifetime->mode->warzone_quad;
    }


    /**
     * @param string $username
     * @param array  $options
     *
     * @return Profile
     * @throws \Exception
     */
    public function getRawBlackoutStats(string $username, $options = [])
    {

        $options['type'] = 'blackout';
        $endpoint        = static::COD_ENDPOINT . 'platform/' . $this->platform . '/gamer/' . $username . '/profile';
        $response        = $this->client->get($endpoint, array(
            'query' => $options
        ));


        if ($response->getStatusCode() == 200) {
            $json       = $response->getBody()->getContents();
            $dataObject = json_decode($json);

            $profile = new Profile($dataObject->data);

            return $profile;
        } else {
            throw new \Exception("Error: Response code " . $response->getStatusCode());
        }
    }

    /**
     * @param string $username
     * @param int    $start
     * @param int    $end
     *
     * @return BlackoutMatchesData
     * @throws \Exception
     */
    public function getRawBlackoutMatchesStats($username, $start = 0, $end = 0)
    {
        $startTimestamp = 0;
        $endTimestamp   = 0;

        if ( ! empty($start)) {
            $startTimestamp = strtotime($start);
        }

        if ( ! empty($end)) {
            $endTimestamp = strtotime($end);
        }

        // Default time to 1 day prior
        if (empty($startTimestamp)) {
//            $startTimestamp = strtotime("-1 day");
            $startTimestamp = 0;
        }
        if (empty($endTimestamp)) {
//            $endTimestamp = strtotime("+1 day");
            $endTimestamp = 0;
        }

        $options['type'] = 'blackout';

        $endpoint = static::COD_ENDPOINT . "platform/{$this->platform}/gamer/{$username}/matches/warzone/start/{$startTimestamp}/end/{$endTimestamp}/details";

//        return ['base'=>$this->getBaseUri(),'endpoint'=>$endpoint];
        $response = $this->client->get($endpoint, array(
            'query' => $options
        ));

        if ($response->getStatusCode() == 200) {
            $json       = $response->getBody()->getContents();
            $dataObject = json_decode($json);

            return new BlackoutMatchesData($dataObject->data);

        } else {
            throw new \Exception("Error: Response code " . $response->getStatusCode());
        }
    }
}
