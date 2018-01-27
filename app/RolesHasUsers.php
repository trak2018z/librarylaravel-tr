<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolesHasUsers extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'user_id',
    ];

}
