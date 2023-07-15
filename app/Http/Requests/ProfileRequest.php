<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $slugArray = explode('.', $this->slug);
        $id = $slugArray[1];
        $user = User::findOrFail($id);
        $hasAvatar = $user->getMedia('avatar')->last() ? true : false;

        $rules = [];

        $rules['fname'] = 'required|regex:/^[a-zA-Z]+$/|max:255';
        $rules['mname'] = 'nullable|regex:/^[a-zA-Z]+$/|max:255';
        $rules['lname'] = 'required|regex:/^[a-zA-Z]+$/|max:255';
        $rules['email'] = 'required|email|max:255|unique:users,email,'.$id;
        $rules['phone'] = 'required|numeric|digits:10|unique:users,phone,'.$id;
        $rules['addressLineOne'] = 'required|max:255';
        $rules['addressLineTwo'] = 'nullable|max:255|different:addressLineOne';
        $rules['dob'] = 'required|before:-18 years';

        if (!$hasAvatar){
            $rules['avatar'] = 'required|mimes:jpg,jpeg,png|max:2048';
        }
        return $rules;
    }

    public function attributes()
    {
        return [
            'fname' => 'first name',
            'mname' => 'middle name',
            'lname' => 'last name',
            'addressLineOne' => 'address line 1',
            'addressLineTwo' => 'address line 2',
            'dob' => 'D.O.B',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => ':Attribute is required',
            'phone.unique' => $this->phone. ' is already taken',
            'email.unique' => $this->email. ' is already taken',
        ];
    }
}
