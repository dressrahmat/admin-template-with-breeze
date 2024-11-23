<header class="navbar bg-white shadow-xl p-4 flex justify-between items-center">
    <button @click="open = !open" class="lg:hidden text-gray-800">
        <i class="fas fa-bars"></i>
    </button>
    <h1 class="text-lg font-semibold text-gray-800">Admin Dashboard</h1>
    <div class="flex items-center space-x-4">
        <span class="text-gray-600">Admin</span>
        <a href="#" class="text-gray-800 hover:text-indigo-600"><i class="fas fa-sign-out-alt"></i>
            Logout</a>
    </div>
</header>
