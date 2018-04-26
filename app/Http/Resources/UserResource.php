<?php

namespace App\Http\Resources;


use Auth;
use App\Http\Resources\BasicResource;
use Illuminate\Http\Request;
use App\Models\User;
use Log;


class UserResource extends BasicResource
{

    /**
     * Create UnitRepository instance.
     *
     * @param App\Models\Theme $theme
     * @return void
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function get_users_list(Request $request)
    {
        $query = $this->model;

        $reqQueries = $request->query();

        $types = [];
        if (Auth::user()->type === 'developer') {
            $types = array_merge($types, [
                'user',
                'admin',
                'developer'
            ]);
        } elseif (Auth::user()->type === 'admin') {
            $types = array_merge($types, [
                'user',
                'admin'
            ]);
        } else {
            $types = array_merge($types, [
                'user'
            ]);
            $query = $query->where('id', '=', Auth::user()->id);
        }

        $query = $query->whereIn('type', $types);

        $sortColumns = $this->model->getSort($request->sort);
        $sortDir = $request->dir ?? 'asc';
        foreach ( $sortColumns as $sortColumn ) {
            $query = $query->orderBy($sortColumn, $sortDir);
        }

        return $query->paginate();
    }

    public function get_user(Request $request, $id)
    {
        return $this->model->findOrFail($id);
    }

    public function delete_user(Request $request, $id)
    {
        $user = $this->model->findOrFail($id);
        $res = $user->delete();
        return $res;
    }
}