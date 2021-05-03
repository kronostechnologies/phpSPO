<?php

use Office365\PHP\Client\OutlookServices\OutlookClient;
use Office365\PHP\Client\Runtime\Auth\NetworkCredentialContext;



abstract class OutlookServicesTestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var OutlookClient
     */
    protected static $context;

    public static function setUpBeforeClass(): void
    {
        global $Settings;
        $authCtx = new NetworkCredentialContext($Settings["UserName"],$Settings["Password"]);
        self::$context = new OutlookClient($authCtx);
    }

    public static function tearDownAfterClass(): void
    {
        self::$context = NULL;
    }


}
