<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Log;


class UpdateUserRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        Log::debug(print_r($this->user()
            ->toArray(), TRUE));
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->scope === 'profile') {
            return [
                'email' => sprintf('required|email|unique:users,email,%s,id', $this->id),
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

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $this->session()
                ->flash('scope', $this->scope);
        });
    }
}
