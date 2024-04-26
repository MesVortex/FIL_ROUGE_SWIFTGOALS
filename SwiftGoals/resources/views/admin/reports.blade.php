<x-dashboard-layout>
    <div class="flex-grow p-6 pt-36 lg:pl-80">
        <div id="successAlert"
            class="bg-teal-50 border-t-2 hidden mb-5 border-teal-500 rounded-lg p-4 dark:bg-teal-800/30 transition-all duration-300"
            role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Icon -->
                    <span
                        class="inline-flex justify-center items-center size-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
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
        <div class=" dark:bg-gray-800 rounded-lg shadow-md bg-white flex-1 p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white px-6 pt-6 pb-2">Template Reports</h2>
            </div>
            <div class="p-6 px-0">
                <table class="mt-4 w-full min-w-max table-auto text-left">
                    <thead>
                        <tr>
                            <th
                                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                <p
                                    class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">

                                </p>
                            </th>
                            <th
                                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                <p
                                    class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                    Template
                                </p>
                            </th>
                            <th
                                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                <p
                                    class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                    Owner
                                </p>
                            </th>
                            <th
                                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                <p
                                    class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                    Report
                                </p>
                            </th>
                            <th
                                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                <p
                                    class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                    Status
                                </p>
                            </th>
                            <th
                                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                <p
                                    class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                    Actions</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                            <tr id="reportRow{{ $report->id }}">
                                <td class="p-4 border-b border-blue-gray-50">
                                    <form>
                                        @csrf
                                        @method('DELETE')
                                        <button title="delete report" onclick="deleteReport(this, {{ $report->id }})">
                                            <svg class="text-gray-400 hover:text-gray-700"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                                height="20" color="#000000" fill="none">
                                                <path
                                                    d="M19.0005 4.99988L5.00045 18.9999M5.00045 4.99988L19.0005 18.9999"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <a href="{{ route('goal.show', $report->goal->id) }}"
                                        class="flex items-center gap-3">
                                        <div class="flex items-center gap-3">
                                            <div class="inline-block relative object-cover object-center w-9 h-9 rounded-md"
                                                style="background-image: url('{{ isset($report->goal->image) ? asset('storage/' . $report->goal->image->path) : asset('images/sam-schooler-E9aetBe2w40-unsplash.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center">
                                            </div>
                                            <div class="flex flex-col">
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                    {!! Str::limit($report->goal->mainGoal, 20, ' ...') !!}</p>
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                                    {!! Str::limit($report->goal->title, 10, ' ...') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div class="flex items-center gap-3">
                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/team-3.jpg"
                                            alt="John Michael"
                                            class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                        <div class="flex flex-col">
                                            <p
                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                {{ $report->goal->users->name }}</p>
                                            <p
                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                                {{ $report->goal->users->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div class="flex flex-col">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                            {!! Str::limit($report->content, 20, ' ...') !!}</p>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                  @if (!$report->goal->isBanned)
                                      <div id="banStatus{{$report->id}}" class="w-max active">
                                          <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-600 py-1 px-2 text-xs rounded-md"
                                              style="opacity: 1;">
                                              <span class="">Active</span>
                                          </div>
                                      </div>
                                  @else
                                      <div id="banStatus{{$report->id}}" class="w-max banned">
                                          <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-600 py-1 px-2 text-xs rounded-md"
                                              style="opacity: 1;">
                                              <span class="">Banned</span>
                                          </div>
                                      </div>
                                  @endif
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    @if (!$report->goal->isBanned)
                                        <button id="banButton{{$report->id}}" onclick="banTemplate(this, {{ $report->goal->id }}, {{$report->id}});" title="archive"
                                            class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30">
                                            <span
                                                class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                <svg class="text-red-600 hover:text-red-800"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="24" height="24" color="#000000" fill="none">
                                                    <path
                                                        d="M19.5 5.5L18.8803 15.5251C18.7219 18.0864 18.6428 19.3671 18.0008 20.2879C17.6833 20.7431 17.2747 21.1273 16.8007 21.416C15.8421 22 14.559 22 11.9927 22C9.42312 22 8.1383 22 7.17905 21.4149C6.7048 21.1257 6.296 20.7408 5.97868 20.2848C5.33688 19.3626 5.25945 18.0801 5.10461 15.5152L4.5 5.5"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    <path d="M9 11.7349H15" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    <path d="M10.5 15.6543H13.5" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                    <path
                                                        d="M3 5.5H21M16.0555 5.5L15.3729 4.09173C14.9194 3.15626 14.6926 2.68852 14.3015 2.39681C14.2148 2.3321 14.1229 2.27454 14.0268 2.2247C13.5937 2 13.0739 2 12.0343 2C10.9686 2 10.4358 2 9.99549 2.23412C9.89791 2.28601 9.80479 2.3459 9.7171 2.41317C9.32145 2.7167 9.10044 3.20155 8.65842 4.17126L8.05273 5.5"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                            </span>
                                        </button>
                                    @else
                                        <button id="banButton{{$report->id}}" onclick="banTemplate(this, {{ $report->goal->id }}, {{$report->id}});" title="restore"
                                            class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30">
                                            <span
                                                class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                <svg class="text-green-600 hover:text-green-800"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="24" height="24" color="#000000" fill="none">
                                                    <path
                                                        d="M20.25 5.5L19.75 11.5M5.25 5.5L5.85461 15.5368C6.00945 18.1073 6.08688 19.3925 6.72868 20.3167C7.046 20.7737 7.4548 21.1594 7.92905 21.4493C8.51127 21.8051 9.21343 21.945 10.25 22"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    <path
                                                        d="M11.75 15.5L12.8863 16.9657C13.458 14.8319 15.6514 13.5655 17.7852 14.1373C18.8775 14.43 19.7425 15.1475 20.25 16.0646M21.75 20.5L20.6137 19.0363C20.0419 21.1701 17.8486 22.4365 15.7147 21.8647C14.6478 21.5788 13.7977 20.8875 13.2859 20.001"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M3.75 5.5H21.75M16.8057 5.5L16.1231 4.09173C15.6696 3.15626 15.4428 2.68852 15.0517 2.39681C14.965 2.3321 14.8731 2.27454 14.777 2.2247C14.3439 2 13.8241 2 12.7845 2C11.7188 2 11.186 2 10.7457 2.23412C10.6481 2.28601 10.555 2.3459 10.4673 2.41317C10.0716 2.7167 9.85063 3.20155 9.40861 4.17126L8.80292 5.5"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                            </span>
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        function SuccessAlertToggle() {
            var drawer = document.getElementById('successAlert');
            drawer.classList.toggle('hidden');
        }

        function deleteReport(button, id) {
            var form = button.closest('form');
            $(form).on('submit', function(event) {
                event.preventDefault();

                jQuery.ajax({
                    url: `{{ route('report.destroy', ':id') }}`.replace(':id', id),
                    data: jQuery(form).serialize(),
                    type: 'delete',

                    success: function(result) {
                        document.getElementById(`reportRow${id}`).remove();
                        $(form).unbind();
                    }
                })
            });
        }

        function banTemplate(button, id, reportID) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            jQuery.ajax({
                url: `{{ route('template.ban', ':id') }}`.replace(':id', id),
                type: 'patch',

                success: function(result) {
                    const banBtn = document.getElementById(`banButton${reportID}`);
                    const statusDiv = document.getElementById(`banStatus${reportID}`);
                    if (banBtn.title == 'archive') {
                      banBtn.title = 'restore';
                      banBtn.innerHTML = `
                      <span
                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                        <svg class="text-green-600 hover:text-green-800"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            width="24" height="24" color="#000000" fill="none">
                            <path
                                d="M20.25 5.5L19.75 11.5M5.25 5.5L5.85461 15.5368C6.00945 18.1073 6.08688 19.3925 6.72868 20.3167C7.046 20.7737 7.4548 21.1594 7.92905 21.4493C8.51127 21.8051 9.21343 21.945 10.25 22"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                            <path
                                d="M11.75 15.5L12.8863 16.9657C13.458 14.8319 15.6514 13.5655 17.7852 14.1373C18.8775 14.43 19.7425 15.1475 20.25 16.0646M21.75 20.5L20.6137 19.0363C20.0419 21.1701 17.8486 22.4365 15.7147 21.8647C14.6478 21.5788 13.7977 20.8875 13.2859 20.001"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M3.75 5.5H21.75M16.8057 5.5L16.1231 4.09173C15.6696 3.15626 15.4428 2.68852 15.0517 2.39681C14.965 2.3321 14.8731 2.27454 14.777 2.2247C14.3439 2 13.8241 2 12.7845 2C11.7188 2 11.186 2 10.7457 2.23412C10.6481 2.28601 10.555 2.3459 10.4673 2.41317C10.0716 2.7167 9.85063 3.20155 9.40861 4.17126L8.80292 5.5"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                      </span>`;
                    } else {
                      banBtn.title = 'archive';
                      banBtn.innerHTML = `
                      <span
                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                        <svg class="text-red-600 hover:text-red-800"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            width="24" height="24" color="#000000" fill="none">
                            <path
                                d="M19.5 5.5L18.8803 15.5251C18.7219 18.0864 18.6428 19.3671 18.0008 20.2879C17.6833 20.7431 17.2747 21.1273 16.8007 21.416C15.8421 22 14.559 22 11.9927 22C9.42312 22 8.1383 22 7.17905 21.4149C6.7048 21.1257 6.296 20.7408 5.97868 20.2848C5.33688 19.3626 5.25945 18.0801 5.10461 15.5152L4.5 5.5"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                            <path d="M9 11.7349H15" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                            <path d="M10.5 15.6543H13.5" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" />
                            <path
                                d="M3 5.5H21M16.0555 5.5L15.3729 4.09173C14.9194 3.15626 14.6926 2.68852 14.3015 2.39681C14.2148 2.3321 14.1229 2.27454 14.0268 2.2247C13.5937 2 13.0739 2 12.0343 2C10.9686 2 10.4358 2 9.99549 2.23412C9.89791 2.28601 9.80479 2.3459 9.7171 2.41317C9.32145 2.7167 9.10044 3.20155 8.65842 4.17126L8.05273 5.5"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                      </span>`;
                    }

                    if(statusDiv.classList.contains('active')) {
                      statusDiv.classList.remove('active');
                      statusDiv.classList.add('banned');
                      statusDiv.innerHTML = `
                      <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-600 py-1 px-2 text-xs rounded-md"
                         style="opacity: 1;">
                         <span class="">Banned</span>
                      </div>`;
                    }else{
                      statusDiv.classList.remove('banned');
                      statusDiv.classList.add('active');
                      statusDiv.innerHTML = `
                      <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-600 py-1 px-2 text-xs rounded-md"
                          style="opacity: 1;">
                          <span class="">Active</span>
                      </div>`;

                    }

                    document.getElementById('alertTitle').innerHTML = result.success;
                    document.getElementById('alertMessage').innerHTML = result.message;
                    SuccessAlertToggle();
                }
            })
        }
    </script>
</x-dashboard-layout>
