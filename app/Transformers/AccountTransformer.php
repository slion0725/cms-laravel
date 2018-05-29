<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Account;

/**
 * Class AccountTransformer.
 *
 * @package namespace App\Transformers;
 */
class AccountTransformer extends TransformerAbstract
{
    /**
     * Transform the Account entity.
     *
     * @param \App\Entities\Account $model
     *
     * @return array
     */
    public function transform(Account $model)
    {
        return [
            'id' => (int)$model->id,
            'name' => $model->name,
            'email' => $model->email,
            'status' => $model->status == 1 ? 'On' : 'Off',
            'created_at' => (string)$model->created_at,
            'updated_at' => (string)$model->updated_at
        ];
    }
}
