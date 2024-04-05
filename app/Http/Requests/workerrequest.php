<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class workerrequest extends FormRequest
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

    //apply validation in this rules function 
    public function rules(): array
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'password' => 'required',
        ];
    }
    // apply validation in a messages in public function message

    // public function messages()
    // {

    //     return [

    //         "firstname.required" => 'please :attribute!',
    //         "lastname.required" => 'please enter the last name!',
    //         "email.required" => 'please enter the email name!',
    //         "email.email" => 'enter the email with corrext formet!',
    //         "city.required" => 'please enter the city name!',
    //         "password.required" => 'please enter the password!',

    //     ];
    // }

// applying attribute
    public function attributes()
    {
        return [
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'email' => 'E-mail',
            'city' => 'City Name',
            'password' => 'Password',
        ];

    }

    protected $stopOnFirstFailure=true;

}
