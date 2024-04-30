<x-main-layout>
    <x-goalsNavbar page='Your Templates' />
    <section id="templates" class="my-10 px-48 flex flex-wrap justify-between gap-10">
        <div class="h-20 mx-auto justify-center flex items-center w-full mb-16"
            style="background-image: url('{{ asset('images/blue-washi-tape-with-white-line-png.png') }}'); background-size:cover; background-position: center;">
            <h1
                class="group text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                Make Templates and Inspire Others</h1>
            <span
                class="underline underline-offset-3 hidden decoration-8 decoration-blue-100 group-hover:decoration-blue-600 text-gray-900 group-hover:text-gray-900 transition-all ease-in duration-500">als
                and ambitions</span>
        </div>
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
    <script>
        document.getElementById('profileDropdown').addEventListener('click', function() {
            document.getElementById('dropdownContent').classList.toggle('hidden');
        });
    </script>
</x-main-layout>
