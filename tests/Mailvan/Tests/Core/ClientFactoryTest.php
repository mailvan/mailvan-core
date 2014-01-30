<?php

namespace Mailvan\Tests\Core;

use Mailvan\Core\ClientFactory;

/**
 * Class ClientFactoryTest
 * @package Mailvan\Test\Core
 *
 * @group Client
 * @covers \Mailvan\Core\ClientFactory
 */
class ClientFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldCreateFactoryWithDefaultConfig()
    {
        $factory = new ClientFactory();
    }
}
 