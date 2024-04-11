@props(['page'])
<nav class="bg-transparent flex border-gray-200 dark:bg-gray-900 fixed left-0 top-0">
  <div class="flex flex-wrap items-center justify-between">
    <div class="flex items-center lg:order-2">
      <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full lg:flex lg:justify-center lg:w-full" id="mobile-menu-2">
      <ul class="flex flex-col mt-4 font-medium lg:items-start lg:justify-around lg:space-y-8 lg:min-h-screen lg:pr-3 lg:pl-0 lg:mt-0 lg:bg-[#012E4A] p-1 rounded-r-3xl">
        <li class="lg:bg-white lg:px-1 lg:py-0.5 lg:rounded-r-3xl">
          <a href="{{ route('profile') }}" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:text-[#C4C4C4] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
            <img src="{{ asset('/images/SwiftGoalsMainLogo-removebg-preview.png') }}" class="h-6 sm:h-16" alt="SwiftGoals Logo" />
          </a>
        </li>
        <li @if ( $page=='pinned goals' ) class="lg:bg-white lg:w-full text-center lg:text-black lg:px-2.5 lg:py-1.5 lg:rounded-r-full relative group" @else class="lg:hover:bg-white lg:w-full text-center lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-r-full transition-all relative group" @endif>
          <a href="{{ route('pinned.goals') }}" class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">
            <i class="fa-solid fa-thumbtack fa-xl"></i>
          </a>
          <div class="absolute shadow-lg hidden group-hover:block bg-[#333] text-white font-semibold px-3 py-[6px] text-[13px] right-0 left-16 w-max top-0 rounded">
            Pinned Goals
          </div>
        </li>
        <li @if ( $page=='personal goals' ) class="lg:bg-white lg:w-full text-center lg:text-black lg:px-2.5 lg:py-1.5 lg:rounded-r-xl relative group" @else class="lg:hover:bg-white lg:w-full text-center lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-r-full transition-all relative group" @endif>
          <a href="{{ route('goal.index') }}" class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">
            <i class="fa-solid fa-bullseye fa-xl"></i>
          </a>
          <div class="absolute shadow-lg hidden group-hover:block bg-[#333] text-white font-semibold px-3 py-[6px] text-[13px] right-0 left-16 w-max top-0 rounded">
            Personal Goals
          </div>
        </li>
        <hr class="w-7 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
        <li class="lg:hover:bg-white lg:w-full text-center lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-r-full transition-all relative group">
          <a href="{{ route('home') }}" class="block py-2 pl-3 pr-4 bg-[#1C70EC] rounded lg:bg-transparent lg:hover:text-black lg:p-0 dark:text-white" aria-current="page">
            <i class="fa-solid fa-house fa-xl"></i>
          </a>
          <div class="absolute shadow-lg hidden group-hover:block bg-[#333] text-white font-semibold px-3 py-[6px] text-[13px] right-0 left-16 w-max top-0 rounded">
            Home
          </div>
        </li>
        <li class="lg:hover:bg-white lg:w-full text-center lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-r-full transition-all relative group">
          <a href="{{ route('explore') }}" class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">
            <i class="fa-solid fa-clone fa-xl"></i>
          </a>
          <div class="absolute shadow-lg hidden group-hover:block bg-[#333] text-white font-semibold px-3 py-[6px] text-[13px] right-0 left-16 w-max top-0 rounded">
            Templates
          </div>
        </li>
        <li class="lg:hover:bg-white lg:w-full lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-r-full transition-all relative group">
          <a href="{{ route('community') }}" class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="h-7 w-7 lg:fill-[#C4C4C4] lg:hover:fill-black mx-auto">
              <path d="M24,16v5c0,1.657-1.343,3-3,3h-5c-2.955,0-5.535-1.615-6.92-4.004l.04-.04c1.804-.138,3.499-.651,4.992-1.455l1.974,1.914c.392,.392,.905,.586,1.418,.586,.509,0,1.017-.191,1.399-.575l2.793-2.707c.396-.384,.406-1.018,.021-1.414s-1.018-.405-1.414-.021l-2.814,2.707-1.662-1.611c2.36-1.853,3.93-4.543,4.145-7.586,.017-.234,.01-.466,.012-.699l.013-.013c2.389,1.385,4.004,3.965,4.004,6.92Zm-15.862,2H3.661c-2.019,0-3.661-1.645-3.661-3.666v-5.038C0,4.589,3.823,.343,8.349,.023c2.615-.19,5.17,.769,7.014,2.612s2.798,4.402,2.613,7.016c-.33,4.682-4.652,8.349-9.839,8.349Zm2.112-4.75c0-.69-.56-1.25-1.25-1.25s-1.25,.56-1.25,1.25,.56,1.25,1.25,1.25,1.25-.56,1.25-1.25Zm1.703-6.785c-.213-1.212-1.208-2.206-2.417-2.417-.886-.161-1.783,.081-2.463,.653-.682,.572-1.072,1.41-1.072,2.299,0,.553,.448,1,1,1s1-.447,1-1c0-.297,.13-.576,.358-.767,.23-.193,.526-.271,.832-.216,.391,.068,.725,.401,.793,.793,.093,.531-.212,.907-.502,1.066-.443,.244-1.481,.815-1.481,2.123,0,.553,.448,1,1,1s1-.447,1-1c0-.053,0-.125,.447-.371,1.124-.621,1.729-1.892,1.506-3.164Z" />
            </svg>
          </a>
          <div class="absolute shadow-lg hidden group-hover:block bg-[#333] text-white font-semibold px-3 py-[6px] text-[13px] right-0 left-16 w-max top-0 rounded">
            Community
          </div>
        </li>
        <li class="lg:bg-white lg:px-2 lg:py-1.5 lg:rounded-r-xl lg:w-full">
          <a href="{{ route('profile') }}" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:text-[#C4C4C4] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
            <img class="rounded-full h-7 mx-auto" src="{{ asset('images/default_profile.png') }}" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>