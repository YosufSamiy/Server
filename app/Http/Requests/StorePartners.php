<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartners extends FormRequest
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

            'name_ar' => 'required',
            'name_en' => 'required',
            'topic_ar' => 'required',
            'topic_en' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',

            // 'describe_ar' => 'required',
            // 'describe_en' => 'required',

            // 'Notes' => 'required',
            // 'Describe' => 'required',

            

        ];
    }
    public function messages()
{
    return [
        'Name.required' =>trans('validation.required'),
        'body.required' => 'A message is required',
    ];
}
}
