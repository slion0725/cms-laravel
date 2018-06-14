<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'price' => 'required|max:255',
            'status' => 'required|boolean',
            'manual' => 'nullable|mimes:pdf',
            'image.*' => 'nullable|image',
            'event_start' => 'required|date_format:Y-m-d',
            'event_end' => 'required|date_format:Y-m-d|after_or_equal:event_start',
            'description' => 'nullable',
            'spec' => 'nullable'
        ];
    }
}
