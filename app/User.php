<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// spatie/laravel-activitylog
use Spatie\Activitylog\Traits\LogsActivity;
// spatie/laravel-permission
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    // spatie/laravel-activitylog
    use LogsActivity;
    // spatie/laravel-permission
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avater'
    ];

    protected static $logAttributes = ['id', 'name', 'email', 'avater', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
