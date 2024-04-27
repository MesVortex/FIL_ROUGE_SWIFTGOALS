<x-main-layout>

  <div class="">
    <div class="relative px-20 z-10" style="background-image: url('{{ asset('images/community_header.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
      <x-logo />
      <x-mainNavbar page='community' />
      <form method="POST" action="{{ route('question.store') }}" class="flex gap-5 justify-between px-3 py-2 mx-auto mb-10 mt-10 max-w-full bg-white shadow-2xl rounded-3xl w-6/12 max-md:flex-wrap max-md:px-5 ">
        @csrf
        @method('POST')
        <div class="flex gap-5 text-xl text-center lowercase text-slate-500 text-opacity-50 w-full">
          <img src="{{ asset('images/default_profile.png') }}" alt="user icon" class="shrink-0 rounded-full w-10" />
          <input type="text" name="content" class="focus:outline-none w-full " placeholder="Type your Question here">
        </div>
        <div class="flex gap-5 justify-between my-auto">
          <button class="rounded-full px-3.5 py-2 bg-gradient-to-l from-[#000AFF] to-[#7CB8F7]">
            <i class="fa-solid fa-location-arrow text-white"></i>
          </button>
        </div>
      </form>
      <div class="flex justify-around">
        <h1 class=" font-bold text-5xl my-10">People Questions</h1>
        <h1 class=" font-bold text-5xl my-10 text-white">Your Questions</h1>
      </div>
      <div class="absolute bottom-0 left-0 -z-10 w-full h-auto -mb-1">
        <svg enable-background="new 0 0 1504 131.3" viewBox="0 0 1504 131.3" xmlns="http://www.w3.org/2000/svg">
          <path d="m877.8 85c139.5 24.4 348 33.5 632.2-48.2-.2 32.5-.3 65-.5 97.4-505.9 0-1011.6 0-1517.5 0 0-33.3 0-66.7 0-100.1 54.2-11.4 129.5-23.9 220-28.2 91-4.3 173.6 1 307.4 18.6 183.2 24.2 295.2 49.4 358.4 60.5z" fill="#fff" />
        </svg>
      </div>
    </div>
    <section class="mt-14 w-full max-md:mt-10 max-md:max-w-full px-20">
      <div class="flex gap-5 max-md:flex-col max-md:gap-0">
        <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full gap-10">
          @foreach ($questions as $question)
          <article class="flex flex-col shadow-lg p-5 w-full bg-white rounded-md max-md:px-5 max-md:mt-10 max-md:max-w-full">
            <header class="flex gap-5 text-center max-md:flex-wrap">
              <img loading="lazy" src="{{ asset('images/default_profile.png') }}" alt="User avatar" class="shrink-0 w-14 h-14" />
              <div class="flex flex-col grow shrink-0 my-auto basis-0 w-fit max-md:max-w-full">
                <div class="flex justify-between max-md:flex-wrap max-md:max-w-full">
                  <h3 class="text-lg font-bold capitalize text-slate-900">{{ $question->user->name }}</h3>
                  <time class="text-base font-medium lowercase text-slate-500">{{ $question->created_at }}</time>
                </div>
                <div class="flex gap-1.5 items-center self-start text-base font-medium text-blue-500 lowercase whitespace-nowrap">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e8c93192d09545072dd575d2209146aabbe6656746c3adb45e016b4648e1ca3?apiKey=c168d83aa7a64a8493ecd020bcae6a11&" alt="Location icon" class="shrink-0 mt-2 aspect-[3.03] w-[15px]" />
                  <span>Wonders</span>
                </div>
              </div>
            </header>
            <div class="flex gap-5 text-slate-500 max-md:flex-wrap">
              <p class="flex-auto self-start mt-2.5 text-base font-medium leading-7 max-md:max-w-full">
                <span class="text-slate-500">{{ $question->content }}}</span>
              </p>
              <div>
                <button class="mb-3">
                  <i class="fa-solid fa-circle-arrow-up fa-2xl text-[#012E4A]"></i>
                </button>
                <span>1.4k</span>
                <button class="mt-3">
                  <i class="fa-solid fa-circle-arrow-down fa-2xl text-[#012E4A]"></i>
                </button>
                <button class="mt-4">
                  <i class="fa-regular fa-comment fa-2xl text-[#012E4A]"></i>
                </button>
                <span class="">100</span>
              </div>
            </div>
          </article>
          @endforeach
        </div>
        <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full gap-10">
          @foreach ($userQuestions as $userQuestion)
          <article class="flex flex-col shadow-xl p-5 w-full bg-gradient-to-r from-[#7CB8F7] to-[#2A8BF2] rounded-md max-md:px-5 max-md:mt-10 max-md:max-w-full">
            <header class="flex gap-5 text-center max-md:flex-wrap">
              <img loading="lazy" src="{{ asset('images/default_profile.png') }}" alt="User avatar" class="shrink-0 w-14 h-14" />
              <div class="flex flex-col grow shrink-0 my-auto basis-0 w-fit max-md:max-w-full">
                <div class="flex justify-between max-md:flex-wrap max-md:max-w-full">
                  <h3 class="text-lg font-bold capitalize text-black">{{ auth()->user()->name }}</h3>
                  <time class="text-base font-medium lowercase text-white">{{ $userQuestion->created_at }}</time>
                </div>
                <div class="flex gap-1.5 items-center self-start text-base font-medium text-blue-500 lowercase whitespace-nowrap">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e8c93192d09545072dd575d2209146aabbe6656746c3adb45e016b4648e1ca3?apiKey=c168d83aa7a64a8493ecd020bcae6a11&" alt="Location icon" class="shrink-0 mt-2 aspect-[3.03] w-[15px]" />
                  <span>Wonders</span>
                </div>
              </div>
            </header>
            <div class="flex gap-5 text-black max-md:flex-wrap">
              <p class="flex-auto self-start mt-2.5 text-base font-medium leading-7 max-md:max-w-full">
                <span class="text-white">{{ $userQuestion->content }}</span>
              </p>
              <div>
                <button class="mb-3">
                  <i class="fa-solid fa-circle-arrow-up fa-2xl text-white"></i>
                </button>
                <span>1.4k</span>
                <button class="mt-3">
                  <i class="fa-solid fa-circle-arrow-down fa-2xl text-white"></i>
                </button>
                <button class="mt-4">
                  <i class="fa-regular fa-comment fa-2xl text-white"></i>
                </button>
                <span class="">100</span>
              </div>
            </div>
          </article>
          @endforeach
        </div>
      </div>
    </section>
  </div>
  <x-footer />
</x-main-layout>