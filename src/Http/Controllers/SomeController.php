<?php

namespace Reatang\LaravelBundle\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Reatang\LaravelBundle\Http\Requests\SomeRequest;
use Reatang\LaravelBundle\Services\SomeService;

class SomeController extends Controller
{
    protected $service;

    public function __construct(SomeService $service) {
        $this->service = $service;
    }

    public function index(SomeRequest $request) {

        $data = $this->service->getData();

        return view('bundle_name::index', [
            'title' => trans('bundle_name::message.Hello Laravel Bundle', $data)
        ]);
    }
}
