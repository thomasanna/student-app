<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class LocationValidateRequest
 * @package App\Http\Requests
 */
class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        $id = $this->route('product');
        return [
            'name' => ['required'],
            'age' => 'required',
            'gender' => 'required',
            'reporting_teacher' => 'required'
        ];
    }

    /* Custom message for validation
    * @return array
    */
    public function messages()
    {
        return [
            'name.required' => 'Please enter student name',
            'age.required' => 'Please enter age',
            'gender.required' => 'Please enter gender',
            'reporting_teacher.required' => 'Please enter reporting teacher'
        ];
    }
}
