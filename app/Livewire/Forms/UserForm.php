<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Rule;

class UserForm extends Form
{
    public ?User $user;

    public $id;

    #[Rule('required|min:3', as: 'Name')]
    public $name;

    #[Rule('required|email|unique:users', as: 'Email')]
    public $email;

    #[Rule('required|min:8', as: 'Password')]
    public $password;


    public function setForm(User $user)
    {
        $this->user = $user;

        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
    }

    public function store()
    {
        User::create($this->except('user'));
        $this->reset();
    }

    public function update()
    {
        $this->user->update($this->except('user'));
    }
}