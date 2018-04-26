<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Traits\AppResponse;
use Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, AppResponse;

    protected $request;

    protected $auth_user;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->stash['auth_user'] = Auth::user();
        $this->stash ['scope'] = $request->scope;
		$this->stash['query'] = $request->query();
    }
}
