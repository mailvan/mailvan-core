<?php


namespace Mailvan\Tests\Core\Request;


use Mailvan\Core\Request\RequestFactory;

class RequestFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RequestFactory
     */
    protected $factory;

    protected function setUp()
    {
        $this->factory = new RequestFactory();
    }


    /**
     * @test
     */
    public function shouldCreateRequest()
    {
        $request = $this->factory->createRequest([
            'service' => 'icontact',
            'params' => [],
            'command' => 'getLists'
        ]);

        $this->assertInstanceOf('Mailvan\Core\Request\RequestInterface', $request, 'Factory creates instance of RequestInterface.');
        $this->assertEquals('icontact', $request->getServiceName(), 'Service name is properly set.');
        $this->assertEquals('getLists', $request->getCommand(), 'Command name is properly set.');
        $this->assertEmpty($request->getArguments(), 'Arguments list should be empty.');
        $this->assertEmpty($request->getConnectionParams(), 'Connection parameters list should be empty.');

        $request = $this->factory->createRequest([
            'service' => 'icontact',
            'arguments' => ['username' => 'vasya@pupkin.name'],
            'command' => 'getLists'
        ]);

        $this->assertInstanceOf('Mailvan\Core\Request\RequestInterface', $request, 'Factory creates instance of RequestInterface.');
        $this->assertFalse($request->getConnectionParams(), 'If connection params is not set, method must return FALSE');
        $this->assertArrayHasKey('username', $request->getArguments(), 'Username argument is properly set.');
    }


    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You must provide service name to create request.
     * @test
     */
    public function shouldFailIfServiceIsNotProvided()
    {
        $this->factory->createRequest([]);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You must provide command name to create request.
     * @test
     */
    public function shouldFailIfCommandIsNotProvided()
    {
        $this->factory->createRequest(['service' => 'whatever']);
    }
}
 