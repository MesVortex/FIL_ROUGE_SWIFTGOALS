@props(['page'])
<nav class="bg-transparent border-gray-200 dark:bg-gray-900">  
  <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto h-auto">
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
    <div class="items-center justify-between hidden w-full lg:flex lg:justify-center lg:my-5 lg:w-full lg:order-1" id="mobile-menu-2">
      <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:items-center lg:space-x-8 lg:mt-0 lg:bg-[#012E4A] p-1 rounded-full">
        <li @if ($page === 'home') class="lg:bg-white lg:text-black lg:px-2.5 lg:py-1.5 lg:rounded-full" @else class="lg:hover:bg-white lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:ml-3 lg:hover:ml-0 lg:hover:rounded-full transition-all" @endif>
          <a href="{{ route('home') }}" class="block py-2 pl-3 pr-4 bg-[#1C70EC] rounded lg:bg-transparent lg:hover:text-black lg:p-0 dark:text-white" aria-current="page">Home</a>
        </li>
        <li @if ($page === 'goals') class="lg:bg-white lg:text-black lg:px-2.5 lg:py-1.5 lg:rounded-full" @else class="lg:hover:bg-white lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-full transition-all" @endif>
          <a href="{{ route('goal.index') }}" class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">Goals</a>
        </li>
        <li @if ($page === 'explore') class="lg:bg-white lg:text-black lg:px-2.5 lg:py-1.5 lg:rounded-full" @else class="lg:hover:bg-white lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-full transition-all" @endif>
          <a href="{{ route('explore') }}" class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">Templates</a>
        </li>
        <li @if ($page === 'community') class="lg:bg-white lg:text-black lg:px-2.5 lg:py-1.5 lg:rounded-full" @else class="lg:hover:bg-white lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-full transition-all" @endif>
          <a href="{{ route('community') }}" class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">Community</a>
        </li>
        @if($page === 'explore' || $page === 'community')
        <li class="">
          <div class=" relative mx-auto text-gray-600">
            <input class="border-2 border-white border-opacity-20 bg-[#0F55E8] bg-opacity-10 h-9 px-10 pr-40 rounded-full text-sm focus:outline-none" type="search" name="search" placeholder="Search">
            <button type="submit" class="absolute left-0 top-0 mt-2.5 ml-4">
              <svg class="text-[#C4C4C4] h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
              </svg>
            </button>
          </div>
        </li>
        @endif
        <li class="lg:bg-white lg:px-4 lg:py-1.5 lg:rounded-full">
          <a href="{{ route('profile') }}" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:text-[#C4C4C4] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
            <img class="rounded-full h-6" src="{{ asset('images/default_profile.png') }}" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>