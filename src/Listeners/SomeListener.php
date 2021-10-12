<?php
/**
 * Created by PHPStorm.
 * User: tanglihao
 * Date: 2021/10/9
 * Time: 下午7:29
 */

namespace Reatang\LaravelBundle\Listeners;


use Illuminate\Support\Facades\Log;
use Reatang\LaravelBundle\Events\SomeEvent;

class SomeListener {

    public function handle(SomeEvent $event) {
        $data = $event->getData();

        Log::info('[Event] SomeEvent fire' . json_encode($data));
    }
}