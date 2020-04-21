<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
