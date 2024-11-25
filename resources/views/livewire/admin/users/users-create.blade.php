<div class="bg-gradient-to-b from-gray-50 to-white p-8 rounded-xl shadow-lg">
    <h1 class="text-3xl font-extrabold text-gray-800 mb-6">Tambah User</h1>
    <form class="space-y-6">
        <!-- Input Name -->
        <div>
            <label for="form.name" class="block text-sm font-bold text-gray-600 mb-2">Name</label>
            <input type="text" id="form.name" wire:model="form.name" placeholder="Masukkan Name"
                class="block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-200" />
            @error('form.name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <!-- Input Email -->
        <div>
            <label for="form.email" class="block text-sm font-bold text-gray-600 mb-2">Email</label>
            <input type="email" id="form.email" wire:model="form.email" placeholder="Masukkan Email"
                class="block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-200" />
            @error('form.email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <!-- Input Password -->
        <div>
            <label for="form.password" class="block text-sm font-bold text-gray-600 mb-2">Password</label>
            <input type="password" id="form.password" wire:model="form.password" placeholder="Masukkan Password"
                class="block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-200" />
            @error('form.password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <!-- Tombol Aksi -->
        <div class="flex justify-end gap-4 ">
            <button type="button" wire:click="resetForm"
                class="text-gray-700 bg-gray-200 px-6 py-2 rounded-lg hover:bg-gray-300 transition-all duration-200 shadow-sm">
                Reset
            </button>
            <button wire:click.prevent="save()"
                class="text-white bg-blue-600 px-6 py-2 rounded-lg hover:bg-blue-600 transition-all duration-200 shadow-sm">
                Simpan
            </button>
        </div>
    </form>
</div>
