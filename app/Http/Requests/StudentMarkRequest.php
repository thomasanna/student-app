<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class LocationValidateRequest
 * @package App\Http\Requests
 */
class StudentMarkRequest extends FormRequest
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
            'student_id' => ['required'],
            'maths' => ['required','integer','max:100'],
            'science' => ['required','integer','max:100'],
            'history' => ['required','integer','max:100'],
            'term' => 'required'
        ];
    }

    /* Custom message for validation
    * @return array
    */
    public function messages()
    {
        return [
            'student_id.required' => 'Please enter student name',
            'maths.required' => 'Please enter maths mark',
            'science.required' => 'Please enter science mark',
            'history.required' => 'Please enter history mark',
            'term.required' => 'Please enter term'
        ];
    }
}
