<?php

namespace mrgarymartin\CODApi;

use GuzzleHttp\Client;
use mrgarymartin\CODApi\models\Profile;

class  CODApi {
    /** @var string  */
    const COD_BASE_URI = 'https://my.callofduty.com/api/papi-client/';
    const COD_ENDPOINT = 'crm/cod/v2/title/bo4/';

    //  'psn' | 'xbl' | 'battle';
    /** @var string  */
    public $platform = 'battle';

    /** @var array */
    public $headers;

    public  $days = 7; // amount of days (required for recent matches & summary),

    public  $type = "core"; // core, hc, arena

    public  $time = "monthly"; // alltime, monthly, weekly


    // career, war (Team Deathmatch), dm (Free-For-All), conf (Kill Confirmed), ctf (Capture The Flag), sd (Search & Destroy), dom (Domination), ball (Gridiron), hp (Hardpoint), 1v1, raid (War)
    public  $mode = "war";

    /** @var Client */
    protected $client;

    /** @var models\Blackout  */
    public   $blackout;

    /**
     * INIT Function
     */
    public function __construct(){
        $this->blackout = new models\Blackout();
        $this->getClient();
    }

    /**
     * Assigns the Client
     */
    public function getClient() {
        $this->client = new Client(['base_uri' => $this->getBaseUri()]);
    }

    /**
     * @return string
     */
    private function getBaseUri()
    {
        return self::COD_BASE_URI;
    }

    /**
     * @param string     $username
     * @param array|null $options
     *
     * @return Profile
     * @throws \Exception
     * https://my.callofduty.com/api/papi-client/crm/cod/v2/title/bo4/platform/battle/gamer/Tunerzedge%231114/profile
     */
    public function getBO4Profile(string $username, array $options = [])
    {
        $endpoint = static::COD_ENDPOINT . 'platform/' . $this->platform . '/gamer/' . $username . '/profile';
        $response = $this->client->get($endpoint, array(
            'query'   => $options
        ));


        if ($response->getStatusCode() == 200) {
            $json = $response->getBody()->getContents();
            $dataObject = json_decode($json);

            $profile = new Profile($dataObject->data);

            return $profile;
        } else {
            throw new \Exception("Error: Response code " . $response->getStatusCode());
        }

    }

}
