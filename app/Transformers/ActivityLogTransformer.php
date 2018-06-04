<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\ActivityLog;

/**
 * Class ActivityLogTransformer.
 *
 * @package namespace App\Transformers;
 */
class ActivityLogTransformer extends TransformerAbstract
{
    /**
     * Transform the ActivityLog entity.
     *
     * @param \App\Entities\ActivityLog $model
     *
     * @return array
     */
    public function transform(ActivityLog $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
