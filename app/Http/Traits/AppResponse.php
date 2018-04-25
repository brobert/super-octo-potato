<?php

namespace App\Http\Traits;


use Illuminate\Support\Facades\View;
use Auth;
use Faker;
use Log;
use App\Resources\MessageResource;


trait AppResponse {

    protected $stash = [];

    private $bread_crumbs = [
        [
            'name' => 'home'
        ]
    ];

    protected function respond($view = '')
    {
        Log::debug("AppResponse::_respond::request: " . $this->request->path() . '::' . $this->request->format());
        if ($this->request->format() === 'html') {
            $this->stash ['view'] = $view;
            $this->stash ['main_menu'] = config('menu');

            if (Auth::check()) {
                $this->stash ['auth_user'] = Auth::user();
                // $this->load_messages(new MessageResource());
            }

            $this->stash ['faker'] = Faker\Factory::create();

            $this->stash ['request'] = $this->request;

            $this->stash ['bread_crumbs'] = $this->bread_crumbs;

            // dump(Auth::user()->toArray());

            return view($this->get_view($view), $this->stash);
        }

        return $this->stash;
    }

    protected function _bad_request()
    {
    }

    protected function add_crumb($crumb)
    {
        $this->bread_crumbs [] = $crumb;
    }

    private function get_view(String $view_path = '')
    {
        if (! $view_path) {
            $caller = debug_backtrace() [2];
            $view_path_parts = array_slice(explode('\\', $caller ['class']), 3);
            $last = preg_replace([
                '/^Home/',
                '/Controller$/'
            ], '', array_pop($view_path_parts));
            if ($last !== '') {
                array_push($view_path_parts, $last);
            }
            array_push($view_path_parts, $caller ['function']);
            $view_path_tmp = strtolower(implode('.', $view_path_parts));

            $view_path = $view_path_tmp;
        }

        Log::debug("AppResponse::get_view: $view_path");
        if (View::exists($view_path)) {
            return $view_path;
        } else {
            return 'errors.404';
        }
    }
}