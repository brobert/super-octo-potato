<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Route;

class IndexController extends Controller
{

    public function __construct() {

    }

    public function index(Route $route, Request $request) {

//         dd($route);
//         $currentAction = $route->getController();
//         list($controller, $method) = explode('@', $currentAction);
//         $this­>cointrollerName= preg_replace('/.*\\\/', '', $controller);
//         $this­>actionName=preg_replace('/.*\\\/', '', $method);

        return view('index', [
            'user' => Auth::user(),
            'main_menu' => config('menu'),
        ]);
    }
}
