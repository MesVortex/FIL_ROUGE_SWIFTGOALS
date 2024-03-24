<x-main-layout>

  @section('navbar')
  <x-mainNavbar page='home' />
  @endsection

  <section class="mb-20">
    <div class="relative px-32 z-10" style="background-image: url('{{ asset('images/home_header.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
      <x-logo />
      <div class="flex justify-between mt-28">
        <h1 class="font-semibold text-9xl text-white">Plans & <span class=" block">Goals</span></h1>
        <div class="flex items-end">
          <button class=" bg-[#F9F9F9] p-6 rounded-full font-medium">Scroll down<i class="fa-solid fa-arrow-down-long ml-3"></i></button>
        </div>
      </div>
      <div class="mt-20 flex justify-between">
        <div class="flex h-40">
          <p class=" font-medium w-32">Start Your Own Goals Or Use</p>
          <img class="self-end" src="{{ asset('images/arrow1.png') }}" alt="arrow">
        </div>
        <p class="font-medium w-60">Hello, Welcome to SwiftGoals, an online product focusing on brand identity, advertising, and no-code instruments.</p>
      </div>
      <div class="absolute bottom-0 left-0 -z-10 w-full h-auto -mb-1">
        <svg enable-background="new 0 0 1504 131.3" viewBox="0 0 1504 131.3" xmlns="http://www.w3.org/2000/svg">
          <path d="m877.8 85c139.5 24.4 348 33.5 632.2-48.2-.2 32.5-.3 65-.5 97.4-505.9 0-1011.6 0-1517.5 0 0-33.3 0-66.7 0-100.1 54.2-11.4 129.5-23.9 220-28.2 91-4.3 173.6 1 307.4 18.6 183.2 24.2 295.2 49.4 358.4 60.5z" fill="#fff" />
        </svg>
      </div>
    </div>
    <div class="px-32">
      <h2 class="font-semibold text-3xl mb-5">Templates</h2>
      <div class="flex justify-between">
        <p class="w-80">As a seasoned creator of contemporary, user-friendly web designs and digital solutions, I aim to assist you in constructing the brand of your fantasies.</p>
        <a href="" class="font-medium self-end">More <i class="fa-solid fa-arrow-right ml-2"></i></a>
      </div>
    </div>
    <!-- templates cards section -->

    <section class="mt-10 mb-10 flex flex-wrap justify-between gap-10 px-32">
      <div class="w-96 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark">
        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init data-twe-ripple-color="light">
          <img class="rounded-t-3xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/186.jpg" alt="" />
          <a href="#">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
          </a>
          <div class="absolute top-5 right-5 rounded-full bg-[#2A44AB] text-white py-1 px-4">
            <p class="">label</p>
          </div>
        </div>
        <div class="p-6 text-surface bg-[#2A44AB] dark:text-white rounded-b-3xl shadow-2xl">
          <h5 class="mb-2 text-xl text-white font-medium leading-tight">Headline</h5>
          <p class="mb-4 text-base text-white">
            Please add your content here. Keep it short and simple. And smile :)
          </p>
        </div>
        <div class="flex justify-between p-5">
          <div class="flex">
            <img class="rounded-full bg-gray-600 h-6" src="{{ asset('images/default_profile.png') }}" alt="d">
            <p class="ml-3">Headline</p>
          </div>
          <div class="flex text-[#666666]">
            <span class="mr-3"><i class="fa-solid fa-clone mr-1"></i>1k</span>
            <span><i class="fa-brands fa-gratipay mr-1"></i>1.4k</span>
          </div>
        </div>
      </div>
      <div class="w-96 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark">
        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init data-twe-ripple-color="light">
          <img class="rounded-t-3xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/186.jpg" alt="" />
          <a href="#">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
          </a>
          <div class="absolute top-5 right-5 rounded-full bg-[#2A44AB] text-white py-1 px-4">
            <p class="">label</p>
          </div>
        </div>
        <div class="p-6 text-surface bg-[#2A44AB] dark:text-white rounded-b-3xl shadow-2xl">
          <h5 class="mb-2 text-xl text-white font-medium leading-tight">Headline</h5>
          <p class="mb-4 text-base text-white">
            Please add your content here. Keep it short and simple. And smile :)
          </p>
        </div>
        <div class="flex justify-between p-5">
          <div class="flex">
            <img class="rounded-full bg-gray-600 h-6" src="{{ asset('images/default_profile.png') }}" alt="d">
            <p class="ml-3">Headline</p>
          </div>
          <div class="flex text-[#666666]">
            <span class="mr-3"><i class="fa-solid fa-clone mr-1"></i>1k</span>
            <span><i class="fa-brands fa-gratipay mr-1"></i>1.4k</span>
          </div>
        </div>
      </div>
      <div class="w-96 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark">
        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init data-twe-ripple-color="light">
          <img class="rounded-t-3xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/186.jpg" alt="" />
          <a href="#">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
          </a>
          <div class="absolute top-5 right-5 rounded-full bg-[#2A44AB] text-white py-1 px-4">
            <p class="">label</p>
          </div>
        </div>
        <div class="p-6 text-surface bg-[#2A44AB] dark:text-white rounded-b-3xl shadow-2xl">
          <h5 class="mb-2 text-xl text-white font-medium leading-tight">Headline</h5>
          <p class="mb-4 text-base text-white">
            Please add your content here. Keep it short and simple. And smile :)
          </p>
        </div>
        <div class="flex justify-between p-5">
          <div class="flex">
            <img class="rounded-full bg-gray-600 h-6" src="{{ asset('images/default_profile.png') }}" alt="d">
            <p class="ml-3">Headline</p>
          </div>
          <div class="flex text-[#666666]">
            <span class="mr-3"><i class="fa-solid fa-clone mr-1"></i>1k</span>
            <span><i class="fa-brands fa-gratipay mr-1"></i>1.4k</span>
          </div>
        </div>
      </div>
      <div class="w-96 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark">
        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init data-twe-ripple-color="light">
          <img class="rounded-t-3xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/186.jpg" alt="" />
          <a href="#">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
          </a>
          <div class="absolute top-5 right-5 rounded-full bg-[#2A44AB] text-white py-1 px-4">
            <p class="">label</p>
          </div>
        </div>
        <div class="p-6 text-surface bg-[#2A44AB] dark:text-white rounded-b-3xl shadow-2xl">
          <h5 class="mb-2 text-xl text-white font-medium leading-tight">Headline</h5>
          <p class="mb-4 text-base text-white">
            Please add your content here. Keep it short and simple. And smile :)
          </p>
        </div>
        <div class="flex justify-between p-5">
          <div class="flex">
            <img class="rounded-full bg-gray-600 h-6" src="{{ asset('images/default_profile.png') }}" alt="d">
            <p class="ml-3">Headline</p>
          </div>
          <div class="flex text-[#666666]">
            <span class="mr-3"><i class="fa-solid fa-clone mr-1"></i>1k</span>
            <span><i class="fa-brands fa-gratipay mr-1"></i>1.4k</span>
          </div>
        </div>
      </div>
    </section>
    <section class="mt-32 py-32 z-10 relative" style="background: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url('{{ asset('images/kai-gradert-DtDe2ZTfAcM-unsplash.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
      <div class="px-32 text-white">
        <div class="absolute top-0 left-0 -z-10 w-full h-auto -mt-1">
          <svg enable-background="new 0 0 1504 131.3" viewBox="0 0 1504 131.3" xmlns="http://www.w3.org/2000/svg" class="transform scale-y-[-1]">
            <path d="m877.8 85c139.5 24.4 348 33.5 632.2-48.2-.2 32.5-.3 65-.5 97.4-505.9 0-1011.6 0-1517.5 0 0-33.3 0-66.7 0-100.1 54.2-11.4 129.5-23.9 220-28.2 91-4.3 173.6 1 307.4 18.6 183.2 24.2 295.2 49.4 358.4 60.5z" fill="#fff" />
          </svg>
        </div>
        <div class="flex justify-between mb-12">
          <h2 class="font-semibold text-3xl ">Goals Inspiration</h2>
          <a href="" class="font-medium self-center">Create Your Own <i class="fa-solid fa-arrow-right ml-2"></i></a>
        </div>
        <ul class="flex justify-between">
          <div>
            <li class="mb-16">
              <h5 class="font-medium text-2xl mb-5">Branding</h5>
              <p class="w-96">Collaborating closely, we'll develop an impactful brand identity for your emerging enterprise. The full spectrum of brand analysis and design is addressed, culminating in a visually stunning, evergreen logo concept.</p>
            </li>
            <li>
              <h5 class="font-medium text-2xl mb-5">UX Design</h5>
              <p class="w-96">Collaborating closely, we'll develop an impactful brand identity for your emerging enterprise. The full spectrum of brand analysis and design is addressed, culminating in a visually stunning, evergreen logo concept.</p>
            </li>
          </div>
          <div>
            <li class="mb-16">
              <h5 class="font-medium text-2xl mb-5">UI Design</h5>
              <p class="w-96">Collaborating closely, we'll develop an impactful brand identity for your emerging enterprise. The full spectrum of brand analysis and design is addressed, culminating in a visually stunning, evergreen logo concept.</p>
            </li>
            <li>
              <h5 class="font-medium text-2xl mb-5">Development</h5>
              <p class="w-96">Collaborating closely, we'll develop an impactful brand identity for your emerging enterprise. The full spectrum of brand analysis and design is addressed, culminating in a visually stunning, evergreen logo concept.</p>
            </li>
          </div>
        </ul>
        <div class="absolute bottom-0 left-0 -z-10 w-full h-auto -mb-1">
          <svg enable-background="new 0 0 1504 131.3" viewBox="0 0 1504 131.3" xmlns="http://www.w3.org/2000/svg" class="transform scale-x-[-1]">
            <path d="m877.8 85c139.5 24.4 348 33.5 632.2-48.2-.2 32.5-.3 65-.5 97.4-505.9 0-1011.6 0-1517.5 0 0-33.3 0-66.7 0-100.1 54.2-11.4 129.5-23.9 220-28.2 91-4.3 173.6 1 307.4 18.6 183.2 24.2 295.2 49.4 358.4 60.5z" fill="#fff" />
          </svg>
        </div>
      </div>
    </section>
  </section>
</x-main-layout>