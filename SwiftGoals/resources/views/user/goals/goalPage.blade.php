<x-goal-layout :backgroundImage="isset($goal->image) ? $goal->image->path : null">
    <div id="successAlert"
        class="bg-teal-50 border-t-2 hidden border-teal-500 rounded-lg p-4 dark:bg-teal-800/30 transition-all duration-300"
        role="alert">
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Icon -->
                <span
                    class="inline-flex justify-center items-center size-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
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
                    <button onclick="SuccessAlertToggle();" type="button"
                        class="inline-flex bg-teal-50 rounded-lg p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-teal-50 focus:ring-teal-600 dark:bg-transparent dark:hover:bg-teal-800/50 dark:text-teal-600"
                        data-hs-remove-element="#dismiss-alert">
                        <span class="sr-only">Dismiss</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
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
                <svg class="text-blue-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="38"
                    height="38" color="#000000" fill="none">
                    <path
                        d="M4.80823 9.44118L6.77353 7.46899C8.18956 6.04799 8.74462 5.28357 9.51139 5.55381C10.4675 5.89077 10.1528 8.01692 10.1528 8.73471C11.6393 8.73471 13.1848 8.60259 14.6502 8.87787C19.4874 9.78664 21 13.7153 21 18C19.6309 17.0302 18.2632 15.997 16.6177 15.5476C14.5636 14.9865 12.2696 15.2542 10.1528 15.2542C10.1528 15.972 10.4675 18.0982 9.51139 18.4351C8.64251 18.7413 8.18956 17.9409 6.77353 16.5199L4.80823 14.5477C3.60275 13.338 3 12.7332 3 11.9945C3 11.2558 3.60275 10.6509 4.80823 9.44118Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <a class="cursor-pointer" onclick="toggleDrawer();">
                <svg class="text-blue-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                    height="28" color="#000000" fill="none">
                    <path d="M11.9959 12H12.0049" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M15.9998 12H16.0088" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M7.99981 12H8.00879" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z"
                        stroke="currentColor" stroke-width="2" />
                </svg>
            </a>
        </div>
        <div id='mainGoal'
            class="h-auto mx-auto text-white w-7/12 border-2 text-3xl text-center border-blue-700 shadow-2xl border-opacity-75 py-5 rounded-full bg-transparent backdrop-filter backdrop-blur-md bg-opacity-25">
            {{ $goal->title }}
        </div>
    </div>
    <!-- off canvas -->
    <div id="drawer-right-example"
        class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-blue-700 w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-right-label">
        <h5 id="drawer-right-label"
            class="inline-flex items-center mb-4 text-base font-semibold text-white dark:text-gray-400"><svg
                class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>Manage Goal</h5>
        <button type="button" onclick="toggleDrawer();" data-drawer-hide="drawer-right-example"
            aria-controls="drawer-right-example"
            class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <ul class="space-y-2 font-medium">
            <li>
                <a onclick="toggleEditBgDrawer();"
                    class="flex cursor-pointer items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Edit Background</span>
                </a>
            </li>
            @if ($goal->isTemplate == 0)
                <li id="makeTemplateOption">
                    <a onclick="toggleTemplateDrawer();"
                        class="flex cursor-pointer items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Make Template</span>
                    </a>
                </li>
            @endif
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                        <path
                            d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                        <path
                            d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
    <div id="drawer-edit-bg"
        class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-blue-700 w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-right-label">
        <div class="flex items-center justify-start mb-4">
            <a onclick="toggleEditBgDrawer();" class="cursor-pointer mr-4">
                <svg class="text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28"
                    height="28" color="#000000" fill="none">
                    <path d="M15 6C15 6 9.00001 10.4189 9 12C8.99999 13.5812 15 18 15 18" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <h5 id="drawer-edit-bg-label"
                class="inline-flex items-center text-base font-semibold text-white dark:text-gray-400">
                Edit Background</h5>
        </div>
        <button type="button" onclick="toggleDrawer(); toggleEditBgDrawer();"
            data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
            class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>

        @if (!$goal->image)
            <form action="{{ route('goal.addBackground') }}" method="post" class="mb-6"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="w-full cursor-pointer relative border-2 border-gray-300 border-dashed rounded-lg p-6"
                    id="dropzone">
                    <input type="file" name="image" class="absolute inset-0 w-full h-full opacity-0 z-50" />
                    <input type="hidden" name="goalID" value="{{ $goal->id }}">
                    <div class="text-center">
                        <img class="mx-auto h-12 w-12" src="https://www.svgrepo.com/show/357902/image-upload.svg"
                            alt="">
                        <h3 class="mt-2 text-sm font-medium text-gray-900">
                            <label for="file-upload" class="relative cursor-pointer">
                                <span>Drag and drop</span>
                                <span class="text-white"> or browse</span>
                                <span>to upload</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                        </h3>
                        <p class="mt-1 text-xs text-white">
                            PNG, JPG, GIF up to 10MB
                        </p>
                    </div>
                    <img src="" class="mt-4 mx-auto max-h-40 hidden" id="preview">
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block">Add
                    Background</button>
            </form>
        @else
            <form action="{{ route('goal.updateBackground', $goal->id) }}" method="post" class="mb-6"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="w-full cursor-pointer relative border-2 border-gray-300 border-dashed rounded-lg p-6"
                    id="dropzone">
                    <input type="file" name="image" class="absolute inset-0 w-full h-full opacity-0 z-50" />
                    <div class="text-center">
                        <img class="mx-auto h-12 w-12" src="https://www.svgrepo.com/show/357902/image-upload.svg"
                            alt="">
                        <h3 class="mt-2 text-sm font-medium text-gray-900">
                            <label for="file-upload" class="relative cursor-pointer">
                                <span>Drag and drop</span>
                                <span class="text-white"> or browse</span>
                                <span>to upload</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                        </h3>
                        <p class="mt-1 text-xs text-white">
                            PNG, JPG, GIF up to 10MB
                        </p>
                    </div>
                    <img src="" class="mt-4 mx-auto max-h-40 hidden" id="preview">
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block">Update
                    Background</button>
            </form>
        @endif
    </div>
    @if ($goal->isTemplate == 0)
        <div id="drawer-makeTemplate"
            class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800"
            tabindex="-1" aria-labelledby="drawer-right-label">
            <div class="flex items-center justify-start mb-4">
                <a onclick="toggleTemplateDrawer();" class="cursor-pointer mr-4">
                    <svg class="text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28"
                        height="28" color="#000000" fill="none">
                        <path d="M15 6C15 6 9.00001 10.4189 9 12C8.99999 13.5812 15 18 15 18" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <h5 id="drawer-makeTemplate-label"
                    class="inline-flex items-center text-base font-semibold text-gray-600">
                    Make Template</h5>
            </div>
            <button type="button" onclick="toggleDrawer(); toggleTemplateDrawer();"
                data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
                class="text-gray-600 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <p class="text-center italic text-gray-600"> to make this goal a template you must choose the category it
                belongs to</p>
            <h5 id="drawer-makeTemplate-label" class="text-start font-medium my-5 text-gray-600 capitalize">
                Categories:</h5>
            <form method="post" class="flex-col items-center justify-center" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @foreach ($categories as $category)
                    <div class="w-9/12 mx-auto mb-3">
                        <input type="radio" id="category-radio{{ $category->id }}" name="category"
                            value="{{ $category->id }}" class="hidden peer" required />
                        <label for="category-radio{{ $category->id }}"
                            class="border-2 cursor-pointer text-sm peer-checked:border-blue-600 peer-checked:text-blue-600 border-gray-400 text-gray-400 text py-2 px-2 rounded-3xl flex justify-center items-center hover:text-blue-600 hover:border-blue-600 transition-all duration-150 ease-in">
                            {{ $category->name }}
                        </label>
                    </div>
                @endforeach
                <button onclick="makeTemplate(this,'{{ $goal->id }}');"
                    class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block">Update</button>
            </form>
        </div>
    @endif
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
        <div id='priority1'
            class="h-auto relative min-h-96 overflow-hidden py-16 w-64 border-2 border-blue-700 shadow-2xl border-opacity-75 p-3 space-y-3 rounded-3xl bg-transparent backdrop-filter backdrop-blur-md bg-opacity-25 container">
            <div class="absolute top-0 font-bold text-white left-0 w-full text-lg h-auto text-center rounded-b-lg px-2 py-5 rounded-lg shadow shadow-blue-700"
                style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/geometric-seamless-pattern-of-corners-and-circles-marine-motif-seamless-abstract-pattern-in-blue-tones-free-vector.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
                high-priority
            </div>
            @foreach ($highPrioritysteps as $step)
                <form id="{{ $step->id }}"
                    class="relative w-full group h-auto pr-6 text-start bg-white text-gray-700 p-2 rounded-lg shadow shadow-blue-700 transition-all draggable"
                    @if ($step->isComplete) style="background: green; color: white;"
        @elseif($step->dueDate < Now() && $step->dueDate != null);
          style="background: red; color: white;" @endif
                    draggable="true">
                    @csrf
                    @method('PUT')
                    <div ondblclick="getDivContent(this);" class="stepDiv">{{ $step->title }}</div>
                    <input type="hidden" name="title" value="{{ $step->title }}" class="step">
                    <input type="hidden" name="goalID" value="{{ $goal->id }}">
                    <input type="hidden" name="priority" value="1" class="priority">
                    <input type="hidden" name="stepID" value="{{ $step->id }}">
                    <button onclick="save(this);" class="hidden submitBTN">save</button>
                    <a onclick="showStep(this)" data-step-id="{{ $step->id }}"
                        class="absolute right-2 bottom-1 opacity-0 group-hover:opacity-100 text-gray-400 cursor-pointer transition-all duration-300 ease-in">
                        <svg class="text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            width="20" height="20" color="#000000" fill="none">
                            <path
                                d="M8 3.09779C8 3.09779 4.03374 2.74194 3.38783 3.38785C2.74191 4.03375 3.09783 8 3.09783 8"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M8 20.9022C8 20.9022 4.03374 21.2581 3.38783 20.6122C2.74191 19.9662 3.09783 16 3.09783 16"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M16 3.09779C16 3.09779 19.9663 2.74194 20.6122 3.38785C21.2581 4.03375 20.9022 8 20.9022 8"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M16 20.9022C16 20.9022 19.9663 21.2581 20.6122 20.6122C21.2581 19.9662 20.9022 16 20.9022 16"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M14.0107 9.99847L20.0625 3.94678" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.99695 14.0024L3.63965 20.3807" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.99732 10.0024L3.8457 3.85889" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.9795 14.0024L20.5279 20.4983" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </form>
            @endforeach
            <form
                class="absolute bottom-2 left-1/2 -translate-x-1/2 w-11/12 bg-transparent hover:bg-gray-300 text-white py-2 rounded-lg border-2 border-dashed border-gray-500 text-center transition-all"
                draggable="true">
                @csrf
                @method('POST')
                <input type="hidden" name="title" value="new Step" class="step">
                <input type="hidden" name="goalID" value="{{ $goal->id }}">
                <input type="hidden" name="priority" value="1">
                <button onclick="store(this, 1);" class="flex items-center h-6">
                    <i
                        class="fa-solid fa-plus text-gray-500 absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden"></i>
                </button>
            </form>
        </div>
        <div id="test" class="fixed z-50"></div>
        <div id='priority2'
            class="h-auto relative overflow-hidden min-h-96 py-16 w-64 border-2 border-blue-700 shadow-2xl border-opacity-75 p-3 space-y-3 rounded-3xl bg-transparent backdrop-filter backdrop-blur-md bg-opacity-25 container">
            <div class="absolute top-0 left-0 w-full font-bold text-white h-auto text-center rounded-b-lg text-lg px-2 py-5 rounded-lg shadow shadow-blue-700"
                style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/geometric-seamless-pattern-of-corners-and-circles-marine-motif-seamless-abstract-pattern-in-blue-tones-free-vector.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
                medium-priority
            </div>
            @foreach ($mediumPrioritysteps as $step)
                <form id="{{ $step->id }}"
                    class="relative w-full group h-auto pr-6 text-start bg-white text-gray-700 p-2 rounded-lg shadow shadow-blue-700 transition-all draggable"
                    @if ($step->isComplete) style="background: green; color: white;"
        @elseif($step->dueDate < Now() && $step->dueDate != null);
          style="background: red; color: white;" @endif
                    draggable="true">
                    @csrf
                    @method('PUT')
                    <div ondblclick="getDivContent(this);" class="stepDiv">{{ $step->title }}</div>
                    <input type="hidden" name="title" value="{{ $step->title }}" class="step">
                    <input type="hidden" name="goalID" value="{{ $goal->id }}">
                    <input type="hidden" name="priority" value="2" class="priority">
                    <input type="hidden" name="stepID" value="{{ $step->id }}">
                    <button onclick="save(this);" class="hidden submitBTN">save</button>
                    <a onclick="showStep(this)" data-step-id="{{ $step->id }}"
                        class="absolute right-2 bottom-1 opacity-0 group-hover:opacity-100 text-gray-400 cursor-pointer transition-all duration-300 ease-in">
                        <svg class="text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            width="20" height="20" color="#000000" fill="none">
                            <path
                                d="M8 3.09779C8 3.09779 4.03374 2.74194 3.38783 3.38785C2.74191 4.03375 3.09783 8 3.09783 8"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M8 20.9022C8 20.9022 4.03374 21.2581 3.38783 20.6122C2.74191 19.9662 3.09783 16 3.09783 16"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M16 3.09779C16 3.09779 19.9663 2.74194 20.6122 3.38785C21.2581 4.03375 20.9022 8 20.9022 8"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M16 20.9022C16 20.9022 19.9663 21.2581 20.6122 20.6122C21.2581 19.9662 20.9022 16 20.9022 16"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M14.0107 9.99847L20.0625 3.94678" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.99695 14.0024L3.63965 20.3807" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.99732 10.0024L3.8457 3.85889" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.9795 14.0024L20.5279 20.4983" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </form>
            @endforeach
            <form
                class="absolute bottom-2 left-1/2 -translate-x-1/2 w-11/12 bg-transparent hover:bg-gray-300 text-white py-2 rounded-lg border-2 border-dashed border-gray-500 text-center transition-all"
                draggable="true">
                @csrf
                @method('POST')
                <input type="hidden" name="title" value="new Step" class="step">
                <input type="hidden" name="goalID" value="{{ $goal->id }}">
                <input type="hidden" name="priority" value="2">
                <button onclick="store(this, 2);" class="flex items-center h-6">
                    <i
                        class="fa-solid fa-plus text-gray-500 absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden"></i>
                </button>
            </form>
        </div>
        <div id='priority3'
            class="h-auto w- overflow-hidden relative min-h-96 py-16 w-64 border-2 border-blue-700 shadow-2xl border-opacity-75 p-3 space-y-3 rounded-3xl bg-transparent backdrop-filter backdrop-blur-md bg-opacity-25 container">
            <div class="absolute top-0 left-0 w-full font-bold text-white h-auto text-center rounded-b-lg text-lg px-2 py-5 rounded-lg shadow shadow-blue-700"
                style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/geometric-seamless-pattern-of-corners-and-circles-marine-motif-seamless-abstract-pattern-in-blue-tones-free-vector.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
                low-priority
            </div>
            @foreach ($lowPrioritysteps as $step)
                <form id="{{ $step->id }}"
                    class="relative w-full group h-auto pr-6 text-start bg-white text-gray-700 p-2 rounded-lg shadow shadow-blue-700 transition-all draggable"
                    @if ($step->isComplete) style="background: green; color: white;"
        @elseif($step->dueDate < Now() && $step->dueDate != null);
          style="background: red; color: white;" @endif
                    draggable="true">
                    @csrf
                    @method('PUT')
                    <div ondblclick="getDivContent(this);" class="stepDiv">{{ $step->title }}</div>
                    <input type="hidden" name="title" value="{{ $step->title }}" class="step">
                    <input type="hidden" name="goalID" value="{{ $goal->id }}">
                    <input type="hidden" name="priority" value="3" class="priority">
                    <input type="hidden" name="stepID" value="{{ $step->id }}">
                    <button onclick="save(this);" class="hidden submitBTN">save</button>
                    <a onclick="showStep(this)" data-step-id="{{ $step->id }}"
                        class="absolute right-2 bottom-1 opacity-0 group-hover:opacity-100 text-gray-400 cursor-pointer transition-all duration-300 ease-in">
                        <svg class="text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            width="20" height="20" color="#000000" fill="none">
                            <path
                                d="M8 3.09779C8 3.09779 4.03374 2.74194 3.38783 3.38785C2.74191 4.03375 3.09783 8 3.09783 8"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M8 20.9022C8 20.9022 4.03374 21.2581 3.38783 20.6122C2.74191 19.9662 3.09783 16 3.09783 16"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M16 3.09779C16 3.09779 19.9663 2.74194 20.6122 3.38785C21.2581 4.03375 20.9022 8 20.9022 8"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M16 20.9022C16 20.9022 19.9663 21.2581 20.6122 20.6122C21.2581 19.9662 20.9022 16 20.9022 16"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M14.0107 9.99847L20.0625 3.94678" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.99695 14.0024L3.63965 20.3807" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.99732 10.0024L3.8457 3.85889" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.9795 14.0024L20.5279 20.4983" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </form>
            @endforeach
            <form
                class="absolute bottom-2 left-1/2 -translate-x-1/2 w-11/12 bg-transparent hover:bg-gray-300 text-white py-2 rounded-lg border-2 border-dashed border-gray-500 text-center transition-all"
                draggable="true">
                @csrf
                @method('POST')
                <input type="hidden" name="title" value="new Step" class="step">
                <input type="hidden" name="goalID" value="{{ $goal->id }}">
                <input type="hidden" name="priority" value="3">
                <button onclick="store(this, 3);" class="flex items-center h-6">
                    <i
                        class="fa-solid fa-plus text-gray-500 absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden"></i>
                </button>
            </form>
        </div>
    </section>
    <div id="pop-up-section">
        <!-- modal goes here with ajax -->
    </div>

    <!-- <script src="{{ asset('js/goals.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        // DRAG AND DROP

        const draggables = document.querySelectorAll(".draggable");
        const containers = document.querySelectorAll(".container");
        console.log(draggables, containers);
        draggables.forEach(draggable => {

            draggable.addEventListener("dragstart", () => {
                draggable.classList.add("dragging");
            });

            draggable.addEventListener("dragend", () => {
                draggable.classList.remove("dragging");
            });

        });

        containers.forEach(container => {
            container.addEventListener("dragover", e => {
                e.preventDefault();
                const draggable = document.querySelector(".dragging");
                container.appendChild(draggable);
            });
        });



        // Function to add a new task
        function addTask(task) {
            const todoList = document.getElementById("todo-list");
            const li = document.createElement("li");
            li.className =
                "border-b border-gray-200 flex items-center justify-between py-4";
            if (task.isComplete == 1) {
                li.innerHTML = `
                  <form ondblclick="getSpanContent(this);" data-id="${task.id}" class="flex items-center w-full">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="stepID" value="${task.stepID}">
                    <input onchange="checkBoxes(this); updateProgressBar(); markAsComplete(this);" data-id="${task.id}" data-step-id="${task.stepID}" checked type="checkbox" class="mr-2 tinyStep">
                    <input class="w-full focus:outline-none" type="hidden" name="title" value="${task.title}">
                    <div class="flex justify-between w-full mr-3">
                      <span class="line-through span">${task.title}</span>
                      <button onclick="editTinyStep(this);" class="text-blue-500 hidden hover:text-blue-700 edit-btn">Save</button>
                    </div>
                  </form>
                  <div class="flex gap-3">
                    <form method="post">
                      @csrf
                      @method('DELETE')
                      <input type="hidden" name="tinyStepID" value="${task.id}">
                      <button onclick="deleteTinyStep(this);" class="text-red-500 hover:text-red-700
                      mr-2 delete-btn"><i class="fa-solid fa-eraser fa-lg"></i></button>
                    </form>
                  </div>
              `;
            } else {
                li.innerHTML = `
                  <form ondblclick="getSpanContent(this);" data-id="${task.id}" class="flex items-center w-full">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="stepID" value="${task.stepID}">
                    <input onchange="checkBoxes(this); updateProgressBar(); markAsComplete(this);" data-id="${task.id}" data-step-id="${task.stepID}" type="checkbox" class="mr-2 tinyStep">
                    <input class="w-full focus:outline-none" type="hidden" name="title" value="${task.title}">
                    <div class="flex justify-between w-full mr-3">
                      <span class="span">${task.title}</span>
                      <button onclick="editTinyStep(this);" class="text-blue-500 hidden hover:text-blue-700 edit-btn">Save</button>
                    </div>
                  </form>
                  <div class="flex gap-3">
                    <form method="post">
                      @csrf
                      @method('DELETE')
                      <input type="hidden" name="tinyStepID" value="${task.id}">
                      <button onclick="deleteTinyStep(this);" class="text-red-500 hover:text-red-700
                      mr-2 delete-btn"><i class="fa-solid fa-eraser fa-lg"></i></button>
                    </form>
                  </div>
              `;
            }
            todoList.appendChild(li);
            updateProgressBar();
        }

        function checkBoxes(checkbox) {
            const form = checkbox.closest('form');
            const taskText = form.querySelector('.span');
            if (checkbox.checked) {
                taskText.classList.add('line-through');
            } else {
                taskText.classList.remove('line-through');
            }
        }

        // Event listener for form submission
        // document.getElementById("todo-form").addEventListener("submit",
        //   function(event) {
        //     event.preventDefault();
        //     const taskInput = document.getElementById("todo-input");
        //     const task = taskInput.value.trim();
        //     if (task !== "") {
        //       addTask(task);
        //       // taskInput.value = "";
        //     }
        //   });

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

        /////////////////////////////////////////////
        function addTinyStep(button) {
            var form = button.closest('form');
            $(form).on('submit', function(event) {
                event.preventDefault();

                jQuery.ajax({
                    url: "{{ route('tinystep.store') }}",
                    data: jQuery(form).serialize(),
                    type: 'post',

                    success: function(result) {
                        addTask(result.tinyStep);
                        $(form).unbind();
                    }
                })
            });
        }

        ///////////////////////////////////////////

        function saveDescription(button) {
            var form = button.closest('form');
            $(form).on('submit', function(event) {
                event.preventDefault();

                jQuery.ajax({
                    url: "{{ route('step.updateDescription') }}",
                    data: jQuery(form).serialize(),
                    type: 'patch',

                    success: function(result) {
                        button.classList.add('hidden');
                    }
                })
            });
        }

        function saveDueDate(button) {
            var form = button.closest('form');
            var stepID = button.getAttribute('data-id');

            $(form).on('submit', function(event) {
                event.preventDefault();

                jQuery.ajax({
                    url: "{{ route('step.updateDueDate', ':id') }}".replace(':id', stepID),
                    data: jQuery(form).serialize(),
                    type: 'patch',

                    success: function(result) {
                        const settingsDiv = document.getElementById('step-settings');
                        const dateDiv = document.getElementById('dateDiv');
                        console.log();
                        if (dateDiv == null) {
                            const newDate = document.createElement('div');
                            newDate.setAttribute('class', 'mb-2 w-full');
                            newDate.setAttribute('id', 'dateDiv');
                            const dateInfo = `
                          <button class="focus:outline-none px-4 w-full bg-gray-300 p-2 rounded-full text-black hover:bg-green-600 hover:text-white transition-all duration-300 dateBtn">${result.step.dueDate}</button>
                          `;
                            newDate.innerHTML = dateInfo;
                            settingsDiv.insertBefore(newDate, settingsDiv.children[1]);
                            dateDropdown(stepID);
                        } else {
                            dateDiv.querySelector('.dateBtn').innerText = result.step.dueDate;
                            dateDropdown(stepID);
                        }
                    }
                })
            })
        }

        ///////////////////////////////////////////

        function markAsComplete(button) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('tinystep.updateProgress', ':id') }}".replace(':id', button.getAttribute(
                    'data-id')),
                type: 'patch',

                success: function(result) {}
            })
        }

        ///////////////////////////////////////////

        function markStepComplete(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('step.completeProgress', ':id') }}".replace(':id', id),
                type: 'patch',

                success: function(result) {
                    document.getElementById(id).style.background = "green";
                    document.getElementById(id).style.color = "white";
                }
            })
        }

        function makeTemplate(button, id) {
            var form = button.closest('form');

            $(form).on('submit', function(event) {
                event.preventDefault();

                jQuery.ajax({
                    url: "{{ route('goal.makeTemplate', ':id') }}".replace(':id', id),
                    data: jQuery(form).serialize(),
                    type: 'patch',

                    success: function(result) {
                        toggleDrawer();
                        toggleTemplateDrawer();
                        document.getElementById('makeTemplateOption').remove();
                        document.getElementById('alertMessage').innerHTML = result.success;
                        SuccessAlertToggle();
                    }
                })
            });
        }

        ///////////////////////////////////////////

        function markStepIncomplete(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('step.incompleteProgress', ':id') }}".replace(':id', id),
                type: 'patch',

                success: function(result) {
                    document.getElementById(id).style.background = "white";
                    document.getElementById(id).style.color = "rgb(55, 65, 81)";
                }
            })
        }

        ////////////////////////////////////////

        function editTinyStep(button) {
            var form = button.closest('form');
            var input = form.querySelector('input[name="title"]');
            $(form).on('submit', function(event) {
                event.preventDefault();
                var tinyStepID = $(this).data('id');

                jQuery.ajax({
                    url: "{{ route('tinystep.update', ':id') }}".replace(':id', tinyStepID),
                    data: jQuery(form).serialize(),
                    type: 'put',

                    success: function(result) {
                        getTinyStepTitle(input);
                    }
                })

            });
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
              <form class="">
                @csrf
                @method('PATCH')
                <label for="stepDescription" class="block text-gray-500 text-sm font-bold italic mb-2">Description</label>
                ${result.step.description ? `
                            <textarea onfocus="this.nextElementSibling.nextElementSibling.classList.remove('hidden');" type="text" id="stepDescription" name="stepDescription" rows="3" cols="50" class="w-full border-none focus:bg-gray-400 focus:outline-none focus:text-white p-2 rounded-lg transition-all duration-300">${result.step.description}</textarea>
                            ` : 
                `<textarea onfocus="this.nextElementSibling.nextElementSibling.classList.remove('hidden');" type="text" id="stepDescription" name="stepDescription" rows="3" cols="50" class="w-full border-none focus:bg-gray-400 focus:outline-none focus:text-white p-2 rounded-lg transition-all duration-300">This Step Has No Description</textarea>
                            `}
                <input type="hidden" name="stepID" value="${result.step.id}">
                <button onclick="saveDescription(this);" class="hidden">Save</button>
              </form>
              <hr class="w-9/12 h-1 my-5 mx-auto bg-gray-500 rounded dark:bg-gray-700">
              <div>
                <div class="flex justify-between">
                  <span class="text-gray-500 text-sm font-bold italic mb-2">Tiny Steps</span>
                  <form id="addTinyStep">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="title" value="new Tiny Step" id="todo-input" class="step">
                    <input type="hidden" name="stepID" value="${result.step.id}">
                    <button onclick="addTinyStep(this); console.log('clicked')"><i class="fa-solid fa-circle-plus text-gray-500 hover:text-blue-600 transition-all duration-300"></i></button>
                  </form>
                </div>
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                  <div id="progress-bar" class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full transition-all duration-300 ease-in-out" style="width: 0%"> 0%</div>
                </div>   
                <ul id="todo-list">
                </ul>
              </div>
            </div>
            <div id="step-settings" class="flex-col w-7/12 my-5 justify-around">
              <span class="text-gray-500 block text-sm font-bold italic mb-2">Step Settings</span>
              ${result.step.dueDate ? 
                `<div id='dateDiv' class="mb-2 w-full">
                              <button class="focus:outline-none px-4 w-full bg-gray-300 p-2 rounded-full text-black hover:bg-green-600 hover:text-white transition-all duration-300 dateBtn">${result.step.dueDate}</button>
                            </div>
                            <div class="mb-2 w-full">
                              <button onclick="dateDropdown(${result.step.id});" class="focus:outline-none px-4 w-full bg-gray-300 p-2 rounded-full text-black hover:bg-blue-600 hover:text-white transition-all duration-300">Update Due Date</button>
                              <form id="dateRangeDropdown${result.step.id}" class="z-10 mb-10 relative hidden bg-white divide-gray-100 rounded-2xl shadow w-80 lg:w-full dark:bg-gray-700 dark:divide-gray-600">
                                @csrf
                                @method('PATCH')
                                <input name="date" type="date" class="bg-gray-50 -mb-2 border border-gray-300 text-gray-900 text-sm rounded-t-2xl rounded-b-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Due-date">
                                <button onclick="saveDueDate(this);" data-id="${result.step.id}" class="absolute w-full pt-2 -z-10 rounded-b-3xl hover:text-white hover:bg-blue-600 transition-all duration-300">Save</button>
                              </form>
                            </div>` :
                 `<div class="mb-2 w-full">
                                <button onclick="dateDropdown(${result.step.id});" class="focus:outline-none px-4 w-full bg-gray-300 p-2 rounded-full text-black hover:bg-blue-600 hover:text-white transition-all duration-300">Add Due Date</button>
                                <form id="dateRangeDropdown${result.step.id}" class="z-10 mb-10 relative hidden bg-white divide-gray-100 rounded-2xl shadow w-80 lg:w-full dark:bg-gray-700 dark:divide-gray-600">
                                  @csrf
                                  @method('PATCH')
                                  <input name="date" type="date" class="bg-gray-50 -mb-2 border border-gray-300 text-gray-900 text-sm rounded-t-2xl rounded-b-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Due-date">
                                  <button onclick="saveDueDate(this);" data-id="${result.step.id}" class="absolute w-full pt-2 -z-10 rounded-b-3xl hover:text-white hover:bg-blue-600 transition-all duration-300">Save</button>
                                </form>
                            </div>` }       
              <div class="mb-2 w-full">
                ${result.step.isComplete ? `
                            <button onclick="markStepIncomplete(${result.step.id});"  class="focus:outline-none px-4 w-full bg-gray-300 p-2 rounded-full text-black hover:bg-green-600 hover:text-white transition-all duration-300">Mark as incomplete</button>
                            ` : `
                            <button onclick="markStepComplete(${result.step.id});"  class="focus:outline-none px-4 w-full bg-gray-300 p-2 rounded-full text-black hover:bg-green-600 hover:text-white transition-all duration-300">Mark as complete</button>
                            `}
              </div>
              <div class="mb-2 w-full">
                <button onclick="confirmDelete(${result.step.id});"  class="focus:outline-none px-4 w-full bg-gray-300 p-2 rounded-full text-black hover:bg-red-600 hover:text-white transition-all duration-300">Delete step</button>
              <div id="deleteDropdown${result.step.id}" class="z-10 hidden mx-auto bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="deleteDropdownButton">
                  <li>
                    <form method="post">
                      @csrf
                      @method('DELETE')
                      <button onclick="deleteStep(this);" data-step-id="${result.step.id}" class="block w-full px-4 py-2 hover:bg-gray-100 hover:text-red-600 hover:font-bold transition-all duration-300 dark:hover:bg-gray-600 dark:hover:text-white">Confirm</button>
                    </form>
                    <button onclick="confirmDelete(${result.step.id});" class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cancel</button>
                  </li>
                </ul>
              </div>
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
                    updateProgressBar();
                }
            })

        }
        ////////////////////////////////////////

        function updateProgressBar() {
            var tinyStepsInputs = document.querySelectorAll(".tinyStep");
            var progressBar = document.getElementById("progress-bar");
            var progress = 0;

            for (var i = 0; i < tinyStepsInputs.length; i++) {
                if (tinyStepsInputs[i].checked) {
                    progress++;
                }
            }

            if (tinyStepsInputs.length != 0) {
                var stepID = tinyStepsInputs[0].getAttribute('data-step-id');
                if (progress == tinyStepsInputs.length) {
                    markStepComplete(stepID);
                } else {
                    markStepIncomplete(stepID);
                }
            }


            progressBar.style.width = (progress / tinyStepsInputs.length) * 100 + "%";
            progressBar.textContent = Math.ceil((progress / tinyStepsInputs.length) * 100) + "%";
        }
        ////////////////////////////////////////

        function deleteTinyStep(button) {
            var form = button.closest('form');
            $(form).on('submit', function(event) {
                event.preventDefault();

                jQuery.ajax({
                    url: `{{ route('tinystep.destroy') }}`,
                    data: jQuery(form).serialize(),
                    type: 'delete',

                    success: function(result) {
                        form.parentElement.parentElement.remove();
                        updateProgressBar();
                    }
                })
            });
        }

        ////////////////////////////////////////

        function deleteStep(button) {
            var form = button.closest('form');
            var stepID = button.getAttribute('data-step-id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(form).on('submit', function(event) {
                event.preventDefault();
                jQuery.ajax({
                    url: `{{ route('step.destroy', ':id') }}`.replace(':id', stepID),
                    type: 'delete',

                    success: function(result) {
                        modalClose(stepID);
                        document.getElementById(stepID).remove();
                    }
                })
            })

        }

        ////////////////////////////////////////

        // Event listener for delete button click
        // document.getElementById("todo-list")
        //   .addEventListener("click",
        //     function(event) {
        //       if (event.target.classList.contains("delete-btn")) {
        //         event.target.parentElement.parentElement.remove();
        //       }
        //     });

        // Event listener for edit button click
        // document.getElementById("todo-list")
        //   .addEventListener("click",
        //     function(event) {
        //       if (event.target.classList.contains("edit-btn")) {
        //         const taskText = event.target.
        //         parentElement.parentElement.querySelector("span");
        //         const newText =
        //           prompt("Enter new task", taskText.textContent);
        //         if (newText !== null) {
        //           taskText.textContent = newText.trim();
        //         }
        //       }
        //     });

        /////////////////////////////////////

        function toggleDrawer() {
            var drawer = document.getElementById('drawer-right-example');
            drawer.classList.toggle('translate-x-full');
        }

        function toggleEditBgDrawer() {
            var drawer = document.getElementById('drawer-edit-bg');
            drawer.classList.toggle('translate-x-full');
        }

        function toggleTemplateDrawer() {
            var drawer = document.getElementById('drawer-makeTemplate');
            drawer.classList.toggle('translate-x-full');
        }

        function SuccessAlertToggle() {
            var drawer = document.getElementById('successAlert');
            drawer.classList.toggle('hidden');
        }

        function confirmDelete(id) {
            var dropdown = document.getElementById(`deleteDropdown${id}`);
            dropdown.classList.toggle('hidden');
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

        //////////////////////////////////////////////

        // let steps = document.getElementsByClassName("stepForm");
        // let priority1 = document.getElementById("priority1");
        // let priority2 = document.getElementById("priority2");
        // let priority3 = document.getElementById("priority3");

        // for (step of steps) {
        //   step.addEventListener("dragstart", function(event) {
        //     let selectedStep = event.target;

        //     priority1.addEventListener("dragover", function(e) {
        //       e.preventDefault();
        //     });
        //     priority2.addEventListener("dragover", function(e) {
        //       e.preventDefault();
        //     });
        //     priority3.addEventListener("dragover", function(e) {
        //       e.preventDefault();
        //     });

        //     priority1.addEventListener("drop", function(e) {
        //       if (selectedStep.parentNode !== priority1) {
        //         selectedStep.parentNode.removeChild(selectedStep);
        //         priority1.appendChild(selectedStep);
        //         step.querySelector("input[name='priority']").value = 1;
        //         // save(step.querySelector('.submitBTN'));
        //       }
        //     });

        //     priority2.addEventListener("drop", function(e) {
        //       if (selectedStep.parentNode !== priority2) {
        //         selectedStep.parentNode.removeChild(selectedStep);
        //         priority2.appendChild(selectedStep);
        //         step.querySelector("input[name='priority']").value = 2;
        //         // save(step.querySelector('.submitBTN'));
        //       }
        //     });

        //     priority3.addEventListener("drop", function(e) {
        //       if (selectedStep.parentNode !== priority3) {
        //         selectedStep.parentNode.removeChild(selectedStep);
        //         priority3.appendChild(selectedStep);
        //         step.querySelector("input[name='priority']").value = 3;
        //         // save(step.querySelector('.submitBTN'));
        //       }
        //     });


        //   });
        //   $(step).unbind();
        //   $(priority1).unbind();
        //   $(priority2).unbind();
        //   $(priority3).unbind();
        //   // step.addEventListener("dragstart", handleDragStart);

        //   // step.addEventListener("dblclick", function (e) {
        //   //     changeToInput(e.target);
        //   // });
        // }

        //////////////////////////////////////////////

        function getSpanContent(form) {
            var closestInput = form.querySelector('input[name="title"]');
            var closestBTN = form.querySelector('.edit-btn');
            var span = form.querySelector('.span');
            closestInput.type = 'text';
            closestInput.value = span.textContent;
            span.style.display = 'none';
            closestBTN.style.display = 'block';
        }

        //////////////////////////////////////////////

        function getTinyStepTitle(input) {
            var closestForm = input.closest('form');
            if (closestForm) {
                var closestSpan = closestForm.querySelector('.span');
                var closestBTN = closestForm.querySelector('.edit-btn');
                input.type = 'hidden';
                closestSpan.textContent = input.value;
                closestSpan.style.display = 'block';
                closestBTN.style.display = 'none';
            }
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
            newForm.setAttribute("id", storedStep.id);

            let newStep = `
        @csrf
        @method('PUT')
        <div ondblclick="getDivContent(this);" class="stepDiv">${storedStep.title}</div>
        <input type="hidden" name="title" value="${storedStep.title}" class="step">
        <input type="hidden" name="goalID" value="{{ $goal->id }}">
        <input type="hidden" name="priority" value="1">
        <input type="hidden" name="stepID" value="${storedStep.id}">
        <a onclick="showStep(this)" data-step-id="${storedStep.id}" class="absolute right-2 bottom-1 opacity-0 group-hover:opacity-100 text-gray-400 cursor-pointer transition-all duration-300 ease-in">
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
        <button onclick="save(this);" class="hidden submitBTN">save</button>`;

            newForm.innerHTML = newStep;

            var priorityDiv = document.getElementById(`priority${priority}`);
            priorityDiv.appendChild(newForm);

            // newDiv.addEventListener("dragstart", handleDragStart);
            // newDiv.addEventListener("dblclick", function(e) {
            //   changeToInput(e.target);
            // });

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
                        createStep(result.step, result.step.priority);
                    }
                })

            });
        }
    </script>
</x-goal-layout>
