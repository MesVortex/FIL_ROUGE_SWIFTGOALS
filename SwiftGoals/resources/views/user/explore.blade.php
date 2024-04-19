<x-main-layout>
  <section>
    <div class="relative px-32 z-10 pb-32" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset('images/black-and-white-geometric-pattern-vector-3645907.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
      <x-logo />
      <x-mainNavbar page='explore' />
      <div class="text-center mt-16">
        <h1 class="mb-4 text-3xl font-extrabold text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-sky-500">Templates</span> Swift and Easy.</h1>
        <p class="text-lg font-normal text-gray-300 italic lg:text-xl dark:text-gray-400">hesitant on where to start? check out our templates for a quick heads up</p>
      </div>
      <div class="absolute bottom-0 left-0 -z-10 w-full h-auto -mb-1">
        <svg enable-background="new 0 0 1504 131.3" viewBox="0 0 1504 131.3" xmlns="http://www.w3.org/2000/svg">
          <path d="m877.8 85c139.5 24.4 348 33.5 632.2-48.2-.2 32.5-.3 65-.5 97.4-505.9 0-1011.6 0-1517.5 0 0-33.3 0-66.7 0-100.1 54.2-11.4 129.5-23.9 220-28.2 91-4.3 173.6 1 307.4 18.6 183.2 24.2 295.2 49.4 358.4 60.5z" fill="#fff" />
        </svg>
      </div>
    </div>
  </section>
  <div class="px-32">
    <div class="flex items-center mb-5 justify-between">
      <button onclick="showFilter()" class="flex items-center font-semibold text-3xl hover:text-blue-600 transition-all duration-300 ease-in group">
        <svg class="mr-2 group-hover:text-blue-600 transition-all duration-300 ease-in" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
          <path d="M8.85746 12.5061C6.36901 10.6456 4.59564 8.59915 3.62734 7.44867C3.3276 7.09253 3.22938 6.8319 3.17033 6.3728C2.96811 4.8008 2.86701 4.0148 3.32795 3.5074C3.7889 3 4.60404 3 6.23433 3H17.7657C19.396 3 20.2111 3 20.672 3.5074C21.133 4.0148 21.0319 4.8008 20.8297 6.37281C20.7706 6.83191 20.6724 7.09254 20.3726 7.44867C19.403 8.60062 17.6261 10.6507 15.1326 12.5135C14.907 12.6821 14.7583 12.9567 14.7307 13.2614C14.4837 15.992 14.2559 17.4876 14.1141 18.2442C13.8853 19.4657 12.1532 20.2006 11.226 20.8563C10.6741 21.2466 10.0043 20.782 9.93278 20.1778C9.79643 19.0261 9.53961 16.6864 9.25927 13.2614C9.23409 12.9539 9.08486 12.6761 8.85746 12.5061Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
        </svg>Filter
      </button>
      <p class="font-semibold self-end">Filtering By : <span id="currentFilter" class="italic font-bold text-blue-600">All</span></p>
    </div>
    <div class="flex justify-between overflow-x-hidden h-10">
      <ul id="filterList" class="flex justify-start font-bold gap-8 overflow-x-scroll transform -translate-x-full transition-all duration-300">
        <li class="group">
          <a onclick="filterCategory(0);" class="border-2 cursor-pointer min-w-28 border-gray-400 text-gray-400 text py-5 px-7 rounded-3xl flex flex-col justify-center items-center hover:text-blue-600 hover:border-blue-600 transition-all duration-150 ease-in">
            <svg class="text-gray-300 group-hover:text-blue-600 transition-all duration-150 ease-in" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
              <path d="M18.058 8.53645L17.058 7.92286C16.0553 7.30762 15.554 7 15 7C14.446 7 13.9447 7.30762 12.942 7.92286L11.942 8.53645C10.9935 9.11848 10.5192 9.40949 10.2596 9.87838C10 10.3473 10 10.9129 10 12.0442V17.9094C10 19.8377 10 20.8019 10.5858 21.4009C11.1716 22 12.1144 22 14 22H16C17.8856 22 18.8284 22 19.4142 21.4009C20 20.8019 20 19.8377 20 17.9094V12.0442C20 10.9129 20 10.3473 19.7404 9.87838C19.4808 9.40949 19.0065 9.11848 18.058 8.53645Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M14 7.10809C13.3612 6.4951 12.9791 6.17285 12.4974 6.05178C11.9374 5.91102 11.3491 6.06888 10.1725 6.3846L8.99908 6.69947C7.88602 6.99814 7.32949 7.14748 6.94287 7.5163C6.55624 7.88513 6.40642 8.40961 6.10679 9.45857L4.55327 14.8971C4.0425 16.6852 3.78712 17.5792 4.22063 18.2836C4.59336 18.8892 6.0835 19.6339 7.5 20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M14.4947 10C15.336 9.44058 16.0828 8.54291 16.5468 7.42653C17.5048 5.12162 16.8944 2.75724 15.1836 2.14554C13.4727 1.53383 11.3091 2.90644 10.3512 5.21135C10.191 5.59667 10.0747 5.98366 10 6.36383" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
            All</a>
        </li>
        @foreach($categories as $category)
        <li class="group">
          <a onclick="filterCategory('{{ $category->id }}');" class="border-2 cursor-pointer min-w-28 border-gray-400 text-gray-400 text py-5 px-7 rounded-3xl flex flex-col justify-center items-center hover:text-blue-600 hover:border-blue-600 transition-all duration-150 ease-in">
            <svg class="text-gray-400 group-hover:text-blue-600 transition-all duration-150 ease-in" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
              <path d="M18.058 8.53645L17.058 7.92286C16.0553 7.30762 15.554 7 15 7C14.446 7 13.9447 7.30762 12.942 7.92286L11.942 8.53645C10.9935 9.11848 10.5192 9.40949 10.2596 9.87838C10 10.3473 10 10.9129 10 12.0442V17.9094C10 19.8377 10 20.8019 10.5858 21.4009C11.1716 22 12.1144 22 14 22H16C17.8856 22 18.8284 22 19.4142 21.4009C20 20.8019 20 19.8377 20 17.9094V12.0442C20 10.9129 20 10.3473 19.7404 9.87838C19.4808 9.40949 19.0065 9.11848 18.058 8.53645Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M14 7.10809C13.3612 6.4951 12.9791 6.17285 12.4974 6.05178C11.9374 5.91102 11.3491 6.06888 10.1725 6.3846L8.99908 6.69947C7.88602 6.99814 7.32949 7.14748 6.94287 7.5163C6.55624 7.88513 6.40642 8.40961 6.10679 9.45857L4.55327 14.8971C4.0425 16.6852 3.78712 17.5792 4.22063 18.2836C4.59336 18.8892 6.0835 19.6339 7.5 20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M14.4947 10C15.336 9.44058 16.0828 8.54291 16.5468 7.42653C17.5048 5.12162 16.8944 2.75724 15.1836 2.14554C13.4727 1.53383 11.3091 2.90644 10.3512 5.21135C10.191 5.59667 10.0747 5.98366 10 6.36383" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
            {{ $category->name }}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <section id="templates" class="my-10 px-10 flex flex-wrap justify-around gap-10">
    @foreach ($templates as $template)
    <div class="w-96 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark">
      <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init data-twe-ripple-color="light">
        <img class="rounded-t-3xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/186.jpg" alt="" />
        <a href="{{route('goal.show', $template->id)}}">
          <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
        </a>
        <div class="absolute top-5 right-5 rounded-full bg-[#2A44AB] text-white py-1 px-4">
          <p>{{ $template->categories->name }}</p>
        </div>
      </div>
      <div class="p-6 text-surface bg-[#2A44AB] dark:text-white rounded-b-3xl shadow-2xl">
        <h5 class="mb-2 text-xl text-white font-medium leading-tight">{{ $template->title }}</h5>
        @if($template->description != null)
        <p class="mb-4 text-base text-white">
          {{ $template->description }}
        </p>
        @else
        <p class="mb-4 text-base text-white">
          this user is lazy and didn't put any description yet
        </p>
        @endif
      </div>
      <div class="flex justify-between p-5">
        <div class="flex">
          <img class="rounded-full bg-gray-600 h-6" src="{{ asset('images/default_profile.png') }}" alt="d">
          <p class="ml-3">{{ $template->users->name }}</p>
        </div>
        <div class="flex text-[#666666]">
          <span class="mr-3"><i class="fa-solid fa-clone mr-1"></i>1k</span>
          <span><i class="fa-brands fa-gratipay mr-1"></i>1.4k</span>
        </div>
      </div>
    </div>
    @endforeach
  </section>
  <x-footer />

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    function showFilter() {
      var list = document.getElementById("filterList");
      if(list.classList.contains("-translate-x-full")) {
        list.classList.remove("-translate-x-full");
        list.classList.add("translate-x-0");
        list.parentElement.style.height = 'auto';
      }else if(list.classList.contains("translate-x-0")) {
        list.classList.remove("translate-x-0");
        list.classList.add("-translate-x-full");
        list.parentElement.style.height = '0px';
      }
    }

    function filterCategory(id){
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
      })

      jQuery.ajax({
        url: "{{ route('template.filter', ':id') }}".replace(':id', id),
        type: 'get',

        success: function(result) {
          document.getElementById("templates").innerHTML = "";
          for(var i = 0; i < result.templates.length; i++) {
            createTemplate(result.templates[i]);
          }
          if(result.currentFilter == 'All') {
            document.getElementById('currentFilter').innerHTML = 'All';
          }
        }
      })
    }

    function createTemplate(template) {
      const card = document.createElement("div");
      card.setAttribute('class', 'w-96 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark'); 
      const cards = `
      <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init data-twe-ripple-color="light">
        <img class="rounded-t-3xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/186.jpg" alt="" />
        <a>
          <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
        </a>
        <div class="absolute top-5 right-5 rounded-full bg-[#2A44AB] text-white py-1 px-4">
          <p class="">${template.categories.name}</p>
        </div>
      </div>
      <div class="p-6 text-surface bg-[#2A44AB] dark:text-white rounded-b-3xl shadow-2xl">
        <h5 class="mb-2 text-xl text-white font-medium leading-tight">${template.title}</h5>
        ${template.description ? `
        <p class="mb-4 text-base text-white">
          ${template.description}
        </p>` : 
        `<p class="mb-4 text-base text-white">
          this user is lazy and didn't put any description yet
        </p>`}
      </div>
      <div class="flex justify-between p-5">
        <div class="flex">
          <img class="rounded-full bg-gray-600 h-6" src="{{ asset('images/default_profile.png') }}" alt="">
          <p class="ml-3">${template.users.name}</p>
        </div>
        <div class="flex text-[#666666]">
          <span class="mr-3"><i class="fa-solid fa-clone mr-1"></i>1k</span>
          <span><i class="fa-brands fa-gratipay mr-1"></i>1.4k</span>
        </div>
      </div>
    `;
    card.innerHTML = cards;
    document.getElementById('templates').appendChild(card);
    document.getElementById('currentFilter').innerHTML = `${template.categories.name}`;
    }
  </script>
</x-main-layout>