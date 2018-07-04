<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Account.
 *
 * @package namespace App\Entities;
 */
class Account extends Model implements Transformable
{
    use TransformableTrait;
    use LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'status', 'avater'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static $logAttributes = ['id', 'name', 'email', 'password', 'status', 'avater', 'created_at', 'updated_at'];

    protected $table = 'users';
}
