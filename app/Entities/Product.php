<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\Activitylog\Traits\LogsActivity;
/**
 * Class Product.
 *
 * @package namespace App\Entities;
 */
class Product extends Model implements Transformable
{
    use TransformableTrait;
    use LogsActivity;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'title',
        'price',
        'image',
        'manual',
        'event_start',
        'event_end',
        'description',
        'spec',
        'status',
    ];

    protected static $logAttributes = [
        'id',
        'name',
        'title',
        'price',
        'image',
        'manual',
        'event_start',
        'event_end',
        'description',
        'spec',
        'status',
        'created_at',
        'updated_at'
    ];

}
