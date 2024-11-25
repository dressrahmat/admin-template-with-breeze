<div>
    <!-- Modal -->
    <div x-data="{ open: @entangle('modalEdit').live }" x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50" style="display: none;">

        <!-- Modal Content -->
        <div
            class="bg-white w-full sm:w-96 md:w-1/3 rounded-lg shadow-xl p-6 transform transition-all ease-out duration-300">
            <!-- Header -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-800">Edit Data User</h2>
                <button @click="open = false" class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Form -->
            <form wire:submit.prevent="edit">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">Nama</label>
                    <input type="text" id="name" wire:model="form.name"
                        class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @error('form.name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" id="email" wire:model="form.email"
                        class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @error('form.email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Footer -->
                <div class="flex justify-end space-x-4">
                    <button type="button" @click="open = false"
                        class="bg-gray-400 text-white px-4 py-2 rounded-md hover:bg-gray-500 transition-all duration-300">
                        Batal
                    </button>
                    <button type="submit"
                        class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 transition-all duration-300">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
