<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
        // Let's get the route param by name to get the User object value
        $user = request()->route('employee');

        return [
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email,'.$user->id,
           
        ];
    }
}