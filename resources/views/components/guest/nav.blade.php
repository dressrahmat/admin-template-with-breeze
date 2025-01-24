<div class="header w-full max-w-[640px] fixed top-0 z-10 flex flex-col overflow-hidden shadow-md bg-white">
    <nav id="sticky-nav"
        class="py-5 px-3 flex justify-between items-center sticky top-0 bg-transparent transition-colors duration-300">
        <div class="flex items-center gap-[10px]">
            <a wire:navigate href="{{ route('home') }}" class="w-10 h-10 flex shrink-0 rounded-full bg-green-600 p-2">
                <img src="{{ asset('/assets/images/icons/back.svg') }}" alt="icon">
            </a>
        </div>
        <p class="font-semibold text-sm text-black">Halaman {{ $title ?? '' }}</p>
        <a href="" class="w-10 h-10 flex shrink-0 rounded-full bg-green-600 p-2">
            <img src="{{ asset('/assets/images/icons/menu-dot.svg') }}" alt="icon">
        </a>
    </nav>
</div>
