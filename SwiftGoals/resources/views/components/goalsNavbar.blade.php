@props(['page'])
<nav class="bg-transparent flex border-gray-200 dark:bg-gray-900 fixed left-0 top-0">
    <div class="flex flex-wrap items-center justify-between">
        <div class="flex items-center lg:order-2">
            <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full lg:flex lg:justify-center lg:w-full" id="mobile-menu-2">
            <ul
                class="flex flex-col mt-4 font-medium lg:items-start lg:justify-around lg:space-y-8 lg:min-h-screen lg:pr-3 lg:pl-0 lg:mt-0 lg:bg-[#012E4A] p-1 rounded-r-3xl">
                <li class="lg:bg-white lg:px-1 lg:py-0.5 lg:rounded-r-3xl">
                    <a href="{{ route('profile') }}"
                        class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:text-[#C4C4C4] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                        <img src="{{ asset('/images/SwiftGoalsMainLogo-removebg-preview.png') }}" class="h-6 sm:h-16"
                            alt="SwiftGoals Logo" />
                    </a>
                </li>
                <li
                    @if ($page == 'Your Templates') class="lg:bg-white lg:w-full text-center lg:text-black lg:px-2.5 lg:py-1.5 lg:rounded-r-full relative group" @else class="lg:hover:bg-white lg:w-full text-center lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-r-full transition-all relative group" @endif>
                    <a href="{{ route('user.templates') }}"
                        class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">
                        <svg class="text-[#C4C4C4] group-hover:text-black mx-auto" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" width="28" height="28" color="#000000" fill="none">
                            <path
                                d="M16.5956 20.6989L14.1508 21.3462C11.8879 21.9453 10.7564 22.2448 9.86986 21.7542C8.98333 21.2636 8.68795 20.1744 8.09718 17.996L6.63512 12.6048C6.04436 10.4264 5.74898 9.33725 6.26846 8.4744C6.78794 7.61155 7.91941 7.312 10.1824 6.7129L14.1827 5.65384C16.4457 5.05474 17.5771 4.75519 18.4637 5.2458C19.3502 5.73642 19.6456 6.82561 20.2363 9.00398L21.7042 14.4166C21.9554 15.343 22.0811 15.8062 21.943 16.2417M16.5956 20.6989C17.3477 20.4998 17.3537 20.4966 17.9386 19.9948L20.6824 17.6404C21.4308 16.9983 21.805 16.6772 21.943 16.2417M16.5956 20.6989C16.5956 20.6989 17.1837 16.1058 18.5 15.5C19.9932 14.8128 21.943 16.2417 21.943 16.2417"
                                stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            <path
                                d="M17 5.00118C16.9356 3.92779 16.7573 3.2521 16.2484 2.76762C15.4689 2.02553 14.218 2.02184 11.716 2.01444L7.29321 2.00137C4.79129 1.99398 3.54033 1.99028 2.76535 2.72777C1.99037 3.46526 1.99402 4.65592 2.00132 7.03725L2.01938 12.9307C2.02668 15.3121 2.03033 16.5027 2.80984 17.2448C3.58935 17.9869 4.84031 17.9906 7.34224 17.998L8.02306 18"
                                stroke="currentColor" stroke-width="2" />
                        </svg>
                    </a>
                    <div
                        class="absolute shadow-lg hidden group-hover:block bg-[#333] text-white font-semibold px-3 py-[6px] text-[13px] right-0 left-16 w-max top-0 rounded">
                        Your Templates
                    </div>
                </li>
                <li
                    @if ($page == 'personal goals') class="lg:bg-white lg:w-full text-center lg:text-black lg:px-2.5 lg:py-1.5 lg:rounded-r-xl relative group" @else class="lg:hover:bg-white lg:w-full text-center lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-r-full transition-all relative group" @endif>
                    <a href="{{ route('goal.index') }}"
                        class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">
                        <i class="fa-solid fa-bullseye fa-xl"></i>
                    </a>
                    <div
                        class="absolute shadow-lg hidden group-hover:block bg-[#333] text-white font-semibold px-3 py-[6px] text-[13px] right-0 left-16 w-max top-0 rounded">
                        Personal Goals
                    </div>
                </li>
                <hr class="w-7 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                <li
                    class="lg:hover:bg-white lg:w-full text-center lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-r-full transition-all relative group">
                    <a href="{{ route('home') }}"
                        class="block py-2 pl-3 pr-4 bg-[#1C70EC] rounded lg:bg-transparent lg:hover:text-black lg:p-0 dark:text-white"
                        aria-current="page">
                        <svg class="text-[#C4C4C4] group-hover:text-black mx-auto" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" width="28" height="28" color="#000000" fill="none">
                            <path
                                d="M9.06165 4.82633L3.23911 9.92134C2.7398 10.3583 3.07458 11.1343 3.76238 11.1343C4.18259 11.1343 4.52324 11.4489 4.52324 11.8371V15.0806C4.52324 17.871 4.52324 19.2662 5.46176 20.1331C6.40029 21 7.91082 21 10.9319 21H13.0681C16.0892 21 17.5997 21 18.5382 20.1331C19.4768 19.2662 19.4768 17.871 19.4768 15.0806V11.8371C19.4768 11.4489 19.8174 11.1343 20.2376 11.1343C20.9254 11.1343 21.2602 10.3583 20.7609 9.92134L14.9383 4.82633C13.5469 3.60878 12.8512 3 12 3C11.1488 3 10.4531 3.60878 9.06165 4.82633Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 16H12.009" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                    <div
                        class="absolute shadow-lg hidden group-hover:block bg-[#333] text-white font-semibold px-3 py-[6px] text-[13px] right-0 left-16 w-max top-0 rounded">
                        Home
                    </div>
                </li>
                <li
                    class="lg:hover:bg-white lg:w-full text-center lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-r-full transition-all relative group">
                    <a href="{{ route('explore') }}"
                        class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">
                        <svg class="text-[#C4C4C4] group-hover:text-black mx-auto" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" width="28" height="28" color="#000000" fill="none">
                            <path
                                d="M12.4014 8.29796L15.3213 7.32465C16.2075 7.02924 16.6507 6.88153 16.8846 7.11544C17.1185 7.34935 16.9708 7.79247 16.6753 8.67871L15.702 11.5986C15.1986 13.1088 14.9469 13.8639 14.4054 14.4054C13.8639 14.9469 13.1088 15.1986 11.5986 15.702L8.67871 16.6753C7.79247 16.9708 7.34935 17.1185 7.11544 16.8846C6.88153 16.6507 7.02924 16.2075 7.32465 15.3213L8.29796 12.4014C8.80136 10.8912 9.05306 10.1361 9.59457 9.59457C10.1361 9.05306 10.8912 8.80136 12.4014 8.29796Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 12L11.9936 12.0064" stroke="currentColor" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <div
                        class="absolute shadow-lg hidden group-hover:block bg-[#333] text-white font-semibold px-3 py-[6px] text-[13px] right-0 left-16 w-max top-0 rounded">
                        Explore Templates
                    </div>
                </li>
                <li
                    class="lg:hover:bg-white lg:w-full lg:hover:px-2.5 lg:text-[#C4C4C4] lg:hover:py-1.5 lg:hover:rounded-r-full transition-all relative group">
                    <a href="{{ route('question.index') }}"
                        class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-black lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition-all">
                        <svg class="text-[#C4C4C4] group-hover:text-black mx-auto" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" width="28" height="28" color="#000000" fill="none">
                            <path
                                d="M8.50049 7.50018C8.50049 6.48766 9.39592 5.50018 10.5005 5.50018C11.6051 5.50018 12.5005 6.32099 12.5005 7.33352C12.5005 7.69849 12.3841 8.03855 12.1836 8.32424C11.5859 9.17572 10.5005 9.98766 10.5005 11.0002"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            <path d="M10.5004 13.5H10.5094" stroke="currentColor" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M8 19.5C9.05038 20.3697 10.3145 20.9238 11.7635 21.0188C12.9052 21.0937 14.0971 21.0936 15.2365 21.0188C15.6288 20.9931 16.0565 20.9007 16.4248 20.751C16.8345 20.5845 17.0395 20.5012 17.1437 20.5138C17.2478 20.5264 17.3989 20.6364 17.7011 20.8563C18.2339 21.244 18.9051 21.5225 19.9005 21.4986C20.4038 21.4865 20.6555 21.4804 20.7681 21.2909C20.8808 21.1013 20.7405 20.8389 20.4598 20.3141C20.0706 19.5862 19.824 18.7529 20.1977 18.0852C20.8413 17.1315 21.3879 16.0021 21.4678 14.7823C21.5107 14.1269 21.5107 13.4481 21.4678 12.7927C21.4146 11.9799 21.2173 11.2073 20.9012 10.5"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M12.2365 17.0188C15.5829 16.7993 18.2485 14.1315 18.4678 10.7823C18.5107 10.1269 18.5107 9.4481 18.4678 8.79268C18.2485 5.44345 15.5829 2.77563 12.2365 2.55611C11.0948 2.48122 9.90285 2.48137 8.76352 2.55611C5.41711 2.77563 2.75153 5.44345 2.53219 8.79268C2.48927 9.4481 2.48927 10.1269 2.53219 10.7823C2.61208 12.0021 3.15875 13.1315 3.80233 14.0852C4.17601 14.7529 3.92939 15.5862 3.54017 16.3141C3.25953 16.8389 3.11921 17.1013 3.23187 17.2909C3.34454 17.4804 3.59621 17.4865 4.09954 17.4986C5.09493 17.5225 5.76615 17.244 6.29894 16.8563C6.60112 16.6364 6.75221 16.5264 6.85635 16.5138C6.96048 16.5012 7.16541 16.5845 7.57521 16.751C7.94352 16.9007 8.37117 16.9931 8.76352 17.0188C9.90285 17.0936 11.0948 17.0937 12.2365 17.0188Z"
                                stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <div
                        class="absolute shadow-lg hidden group-hover:block bg-[#333] text-white font-semibold px-3 py-[6px] text-[13px] right-0 left-16 w-max top-0 rounded">
                        Community
                    </div>
                </li>
                <li
                    class="lg:bg-white lg:w-full text-center lg:text-black lg:px-2.5 lg:py-1.5 lg:rounded-r-2xl relative">
                    <button id="profileDropdown">
                        <a
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:text-[#C4C4C4] lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                            <img class="rounded-full h-6" src="{{ asset('images/default_profile.png') }}"
                                alt="">
                        </a>
                    </button>
                    <div id="dropdownContent"
                        class="hidden absolute -top-20 left-16 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                        <a href="{{ route('profile') }}"
                            class="block text-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edite
                            Profile</a>
                        <a href="{{ route('user.favorites') }}"
                            class="block text-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Favorites</a>
                        <form class="w-full" action="{{ route('user.logout') }}" method="post">
                            @csrf
                            @method('POST')
                            <button class="block hover:text-red-600 w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                type="submit">
                                Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
