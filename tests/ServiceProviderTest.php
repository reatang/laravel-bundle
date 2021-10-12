<?php

namespace Reatang\LaravelBundle\Tests;

use Illuminate\Foundation\Application;
use Reatang\LaravelBundle\CommonServiceProvider;
use Reatang\LaravelBundle\Services\SomeService;

class ServiceProviderTest extends TestCase
{
    public function testService()
    {
        $app = new Application(__DIR__);

        $app->register(CommonServiceProvider::class);

        /** @var SomeService $service */
        $service = $app->get(SomeService::class);

        $data = $service->getData();

        $this->assertArrayHasKey('name', $data);
    }
}