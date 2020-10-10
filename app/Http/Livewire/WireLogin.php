<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WireLogin extends Component
{
    public $user;
    public $pass;

    protected $rules = [
        'user' => 'required|min:8',
        'pass' => 'required|min:6'
    ];

    public function render()
    {
        return view('livewire.wire-login');
    }

    public function submit()
    {
        $this->validate();
    }
}
