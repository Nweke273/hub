<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bootcampFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'program' => 'required',
            'state' => 'required',
            'country' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field must not be empty!',
            'email.required' => 'E-mail field must not be empty!',
            'email.email' => 'Input a valid e-mail address!',
            'phone.required' => 'Phone field must not be empty!',
            'program.required' => 'Program field must not be empty1',
            'state.required' => 'State  field must not be empty!',
            'country.required' => 'Country field must not be empty!',


        ];
    }
}
