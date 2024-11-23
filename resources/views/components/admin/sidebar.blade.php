<div :class="{ 'open': open, 'hidden': !open, 'lg:block': true }"
    class="sidebar lg:w-72 w-48 fixed inset-0 z-50 transition-transform duration-300 transform lg:transform-none bg-white shadow-xl min-h-screen overflow-auto">
    <div class="flex justify-between items-center px-4 py-6">
        <!-- Custom Dashboard Logo -->
        <h2 class="text-2xl font-semibold text-gray-800 flex items-center space-x-2">
            <i class="fas fa-tachometer-alt text-indigo-600"></i>
            <span>Dashboard</span>
        </h2>
        <button @click="open = !open" class="lg:hidden text-gray-800">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <nav>
        <ul>
            <!-- Sidebar Items -->
            <li>
                <div class="text-lg font-semibold text-gray-700 mb-2 px-4">Data Utama</div>
            </li>
            <li>
                <a href="{{ route('dashboard') }}"
                    class="block px-4 py-3 text-gray-800 rounded transition duration-300 my-1
                            {{ Route::is('dashboard') ? 'bg-indigo-600 text-white shadow-lg' : 'hover:bg-indigo-600 hover:text-white' }}">
                    <span class="inline-block p-2 rounded-full mr-3">
                        <i class="fas fa-tachometer-alt"></i>
                    </span> Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('users') }}"
                    class="block px-4 py-3 text-gray-800 rounded transition duration-300 my-1
                            {{ Route::is('users') ? 'bg-indigo-600 text-white shadow-lg' : 'hover:bg-indigo-600 hover:text-white' }}">
                    <span class="inline-block p-2 rounded-full mr-3">
                        <i class="fas fa-users"></i>
                    </span> Users
                </a>
            </li>
            <li>
                <a href="{{ route('settings') }}"
                    class="block px-4 py-3 text-gray-800 rounded transition duration-300 my-1
                            {{ Route::is('settings') ? 'bg-indigo-600 text-white shadow-lg' : 'hover:bg-indigo-600 hover:text-white' }}">
                    <span class="inline-block p-2 rounded-full mr-3">
                        <i class="fas fa-cogs"></i>
                    </span> Settings
                </a>
            </li>

            <li>
                <div class="text-lg font-semibold text-gray-700 mt-6 mb-2 px-4">Additional Features</div>
            </li>
            <!-- Dropdown Menu -->
            <li class="relative">
                <button @click="dropdownOpen = !dropdownOpen"
                    class="w-full text-gray-800 px-4 py-3 rounded my-1 transition duration-300 
                            hover:bg-indigo-600 hover:text-white flex justify-between items-center">
                    <span class="inline-block p-2 rounded-full mr-3">
                        <i class="fas fa-cogs"></i>
                    </span> More Options
                    <i class="fas fa-chevron-down transition-transform duration-300"
                        :class="{ 'rotate-180': dropdownOpen }"></i> <!-- Rotating Arrow -->
                </button>
                <!-- Dropdown Content -->
                <ul x-show="dropdownOpen" @click.away="dropdownOpen = false"
                    class="absolute left-0 bg-white shadow-xl rounded-lg mt-2 w-full z-10">
                    <li><a href="{{ route('reports') }}"
                            class="block px-4 py-3 text-gray-800 hover:bg-indigo-600 hover:text-white">Reports</a>
                    </li>
                    <li><a href="{{ route('analytics') }}"
                            class="block px-4 py-3 text-gray-800 hover:bg-indigo-600 hover:text-white">Analytics</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
