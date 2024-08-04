<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
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
            'username'=> 'required',
            'useremail'=> 'required|email',
            'password'=> 'required|alpha_num:6',
            'userage'=> 'required|numeric|min:18',
            'usercity'=> 'required',
            
        ];
    }
    // public function messages(){ 
    //     return [ 
    //         'username.required'=> ':attribute  is required',
    //         'useremail.required'=> 'User Name is required',
    //         'useremail.email'=> 'Enter The Correct Email Address',
    //         'password.required'=> 'User password is required',
    //         'userage.required'=> 'User age is required',
    //         'userage.numerice'=> 'User age must be numeric',
    //         'userage.mi:18'=> 'User age must be 18',
    //         'usercity.required'=> 'User city is required',
    //     ];
    // }

    public function attributes(){ 
        return [ 
            'username'=> 'User Name',
            'useremail'=> 'User Email',
            'password'=> 'User Password',
            'userage'=> 'User Age',
            'usercity'=> 'User City',
        ];
    }

    protected function prepareForValidation():void
    { 
        $this->merge([ 
            // 'username'=>strtolower($this->username),
            'username'=> Str::slug($this->username),
        ]);
    }

    // protected $stopOnFirstFailure = true;
}
