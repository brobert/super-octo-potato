<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Route;


class IndexController extends Controller
{

    public function index(Request $request)
    {
        if (Auth::user()->type === 'user') {
            return $this->index_user();
        } elseif (Auth::user()->type === 'admin') {
            return $this->index_admin();
        } elseif (Auth::user()->type === 'developer') {
            return $this->index_developer();
        }
    }

    private function index_user() {
        return $this->respond();
    }

    private function index_admin()
    {
        return $this->respond();
    }

    private function index_developer()
    {
        return $this->respond();
    }
}
