<?php

namespace Reatang\LaravelBundle\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SomeController extends Controller
{
    public function index() {
        return view('bundle_name::index', [
            'title' => trans('bundle_name::message.Hello Laravel Bundle')
        ]);
    }
}
