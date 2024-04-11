<x-goal-layout>
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
      <li>
        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
          <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
          </svg>
          <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
        </a>
      </li>
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
      <div class="absolute top-0 left-0 w-full h-auto text-center rounded-b-2xl bg-white text-balck px-2 py-5 rounded-lg shadow shadow-blue-700">
        Priority level 1
      </div>
      @foreach($steps as $step)
      <form class="relative w-full group h-auto pr-6 text-start bg-white text-gray-700 p-2 rounded-lg shadow shadow-blue-700 transition-all stepForm" draggable="true">
        @csrf
        @method('PUT')
        <div ondblclick="getDivContent(this);" class="stepDiv">{{$step->title}}</div>
        <input type="hidden" name="title" value="{{$step->title}}" class="step">
        <input type="hidden" name="goalID" value="{{ $goal->id }}">
        <input type="hidden" name="priority" value="1">
        <input type="hidden" name="stepID" value="{{$step->id}}">
        <a onclick="openModal(1)" class="absolute right-2 bottom-1 opacity-0 group-hover:opacity-100 text-gray-400 cursor-pointer transition-all duration-300 ease-in">
          <i class="fa-regular fa-eye fa-lg ml-4"></i>
        </a>
        <button onclick="save(this);" class="hidden submitBTN">save</button>
      </form>
      <!-- step pop-up -->
      <div id="modal1" class="modal hidden fixed w-full h-100 inset-0 z-50 overflow-hidden justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
        <div class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">
          <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
              <p class="text-2xl font-bold">Step Info</p>
              <div onclick="modalClose(1)" class="modal-close cursor-pointer z-50">
                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                  <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                  </path>
                </svg>
              </div>
            </div>
            <!--Body-->
            <div class="my-5">
              <p>Je vais concevoir la maquette de page Home en mode Desktop et Smartphone.</p>
            </div>
            <!--Footer-->
            <div class="flex justify-end pt-2">
              <button onclick="modalClose(1)" class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
              <button class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <form class="absolute bottom-2 left-1/2 -translate-x-1/2 w-11/12 bg-transparent hover:bg-gray-300 text-white py-2 rounded-lg border-2 border-dashed border-gray-500 text-center transition-all" draggable="true">
        @csrf
        @method('POST')
        <input type="hidden" name="title" value="new Step" class="step">
        <input type="hidden" name="goalID" value="{{ $goal->id }}">
        <input type="hidden" name="priority" value="1">
        <button onclick="store(this, 1);" class="flex items-center h-6">
          <i class="fa-solid fa-plus text-gray-500 absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden"></i>
        </button>
      </form>
    </div>
    <div id="test" class="fixed z-50"></div>
    <div id='priority2' class="h-auto relative overflow-hidden min-h-96 py-16 w-64 border-2 border-blue-700 shadow-2xl border-opacity-75 p-3 space-y-3 rounded-3xl bg-transparent backdrop-filter backdrop-blur-md bg-opacity-25">
      <div class="absolute top-0 left-0 w-full h-auto text-center rounded-b-2xl bg-white text-balck px-2 py-5 rounded-lg shadow shadow-blue-700">
        Priority level 2
      </div>
      <form class="absolute bottom-2 left-1/2 -translate-x-1/2 w-11/12 bg-transparent hover:bg-gray-300 text-white py-2 rounded-lg border-2 border-dashed border-gray-500 text-center transition-all" draggable="true">
        @csrf
        @method('POST')
        <input type="hidden" name="title" value="new Step" class="step">
        <input type="hidden" name="goalID" value="{{ $goal->id }}">
        <input type="hidden" name="priority" value="2">
        <button onclick="store(this, 2);" class="flex items-center h-6">
          <i class="fa-solid fa-plus text-gray-500 absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden"></i>
        </button>
      </form>
    </div>
    <div id='priority3' class="h-auto overflow-hidden relative min-h-96 py-16 w-64 border-2 border-blue-700 shadow-2xl border-opacity-75 p-3 space-y-3 rounded-3xl bg-transparent backdrop-filter backdrop-blur-md bg-opacity-25">
      <div class="absolute top-0 left-0 w-full h-auto text-center rounded-b-2xl bg-white text-balck px-2 py-5 rounded-lg shadow shadow-blue-700">
        Priority level 3
      </div>
      <form class="absolute bottom-2 left-1/2 -translate-x-1/2 w-11/12 bg-transparent hover:bg-gray-300 text-white py-2 rounded-lg border-2 border-dashed border-gray-500 text-center transition-all" draggable="true">
        @csrf
        @method('POST')
        <input type="hidden" name="title" value="new Step" class="step">
        <input type="hidden" name="goalID" value="{{ $goal->id }}">
        <input type="hidden" name="priority" value="3">
        <button onclick="store(this, 3);" class="flex items-center h-6">
          <i class="fa-solid fa-plus text-gray-500 absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden"></i>
        </button>
      </form>
    </div>
  </section>

  <!-- <script src="{{ asset('js/goals.js') }}"></script> -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    function toggleDrawer() {
      var drawer = document.getElementById('drawer-right-example');
      drawer.classList.toggle('translate-x-full');
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

    //////////////////////////////////////////////

    let steps = document.getElementsByClassName("stepForm");
    let priority1 = document.getElementById("priority1");
    let priority2 = document.getElementById("priority2");
    let priority3 = document.getElementById("priority3");

    for (step of steps) {
      step.addEventListener("dragstart", function(event) {
        let selectedStep = event.target;

        priority1.addEventListener("dragover", function(e) {
          e.preventDefault();
        });
        priority2.addEventListener("dragover", function(e) {
          e.preventDefault();
        });
        priority3.addEventListener("dragover", function(e) {
          e.preventDefault();
        });

        priority1.addEventListener("drop", function(e) {
          if (selectedStep.parentNode !== priority1) {
            selectedStep.parentNode.removeChild(selectedStep);
            priority1.appendChild(selectedStep);
            step.querySelector("input[name='priority']").value = 1;
            // save(step.querySelector('.submitBTN'));
          }
        });

        priority2.addEventListener("drop", function(e) {
          if (selectedStep.parentNode !== priority2) {
            selectedStep.parentNode.removeChild(selectedStep);
            priority2.appendChild(selectedStep);
            step.querySelector("input[name='priority']").value = 2;
            // save(step.querySelector('.submitBTN'));
          }
        });

        priority3.addEventListener("drop", function(e) {
          if (selectedStep.parentNode !== priority3) {
            selectedStep.parentNode.removeChild(selectedStep);
            priority3.appendChild(selectedStep);
            step.querySelector("input[name='priority']").value = 3;
            // save(step.querySelector('.submitBTN'));
          }
        });

      });
      // step.addEventListener("dragstart", handleDragStart);

      // step.addEventListener("dblclick", function (e) {
      //     changeToInput(e.target);
      // });
    }

    //////////////////////////////////////////////

    function getDivContent(div) {
      var closestForm = div.closest('form');
      if (closestForm) {
        var closestInput = closestForm.querySelector('.step');
        var closestBTN = closestForm.querySelector('.submitBTN');
        closestInput.type = 'text';
        closestInput.value = div.textContent;
        div.style.display = 'none';
        closestBTN.style.display = 'block';
      }
    }

    //////////////////////////////////////////////

    function getInputValue(input) {
      var closestForm = input.closest('form');
      if (closestForm) {
        var closestDiv = closestForm.querySelector('.stepDiv');
        var closestBTN = closestForm.querySelector('.submitBTN');
        input.type = 'hidden';
        closestDiv.textContent = input.value;
        closestDiv.style.display = 'block';
        closestBTN.style.display = 'none';
      }
    }

    function createStep(storedStep, priority) {
      var newForm = document.createElement("form");
      newForm.setAttribute(
        "class",
        "relative w-full group h-auto pr-6 text-start bg-white text-gray-700 p-2 rounded-lg shadow shadow-blue-700 transition-all stepForm"
      );
      newForm.setAttribute("draggable", "true");

      let newStep = `
        @csrf
        @method('PUT')
        <div ondblclick="getDivContent(this);" class="stepDiv">${storedStep.title}</div>
        <input type="hidden" name="title" value="${storedStep.title}" class="step">
        <input type="hidden" name="goalID" value="{{ $goal->id }}">
        <input type="hidden" name="priority" value="1">
        <input type="hidden" name="stepID" value="${storedStep.id}">
        <a onclick="openModal(1)" class="absolute right-2 bottom-1 opacity-0 group-hover:opacity-100 text-gray-400 cursor-pointer transition-all duration-300 ease-in">
          <i class="fa-regular fa-eye fa-lg ml-4"></i>
        </a>
        <button onclick="save(this);" class="hidden submitBTN">save</button>`;

      newForm.innerHTML = newStep;

      var priorityDiv = document.getElementById(`priority${priority}`);
      priorityDiv.appendChild(newForm);

      // newDiv.addEventListener("dragstart", handleDragStart);
      // newDiv.addEventListener("dblclick", function(e) {
      //   changeToInput(e.target);
      // });

      //   let html = `<div id="modal3" class="modal hidden fixed w-full h-100 inset-0 z-50 overflow-hidden justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
      // <div class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">
      //   <div class="modal-content py-4 text-left px-6">
      //     <!--Title-->
      //     <div class="flex justify-between items-center pb-3">
      //       <p class="text-2xl font-bold">Step Info</p>
      //       <div onclick="modalClose(3)" class="modal-close cursor-pointer z-50">
      //         <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
      //           <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
      //           </path>
      //         </svg>
      //       </div>
      //     </div>
      //     <!--Body-->
      //     <div class="my-5">
      //       <p>new step</p>
      //     </div>
      //     <!--Footer-->
      //     <div class="flex justify-end pt-2">
      //       <button onclick="modalClose(3)" class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
      //       <button class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button>
      //     </div>
      //   </div>
      // </div>
      // </div>`;

      //   document.getElementById("test").innerHTML = html;
    }
  </script>

  <script type="text/javascript">
    function save(button) {
      var form = button.closest('form');
      var input = form.querySelector('.step');
      var submitEvent = new Event('submit', {
        bubbles: true,
        cancelable: true,
      });
      form.dispatchEvent(submitEvent);
      $(form).on('submit', function(event) {
        event.preventDefault();

        jQuery.ajax({
          url: `{{ route('step.update') }}`,
          data: jQuery(form).serialize(),
          type: 'put',

          success: function(result) {
            console.log(result.step);
            // $('#goalAdded').css('display', 'flex');
            // jQuery('#alertMessage').html(result.success);
            // jQuery('#goals').append();
            // jQuery('#addGoal')[0].reset();
            getInputValue(input);
          }
        })

      });
    }

    function store(button) {
      var form = button.closest('form');
      $(form).on('submit', function(event) {
        event.preventDefault();

        jQuery.ajax({
          url: `{{ route('step.store') }}`,
          data: jQuery(form).serialize(),
          type: 'post',

          success: function(result) {
            console.log(result.step);
            // $('#goalAdded').css('display', 'flex');
            // jQuery('#alertMessage').html(result.success);
            // jQuery('#goals').append();
            // jQuery('#addGoal')[0].reset();
            createStep(result.step, result.step.priority);
          }
        })

      });
    }
  </script>

</x-goal-layout>