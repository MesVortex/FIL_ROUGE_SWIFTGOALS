<x-dashboard-layout>
    <x-sidebar current='templates' />
    <div class="flex-grow p-6 pt-36 lg:pl-80">
        <div class=" dark:bg-gray-800 rounded-lg shadow-md bg-white flex-1 p-6">
            <div class="pb-4 flex justify-between items-center">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white p-6">Templates</h2>
                <div class="flex items-center">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded text-sm flex items-center"
                        onclick="toggleDrawer();">
                        <i class="fas fa-plus mr-2"></i>Add Template
                    </button>
                </div>
            </div>
            <div id="drawerBackground" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>
            <div id="drawer-form"
                class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800"
                aria-labelledby="drawer-form-label">
                <h5 id="drawer-label"
                    class="inline-flex items-center mb-6 text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
                    New Goal</h5>
                <button type="button" onclick="toggleDrawer();" data-drawer-hide="drawer-form"
                    aria-controls="drawer-form"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <form id="addTemplate" class="mb-6" method="POST" action="{{ route('template.store') }}">
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
                    <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                        template
                        category</label>
                    <select id="categories" name="categoryID"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit"
                        class="text-white mt-4 justify-center flex items-center bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><svg
                            class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M18 2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2ZM2 18V7h6.7l.4-.409A4.309 4.309 0 0 1 15.753 7H18v11H2Z" />
                            <path
                                d="M8.139 10.411 5.289 13.3A1 1 0 0 0 5 14v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .7-.288l2.886-2.851-3.447-3.45ZM14 8a2.463 2.463 0 0 0-3.484 0l-.971.983 3.468 3.468.987-.971A2.463 2.463 0 0 0 14 8Z" />
                        </svg>Create Template</button>
                </form>
            </div>
            <section id="templates" class="my-10 px-32 flex flex-wrap justify-between gap-10">
                @foreach ($templates as $template)
                    <div class="w-64 relative rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                            data-twe-ripple-color="light">
                            <div class="rounded-xl w-full border border-gray-500 h-32"
                                style="background-image: url('{{ isset($template->image->path) ? asset('storage/' . $template->image->path) : asset('/images/sam-schooler-E9aetBe2w40-unsplash.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center">
                            </div>
                            <a href="{{ route('goal.show', $template->id) }}">
                                <div
                                    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                            <div class="absolute top-2 right-2 text-sm rounded-full bg-[#2A44AB] text-white py-1 px-4">
                                <p>{{ $template->categories->name }}</p>
                            </div>
                        </div>
                        <div class="flex my-5 justify-between w-full px-2 text-[#666666]">
                            <p class="">by You</p>
                            <div class="flex">
                            </div>
                        </div>
                        <div class="px-2 text-start bg-transparent text-[#666666] dark:text-white rounded-b-3xl ">
                            <h5 class="mb-2 text-md font-extrabold text-[#2A44AB] leading-tight">{{ $template->title }}
                            </h5>
                            @if ($template->mainGoal != null)
                                <p class="mb-4 text-sm">
                                    {{ $template->mainGoal }}
                                </p>
                            @else
                                <p class="mb-4 text-sm ">
                                    the creator haven't left any description
                                </p>
                            @endif
                        </div>
                        <div class="absolute top-24 left-3">
                            <img class="rounded-full bg-gray-600 h-10" src="{{ asset('images/default_profile.png') }}"
                                alt="d">
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        function toggleDrawer() {
            var drawer = document.getElementById('drawer-form');
            var drawerBackground = document.getElementById('drawerBackground');

            drawer.classList.toggle('translate-x-full');
            drawerBackground.classList.toggle('hidden');
        }

        // $(document).ready(function() {
        //     $('#addTemplate').on('submit', function(event) {
        //         event.preventDefault();

        //         jQuery.ajax({
        //             url: "{{ route('goal.store') }}",
        //             data: jQuery('#addTemplate').serialize(),
        //             type: 'post',

        //             success: function(result) {
        //                 const cardDiv = document.createElement("div");
        //                 cardDiv.setAttribute('class',
        //                     'w-64 relative rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark'
        //                     );
        //                 const cardContent = `
    //                   <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init data-twe-ripple-color="light">
    //                     <div class="rounded-xl w-full border border-gray-500 h-32" style="background-image: url('${template.image && template.image.path ? `{{ asset('storage') }}/${template.image.path}` : `{{ asset('/images/sam-schooler-E9aetBe2w40-unsplash.jpg') }}`}'); background-size: cover; background-repeat: no-repeat; background-position: center"></div>
    //                     <a href="">
    //                       <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
    //                     </a>
    //                     <div class="absolute top-2 right-2 text-sm rounded-full bg-[#2A44AB] text-white py-1 px-4">
    //                       <p>null</p>
    //                     </div>
    //                   </div>
    //                   <div class="flex my-5 justify-between w-full px-2 text-[#666666]">
    //                     <p class="">by ${result.goal.users.name}</p>
    //                     <div class="flex">
    //                       <span class="mr-3 text-sm"><i class="fa-solid fa-clone fa-sm mr-1"></i>1k</span>
    //                       <span class="text-sm"><i class="fa-brands fa-gratipay fa-sm mr-1"></i>1.4k</span>
    //                     </div>
    //                   </div>
    //                   <div class="px-2 text-start bg-transparent text-[#666666] dark:text-white rounded-b-3xl ">
    //                     <h5 class="mb-2 text-md font-extrabold text-[#2A44AB] leading-tight">${goal.title}</h5>
    //                     ${result.goal.mainGoal ? `
        //                     <p class="mb-4 text-sm">
        //                     ${result.goal.mainGoal}
        //                     </p>
        //                     ` : `
        //                     <p class="mb-4 text-sm ">
        //                       the creator haven't left any description
        //                     </p>
        //                     `}
    //                   </div>
    //                   <div class="absolute top-24 left-3">
    //                     <img class="rounded-full bg-gray-600 h-10" src="{{ asset('images/default_profile.png') }}" alt="d">
    //                   </div>`;
        //                 cardDiv.innerHTML = templateCard;
        //                 jQuery('#templates').append(cardDiv);
        //                 jQuery('#addTemplate')[0].reset();
        //                 toggleDrawer();
        //             }
        //         })
        //     });
        // });
    </script>
</x-dashboard-layout>
