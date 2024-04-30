<!-- start navbar -->
<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-blue-600 p-6">

    <!-- logo -->
    <div class="flex-none w-56 flex flex-row items-center bg-white rounded-xl">
        <img src="{{ asset('/images/SwiftGoalsMainLogo-removebg-preview.png') }}" class="w-10 flex-none">
        <strong class="capitalize ml-1 flex-1 text-[#012E4A]">SwiftGoals</strong>

        <button id="toggle-sidebar"
            class="block md:hidden absolute top-0 left-0 mt-4 ml-4 p-2 rounded-lg bg-gray-200 text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
    <!-- end logo -->
</div>
<!-- end navbar -->
