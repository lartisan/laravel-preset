<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{
    public $email = 'admin@example.com';
    public $password = 'password123';

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
