<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Sortable;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use Notifiable, SoftDeletes, Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'valid_from',
        'valid_to',
        'password',
        'type',
        'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    public function __construct()
    {
        parent::__construct();

        $this->sortMap = array(
            'name' => [
                'surname',
                'name'
            ],
            'email' => [
                'email'
            ],
            'create' => [
                'created_at'
            ]
        );

        $this->sortDefault = 'name';
    }

    public function full_name()
    {
        return sprintf('%s %s', $this->surname, $this->name);
    }
}
