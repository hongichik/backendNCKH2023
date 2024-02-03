<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;

class createHome extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(checkPermission('create_home'))
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
            'code'=>'digits:3',
        ];
    }
}
