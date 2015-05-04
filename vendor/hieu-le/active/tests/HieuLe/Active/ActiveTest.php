<?php

class ActiveTest extends PHPUnit_Framework_TestCase
{

    public function tearDown()
    {
        Mockery::close();
    }

    public function testPatternMethod()
    {

        $route  = Mockery::mock('\Illuminate\Routing\Route');
        $route->shouldReceive('getUri')->times(4)->andReturn('foo/bar/baz');
        $router = Mockery::mock('\Illuminate\Routing\Router');
        $router->shouldReceive('current')->times(4)->andReturn($route);
        $active = new \HieuLe\Active\Active($router);
        $this->assertEquals('active', $active->pattern('foo/*'));
        $this->assertEquals('', $active->pattern('foo/'));
        $this->assertEquals('selected', $active->pattern('foo/*', 'selected'));
        $this->assertEquals('selected', $active->pattern(array('foo/*', '*bar/*'), 'selected'));
    }

    public function testRouteMethod()
    {
        $router = Mockery::mock('\Illuminate\Routing\Router');
        $router->shouldReceive('currentRouteName')->times(5)->andReturn('foo');
        $active = new \HieuLe\Active\Active($router);
        $this->assertEquals('active', $active->route('foo'));
        $this->assertEquals('selected', $active->route('foo', 'selected'));
        $this->assertEquals('active', $active->route(array('fooz', 'foo')));
        $this->assertEquals('', $active->route(array()));
        $this->assertEquals('', $active->route('bar'));
    }

    public function testRouteWithoutName()
    {
        $router = Mockery::mock('\Illuminate\Routing\Router');
        $router->shouldReceive('currentRouteName')->once()->andReturnNull();
        $active = new \HieuLe\Active\Active($router);
        $this->assertEquals('', $active->route('foo'));
    }

    public function testActionMethod()
    {
        $router = Mockery::mock('\Illuminate\Routing\Router');
        $router->shouldReceive('currentRouteAction')->times(3)->andReturn('fooController@bar');
        $active = new \HieuLe\Active\Active($router);
        $this->assertEquals('active', $active->action('fooController@bar'));
        $this->assertEquals('selected', $active->action(array('barController@baz', 'fooController@bar'), 'selected'));
        $this->assertEquals('', $active->action(array('barController@baz', 'fooController@baz'), 'selected'));

        $router->shouldReceive('currentRouteAction')->once()->andReturn(null);
        $active = new \HieuLe\Active\Active($router);
        $this->assertEquals('', $active->action(array('barController@baz', 'fooController@baz'), 'selected'));
    }

    /**
     * @dataProvider providerForTestGetControllerMethod
     */
    public function testGetControllerMethod($controller, $result)
    {
        $router = Mockery::mock('\Illuminate\Routing\Router');
        $router->shouldReceive('currentRouteAction')->once()->andReturn($controller);
        $active = new \HieuLe\Active\Active($router);
        $this->assertEquals($result, $active->getController());
    }

    /**
     * @dataProvider providerForTestGetMethodName
     */
    public function testGetMethodName($method, $result)
    {
        $router = Mockery::mock('\Illuminate\Routing\Router');
        $router->shouldReceive('currentRouteAction')->once()->andReturn("Foo@{$method}");
        $active = new \HieuLe\Active\Active($router);
        $this->assertEquals($result, $active->getMethod());
    }

    public function testControllerMethod()
    {
        $router = Mockery::mock('\Illuminate\Routing\Router');
        $router->shouldReceive('currentRouteAction')->between(5, 10)->andReturn('FooBarController@getBaz');
        $active = new \HieuLe\Active\Active($router);
        $this->assertEquals('', $active->controller('Foo'));
        $this->assertEquals('active', $active->controller('FooBar'));
        $this->assertEquals('selected', $active->controller('FooBar', 'selected'));
        $this->assertEquals('selected', $active->controller('FooBar', 'selected', array('Foo')));
        $this->assertEquals('', $active->controller('FooBar', 'selected', array('Foo', 'Baz')));
    }

    public function testControllersMethod()
    {
        $router = Mockery::mock('\Illuminate\Routing\Router');
        $router->shouldReceive('currentRouteAction')->twice()->andReturn('FooBarController@getBaz');
        $active = new \HieuLe\Active\Active($router);
        $this->assertEquals('active', $active->controllers(array('Foo', 'Bar', 'FooBar')));
        $this->assertEquals('', $active->controllers(array('Foo', 'Bar')));
    }
    
    public function testRoutePatternMethod()
    {
        $router = Mockery::mock('\Illuminate\Routing\Router');
        $router->shouldReceive('currentRouteName')->times(4)->andReturn('prefix.foo.create');
        $active = new HieuLe\Active\Active($router);
        $this->assertEquals('active', $active->routePattern('*.foo.*'));
        $this->assertEquals('', $active->routePattern('*.foo'));
        $this->assertEquals('selected', $active->routePattern('*.foo.*', 'selected'));
        $this->assertEquals('active', $active->routePattern('*.create'));
    }

    public function providerForTestGetControllerMethod()
    {
        return [
            ['FooController', 'Foo'],
            ['SomethingControllerBazController', 'SomethingControllerBaz'],
            ['BazControllerFoo', 'BazControllerFoo'],
        ];
    }
    
    public function providerForTestGetMethodName()
    {
        return [
            ['showWelcome', 'Welcome'],
            ['getFoo', 'Foo'],
            ['postFoo', 'Foo'],
            ['deleteBar', 'Bar'],
            ['putBar', 'Bar'],
            ['postFooBaz', 'FooBaz'],
            ['deleteFooget', 'Fooget'],
            ['doShowpost', 'doShowpost'],
            ['show', 'show']
        ];
    }

}
