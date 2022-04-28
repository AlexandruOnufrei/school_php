<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        $rule = isset($this-> student-> id)? ','. $this-> student-> id: null;

        return [
            'name' => 'required|min:5|max:25',
            'surname' => 'required|min:5|max:25',
            'email' =>'required|min:5|max:25|unique:users,email' . $rule,
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Eror404',
        'surname.required' => 'Eror404',
        'email.required' => 'Eror404',
        'min' => 'minimal length is 5', 
        
    ];
}
}