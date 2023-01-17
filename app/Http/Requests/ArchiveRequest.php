<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArchiveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }


    public function rules()
    {
        return [
            // 'name' => 'required|min:5|max:255'
            'title' => 'required|min:2|max:60',
            'description' => 'required|min:5|max:450000',
            'file' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }


    public function messages()
    {
            $rules =

            ['title.required' => 'archive name is required',
                'description.required' => 'archive description is required'];
            return $rules;

    }
}
