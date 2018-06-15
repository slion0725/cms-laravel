<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class ProductValidator.
 *
 * @package namespace App\Validators;
 */
class ProductValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'price' => 'required|max:255',
            'status' => 'required|boolean',
            'image' => 'nullable',
            'manual' => 'nullable',
            'event_start' => 'required|date_format:Y-m-d H:i:s',
            'event_end' => 'required|date_format:Y-m-d H:i:s|after_or_equal:event_start',
            'description' => 'nullable',
            'spec' => 'nullable'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'price' => 'required|max:255',
            'status' => 'required|boolean',
            'image' => 'nullable',
            'manual' => 'nullable',
            'event_start' => 'required|date_format:Y-m-d H:i:s',
            'event_end' => 'required|date_format:Y-m-d H:i:s|after_or_equal:event_start',
            'description' => 'nullable',
            'spec' => 'nullable'
        ],
    ];
}
