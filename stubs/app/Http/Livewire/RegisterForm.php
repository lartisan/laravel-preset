<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public $name = 'John Doe';
    public $email = 'admin@example.com';
    public $password = 'password123';
    public $password_confirmation = 'password123';

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
