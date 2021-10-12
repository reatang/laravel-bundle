<?php
/**
 * Created by PHPStorm.
 * User: tanglihao
 * Date: 2021/10/12
 * Time: 下午12:36
 */

namespace Reatang\LaravelBundle\Tests;

use Illuminate\Foundation\Application;
use Reatang\LaravelBundle\BundleServiceProvider;
use Reatang\LaravelBundle\CommonServiceProvider;
use Reatang\LaravelBundle\Services\SomeService;

class ServiceProviderTest extends TestCase
{
    public function testApp() {
        $app = new Application(__DIR__);

        $app->register(BundleServiceProvider::class);
        $app->register(CommonServiceProvider::class);

        /** @var SomeService $service */
        $service = $app->get(SomeService::class);

        $data = $service->getData();

        $this->assertArrayHasKey('name', $data);
    }
}