<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class AccountValidator.
 *
 * @package namespace App\Validators;
 */
class AccountValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required',
            'status' => 'required|boolean',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'nullable',
            'status' => 'required|boolean',
        ],
    ];
}
