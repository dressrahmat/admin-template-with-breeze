<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    #[On('refresh-data')]
    public function render()
    {
        $dataUser = User::latest()->paginate(6);
        return view('livewire.admin.users.users-table', compact('dataUser'));
    }
}