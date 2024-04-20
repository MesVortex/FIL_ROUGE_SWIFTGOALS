<x-goal-layout :backgroundImage="isset($goal->image) ? $goal->image->path : null">
  <div id="successAlert" class="bg-teal-50 border-t-2 hidden border-teal-500 rounded-lg p-4 dark:bg-teal-800/30 transition-all duration-300" role="alert">
    <div class="flex">
      <div class="flex-shrink-0">
        <!-- Icon -->
        <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
            <path d="m9 12 2 2 4-4"></path>
          </svg>
        </span>
        <!-- End Icon -->
      </div>
      <div class="ms-3">
        <h3 id="alertTitle" class="text-gray-800 font-semibold dark:text-white">
          Successfully updated.
        </h3>
        <p id="alertMessage" class="text-sm text-gray-700 capitalize dark:text-neutral-400">
          Updated Successfully.
        </p>
      </div>
      <div class="ps-3 ms-auto">
        <div class="-mx-1.5 -my-1.5">
          <button onclick="SuccessAlertToggle();" type="button" class="inline-flex bg-teal-50 rounded-lg p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-teal-50 focus:ring-teal-600 dark:bg-transparent dark:hover:bg-teal-800/50 dark:text-teal-600" data-hs-remove-element="#dismiss-alert">
            <span class="sr-only">Dismiss</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-16">
    <div class="mx-10 flex justify-between text-blue-700">
      <a href="{{ route('goal.index') }}">
        <svg class="text-blue-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="38" height="38" color="#000000" fill="none">
          <path d="M4.80823 9.44118L6.77353 7.46899C8.18956 6.04799 8.74462 5.28357 9.51139 5.55381C10.4675 5.89077 10.1528 8.01692 10.1528 8.73471C11.6393 8.73471 13.1848 8.60259 14.6502 8.87787C19.4874 9.78664 21 13.7153 21 18C19.6309 17.0302 18.2632 15.997 16.6177 15.5476C14.5636 14.9865 12.2696 15.2542 10.1528 15.2542C10.1528 15.972 10.4675 18.0982 9.51139 18.4351C8.64251 18.7413 8.18956 17.9409 6.77353 16.5199L4.80823 14.5477C3.60275 13.338 3 12.7332 3 11.9945C3 11.2558 3.60275 10.6509 4.80823 9.44118Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </a>
      <a class="cursor-pointer" onclick="toggleDrawer();">
        <svg class="text-blue-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" color="#000000" fill="none">
          <path d="M11.9959 12H12.0049" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M15.9998 12H16.0088" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M7.99981 12H8.00879" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z" stroke="currentColor" stroke-width="2" />
        </svg>
      </a>
    </div>
    <div id='mainGoal' class="h-auto mx-auto text-white w-7/12 border-2 text-3xl text-center border-blue-700 shadow-2xl border-opacity-75 py-5 rounded-full bg-transparent backdrop-filter backdrop-blur-md bg-opacity-25">
      {{ $goal->title }}
    </div>
  </div>
  <!-- off canvas -->
  <div id="drawer-right-example" class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-right-label">
    <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-600 dark:text-gray-400">
      <svg class="text-gray-600 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#000000" fill="none">
        <path d="M17.458 9.08015L17.1669 8.56619C16.9468 8.17749 16.8367 7.98314 16.6494 7.90564C16.4622 7.82814 16.2503 7.8893 15.8267 8.0116L15.1071 8.21782C14.8366 8.28127 14.5529 8.24528 14.3059 8.11619L14.1072 7.99956C13.8955 7.86157 13.7326 7.65811 13.6424 7.41896L13.4455 6.82053C13.316 6.42452 13.2512 6.22651 13.0971 6.11325C12.943 6 12.7382 6 12.3287 6H11.6713C11.2618 6 11.057 6 10.9029 6.11325C10.7488 6.22651 10.684 6.42452 10.5545 6.82053L10.3576 7.41896C10.2674 7.65811 10.1045 7.86157 9.89276 7.99956L9.69409 8.11619C9.44713 8.24528 9.16338 8.28127 8.89292 8.21782L8.17329 8.0116C7.74966 7.8893 7.53785 7.82814 7.35056 7.90564C7.16327 7.98314 7.0532 8.17749 6.83305 8.56619L6.54196 9.08015C6.3356 9.4445 6.23243 9.62667 6.25245 9.82061C6.27248 10.0145 6.4106 10.1708 6.68686 10.4834L7.29491 11.175C7.44352 11.3664 7.54903 11.7 7.54903 11.9999C7.54903 12.3 7.44355 12.6335 7.29492 12.8249L6.68686 13.5166L6.68686 13.5166C6.4106 13.8291 6.27248 13.9854 6.25245 14.1793C6.23243 14.3733 6.33561 14.5555 6.54196 14.9198L6.83304 15.4337C7.05319 15.8224 7.16327 16.0168 7.35056 16.0943C7.53785 16.1718 7.74967 16.1106 8.17331 15.9883L8.89289 15.7821C9.1634 15.7186 9.44721 15.7547 9.69419 15.8838L9.89284 16.0004C10.1046 16.1384 10.2674 16.3419 10.3576 16.581L10.5545 17.1795C10.684 17.5755 10.7488 17.7735 10.9029 17.8867C11.057 18 11.2618 18 11.6713 18H12.3287C12.7382 18 12.943 18 13.0971 17.8867C13.2512 17.7735 13.316 17.5755 13.4455 17.1795L13.6424 16.581C13.7326 16.3419 13.8954 16.1384 14.1072 16.0004L14.3058 15.8838C14.5528 15.7547 14.8366 15.7186 15.1071 15.7821L15.8267 15.9883C16.2503 16.1106 16.4621 16.1718 16.6494 16.0943C16.8367 16.0168 16.9468 15.8224 17.167 15.4338L17.167 15.4337L17.458 14.9198C17.6644 14.5555 17.7676 14.3733 17.7475 14.1793C17.7275 13.9854 17.5894 13.8291 17.3131 13.5166L16.7051 12.8249C16.5564 12.6335 16.451 12.3 16.451 11.9999C16.451 11.7 16.5565 11.3664 16.7051 11.175L17.3131 10.4834C17.5894 10.1708 17.7275 10.0145 17.7475 9.82061C17.7676 9.62667 17.6644 9.4445 17.458 9.08015Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
        <circle cx="12" cy="12" r="1.75" stroke="currentColor" stroke-width="1.5" />
        <path d="M19 2V4.85857C17.1962 3.09032 14.7255 2 12 2C6.47715 2 2 6.47715 2 12C2 13.4222 2.29689 14.7751 2.83209 16M5 22V19.1414C6.80375 20.9097 9.27455 22 12 22C17.5228 22 22 17.5228 22 12C22 10.5778 21.7031 9.22492 21.1679 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>Template Menu
    </h5>
    <button type="button" onclick="toggleDrawer();" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="text-gray-600 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
      <span class="sr-only">Close menu</span>
    </button>
    <ul class="space-y-2 font-medium">
      <li>
        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
          <svg class="text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#000000" fill="none">
            <path d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          </svg>
          <span class="ms-3">add favorites</span>
        </a>
      </li>
      <li>
        <a onclick="toggleReportDrawer();" class="flex cursor-pointer items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
          <svg class="text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#000000" fill="none">
            <path d="M15.8785 3L10.2827 3C7.32099 3 5.84015 3 4.92007 3.87868C4 4.75736 4 6.17157 4 9L4.10619 15L15.8785 15C18.1016 15 19.2131 15 19.6847 14.4255C19.8152 14.2666 19.9108 14.0841 19.9656 13.889C20.1639 13.184 19.497 12.3348 18.1631 10.6364L18.1631 10.6364C17.6083 9.92985 17.3309 9.57659 17.2814 9.1751C17.2671 9.05877 17.2671 8.94123 17.2814 8.8249C17.3309 8.42341 17.6083 8.07015 18.1631 7.36364L18.1631 7.36364C19.497 5.66521 20.1639 4.816 19.9656 4.11098C19.9108 3.91591 19.8152 3.73342 19.6847 3.57447C19.2131 3 18.1016 3 15.8785 3L15.8785 3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M4 21L4 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
          </svg>
          <span class="flex-1 ms-3 whitespace-nowrap">report template</span>
        </a>
      </li>
    </ul>
  </div>
  <div id="drawer-report" class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-right-label">
    <div class="flex items-center justify-start mb-4">
      <a onclick="toggleReportDrawer();" class="cursor-pointer mr-4">
        <svg class="text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" color="#000000" fill="none">
          <path d="M15 6C15 6 9.00001 10.4189 9 12C8.99999 13.5812 15 18 15 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </a>
      <h5 id="drawer-report-label" class="inline-flex items-center text-base font-semibold text-gray-600">
        Report Template</h5>
    </div>
    <button type="button" onclick="toggleDrawer(); toggleReportDrawer();" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="text-gray-600 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
      <span class="sr-only">Close menu</span>
    </button>
    <p class="text-center italic text-gray-600 mb-3"> Tell us why you are reporting this template</p>
    <form method="post" class="flex-col items-center justify-center">
      @csrf
      @method('POST')
      <div class="w-9/12 mx-auto mb-3">
        <input onchange="toggleOtherReport();" type="radio" id="report1" name="content" value="Sexual content" class="hidden peer" required />
        <label for="report1" class="border-2 cursor-pointer text-sm peer-checked:border-blue-600 peer-checked:text-blue-600 border-gray-400 text-gray-400 text py-2 px-2 rounded-3xl flex justify-center items-center hover:text-blue-600 hover:border-blue-600 transition-all duration-150 ease-in">
          Sexual content
        </label>
      </div>
      <div class="w-9/12 mx-auto mb-3">
        <input onchange="toggleOtherReport();" type="radio" id="report2" name="content" value="Hateful or abusive content" class="hidden peer" required />
        <label for="report2" class="border-2 cursor-pointer text-sm peer-checked:border-blue-600 peer-checked:text-blue-600 border-gray-400 text-gray-400 text py-2 px-2 rounded-3xl flex justify-center items-center hover:text-blue-600 hover:border-blue-600 transition-all duration-150 ease-in">
          Hateful or abusive content
        </label>
      </div>
      <div class="w-9/12 mx-auto mb-3">
        <input onchange="toggleOtherReport();" type="radio" id="report3" name="content" value="Promotes terrorism" class="hidden peer" required />
        <label for="report3" class="border-2 cursor-pointer text-sm peer-checked:border-blue-600 peer-checked:text-blue-600 border-gray-400 text-gray-400 text py-2 px-2 rounded-3xl flex justify-center items-center hover:text-blue-600 hover:border-blue-600 transition-all duration-150 ease-in">
          Promotes terrorism
        </label>
      </div>
      <div class="w-9/12 mx-auto mb-3">
        <input onchange="toggleOtherReport();" type="radio" id="otherReport" name="content" value="other" class="hidden peer" required />
        <label for="otherReport" class="border-2 cursor-pointer text-sm peer-checked:border-blue-600 peer-checked:text-blue-600 border-gray-400 text-gray-400 text py-2 px-2 rounded-3xl flex justify-center items-center hover:text-blue-600 hover:border-blue-600 transition-all duration-150 ease-in">
          other
        </label>
      </div>
      <div class="w-9/12 mx-auto mb-3">
        <textarea type="text" name="reportDescription" id="reportDescription" rows="4" class="w-full hidden rounded-xl p-4 text-sm focus:ring-blue-600 focus:outline-blue-600" placeholder="please describe why you want to report this template"></textarea>
      </div>
      <input type="hidden" name="goalID" value="{{ $goal->id }}">
      <input type="hidden" name="flaggerID" value="{{ auth()->user()->id }}">
      <button onclick="report(this);" class="text-white bg-red-600 hover:bg-red-700 w-full focus:ring-4 focus:ring-red-500 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block">Report</button>
    </form>
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
          <svg class="text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#000000" fill="none">
            <path d="M8 3.09779C8 3.09779 4.03374 2.74194 3.38783 3.38785C2.74191 4.03375 3.09783 8 3.09783 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M8 20.9022C8 20.9022 4.03374 21.2581 3.38783 20.6122C2.74191 19.9662 3.09783 16 3.09783 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M16 3.09779C16 3.09779 19.9663 2.74194 20.6122 3.38785C21.2581 4.03375 20.9022 8 20.9022 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M16 20.9022C16 20.9022 19.9663 21.2581 20.6122 20.6122C21.2581 19.9662 20.9022 16 20.9022 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M14.0107 9.99847L20.0625 3.94678" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M9.99695 14.0024L3.63965 20.3807" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M9.99732 10.0024L3.8457 3.85889" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M13.9795 14.0024L20.5279 20.4983" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
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
        <svg class="text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#000000" fill="none">
            <path d="M8 3.09779C8 3.09779 4.03374 2.74194 3.38783 3.38785C2.74191 4.03375 3.09783 8 3.09783 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M8 20.9022C8 20.9022 4.03374 21.2581 3.38783 20.6122C2.74191 19.9662 3.09783 16 3.09783 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M16 3.09779C16 3.09779 19.9663 2.74194 20.6122 3.38785C21.2581 4.03375 20.9022 8 20.9022 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M16 20.9022C16 20.9022 19.9663 21.2581 20.6122 20.6122C21.2581 19.9662 20.9022 16 20.9022 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M14.0107 9.99847L20.0625 3.94678" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M9.99695 14.0024L3.63965 20.3807" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M9.99732 10.0024L3.8457 3.85889" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M13.9795 14.0024L20.5279 20.4983" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
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
        <svg class="text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#000000" fill="none">
            <path d="M8 3.09779C8 3.09779 4.03374 2.74194 3.38783 3.38785C2.74191 4.03375 3.09783 8 3.09783 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M8 20.9022C8 20.9022 4.03374 21.2581 3.38783 20.6122C2.74191 19.9662 3.09783 16 3.09783 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M16 3.09779C16 3.09779 19.9663 2.74194 20.6122 3.38785C21.2581 4.03375 20.9022 8 20.9022 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M16 20.9022C16 20.9022 19.9663 21.2581 20.6122 20.6122C21.2581 19.9662 20.9022 16 20.9022 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M14.0107 9.99847L20.0625 3.94678" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M9.99695 14.0024L3.63965 20.3807" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M9.99732 10.0024L3.8457 3.85889" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M13.9795 14.0024L20.5279 20.4983" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
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

    function toggleReportDrawer() {
      var drawer = document.getElementById('drawer-report');
      drawer.classList.toggle('translate-x-full');
    }

    function toggleOtherReport() {
      var otherRadio = document.getElementById('otherReport');
      if (otherRadio.checked) {
        document.getElementById('reportDescription').classList.remove('hidden');
      } else {
        document.getElementById('reportDescription').classList.add('hidden');
      }
    }

    function SuccessAlertToggle() {
      var drawer = document.getElementById('successAlert');
      drawer.classList.toggle('hidden');
    }

    function report(button) {
      var form = button.closest('form');
      $(form).on('submit', function(event) {
        event.preventDefault();

        jQuery.ajax({
          url: `{{ route('report.store') }}`,
          data: jQuery(form).serialize(),
          type: 'post',

          success: function(result) {
            document.getElementById('alertTitle').innerHTML = result.success;
            document.getElementById('alertMessage').innerHTML = result.message;
            toggleReportDrawer();
            toggleDrawer();
            SuccessAlertToggle();
          }
        })
      });
      $(form).unbind();
    }

  </script>

</x-goal-layout>