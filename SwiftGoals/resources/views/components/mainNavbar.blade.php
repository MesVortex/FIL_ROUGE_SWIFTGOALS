<nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
  <div class="flex justify-center">
    <a href="#" class="flex items-center mx-auto">
      <img src="{{ asset('/images/SwiftGoalsMainLogo-removebg-preview.png') }}" class="h-6 mr-3 sm:h-16" alt="SwiftGoals Logo" />
      <span class="self-center text-2xl font-bold whitespace-nowrap text-[#012E4A] dark:text-white">SwiftGoals</span>
    </a>
  </div>
  <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
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
        <li class="lg:bg-white lg:px-2.5 lg:py-1.5 lg:rounded-full">
          <a href="#" class="block py-2 pl-3 pr-4 text-white bg-[#1C70EC] rounded lg:bg-transparent lg:text-black lg:p-0 dark:text-white" aria-current="page">Home</a>
        </li>
        <li class="lg:hover:bg-white lg:hover:px-2.5 lg:hover:py-1.5 lg:hover:rounded-full transition-all">
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:text-[#C4C4C4] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">Goals</a>
        </li>
        <li class="lg:hover:bg-white lg:hover:px-2.5 lg:hover:py-1.5 lg:hover:rounded-full transition-all">
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:text-[#C4C4C4] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">Templates</a>
        </li>
        <li class="lg:hover:bg-white lg:hover:px-2.5 lg:hover:py-1.5 lg:hover:rounded-full transition-all">
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:text-[#C4C4C4] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">Community</a>
        </li>
        <li class="lg:bg-white lg:px-4 lg:py-1.5 lg:rounded-full">
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:text-[#C4C4C4] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
            <img class="rounded-full h-6" src="{{ asset('images/default_profile.png') }}" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>