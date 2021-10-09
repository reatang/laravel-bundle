<?php

namespace Reatang\LaravelBundle\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SomeController extends Controller
{
    public function index() {
        return trans('courier::Hello Laravel Bundle');
    }
}
