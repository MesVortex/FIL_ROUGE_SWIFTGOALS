<x-main-layout>
    <x-goalsNavbar page='personal goals' />
    <div class="w-auto h-screen ml-32 py-14">
        <div class="h-20 justify-center flex items-center w-full mb-16"
            style="background-image: url('{{ asset('images/blue-washi-tape-with-white-line-png.png') }}'); background-size:cover; background-position: center;">
            <h1
                class="group text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                Start Achieving Your Goals and ambitions</h1>
            <span
                class="underline underline-offset-3 hidden decoration-8 decoration-blue-100 group-hover:decoration-blue-600 text-gray-900 group-hover:text-gray-900 transition-all ease-in duration-500">als
                and ambitions</span>
        </div>
        @if(session('success'))
        <div id="goalAlert"
            class="relative flex mx-auto mb-5 w-1/2 px-4 py-4 text-base text-white bg-gray-900 rounded-lg font-regular"
            data-dismissible="alert">
            <div id="alertMessage" class="mr-12 ">{{session('success')}}</div>
            <button onclick="removeAlert();" data-dismissible-target="alert"
                class="!absolute  top-3 right-3 h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-white transition-all hover:bg-white/10 active:bg-white/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button">
                <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </span>
            </button>
        </div>
        @endif
        <section class="w-full flex flex-wrap justify-around gap-10 pb-16" id="goals">
            <!-- add goal -->
            <div
                class="h-28 w-full max-w-sm border-2 border-dashed flex items-center justify-center hover:bg-gray-100 transition-all duration-300 ease-in rounded-2xl relative">
                <i class="fa-solid fa-plus fa-2xl text-gray-500"></i>
                <a onclick="toggleDrawer();" class="cursor-pointer">
                    <div
                        class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                    </div>
                </a>
            </div>
            @foreach ($goals as $goal)
                <div class="w-full relative lg:flex lg:justify-around text-white shadow-blue-700 h-28 max-w-sm overflow-hidden rounded-2xl border border-grey-light group shadow-lg"
                    style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ isset($goal->image->path) ? asset('storage/' . $goal->image->path) : asset('images/sam-schooler-E9aetBe2w40-unsplash.jpg') }}'); background-size:cover; background-position: center;">
                    <div
                        class="absolute bottom-0 left-0 right-0 top-0 h-full w-full bg-transparent group-hover:backdrop-filter group-hover:backdrop-blur-sm group-hover:bg-opacity-40 transition-all duration-200">
                    </div>
                    @if (sizeof($goal->steps()->get()) != 0)
                        <label class="progressLabel"
                            style="--p: {{ ($goal->steps_count / sizeof($goal->steps()->get())) * 100 }};">
                            {{ ceil(($goal->steps_count / sizeof($goal->steps()->get())) * 100) }}% <progress
                                max="100" value="10">10%</progress></label>
                    @else
                        <label class="progressLabel" style="--p: 0;"> 0% <progress max="100"
                                value="10">10%</progress></label>
                    @endif
                    <div class="bg-transparent p-4 flex flex-col justify-around items-center w-full">
                        <div class="">
                            <p class="text-3xl text-grey-dark flex items-center">
                                {!! Str::limit($goal->title, 10, ' ...') !!}
                            </p>
                            <p class="flex items-center">
                                {!! Str::limit($goal->mainGoal, 20, ' ...') !!}
                            </p>
                        </div>
                    </div>
                    <div
                        class="justify-around absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-0 flex gap-10 group-hover:opacity-100 transition-all duration-300 ease-in">
                        <a href="{{ route('goal.show', $goal->id) }}">
                            <svg class="text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28"
                                color="#000000" fill="none">
                                <path
                                    d="M8 3.09779C8 3.09779 4.03374 2.74194 3.38783 3.38785C2.74191 4.03375 3.09783 8 3.09783 8"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M8 20.9022C8 20.9022 4.03374 21.2581 3.38783 20.6122C2.74191 19.9662 3.09783 16 3.09783 16"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M16 3.09779C16 3.09779 19.9663 2.74194 20.6122 3.38785C21.2581 4.03375 20.9022 8 20.9022 8"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M16 20.9022C16 20.9022 19.9663 21.2581 20.6122 20.6122C21.2581 19.9662 20.9022 16 20.9022 16"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M14.0107 9.99847L20.0625 3.94678" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.99695 14.0024L3.63965 20.3807" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.99732 10.0024L3.8457 3.85889" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.9795 14.0024L20.5279 20.4983" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <form action="{{ route('goal.destroy', $goal->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button>
                              <svg class="text-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" color="#000000" fill="none">
                                <path d="M19.5 5.5L18.8803 15.5251C18.7219 18.0864 18.6428 19.3671 18.0008 20.2879C17.6833 20.7431 17.2747 21.1273 16.8007 21.416C15.8421 22 14.559 22 11.9927 22C9.42312 22 8.1383 22 7.17905 21.4149C6.7048 21.1257 6.296 20.7408 5.97868 20.2848C5.33688 19.3626 5.25945 18.0801 5.10461 15.5152L4.5 5.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                <path d="M3 5.5H21M16.0557 5.5L15.3731 4.09173C14.9196 3.15626 14.6928 2.68852 14.3017 2.39681C14.215 2.3321 14.1231 2.27454 14.027 2.2247C13.5939 2 13.0741 2 12.0345 2C10.9688 2 10.436 2 9.99568 2.23412C9.8981 2.28601 9.80498 2.3459 9.71729 2.41317C9.32164 2.7167 9.10063 3.20155 8.65861 4.17126L8.05292 5.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                <path d="M9.5 16.5L9.5 10.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                <path d="M14.5 16.5L14.5 10.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </section>
        <!-- drawer -->
        <div id="drawerBackground" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>
        <div id="drawer-form"
            class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800"
            aria-labelledby="drawer-form-label">
            <h5 id="drawer-label"
                class="inline-flex items-center mb-6 text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
                New Goal</h5>
            <button type="button" onclick="toggleDrawer();" data-drawer-hide="drawer-form" aria-controls="drawer-form"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <form id="addGoal" class="mb-6" method="POST" action="{{ route('goal.store') }}">
                @csrf
                @method('POST')
                <div class="mb-6">
                    <label for="title"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" name="title" id="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="learning piano" required />
                </div>
                <div class="mb-6">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" name="mainGoal" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="becoming the the best piano player"></textarea>
                </div>
                <input type="hidden" name="userID" value="{{ Auth::user()->id }}">
                <button type="submit"
                    class="text-white justify-center flex items-center bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><svg
                        class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M18 2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2ZM2 18V7h6.7l.4-.409A4.309 4.309 0 0 1 15.753 7H18v11H2Z" />
                        <path
                            d="M8.139 10.411 5.289 13.3A1 1 0 0 0 5 14v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .7-.288l2.886-2.851-3.447-3.45ZM14 8a2.463 2.463 0 0 0-3.484 0l-.971.983 3.468 3.468.987-.971A2.463 2.463 0 0 0 14 8Z" />
                    </svg>Create Goal</button>
            </form>
        </div>
    </div>

    <script>
        function toggleDrawer() {
            var drawer = document.getElementById('drawer-form');
            var drawerBackground = document.getElementById('drawerBackground');

            drawer.classList.toggle('translate-x-full');
            drawerBackground.classList.toggle('hidden');
        }

        function removeAlert() {
            const alert = document.getElementById('goalAlert');
            alert.style.display = 'none';
        }

        document.getElementById('profileDropdown').addEventListener('click', function() {
            document.getElementById('dropdownContent').classList.toggle('hidden');
        });
    </script>
</x-main-layout>
