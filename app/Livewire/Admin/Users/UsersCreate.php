<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;
use App\Livewire\Forms\UserForm;
use Illuminate\Support\Facades\DB;
use App\Livewire\Admin\Users\UsersTable;

class UsersCreate extends Component
{
    public UserForm $form;

    public function save()
    {
        $this->validate();

        DB::beginTransaction();
        try {
            $simpan = $this->form->store();
            $this->dispatch('sweet-alert', icon: 'success', title: 'Data berhasil disimpan');
            DB::commit();
        } catch (\Throwable $th) {
            $this->dispatch('modal-sweet-alert', icon: 'error', title: 'Data gagal di hapus', text: $th->getMessage());
            DB::rollback();
        }

        $this->dispatch('refresh-data')->to(UsersTable::class);
    }
    
    public function render()
    {
        return view('livewire.admin.users.users-create');
    }
}