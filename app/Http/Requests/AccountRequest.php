<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_name' => 'required|alpha_num',
            'password' => 'required|min:4',
            'name' => 'required|alpha_num',
            'email' => 'required|alpha_num',
            'address' => 'required|alpha_num',
            'account_type_id' => 'required|alpha_num',
            'salary' => 'required|alpha_num',
            
        ];
    }
}
