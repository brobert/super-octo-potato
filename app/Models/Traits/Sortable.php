<?php

namespace App\Models\Traits;


use Log;


trait Sortable {

    protected $sortDefault = 'id';

    protected $sortMap = array();

    public function getSort($sortName, $sortDir = 'asc')
    {
        $sortName = $sortName ?? $this->sortDefault;

        return array_has($this->sortMap, $sortName) ? data_get($this->sortMap, $sortName) : [];
    }
}