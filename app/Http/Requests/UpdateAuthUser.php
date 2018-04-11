<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Auth;
use Log;


class UpdateAuthUser extends FormRequest
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
        Log::debug('-------------------------- SCOPE: ' . $this->scope);
        if ($this->scope === 'profile') {
            return [
                'email' => Rule::unique('users')->ignore(Auth::user()->id, 'id'),
                'email' => 'required|email',
                'name' => 'required|alpha_dash',
                'surname' => 'required|alpha',
                'phone' => 'nullable|regex:/^\+?[\d]+[\d\-\ ]+\d+$/'
            ];
        } elseif ($this->scope === 'password') {
            return [
                'old_password' => 'required_with:password',
                'password' => 'required|confirmed'
            ];
        }
    }
}
