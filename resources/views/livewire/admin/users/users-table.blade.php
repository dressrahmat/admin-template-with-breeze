<div class="bg-gradient-to-b from-gray-50 to-white p-8 rounded-xl shadow-lg">
    <div class="pb-4">
        <h1 class="text-3xl font-extrabold text-gray-800 mb-4">Data User</h1>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full border-collapse overflow-hidden rounded-lg shadow-md">
            <!-- Header -->
            <thead class="bg-gradient-to-r from-indigo-600 to-blue-400 text-white">
                <tr>
                    <th class="px-6 py-4 text-left text-sm font-bold uppercase tracking-wide">Nomor</th>
                    <th class="px-6 py-4 text-left text-sm font-bold uppercase tracking-wide">Name</th>
                    <th class="px-6 py-4 text-left text-sm font-bold uppercase tracking-wide">Email</th>
                    <th class="px-6 py-4 text-center text-sm font-bold uppercase tracking-wide">Aksi</th>
                </tr>
            </thead>
            <!-- Body -->
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($dataUser as $user)
                    <tr class="hover:bg-gray-100 transition-colors duration-200">
                        <td class="px-6 py-4 text-sm text-gray-700">
                            {{ $dataUser->firstItem() + $loop->index }}
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800">
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $user->email }}</td>
                        <td class="px-6 py-4 text-center flex gap-1">
                            <button
                                class="text-white bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600 transition-all duration-200 shadow-sm"
                                @click="$dispatch('form-edit', { id: '{{ $user->id }}' })"
                                wire:key="{{ $user->id }}" type="button">
                                <i class="fas fa-edit text-base"></i>
                            </button>
                            <button
                                class="text-white bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600 transition-all duration-200 shadow-sm"
                                @click="$dispatch('confirm-delete', { get_id: '{{ $user->id }}', data: '{{ $user->name }}' })">
                                <i class="fas fa-trash-alt text-base"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            Data masih kosong
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $dataUser->links() }}
    </div>
</div>
