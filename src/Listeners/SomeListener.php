<?php

namespace Reatang\LaravelBundle\Listeners;


use Illuminate\Support\Facades\Log;
use Reatang\LaravelBundle\Events\SomeEvent;

class SomeListener
{

    public function handle(SomeEvent $event)
    {
        $data = $event->getData();

        Log::info('[Event] SomeEvent fire', $data);
    }
}