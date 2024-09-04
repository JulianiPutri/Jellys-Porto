<nav class="bg-orange-800 flex items-center" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-orange-900 text-white", Default: "text-orange-300 hover:bg-orange-700 hover:text-white" -->
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/posts" :active="request()->is('posts')">Portofolio</x-nav-link>
              <x-nav-link href="/about" :active="request()->is('about')">About Me</x-nav-link>
              
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-orange-800 p-2 text-orange-400 hover:bg-orange-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg  :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg   :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-orange-900 text-white", Default: "text-orange-300 hover:bg-orange-700 hover:text-white" -->
        {{-- <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/posts" :active="request()->is('posts')">Portofolio</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link> --}}
        <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-orange-300 hover:bg-orange-700 hover:text-white">Home</a>
        <a href="/posts" class="block rounded-md px-3 py-2 text-base font-medium text-orange-300 hover:bg-orange-700 hover:text-white">Portofolio</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-orange-300 hover:bg-orange-700 hover:text-white">About Me</a>
       
      </div>
    </div>
</nav>