<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MatchOldPassword implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (Auth::guard('$gurad')->check()) {
            if(Auth()->user()->hasRole('superadmin')){
            return Hash::check($value, Auth()->user()->hasRole('superadmin')->password);
        }elseif(Auth()->user()->hasRole('admin')){
            return Hash::check($value, Auth()->user()->hasRole('admin')->password);
        }elseif(Auth()->user()->hasRole('user')){
            return Hash::check($value, Auth()->user()->hasRole('user')->password);

        }
    }
}

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        // return 'The validation error message.';
        return 'The :attribute is match with old password.';
    }
}
