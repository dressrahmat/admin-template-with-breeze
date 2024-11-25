<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="col-span-2">
        @livewire('admin.users.users-table')
    </div>
    <div>
        @livewire('admin.users.users-create')
        @livewire('admin.users.users-edit')
    </div>
    <div>
        <x-sweet-alert />
        <x-modal-sweet-alert />
        <x-confirm-delete />
    </div>
</div>
