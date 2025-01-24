<div id="menu"
    class="max-w-[640px] w-full fixed bottom-0 p-3 grid grid-cols-4 gap-2 bg-blue-300 shadow-lg transform -translate-x-1/2 left-1/2">
    <!-- Beranda -->
    <a wire:navigate href="{{ route('home') }}" title="Beranda"
        class="p-[14px_16px] flex flex-col items-center gap-[6px] rounded-lg 
    {{ request()->routeIs('home') ? 'bg-[#FF9933] text-white' : 'bg-white text-[#1E2037]' }} 
    shadow-md hover:bg-orange-500 hover:text-black hover:shadow-lg transition-all">
        <div class="flex shrink-0">
            <i class="fas fa-home"></i>
        </div>
        <span class="font-semibold text-[10px] lg:text-sm">Beranda</span>
    </a>


    <!-- Pengumuman -->
    <a wire:navigate href="" title=""
        class="p-[14px_16px] flex flex-col items-center gap-[6px] rounded-lg 
    {{ !request()->routeIs('home') ? 'bg-[#FF9933] text-white' : 'bg-white text-[#1E2037]' }} 
    shadow-md hover:bg-orange-500 hover:text-black hover:shadow-lg transition-all">
        <div class="flex shrink-0">
            <i class="fas fa-bullhorn"></i>
        </div>
        <span class="font-semibold text-[10px] lg:text-sm">Pengumuman</span>
    </a>


    <!-- Saran -->
    <a href="#program" title="Saran"
        class="p-[14px_16px] flex flex-col items-center gap-[6px] rounded-lg bg-white text-[#1E2037] shadow-md hover:bg-gray-100 hover:shadow-lg transition-all">
        <div class="flex shrink-0">
            <i class="fas fa-comments"></i>
        </div>
        <span class="font-semibold text-[10px] lg:text-sm">Saran</span>
    </a>

    <!-- Saran -->
    <a href="#program" title="Saran"
        class="p-[14px_16px] flex flex-col items-center gap-[6px] rounded-lg bg-white text-[#1E2037] shadow-md hover:bg-gray-100 hover:shadow-lg transition-all">
        <div class="flex shrink-0">
            <i class="fas fa-comments"></i>
        </div>
        <span class="font-semibold text-[10px] lg:text-sm">Saran</span>
    </a>

</div>
