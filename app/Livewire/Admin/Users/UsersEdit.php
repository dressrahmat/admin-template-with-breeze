<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Livewire\Forms\UserForm;
use Illuminate\Support\Facades\DB;
use App\Livewire\Admin\Users\UsersTable;

class UsersEdit extends Component
{
    public UserForm $form;

    public $modalEdit = false;

    #[On('form-edit')]
    public function set_form(User $id)
    {
        $this->form->setForm($id);
        $this->modalEdit = true;
        
    }

    public function edit()
    {
        DB::beginTransaction();
        try {
            $simpan = $this->form->update();
            $this->dispatch('sweet-alert', icon: 'success', title: 'data berhasil diupdate');
            DB::commit();
        } catch (\Throwable $th) {
            $this->dispatch('modal-sweet-alert', icon: 'error', title: 'data gagal di hapus', text: $th->getMessage());
            DB::rollback();
        }

        $this->dispatch('refresh-data')->to(UsersTable::class);
    }
    public function render()
    {
        return view('livewire.admin.users.users-edit');
    }
}