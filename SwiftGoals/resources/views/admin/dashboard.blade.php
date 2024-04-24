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
        <div class="flex justify-center items-center h-full">
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md w-full max-w-4xl">
                <form id="searchForm" class="p-6 flex justify-between items-center">
                    @csrf
                    @method('GET')
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">User Management</h2>
                    <input type="search" id="search" name="search"
                        class="block w-1/4 text-sm py-2 px-4 rounded-lg border-2 border-gray-300 shadow-sm focus:border-blue-500 focus:outline-blue-500 transition-all duration-200"
                        placeholder="Search users...">
                </form>
                <div class="">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">Name</th>
                                <th scope="col" class="py-3 px-6">Email</th>
                                <th scope="col" class="py-3 px-6">Status</th>
                                <th scope="col" class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="usersTable">
                            @foreach ($users as $user)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="py-4 px-6">{{ $user->name }}</td>
                                    <td class="py-4 px-6">{{ $user->email }}</td>
                                    @if (!$user->isBanned)
                                        <td id="banStatus{{ $user->id }}" class="py-4 px-6">Active</td>
                                    @else
                                        <td id="banStatus{{ $user->id }}" class="py-4 px-6">Banned</td>
                                    @endif
                                    <td class="py-4 flex justify-center">
                                        @if ($user->isBanned)
                                            <button onclick="banUser(this, {{ $user->id }})"
                                                id="banButton{{ $user->id }}" class="" title="Unblock">
                                                <svg class="text-green-600 hover:text-green-800"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="24" height="24" color="#000000" fill="none">
                                                    <path
                                                        d="M20.3927 8.03168L18.6457 6.51461C17.3871 5.42153 16.8937 4.83352 16.2121 5.04139C15.3622 5.30059 15.642 6.93609 15.642 7.48824C14.3206 7.48824 12.9468 7.38661 11.6443 7.59836C7.34453 8.29742 6 11.3566 6 14.6525C7.21697 13.9065 8.43274 13.0746 9.8954 12.7289C11.7212 12.2973 13.7603 12.5032 15.642 12.5032C15.642 13.0554 15.3622 14.6909 16.2121 14.9501C16.9844 15.1856 17.3871 14.5699 18.6457 13.4769L20.3927 11.9598C21.4642 11.0293 22 10.564 22 9.99574C22 9.4275 21.4642 8.96223 20.3927 8.03168Z"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M10.5676 3C6.70735 3.00694 4.68594 3.10152 3.39411 4.39073C2 5.78202 2 8.02125 2 12.4997C2 16.9782 2 19.2174 3.3941 20.6087C4.78821 22 7.03198 22 11.5195 22C16.0071 22 18.2509 22 19.645 20.6087C20.6156 19.64 20.9104 18.2603 21 16"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        @else
                                            <button onclick="banUser(this, {{ $user->id }})"
                                                id="banButton{{ $user->id }}" class="" title="Block">
                                                <svg class="text-red-600 hover:text-red-800"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="24" height="24" color="#000000" fill="none">
                                                    <path d="M5.75 5L19.75 19" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M22.75 12C22.75 6.47715 18.2728 2 12.75 2C7.22715 2 2.75 6.47715 2.75 12C2.75 17.5228 7.22715 22 12.75 22C18.2728 22 22.75 17.5228 22.75 12Z"
                                                        stroke="currentColor" stroke-width="2" />
                                                </svg>
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
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        function SuccessAlertToggle() {
            var drawer = document.getElementById('successAlert');
            drawer.classList.toggle('hidden');
        }

        function createUserRow(user) {
            const row = document.createElement('tr');
            row.setAttribute('class',
                'bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600');

            const rowContent = `
						<td class="py-4 px-6">${user.name}</td>
              <td class="py-4 px-6">${user.email}</td>
							${user.isBanned ? `
                  <td id="banStatus${user.id}" class="py-4 px-6">Banned</td>`
							: `
    							<td id="banStatus${user.id}" class="py-4 px-6">Active</td>
    						`}
              <td class="py-4 flex justify-center">
								${user.isBanned ? `
                          <button onclick="banUser(this, ${user.id})"
                              id="banButton${user.id}" class="" title="Unblock">
                              <svg class="text-green-600 hover:text-green-800"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                  width="24" height="24" color="#000000" fill="none">
                                  <path
                                      d="M20.3927 8.03168L18.6457 6.51461C17.3871 5.42153 16.8937 4.83352 16.2121 5.04139C15.3622 5.30059 15.642 6.93609 15.642 7.48824C14.3206 7.48824 12.9468 7.38661 11.6443 7.59836C7.34453 8.29742 6 11.3566 6 14.6525C7.21697 13.9065 8.43274 13.0746 9.8954 12.7289C11.7212 12.2973 13.7603 12.5032 15.642 12.5032C15.642 13.0554 15.3622 14.6909 16.2121 14.9501C16.9844 15.1856 17.3871 14.5699 18.6457 13.4769L20.3927 11.9598C21.4642 11.0293 22 10.564 22 9.99574C22 9.4275 21.4642 8.96223 20.3927 8.03168Z"
                                      stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" />
                                  <path
                                      d="M10.5676 3C6.70735 3.00694 4.68594 3.10152 3.39411 4.39073C2 5.78202 2 8.02125 2 12.4997C2 16.9782 2 19.2174 3.3941 20.6087C4.78821 22 7.03198 22 11.5195 22C16.0071 22 18.2509 22 19.645 20.6087C20.6156 19.64 20.9104 18.2603 21 16"
                                      stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" />
                              </svg>
                          </button>` 
											: `
                          <button onclick="banUser(this, ${user.id})"
                              id="banButton${user.id}" class="" title="Block">
                              <svg class="text-red-600 hover:text-red-800"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                  width="24" height="24" color="#000000" fill="none">
                                  <path d="M5.75 5L19.75 19" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round" />
                                  <path
                                      d="M22.75 12C22.75 6.47715 18.2728 2 12.75 2C7.22715 2 2.75 6.47715 2.75 12C2.75 17.5228 7.22715 22 12.75 22C18.2728 22 22.75 17.5228 22.75 12Z"
                                      stroke="currentColor" stroke-width="2" />
                              </svg>
                          </button>
    										`}
            </td>`;
            row.innerHTML = rowContent;
            document.getElementById("usersTable").appendChild(row);
        }

        document.getElementById('search').addEventListener('keyup', function() {
            var searchValue = this.value;
            var form = document.getElementById('searchForm');

            jQuery.ajax({
                url: "{{ route('user.search') }}",
                data: jQuery(form).serialize(),
                type: 'get',

                success: function(result) {
                    if (result.users.length > 0) {
                        document.getElementById("usersTable").innerHTML = "";
                        for (var i = 0; i < result.users.length; i++) {
                            createUserRow(result.users[i]);
                        }
                    } else {
                        document.getElementById("usersTable").innerHTML =
                            `No users found by the name or email ${searchValue}`;
                    }
                }
            })
        })

        function banUser(button, id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            jQuery.ajax({
                url: `{{ route('user.ban', ':id') }}`.replace(':id', id),
                type: 'patch',

                success: function(result) {
                    const banBtn = document.getElementById(`banButton${id}`);
                    const statusDiv = document.getElementById(`banStatus${id}`);
                    if (banBtn.title == 'Unblock') {
                        banBtn.title = 'Block';
                        banBtn.innerHTML = `
												<svg class="text-red-600 hover:text-red-800"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                          width="24" height="24" color="#000000" fill="none">
                          <path d="M5.75 5L19.75 19" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" />
                          <path
                              d="M22.75 12C22.75 6.47715 18.2728 2 12.75 2C7.22715 2 2.75 6.47715 2.75 12C2.75 17.5228 7.22715 22 12.75 22C18.2728 22 22.75 17.5228 22.75 12Z"
                              stroke="currentColor" stroke-width="2" />
                      	</svg>`;
                    } else {
                        banBtn.title = 'Unblock';
                        banBtn.innerHTML = `
												<svg class="text-green-600 hover:text-green-800"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                          width="24" height="24" color="#000000" fill="none">
                          <path
                              d="M20.3927 8.03168L18.6457 6.51461C17.3871 5.42153 16.8937 4.83352 16.2121 5.04139C15.3622 5.30059 15.642 6.93609 15.642 7.48824C14.3206 7.48824 12.9468 7.38661 11.6443 7.59836C7.34453 8.29742 6 11.3566 6 14.6525C7.21697 13.9065 8.43274 13.0746 9.8954 12.7289C11.7212 12.2973 13.7603 12.5032 15.642 12.5032C15.642 13.0554 15.3622 14.6909 16.2121 14.9501C16.9844 15.1856 17.3871 14.5699 18.6457 13.4769L20.3927 11.9598C21.4642 11.0293 22 10.564 22 9.99574C22 9.4275 21.4642 8.96223 20.3927 8.03168Z"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                          <path
                              d="M10.5676 3C6.70735 3.00694 4.68594 3.10152 3.39411 4.39073C2 5.78202 2 8.02125 2 12.4997C2 16.9782 2 19.2174 3.3941 20.6087C4.78821 22 7.03198 22 11.5195 22C16.0071 22 18.2509 22 19.645 20.6087C20.6156 19.64 20.9104 18.2603 21 16"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                      	</svg>`;
                    }

                    if (result.user.isBanned) {
                        statusDiv.innerHTML = 'Banned';
                    } else {
                        statusDiv.innerHTML = 'Active';
                    }

                    document.getElementById('alertTitle').innerHTML = result.success;
                    document.getElementById('alertMessage').innerHTML = result.message;
                    SuccessAlertToggle();
                    $(form).unbind();
                }
            })
        }
    </script>
</x-dashboard-layout>
