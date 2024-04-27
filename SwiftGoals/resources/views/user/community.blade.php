<x-main-layout>

    <div class="">
        <div class="relative px-20 z-10"
            style="background-image: url('{{ asset('images/community_header.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
            <x-logo />
            <x-mainNavbar page='community' />
            <form method="POST" action="{{ route('question.store') }}"
                class="flex gap-5 justify-between px-3 py-2 mx-auto mb-10 mt-10 max-w-full bg-white shadow-2xl rounded-3xl w-6/12 max-md:flex-wrap max-md:px-5 ">
                @csrf
                @method('POST')
                <div class="flex gap-5 text-xl text-center lowercase text-slate-500 text-opacity-50 w-full">
                    <img src="{{ asset('images/default_profile.png') }}" alt="user icon"
                        class="shrink-0 rounded-full w-10" />
                    <input type="text" name="content" class="focus:outline-none w-full "
                        placeholder="Type your Question here">
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
                    <path
                        d="m877.8 85c139.5 24.4 348 33.5 632.2-48.2-.2 32.5-.3 65-.5 97.4-505.9 0-1011.6 0-1517.5 0 0-33.3 0-66.7 0-100.1 54.2-11.4 129.5-23.9 220-28.2 91-4.3 173.6 1 307.4 18.6 183.2 24.2 295.2 49.4 358.4 60.5z"
                        fill="#fff" />
                </svg>
            </div>
        </div>
        <section class="mt-14 w-full max-md:mt-10 max-md:max-w-full px-20">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full gap-10">
                    @foreach ($questions as $question)
                        <article
                            class="flex flex-col shadow-lg p-5 w-full bg-white rounded-md max-md:px-5 max-md:mt-10 max-md:max-w-full">
                            <header class="flex gap-5 text-center max-md:flex-wrap">
                                <img loading="lazy" src="{{ asset('images/default_profile.png') }}" alt="User avatar"
                                    class="shrink-0 w-14 h-14" />
                                <div class="flex flex-col grow shrink-0 my-auto basis-0 w-fit max-md:max-w-full">
                                    <div class="flex justify-between max-md:flex-wrap max-md:max-w-full">
                                        <h3 class="text-lg font-bold capitalize text-slate-900">
                                            {{ $question->user->name }}</h3>
                                        <time
                                            class="text-base font-medium lowercase text-slate-500">{{ $question->created_at->diffForHumans() }}</time>
                                    </div>
                                    <div
                                        class="flex gap-1.5 items-center self-start text-base font-medium text-blue-500 lowercase whitespace-nowrap">
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e8c93192d09545072dd575d2209146aabbe6656746c3adb45e016b4648e1ca3?apiKey=c168d83aa7a64a8493ecd020bcae6a11&"
                                            alt="Location icon" class="shrink-0 mt-2 aspect-[3.03] w-[15px]" />
                                        <span>Wonders</span>
                                    </div>
                                </div>
                            </header>
                            <div class="flex gap-5 text-slate-500 max-md:flex-wrap">
                                <p
                                    class="flex-auto self-start mt-2.5 text-base font-medium leading-7 max-md:max-w-full">
                                    <span class="text-slate-500">{{ $question->content }}</span>
                                </p>
                                <div>
                                    <button class="mb-3">
                                        <i class="fa-solid fa-circle-arrow-up fa-2xl text-[#012E4A]"></i>
                                    </button>
                                    <span>1.4k</span>
                                    <button class="mt-3">
                                        <i class="fa-solid fa-circle-arrow-down fa-2xl text-[#012E4A]"></i>
                                    </button>
                                    <button type="button" onclick="showComments({{ $question->id }})" class="mt-4">
                                        <i class="fa-regular fa-comment fa-2xl text-[#012E4A]"></i>
                                    </button>
                                    <span class="">100</span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div id="answers-section">

                </div>
                <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full gap-10">
                    @foreach ($userQuestions as $userQuestion)
                        <article
                            class="flex flex-col shadow-xl p-5 w-full bg-gradient-to-r from-[#7CB8F7] to-[#2A8BF2] rounded-md max-md:px-5 max-md:mt-10 max-md:max-w-full">
                            <header class="flex gap-5 text-center max-md:flex-wrap">
                                <img loading="lazy" src="{{ asset('images/default_profile.png') }}" alt="User avatar"
                                    class="shrink-0 w-14 h-14" />
                                <div class="flex flex-col grow shrink-0 my-auto basis-0 w-fit max-md:max-w-full">
                                    <div class="flex justify-between max-md:flex-wrap max-md:max-w-full">
                                        <h3 class="text-lg font-bold capitalize text-black">{{ auth()->user()->name }}
                                        </h3>
                                        <time
                                            class="text-base font-medium lowercase text-white">{{ $userQuestion->created_at->diffForHumans() }}</time>
                                    </div>
                                    <div
                                        class="flex gap-1.5 items-center self-start text-base font-medium text-blue-500 lowercase whitespace-nowrap">
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e8c93192d09545072dd575d2209146aabbe6656746c3adb45e016b4648e1ca3?apiKey=c168d83aa7a64a8493ecd020bcae6a11&"
                                            alt="Location icon" class="shrink-0 mt-2 aspect-[3.03] w-[15px]" />
                                        <span>Wonders</span>
                                    </div>
                                </div>
                            </header>
                            <div class="flex gap-5 text-black max-md:flex-wrap">
                                <p
                                    class="flex-auto self-start mt-2.5 text-base font-medium leading-7 max-md:max-w-full">
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

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        function toggleCommentsModal(id) {
            document.getElementById(`comments_modal${id}`).classList.toggle('hidden');
        }

        function toggleCommentMenu(id) {
            document.getElementById(`dropdownComment${id}`).classList.toggle('hidden');
        }

        function createAnswer(answer) {
            const article = document.createElement('article');
            article.setAttribute('class', 'p-6 text-base bg-white rounded-lg dark:bg-gray-900');
            var answer = `
            <footer class="flex relative justify-between items-center mb-2">
                <div class="flex items-center">
                    <p
                        class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                        <img class="mr-2 w-6 h-6 rounded-full"
                            src="{{ asset('images/default_profile.png') }}"
                            alt="Michael Gough">${answer.user.name}
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate
                            datetime="${answer.created_at}" title="${answer.created_at}">${new Date(answer.created_at).toLocaleDateString()}</time>
                    </p>
                </div>
                <button onclick="toggleCommentMenu(${answer.id});"
                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    type="button">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 16 3">
                        <path
                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                    </svg>
                    <span class="sr-only">Answer settings</span>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownComment${answer.id}"
                    class="hidden absolute right-0 top-8 z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownMenuIconHorizontalButton">
                        <li>
                            <a onclick="deleteAnswer(this, ${answer.id});"
                                class="block cursor-pointer py-2 px-4 hover:bg-gray-200 hover:text-red-600 transition-all duration-300">Delete</a>
                        </li>
                    </ul>
                </div>
            </footer>
            <p class="text-gray-500 dark:text-gray-400">${answer.content}</p>
          `;
            article.innerHTML = answer;
            document.getElementById('answers').appendChild(article);
        }

        function showComments(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            jQuery.ajax({
                url: `{{ route('question.show', ':id') }}`.replace(':id', id),
                type: 'get',

                success: function(result) {
                    const modal = `
                    <div id="comments_modal${result.question.id}" tabindex="-1" aria-hidden="true"
                  class="hidden overflow-y-auto bg-black bg-opacity-50 overflow-x-hidden flex fixed z-50 justify-center items-center w-full md:inset-0 h-screen max-h-full">
                  <div class="relative p-4 w-7/12 max-h-full">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          <!-- Modal header -->
                          <div
                              class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                  Comments
                              </h3>
                              <button onclick="toggleCommentsModal(${result.question.id});" type="button"
                                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                  data-modal-toggle="comments_modal">
                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                      fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                          </div>
                          <div id="answers">   
                                               
                          </div>
                          <hr>
                          <form class="p-4 md:p-5 flex justify-between">
                            @csrf
                            @method('POST')
                              <div
                                  class="flex gap-5 text-sm text-center lowercase text-slate-500 text-opacity-50 w-full">
                                  <input type="text" name="content" class="focus:outline-none w-full "
                                      placeholder="answer this question">
                              </div>
                              <input type="hidden" name="questionID" value="${result.question.id}">
                              <button type="submit" onclick="addAnswer(this);"
                                class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm pl-1.5 pr-2 pt-2 pb-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#000000" fill="none">
                                  <path d="M21.0477 3.05293C18.8697 0.707363 2.48648 6.4532 2.50001 8.551C2.51535 10.9299 8.89809 11.6617 10.6672 12.1581C11.7311 12.4565 12.016 12.7625 12.2613 13.8781C13.3723 18.9305 13.9301 21.4435 15.2014 21.4996C17.2278 21.5892 23.1733 5.342 21.0477 3.05293Z" stroke="currentColor" stroke-width="2" />
                                  <path d="M11.5 12.5L15 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                              </button>
                          </form>
                      </div>
                  </div>
                    `;
                    jQuery('#answers-section').html(modal);
                    for (i = 0; i < result.answers.length; i++) {
                        createAnswer(result.answers[i]);
                    }
                    toggleCommentsModal(result.question.id);
                }
            })
        }

        function addAnswer(button) {
            var form = button.closest('form');
            $(form).on('submit', function(event) {
                event.preventDefault();

                jQuery.ajax({
                    url: `{{ route('answer.store') }}`,
                    data: jQuery(form).serialize(),
                    type: 'post',

                    success: function(result) {
                        createAnswer(result.answer);
                    }
                })
                $(form).unbind();
            });
        }

        function deleteAnswer(button, id) {
            const article = button.closest('article');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            jQuery.ajax({
                url: `{{ route('answer.destroy', ':id') }}`.replace(':id', id),
                type: 'delete',

                success: function(result) {
                    article.remove();
                }
            })

        }
    </script>
</x-main-layout>
