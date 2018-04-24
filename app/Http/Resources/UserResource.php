<?php
namespace App\Http\Resources;

use Auth;
use App\Http\Resources\BasicResource;
use Illuminate\Http\Request;
use App\Models\User;
use Log;
class UserResource extends BasicResource {

    /**
     * Create UnitRepository instance.
     *
     * @param App\Models\Theme $theme
     * @return void
     */
    public function __construct(User $model) {
        $this->model = $model;
    }


    public function get_users_list(Request $request)
    {
        $query = $this->model;

        if (Auth::user()->type === 'admin') {
            $query = $query->whereIn('type', ['user', 'admin']);
        } elseif (Auth::user()->type === 'user') {
            $query = $query->where('id', '=', Auth::user()->id);
        }

        Log::debug('------------ SORT: '. $request->sort?: 'undefined');
        $query = $query->orderBy('surname', 'asc');
        $query = $query->orderBy('name', 'asc');
        return $query->paginate();
    }

}