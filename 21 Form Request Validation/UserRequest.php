<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
        'email'=>'required|email',
        'age'=>'required|numeric|min:18',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         "name.required"=>'error'
    //     ];

    // }
    public function attributes()
    {
        return [
             'name'=>'Name',
        'email'=>'Email',
        'age'=>'Age',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
             'name'=> strtoupper($this-> name)

        ]);
    }
}
