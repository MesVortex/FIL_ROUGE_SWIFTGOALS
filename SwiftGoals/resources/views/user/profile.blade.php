<x-main-layout>
    <section class=" bg-slate-500 py-10" style="">
        <a href="{{ route('home') }}">
            <i class="fa-solid fa-arrow-left fa-xl ml-10"></i>
        </a>
        <div class="flex-col gap-5 justify-between items-center w-full max-md:flex-wrap max-md:mt-10 max-md:max-w-full">
            <div class="flex flex-col self-center mt-6 w-full">
                <a href="#" class="self-center rounded-full w-[139px] relative">
                    <img src="{{ asset('images/default_profile.png') }}" alt="User avatar" class="" />
                    <div class="bg-[#000AFF] px-2 py-1 rounded-full absolute bottom-1 right-3">
                        <i class="fa-regular fa-pen-to-square text-white"></i>
                    </div>
                </a>
                <div class="flex flex-col text-center justify-between self-center px-3 mt-3.5 max-w-full w-[139px]">
                    <h2 class="text-xl font-semibold tracking-normal text-stone-800">{{ Auth::user()->name }}</h2>
                    <p class="self-center mt-2 text-sm tracking-normal text-neutral-400">Goali</p>
                </div>
            </div>
            <div class="flex justify-evenly items-center w-full mt-10">
                <form method="POST" action="{{ route('profile.update') }}" class="w-5/12">
                    @csrf
                    @method('PATCH')
                    <label for="username"
                        class="mt-5 mb-3 text-sm font-semibold text-stone-800 max-md:max-w-full">Username</label>
                    <div class="relative mx-auto w-full ">
                        <input
                            id="username"
                            name="name"
                            type="text"
                            class="flex gap-3 pl-12 py-4 w-full bg-transparent focus:outline-none text-sm font-medium rounded-xl border border-zinc-100 text-neutral-400"
                            value="{{ Auth::user()->name }}" placeholder="Username">
                        <i class="fa-solid fa-at absolute left-3.5 top-7 fa-lg text-neutral-400"></i>
                    </div>
                    <label for="email" class="mt-5 mb-3 text-sm font-semibold text-stone-800 max-md:max-w-full">Your
                        Email</label>
                    <div class="relative mx-auto w-full ">
                        <input
                            id="email"
                            type="email"
                            name="email"
                            class="flex gap-3 pl-12 py-4 w-full bg-transparent focus:outline-none text-sm font-medium rounded-xl border border-zinc-100 text-neutral-400"
                            value="{{ Auth::user()->email }}" placeholder="email@gmail.com">
                        <i class="fa-regular fa-envelope absolute left-3.5 top-7 fa-lg text-neutral-400"></i>
                    </div>
                    <div
                        class="flex gap-5 justify-around mt-11 text-base font-bold tracking-normal whitespace-nowrap max-md:flex-wrap max-md:mt-10 max-md:max-w-full">
                        <button
                            class="button rounded-md w-2/6 text-center px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-white text-white hover:border-[#1C70EC] transition duration-300 ease">
                            <span
                                class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-[#1C70EC] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                            <span class="relative text-white transition duration-300 ease">Modify</span>
                        </button>
                        {{-- <form action="{{ route('user.logout') }}" method="post"
                        class="button rounded-md w-2/6 text-center px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-white text-white hover:border-[#ff3f31] transition duration-300 ease">
                        @csrf
                        @method('POST')
                        <button type="submit">
                            <span
                                class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-[#ff3f31] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                            <span class="relative text-white transition duration-300 ease">Logout</span>
                        </button>
                    </form> --}}
                    </div>
                </form>
                <form class="w-5/12">
                    @csrf
                    @method('PATCH')
                    <label for="current_password"
                        class="mt-5 mb-3 text-sm font-semibold text-stone-800 max-md:max-w-full">Username</label>
                    <div class="relative mx-auto w-full ">
                        <input
                            id="current_password"
                            type="password"
                            name="current_password"
                            class="flex gap-3 pl-12 py-4 w-full bg-transparent focus:outline-none text-sm font-medium rounded-xl border border-zinc-100 text-neutral-400"
                            placeholder="Username">
                        <i class="fa-solid fa-at absolute left-3.5 top-7 fa-lg text-neutral-400"></i>
                    </div>
                    <label for="new_password"
                        class="mt-5 mb-3 text-sm font-semibold text-stone-800 max-md:max-w-full">Password</label>
                    <div class="relative mx-auto w-full ">
                        <input 
                            id="new_password"
                            type="password"
                            name="password"
                            class="flex gap-3 pl-12 py-4 w-full bg-transparent focus:outline-none text-sm font-medium rounded-xl border border-zinc-100 text-neutral-400"
                            placeholder="Your Password">
                        <i class="fa-solid fa-lock absolute left-3.5 top-7 fa-lg text-neutral-400"></i>
                    </div>
                    <label for="password_confirmation"
                        class="mt-5 mb-3 text-sm font-semibold text-stone-800 max-md:max-w-full">Password</label>
                    <div class="relative mx-auto w-full ">
                        <input type="password"
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            class="flex gap-3 pl-12 py-4 w-full bg-transparent focus:outline-none text-sm font-medium rounded-xl border border-zinc-100 text-neutral-400"
                            placeholder="Your Password">
                        <i class="fa-solid fa-lock absolute left-3.5 top-7 fa-lg text-neutral-400"></i>
                    </div>
                    <div
                        class="flex gap-5 justify-around mt-11 text-base font-bold tracking-normal whitespace-nowrap max-md:flex-wrap max-md:mt-10 max-md:max-w-full">
                        <button
                            class="button rounded-md w-2/6 text-center px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-white text-white hover:border-[#1C70EC] transition duration-300 ease">
                            <span
                                class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-[#1C70EC] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                            <span class="relative text-white transition duration-300 ease">Modify</span>
                        </button>
                        {{-- <form action="{{ route('user.logout') }}" method="post"
                        class="button rounded-md w-2/6 text-center px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-white text-white hover:border-[#ff3f31] transition duration-300 ease">
                        @csrf
                        @method('POST')
                        <button type="submit">
                            <span
                                class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-[#ff3f31] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                            <span class="relative text-white transition duration-300 ease">Logout</span>
                        </button>
                    </form> --}}
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-main-layout>
