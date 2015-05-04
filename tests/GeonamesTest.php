<?php
/**
 * GeonamesTest.php file.
 *
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2015 spacedealer GmbH
 */


namespace spacedealer\tests\geonames;

use spacedealer\geonames\Geonames;

/**
 * Class GeonamesTest
 * @package spacedealer\here\test
 */
class GeonamesTest extends TestCase
{
    /**
     * Stub yii2 mock app - we need support for yii app & di
     */
    static public function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::mockApplication();
    }

    /**
     * Clean up after test.
     * The application created with [[mockApplication]] will be destroyed.
     */
    static public function tearDownAfterClass()
    {
        self::destroyApplication();
    }

    /**
     *
     */
    public function testGetClient()
    {
        // init here component on runtime with default options
        \Yii::$app->set('geonames', Geonames::className());

        /** @var Geonames $geonames */
        $geonames = \Yii::$app->get('geonames');

        // get places client
        $client = $geonames->getClient();
        $this->assertInstanceOf('\spacedealer\geonames\api\Geonames', $client);
    }
}
