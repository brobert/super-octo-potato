<?php
if (! function_exists('getSortQuery')) {

    /**
     * description
     *
     * @param
     *
     * @return
     *
     */
    function get_sort_query($query, $name, $direction = 'asc')
    {
        $currentSortName = array_has($query, 'sort') ? array_get($query, 'sort') : false;

        if ($currentSortName === $name) {

            $nextDir = array_get($query, 'dir') === 'asc' ? 'desc' : 'asc';
        } else {

            $nextDir = $direction;
        }

        return array_merge($query, [
            'sort' => $name,
            'dir' => $nextDir

        ]);
    }
}
