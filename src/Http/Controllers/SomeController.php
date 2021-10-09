<?php

namespace Reatang\LaravelBundle\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Reatang\LaravelBundle\Http\Requests\SomeRequest;

class SomeController extends Controller
{
    public function index(SomeRequest $request) {
        return view('bundle_name::index', [
            'title' => trans('bundle_name::message.Hello Laravel Bundle')
        ]);
    }
}
