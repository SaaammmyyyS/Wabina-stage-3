<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="/" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img href="#" class="h-20 w-auto" src="{{ asset('images/sysdev-logo.png') }}" alt="">
        </a>
      </div>

      <div class="hidden lg:flex lg:gap-x-12">
        <a href="{{route('favorite')}}" class="text-sm font-semibold leading-6 text-gray-900">Favorite Language</a>
        <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">


        <div class="flex items-center space-x-4">
          <img class="w-10 h-10 rounded-full" src="{{ asset('images/avatar-logo.png') }}" alt="">
          <div class="font-medium dark:text-white">
              <div class="text-black text-sm">Dylan Hudson</div>
              <div class="text-sm text-gray-500 dark:text-gray-400">Joined in August 2023</div>
          </div>
        </div>
      </div>
    </nav>

    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-10"></div>
      <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
</header>