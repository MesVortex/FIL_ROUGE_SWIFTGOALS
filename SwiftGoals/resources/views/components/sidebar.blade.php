<!-- start sidebar -->
@props(['current'])
<div class="flex fixed flex-row min-h-screen bg-gray-100 text-gray-800">
    <aside id="sidebar"
        class="sidebar w-64 md:shadow min-h-screen transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in bg-blue-600 fixed">
        <div class="sidebar-header flex items-center justify-center py-4">
            <div class="inline-flex">
                <a href="#" class="inline-flex flex-row items-center">
                    <svg class="w-10 h-10 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M11.757 2.034a1 1 0 01.638.519c.483.967.844 1.554 1.207 2.03.368.482.756.876 1.348 1.467A6.985 6.985 0 0117 11a7.002 7.002 0 01-14 0c0-1.79.684-3.583 2.05-4.95a1 1 0 011.707.707c0 1.12.07 1.973.398 2.654.18.374.461.74.945 1.067.116-1.061.328-2.354.614-3.58.225-.966.505-1.93.839-2.734.167-.403.356-.785.57-1.116.208-.322.476-.649.822-.88a1 1 0 01.812-.134zm.364 13.087A2.998 2.998 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879.586.585.879 1.353.879 2.121s-.293 1.536-.879 2.121z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="leading-10 text-gray-100 text-2xl font-bold ml-1 uppercase">Brandname</span>
                </a>
            </div>
        </div>
        <div class="sidebar-content px-4 py-6">
            <ul class="flex flex-col w-full">
                <li class="my-px">
                    <a href="#" @if ($current == 'stats') class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-700 bg-gray-100" @else class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700" @endif>
                        <span class="flex items-center justify-center text-lg text-gray-400">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </span>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li class="my-px">
                    <span class="flex font-medium text-sm text-gray-300 px-4 my-4 uppercase">Projects</span>
                </li>
                <li class="my-px">
                    <a href="{{ route('category.index') }}"
                        @if ($current == 'categories') class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-700 bg-gray-100" @else class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700" @endif>
                        <span class="flex items-center justify-center text-lg text-gray-400">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path
                                    d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                        </span>
                        <span class="ml-3">Category</span>
                    </a>
                </li>
                <li class="my-px">
                    <a href="{{ route('admin.templates') }}"
                    @if ($current == 'templates') class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-700 bg-gray-100" @else class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700" @endif>
                        <span class="flex items-center justify-center text-lg text-gray-400">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </span>
                        <span class="ml-3">Templates</span>
                    </a>
                </li>
                <li class="my-px">
                    <a href="{{ route('admin.dashboard') }}"
                    @if ($current == 'clients') class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-700 bg-gray-100" @else class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700" @endif>
                        <span class="flex items-center justify-center text-lg text-gray-400">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </span>
                        <span class="ml-3">Clients</span>
                    </a>
                </li>
                <li class="my-px">
                    <a href="{{ route('admin.reports') }}"
                    @if ($current == 'reports') class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-700 bg-gray-100" @else class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700" @endif>
                        <span class="flex items-center justify-center text-lg text-gray-400">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </span>
                        <span class="ml-3">Reports</span>
                    </a>
                </li>
                <li class="my-px">
                    <form action="{{ route('user.logout') }}" method="post"
                        class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                        <span class="flex items-center justify-center text-lg text-red-400">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path
                                    d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                        </span>
                        @csrf
                        @method('POST')
                        <button class="ml-3">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>
</div>
<!-- end sidbar -->
