<?php 

namespace App\Http\Requests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserRequest extends Request
{   
    /**
     * get the validation rules that apply to the request
     * 
     * @return array
     */
    public function rules() 
    {
        if ($this->has('upload_avatar')) {
            return [
                'avatar' => 'required|mimes:jpeg,png,gif'
            ];
        }

        if ($this->has('old_password')) {
            $this->registerOldPasswordRule();
            $user = User::find($this->route('user'));

            return [
                'old_password' => "required|old_password:{$user->password}",
                'new_password' => 'required|confirmed',
                'new_password_confirmation' => 'required'
            ];
        }

        return [];
    }

    /**
     * get the validation messages that apply to the request
     * 
     * @return array
     */
    public function messages() 
    {
        return [
            'avatar.required' => 'An Avatar is required for your profile!'
        ];
    }

    /**
     * register the old password first to make a change
     * 
     * @param array
     */
    private function registerOldPasswordRule() 
    {
        Validator::extend('old_password', function (
            $attributes,
            $value,
            $parameters,
            $validator
        ) {
            return Hash::check($value, $parameters[0]);
        }, 'The old password does not match our records.');
    }
}