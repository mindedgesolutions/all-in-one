<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public function mount()
    {

    }

    public function rules()
    {
        $rules = [];

        return $rules;
    }

    protected $validationAttributes = [

    ];

    protected $messages = [

    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
}
