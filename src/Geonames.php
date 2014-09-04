<?php
/**
 * Geonames.php file.
 *
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */
namespace spacedealer\geonames;

use yii\base\Component;

class Geonames extends Component
{

    /**
     * @var string Base url. You may use cloudfront as base url here.
     */
    public $baseUrl = 'http://api.geonames.org/';

    /**
     * @var string registered username. please register at http://www.geonames.org/login
     */
    public $username = 'demo';

    /**
     * @var string default language code
     */
    public $lang = 'en';

    /**
     * @var api\Geonames
     */
    protected $client;

    /**
     * @return api\Geonames
     */
    public function getClient()
    {
        if (!$this->client) {
            $this->client = new \spacedealer\geonames\api\Geonames(
                $this->username,
                $this->lang,
                $this->baseUrl
            );
        }
        return $this->client;
    }
} 