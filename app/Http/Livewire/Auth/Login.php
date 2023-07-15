<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $username, $field, $password, $captcha, $inputCaptcha, $captchaLength = 6, $rememberMe;

    public function mount()
    {
        $this->generateCaptcha();
    }

    public function rules()
    {
        $rules = [];
        $rules['username'] = 'required';
        $rules['password'] = 'required';
        $rules['inputCaptcha'] = 'required';
        return $rules;
    }

    protected $messages = [
        'inputCaptcha.required' => 'Enter the text shown in the box',
        '*.required' => ':Attribute is required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function generateCaptcha()
    {
        $string = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $this->captcha = substr(str_shuffle($string), 0, $this->captchaLength);
    }

    public function login()
    {
        $this->validate();
        if ($this->inputCaptcha !== $this->captcha){
            $this->generateCaptcha();
            return $this->addError('inputCaptcha', 'Incorrect captcha');
        }

        $this->field = is_numeric($this->username) ? 'phone' : 'email';

        $checkUsername = User::where($this->field, $this->username);

        if (!$checkUsername->exists()){
            $this->generateCaptcha();
            return $this->addError('username', 'User doesn\'t exist');
        }else{
            $user = $checkUsername->first();

            if (!Hash::check($this->password, $user->password)){
                $this->generateCaptcha();
                return $this->addError('password', 'Incorrect password');
            }else{
                $remember = $this->rememberMe == null || $this->rememberMe == false ? false : true;

                Auth::guard('web')->login($user, $remember);
                return redirect()->route('dashboard');
            }
        }
    }
}