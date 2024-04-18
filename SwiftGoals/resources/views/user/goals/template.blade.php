<x-goal-layout>
  <!-- @if($goal->isTemplate == 1 && $goal->userID == Auth::user()->id)
  <div class=" w-full flex justify-center items-center -mb-10 pt-6">
    <svg class="w-4 h-4 me-2.5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <h3 class="italic font-bold text-gray-500 text-md ">If you want to edit this template <a href="{{ route('goal.show', $goal->id) }}" class="">Click Here</a></h3>
  </div>
  @endif -->
  <div class="mt-16">
    <div class="mx-10 flex justify-between text-blue-700">
      <a href="{{ route('goal.index') }}">
        <i class="fa-solid fa-backward fa-2xl"></i>
      </a>
      <a class="cursor-pointer" onclick="toggleDrawer();">
        <i class="fa-solid fa-ellipsis fa-2xl"></i>
      </a>
    </div>
    <div id='mainGoal' class="h-auto mx-auto text-white w-7/12 border-2 text-3xl text-center border-blue-700 shadow-2xl border-opacity-75 py-5 rounded-full bg-transparent backdrop-filter backdrop-blur-md bg-opacity-25">
      {{ $goal->title }}
    </div>
  </div>
  <!-- off canvas -->
  <div id="drawer-right-example" class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-blue-700 w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-right-label">
    <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-white dark:text-gray-400"><svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
      </svg>Manage Goal</h5>
    <button type="button" onclick="toggleDrawer();" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
      <span class="sr-only">Close menu</span>
    </button>
    <ul class="space-y-2 font-medium">
      <li>
        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
          <svg class="w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
          </svg>
          <span class="ms-3">Edit Background</span>
        </a>
      </li>
      @if($goal->isTemplate == 0)
      <li>
        <a onclick="TemplateDropdown();" class="flex cursor-pointer items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
          <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
          </svg>
          <span class="flex-1 ms-3 whitespace-nowrap">Make Template</span>
        </a>
        <div id="confirmTemplateDropdown" class="z-10 w-full hidden mx-auto bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="makeTemplateButton">
            <li>
              <form method="post">
                @csrf
                @method('patch')
                <button onclick="makeTemplate('{{$goal->id}}', this);" class="block w-full px-4 py-2 hover:bg-gray-100 hover:text-rgreen-600 hover:font-bold transition-all duration-300 dark:hover:bg-gray-600 dark:hover:text-white">Confirm</button>
              </form>
            </li>
            <li>
              <button onclick="TemplateDropdown();" class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cancel</button>
            </li>
          </ul>
        </div>
      </li>
      @endif
      <li>
        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
          <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
            <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
            <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
          </svg>
          <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="flex justify-center">
    <div class="">
      <img class="" src="{{ asset('images/arrow_left.png') }}" alt="">
    </div>
    <div>
      <img src="{{ asset('images/arrow_middle.png') }}" alt="">
    </div>
    <div class="">
      <img src="{{ asset('images/arrow_right.png') }}" alt="">
    </div>
  </div>
  <section class="px-16 pb-12 flex justify-between">
    <div id='priority1' class="h-auto relative min-h-96 overflow-hidden py-16 w-64 border-2 border-blue-700 shadow-2xl border-opacity-75 p-3 space-y-3 rounded-3xl bg-transparent backdrop-filter backdrop-blur-md bg-opacity-25">
      <div class="absolute top-0 font-bold text-white left-0 w-full text-lg h-auto text-center rounded-b-lg px-2 py-5 rounded-lg shadow shadow-blue-700" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/geometric-seamless-pattern-of-corners-and-circles-marine-motif-seamless-abstract-pattern-in-blue-tones-free-vector.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
        high-priority
      </div>
      @foreach($highPrioritysteps as $step)
      <div id="{{$step->id}}" class="relative w-full group h-auto pr-6 text-start bg-white text-gray-700 p-2 rounded-lg shadow shadow-blue-700 transition-all stepForm" draggable="true">
        <div class="stepDiv">{{$step->title}}</div>
        <button type="button" class="hidden submitBTN">save</button>
        <a onclick="showStep(this)" data-step-id="{{$step->id}}" class="absolute right-2 bottom-1 opacity-0 group-hover:opacity-100 text-gray-400 cursor-pointer transition-all duration-300 ease-in">
          <i class="fa-regular fa-eye fa-lg ml-4"></i>
        </a>
      </div>
      @endforeach
    </div>
    <div id="test" class="fixed z-50"></div>
    <div id='priority2' class="h-auto relative overflow-hidden min-h-96 py-16 w-64 border-2 border-blue-700 shadow-2xl border-opacity-75 p-3 space-y-3 rounded-3xl bg-transparent backdrop-filter backdrop-blur-md bg-opacity-25">
      <div class="absolute top-0 left-0 w-full font-bold text-white h-auto text-center rounded-b-lg text-lg px-2 py-5 rounded-lg shadow shadow-blue-700" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/geometric-seamless-pattern-of-corners-and-circles-marine-motif-seamless-abstract-pattern-in-blue-tones-free-vector.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
        medium-priority
      </div>
      @foreach($mediumPrioritysteps as $step)
      <div id="{{$step->id}}" class="relative w-full group h-auto pr-6 text-start bg-white text-gray-700 p-2 rounded-lg shadow shadow-blue-700 transition-all stepForm" draggable="true">
        <div class="stepDiv">{{$step->title}}</div>
        <button type="button" class="hidden submitBTN">save</button>
        <a onclick="showStep(this)" data-step-id="{{$step->id}}" class="absolute right-2 bottom-1 opacity-0 group-hover:opacity-100 text-gray-400 cursor-pointer transition-all duration-300 ease-in">
          <i class="fa-regular fa-eye fa-lg ml-4"></i>
        </a>
      </div>
      @endforeach
    </div>
    <div id='priority3' class="h-auto overflow-hidden relative min-h-96 py-16 w-64 border-2 border-blue-700 shadow-2xl border-opacity-75 p-3 space-y-3 rounded-3xl bg-transparent backdrop-filter backdrop-blur-md bg-opacity-25">
      <div class="absolute top-0 left-0 w-full font-bold text-white h-auto text-center rounded-b-lg text-lg px-2 py-5 rounded-lg shadow shadow-blue-700" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/geometric-seamless-pattern-of-corners-and-circles-marine-motif-seamless-abstract-pattern-in-blue-tones-free-vector.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
        low-priority
      </div>
      @foreach($lowPrioritysteps as $step)
      <div id="{{$step->id}}" class="relative w-full group h-auto pr-6 text-start bg-white text-gray-700 p-2 rounded-lg shadow shadow-blue-700 transition-all stepForm" draggable="true">
        <div class="stepDiv">{{$step->title}}</div>
        <button type="button" class="hidden submitBTN">save</button>
        <a onclick="showStep(this)" data-step-id="{{$step->id}}" class="absolute right-2 bottom-1 opacity-0 group-hover:opacity-100 text-gray-400 cursor-pointer transition-all duration-300 ease-in">
          <i class="fa-regular fa-eye fa-lg ml-4"></i>
        </a>
      </div>
      @endforeach
    </div>
  </section>
  <div id="pop-up-section">
    <!-- modal goes here with ajax -->
  </div>

  <div id="buttonPlace" class="flex w-full justify-end gap-10 px-10">
    @if($goal->userID != Auth::user()->id && $goal->isTemplate == 1)
    <button onclick="copyTemplate(this, '{{$goal->id}}');" class="overflow-hidden relative mb-10 w-32 p-2 h-12 bg-white text-black border-none rounded-md text-md font-bold cursor-pointer relative z-10 group">
      Use Template
      <span class="absolute w-36 h-32 -top-8 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
      <span class="absolute w-36 h-32 -top-8 -left-2 bg-blue-400 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
      <span class="absolute w-36 h-32 -top-8 -left-2 bg-blue-600 rotate-12 transform scale-x-0 group-hover:scale-x-50 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
      <span class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 text-white absolute top-2.5 left-3 z-10">Create Goal!</span>
    </button>
    <button class="overflow-hidden relative w-32 py-2 h-12 bg-white text-black border-none rounded-md text-md font-bold cursor-pointer relative z-10 group">
      Add To
      <span class="absolute w-36 h-32 -top-8 -left-2 bg-red-200 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-right"></span>
      <span class="absolute w-36 h-32 -top-8 -left-2 bg-red-400 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-right"></span>
      <span class="absolute w-36 h-32 -top-8 -left-2 bg-red-600 rotate-12 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-right"></span>
      <span class="group-hover:opacity-100 group-hover:duration-1000 duration-100 text-white opacity-0 absolute top-3 left-6 z-10">Favorites!</span>
    </button>
    @endif
  </div>

  <!-- <script src="{{ asset('js/goals.js') }}"></script> -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    // Function to add a new task
    function addTask(task) {
      const todoList = document.getElementById("todo-list");
      const li = document.createElement("li");
      li.className =
        "border-b border-gray-200 flex items-center justify-between py-4";
      li.innerHTML = `
                  <div class="flex items-center w-full">
                    <input disabled type="checkbox" class="mr-2 tinyStep cursor-not-allowed">
                    <div class="flex justify-between w-full mr-3">
                      <span class="span">${task.title}</span>
                    </div>
                  </div>
                  <div class="flex gap-3">
                    <div>
                      <button class="text-red-500 hover:text-red-700
                      mr-2 delete-btn cursor-not-allowed"><i class="fa-solid fa-eraser fa-lg"></i></button>
                    </div>
                  </div>
              `;
      todoList.appendChild(li);
    }

    /////////////////////////////////////////////

    function copyTemplate(button, goalID) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      jQuery.ajax({
        url: "{{ route('template.copy', ':id') }}".replace(':id', goalID),
        type: 'post',

        success: function(result) {
          window.location.href = 'http://127.0.0.1:8000/goal'
        }
      })
    }

    ////////////////////////////////////////

    function showStep(button) {
      var stepID = button.getAttribute('data-step-id');
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      jQuery.ajax({
        url: `{{ route('step.show', ':id') }}`.replace(':id', stepID),
        type: 'get',

        success: function(result) {
          let modal = `
            <div id="modal${result.step.id}" class="modal fixed w-full h-100 inset-0 z-50 overflow-y-scroll justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
      <div class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-xl mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
          <!--Title-->
          <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">${result.step.title}</p>
            <div onclick="modalClose(${result.step.id})" class="modal-close cursor-pointer z-50">
              <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                </path>
              </svg>
            </div>
          </div>
          <!--Body-->
          <div class="flex justify-around gap-5">
            <div class="my-5">
              <div class="">
                <label for="stepDescription" class="block text-gray-500 text-sm font-bold italic mb-2">Description</label>
                ${result.step.description ? `
                <div type="text" id="stepDescription" name="stepDescription" cols="50" class="w-72 h-24 border-none bg-gray-300 text-black p-2 rounded-lg transition-all duration-300">${result.step.description}</div>
                ` : 
                `<div type="text" id="stepDescription" name="stepDescription" cols="50" class="w-72 h-24 border-none bg-gray-300 text-black p-2 rounded-lg italic opacity-60 font-medium transition-all duration-300">This Step Has No Description</div>
                  `}
                </div>
              <hr class="w-9/12 h-1 my-5 mx-auto bg-gray-500 rounded dark:bg-gray-700">
              <div>
                <div class="flex justify-between">
                  <span class="text-gray-500 text-sm font-bold italic mb-2">Tiny Steps</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                  <div id="progress-bar" class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full transition-all duration-300 ease-in-out" style="width: 10%"> 0%</div>
                </div>   
                <ul id="todo-list">
                </ul>
              </div>
            </div>
            <div id="step-settings" class="flex-col w-7/12 my-5 justify-around">
              <span class="text-gray-500 block text-sm font-bold italic mb-2">Step Settings</span>
              ${result.step.dueDate ? 
                `<div id='dateDiv' class="mb-2 w-full">
                  <button class="focus:outline-none cursor-not-allowed px-4 w-full bg-gray-300 p-2 rounded-full text-black hover:bg-green-600 hover:text-white transition-all duration-300 dateBtn">${result.step.dueDate}</button>
                </div>
                <div class="mb-2 w-full">
                  <button class="focus:outline-none cursor-not-allowed px-4 w-full bg-gray-300 p-2 rounded-full text-black hover:bg-blue-600 hover:text-white transition-all duration-300">Update Due Date</button>
                </div>` :
                 `<div class="mb-2 w-full">
                    <button class="focus:outline-none cursor-not-allowed px-4 w-full bg-gray-300 p-2 rounded-full text-black hover:bg-blue-600 hover:text-white transition-all duration-300">Add Due Date</button>
                </div>` }       
              <div class="mb-2 w-full">
                <button class="focus:outline-none cursor-not-allowed px-4 w-full bg-gray-300 p-2 rounded-full text-black hover:bg-red-600 hover:text-white transition-all duration-300">Delete step</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Footer-->
      <!-- <div class="flex justify-end pt-2">
            <button onclick="modalClose(1)" class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
            <button class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button>
          </div> -->
    </div>
            `;
          jQuery('#pop-up-section').html(modal);

          if (result.step.tiny_steps.length > 0) {
            for (var i = 0; i < result.step.tiny_steps.length; i++) {
              addTask(result.step.tiny_steps[i]);
            }
          }
          openModal(result.step.id);
        }
      })

    }

    function toggleDrawer() {
      var drawer = document.getElementById('drawer-right-example');
      drawer.classList.toggle('translate-x-full');
    }

    function dateDropdown(id) {
      var dropdown = document.getElementById(`dateRangeDropdown${id}`);
      dropdown.classList.toggle('hidden');
    }

    /////////////////////////////////////

    const modals = document.querySelectorAll('.modal');
    const closeButton = document.querySelectorAll('.modal-close');

    const modalClose = (id) => {
      var modal = document.getElementById(`modal${id}`);
      modal.classList.remove('fadeIn');
      modal.classList.add('fadeOut');
      setTimeout(() => {
        modal.style.display = 'none';
      }, 500);
    }

    const openModal = (id) => {
      var modal = document.getElementById(`modal${id}`);
      modal.classList.remove('fadeOut');
      modal.classList.add('fadeIn');
      modal.style.display = 'flex';
    }
  </script>

</x-goal-layout>