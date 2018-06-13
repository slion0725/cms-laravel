<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Product;

/**
 * Class ProductTransformer.
 *
 * @package namespace App\Transformers;
 */
class ProductTransformer extends TransformerAbstract
{
    /**
     * Transform the Product entity.
     *
     * @param \App\Entities\Product $model
     *
     * @return array
     */
    public function transform(Product $model)
    {
        return [
            'id' => (int)$model->id,
            'name' => $model->name,
            'title' => $model->title,
            'price' => $model->price,
            'manual' => $model->manual,
            'image' => $model->image,
            'event_start' => $model->event_start,
            'event_end' => $model->event_end,
            'description' => $model->description,
            'spec' => $model->spec,
            'status' => (int)$model->status,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
