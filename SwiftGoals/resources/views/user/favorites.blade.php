<x-main-layout>
    <section>
        <div class="relative px-32 z-10 pb-32"
            style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset('images/2632000_8306.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
            <x-logo />
            <x-mainNavbar page='favorites' />
            <div class="text-center mt-16">
                <h1 class="mb-4 text-3xl font-extrabold text-white md:text-5xl lg:text-6xl"><span
                        class="text-transparent bg-clip-text bg-gradient-to-r to-sky-500 from-red-600">Favorites</span>
                    </h1>
                <p class="text-lg font-normal capitalize text-gray-300 italic lg:text-xl dark:text-gray-400">All your favorite templates in one place</p>
            </div>
            <div class="absolute bottom-0 left-0 -z-10 w-full h-auto -mb-1">
                <svg enable-background="new 0 0 1504 131.3" viewBox="0 0 1504 131.3" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m877.8 85c139.5 24.4 348 33.5 632.2-48.2-.2 32.5-.3 65-.5 97.4-505.9 0-1011.6 0-1517.5 0 0-33.3 0-66.7 0-100.1 54.2-11.4 129.5-23.9 220-28.2 91-4.3 173.6 1 307.4 18.6 183.2 24.2 295.2 49.4 358.4 60.5z"
                        fill="#fff" />
                </svg>
            </div>
        </div>
    </section>
    {{-- <div class="px-10 flex justify-start text-blue-700">
        <a href="{{ route('home') }}">
            <svg class="text-blue-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="38"
                height="38" color="#000000" fill="none">
                <path
                    d="M4.80823 9.44118L6.77353 7.46899C8.18956 6.04799 8.74462 5.28357 9.51139 5.55381C10.4675 5.89077 10.1528 8.01692 10.1528 8.73471C11.6393 8.73471 13.1848 8.60259 14.6502 8.87787C19.4874 9.78664 21 13.7153 21 18C19.6309 17.0302 18.2632 15.997 16.6177 15.5476C14.5636 14.9865 12.2696 15.2542 10.1528 15.2542C10.1528 15.972 10.4675 18.0982 9.51139 18.4351C8.64251 18.7413 8.18956 17.9409 6.77353 16.5199L4.80823 14.5477C3.60275 13.338 3 12.7332 3 11.9945C3 11.2558 3.60275 10.6509 4.80823 9.44118Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div> --}}
    <section id="templates" class="my-10 px-32 flex flex-wrap justify-between gap-10">
        @foreach ($favoriteTemplates as $template)
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
                    <p class="">by {{ $template->users->name }}</p>
                    <div class="flex">
                        <span class="mr-3 text-sm"><i class="fa-solid fa-clone fa-sm mr-1"></i>1k</span>
                        <span class="text-sm"><i class="fa-brands fa-gratipay fa-sm mr-1"></i>1.4k</span>
                    </div>
                </div>
                <div class="px-2 text-start bg-transparent text-[#666666] dark:text-white rounded-b-3xl ">
                    <h5 class="mb-2 text-md font-extrabold text-[#2A44AB] leading-tight">{{ $template->title }}</h5>
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
</x-main-layout>
