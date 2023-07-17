<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use App\Models\UserType;
use App\Models\UserDetail;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterNew extends Component
{
    use WithFileUploads;

    public $iteration = 0;
    public $userTypeId, $roleName, $fname, $mname, $lname, $email, $phone, $addressLineOne, $addressLineTwo;
    public $dob, $dor, $salary, $password, $passwordConfirm, $avatar, $terms, $hasImage;
    public $notificationTitle, $notificationBody, $btnLabel;

    protected $listeners = [
        'resetFormFields' => 'resetFormFields',
    ];

    public function rules()
    {
        $rules = [];

        $rules['userTypeId'] = 'required';
        $rules['roleName'] = 'required';
        $rules['fname'] = 'required|regex:/^[a-zA-Z]+$/|max:255';
        $rules['mname'] = 'nullable|regex:/^[a-zA-Z]+$/|max:255';
        $rules['lname'] = 'required|regex:/^[a-zA-Z]+$/|max:255';
        $rules['email'] = 'required|email|max:255|unique:users,email';
        $rules['phone'] = 'required|numeric|digits:10|unique:users,phone';
        $rules['addressLineOne'] = 'required|max:255';
        $rules['addressLineTwo'] = 'nullable|max:255|different:addressLineOne';
        $rules['dob'] = 'required|before:-18 years';
        $rules['dor'] = 'required|after:today';
        $rules['salary'] = 'required|numeric';
        $rules['password'] = 'required|regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';
        $rules['passwordConfirm'] = 'required|same:password';
        $rules['avatar'] = 'required|mimes:jpg,jpeg,png|max:2048';
        $rules['terms'] = 'required';

        return $rules;
    }

    protected $validationAttributes = [
        'userTypeId' => 'user type',
        'addressLineOne' => 'address line 1',
        'addressLineTwo' => 'address line 2',
        'dob' => 'D.O.B',
        'dor' => 'Retirement date',
        'passwordConfirm' => 'password confirmation',
    ];

    protected $messages = [
        '*.required' => ':Attribute is required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function render()
    {
        $userTypes = UserType::orderBy('name')->get();
        $roles = Role::all();

        return view('livewire.auth.register-new', ['userTypes' => $userTypes, 'roles' => $roles]);
    }

    public function register()
    {
        $this->validate();

        if (!$this->terms) {
            return $this->addError('terms', 'You missed to check the terms and conditions');
        }

        DB::beginTransaction();

        try {
            $name = $this->fname . ' ' . $this->lname;

            $user = User::create([
                'name' => $name,
                'email' => $this->email,
                'phone' => $this->phone,
                'password' => Hash::make($this->password),
            ])->assignRole($this->roleName);

            UserDetail::create([
                'user_id' => $user->id,
                'user_type_id' => $this->userTypeId,
                'first_name' => $this->fname,
                'middle_name' => $this->mname != '' ? $this->mname : null,
                'last_name' => $this->lname,
                'address_line_1' => $this->addressLineOne,
                'address_line_2' => $this->addressLineTwo != '' ? $this->addressLineTwo : null,
                'dob' => $this->dob,
                'dor' => $this->dor,
                'salary' => $this->salary,
            ]);
            if ($this->avatar) {
                $user->addMedia($this->avatar->getRealPath())->toMediaCollection('avatar');
                $this->iteration++;
                $this->avatar = null;
            }

            DB::commit();

            $this->notificationTitle = 'Thank you for registering';
            $this->notificationBody = 'Thank you for registering';
            $this->btnLabel = 'Go to Dashboard';
            $this->dispatchBrowserEvent('open-notification-modal', ['id' => 'modal-success']);
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->notificationTitle = 'Error!!!';
            $this->notificationBody = 'Something went wrong! ' . $th->getMessage();
            $this->dispatchBrowserEvent('open-notification-modal', ['id' => 'modal-danger']);
        }
    }

    // Livewire modals and events start here ---------------*

    public function redirectUser()
    {
        $user = User::where(['email' => $this->email])->first();
        Auth::guard('web')->login($user, false);
        return redirect()->route('dashboard');
    }

    public function resetForm()
    {
        $this->dispatchBrowserEvent('form-reset', ['id' => 'modal-success']);
    }

    public function resetFormFields()
    {
        $this->reset();
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('modal-close-only', ['id' => 'modal-danger']);
    }

    // Livewire modals and events end here ---------------*
}
