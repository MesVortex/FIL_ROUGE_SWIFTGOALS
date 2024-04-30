<x-main-layout>

  <section class="mb-20">
    <div class="relative px-32 z-10" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), transparent), url('{{ asset('images/home_header.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
      <x-logo />
      <x-mainNavbar page='home' />
      <div class="flex justify-between mt-10">
        <h1 class="font-semibold text-9xl text-white">Plans & <span class=" block">Goals</span></h1>
        <div class="flex items-end">
          <button class=" bg-[#F9F9F9] p-6 rounded-full font-medium">Scroll down<i class="fa-solid fa-arrow-down-long ml-3"></i></button>
        </div>
      </div>
      <div class="mt-20 flex justify-between">
        <div class="flex h-40">
          <p class=" text-white font-medium w-32">Start Your Own Goals Or Use</p>
          <img class="self-end" src="{{ asset('images/arrow1.png') }}" alt="arrow">
        </div>
        <p class="font-medium w-60 text-white">Hello, Welcome to SwiftGoals, an online product focusing on brand identity, advertising, and no-code instruments.</p>
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
        <p class="w-80">At SwiftGoals, our mission is to be your trusted ally in achieving your aspirations with effortless efficiency. Our meticulously curated selection of website templates is designed to propel you towards your goals with ease.</p>
        <a href="{{route('explore')}}" class="font-medium self-end group cursor-pointer">More <i class="fa-solid fa-arrow-right ml-2 group-hover:mr-3 group-hover:ml-0  transition-all duration-200 ease-in"></i></a>
      </div>
    </div>
    <!-- templates cards section -->

    <section class="mt-10 mb-10 flex flex-wrap justify-between gap-10 px-32">
      @foreach ($templates as $template)
      <div class="w-64 relative rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark">
        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init data-twe-ripple-color="light">
          <div class="rounded-xl w-full border border-gray-500 h-32" style="background-image: url('{{isset($template->image->path) ? asset('storage/' . $template->image->path) : asset('/images/sam-schooler-E9aetBe2w40-unsplash.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-position: center"></div>
          <a href="{{route('goal.show', $template->id)}}">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
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
          @if($template->mainGoal != null)
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
          <img class="rounded-full bg-gray-600 h-10" src="{{ asset('images/default_profile.png') }}" alt="d">
        </div>
      </div>
      @endforeach
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
          <a href="{{ route('goal.index') }}" class="font-medium self-center group cursor-pointer">Create Your Own <i class="fa-solid fa-arrow-right ml-2 group-hover:mr-3 group-hover:ml-0  transition-all duration-200 ease-in"></i></a>
        </div>
        <ul class="flex justify-between">
          <div>
            <li class="mb-16">
              <h5 class="font-medium text-2xl mb-5">Strategic Planning</h5>
              <p class="w-96">Strategize effectively for success with our comprehensive planning solutions. Collaborating closely, we'll develop strategic roadmaps tailored to your objectives, ensuring every step aligns with your overarching goals. From setting SMART objectives to outlining actionable plans, we empower you to navigate the path to success with clarity and confidence.</p>
            </li>
            <li>
              <h5 class="font-medium text-2xl mb-5">Goal Setting and Tracking</h5>
              <p class="w-96">Set, track, and achieve your objectives with precision using our goal-setting tools. Together, we'll define clear and measurable goals, breaking them down into manageable tasks and milestones.</p>
            </li>
          </div>
          <div>
            <li class="mb-16">
              <h5 class="font-medium text-2xl mb-5">Performance Optimization</h5>
              <p class="w-96">Optimize your performance and maximize your productivity with our performance enhancement strategies. Through data-driven insights and continuous improvement techniques, we'll identify areas for growth and refine your approach to goal attainment.</p>
            </li>
            <li>
              <h5 class="font-medium text-2xl mb-5">Accountability and Support</h5>
              <p class="w-96">Stay accountable and motivated on your journey towards success with our supportive community and accountability features. Whether through peer support networks, mentorship programs, or personalized coaching sessions, we provide the encouragement and guidance you need to stay on track and overcome challenges</p>
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
  <x-footer />
</x-main-layout>