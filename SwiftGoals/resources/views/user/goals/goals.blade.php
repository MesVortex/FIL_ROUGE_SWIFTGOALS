<x-main-layout>
  <x-goalsNavbar page='personal goals' />
  <div class="w-auto h-screen ml-32 py-14">
    <h1 class="group mb-16 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Start Achieving Your Go<span class="underline underline-offset-3 decoration-8 decoration-blue-100 group-hover:decoration-blue-600 text-gray-100 group-hover:text-gray-900 transition-all ease-in duration-500">als and ambitions</span></h1>
    <section class="w-full flex flex-wrap justify-around gap-10">
      @foreach($goals as $goal)
      <div class="w-full lg:flex h-28 max-w-sm overflow-hidden rounded-2xl border border-grey-light group shadow-xl">
        <div class="h-40 lg:h-auto lg:w-32 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l lg:rounded-r-full text-center overflow-hidden" style="background-image: url('{{ asset('images/ronnie-overgoor-EdKCckXXRCI-unsplash.jpg') }}')" title="goal">
        </div>
        <div class="bg-white p-4 flex flex-col justify-around items-center leading-normal w-full">
          <div class="">
            <p class="text-3xl text-grey-dark flex items-center">
              {!! Str::limit($goal->title, 10, ' ...') !!}
            </p>
            <p class="flex items-center">
              {!! Str::limit($goal->mainGoal, 20, ' ...') !!}
            </p>
          </div>
          <div class="justify-around opacity-0 flex gap-10 group-hover:opacity-100 transition-all duration-300 ease-in">
            <a href="">
              <i class="fa-solid fa-map-pin"></i>
            </a>
            <a href="{{ route('goal.show', $goal->id) }}">
              <i class="fa-solid fa-wand-magic-sparkles"></i>
            </a>
            <form action="{{ route('goal.destroy', $goal->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit">
                <i class="fa-solid fa-square-minus text-red-600"></i>
              </button>
            </form>
          </div>
        </div>
        <!-- Progress Vertical -->
        <!-- <div class="flex flex-col flex-nowrap justify-end place-self-center mr-3 w-2 h-32 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
          <div class="rounded-full overflow-hidden bg-blue-600" style="height: 90%"></div>
        </div> -->
        <!-- End Progress Vertical -->
      </div>
      @endforeach
      <!-- add goal -->
      <div class="h-28 w-full max-w-sm border-2 border-dashed flex items-center justify-center hover:bg-gray-100 transition-all duration-300 ease-in rounded-2xl relative">
        <i class="fa-solid fa-plus fa-2xl text-gray-500"></i>
        <a onclick="toggleDrawer();" class="cursor-pointer">
          <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
        </a>
      </div>
      <!-- drawer -->
      <div id="drawerBackground" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden"></div>
      <div id="drawer-form" class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800" aria-labelledby="drawer-form-label">
        <h5 id="drawer-label" class="inline-flex items-center mb-6 text-base font-semibold text-gray-500 uppercase dark:text-gray-400">New Goal</h5>
        <button type="button" onclick="toggleDrawer();" data-drawer-hide="drawer-form" aria-controls="drawer-form" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close menu</span>
        </button>
        <form class="mb-6" method="POST" action="{{ route('goal.store') }}">
          @csrf
          @method('POST')
          <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="learning piano" required />
          </div>
          <div class="mb-6">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea id="description" name="mainGoal" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="becoming the the best piano player"></textarea>
          </div>
          <button type="submit" class="text-white justify-center flex items-center bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><svg class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M18 2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2ZM2 18V7h6.7l.4-.409A4.309 4.309 0 0 1 15.753 7H18v11H2Z" />
              <path d="M8.139 10.411 5.289 13.3A1 1 0 0 0 5 14v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .7-.288l2.886-2.851-3.447-3.45ZM14 8a2.463 2.463 0 0 0-3.484 0l-.971.983 3.468 3.468.987-.971A2.463 2.463 0 0 0 14 8Z" />
            </svg>Create Goal</button>
        </form>
      </div>
    </section>
  </div>
  <script>
    function toggleDrawer() {
      var drawer = document.getElementById('drawer-form');
      var drawerBackground = document.getElementById('drawerBackground');
      
      drawer.classList.toggle('translate-x-full');
      drawerBackground.classList.toggle('hidden');
    }
  </script>
</x-main-layout>