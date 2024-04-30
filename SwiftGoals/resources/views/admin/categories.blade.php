<x-dashboard-layout>
	<x-sidebar current='categories'/>
	<div class="flex-grow p-6 pt-36 lg:pl-80">
		<div id="successAlert" class="bg-teal-50 border-t-2 hidden mb-5 border-teal-500 rounded-lg p-4 dark:bg-teal-800/30 transition-all duration-300" role="alert">
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
		<div class=" dark:bg-gray-800 rounded-lg shadow-md bg-white flex-1 p-6">
			<div class="pb-4 flex justify-between items-center">
				<h2 class="text-2xl font-semibold text-gray-800 dark:text-white p-6">Category Management</h2>
				<div class="flex items-center">
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded text-sm flex items-center" onclick="openModal()">
						<i class="fas fa-plus mr-2"></i>Add Category
					</button>
				</div>
			</div>
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th scope="col" class="py-3 px-6">Category Name</th>
						<th scope="col" class="py-3 px-6">Actions</th>
					</tr>
				</thead>
				<tbody id="categoriesTable">
					@foreach($categories as $category)
					<tr id="categoryRow{{$category->id}}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
						<td id="categoryName{{$category->id}}" class="py-6 px-6">{{$category->name}}</td>
						<td class="py-6 px-6">
							<button onclick="edit({{$category}})" class="">
								<svg class="text-green-500 hover:text-orange-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
									<path d="M15.2141 5.98239L16.6158 4.58063C17.39 3.80646 18.6452 3.80646 19.4194 4.58063C20.1935 5.3548 20.1935 6.60998 19.4194 7.38415L18.0176 8.78591M15.2141 5.98239L6.98023 14.2163C5.93493 15.2616 5.41226 15.7842 5.05637 16.4211C4.70047 17.058 4.3424 18.5619 4 20C5.43809 19.6576 6.94199 19.2995 7.57889 18.9436C8.21579 18.5877 8.73844 18.0651 9.78375 17.0198L18.0176 8.78591M15.2141 5.98239L18.0176 8.78591" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M11 20H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
								</svg>
							</button>
							<button onclick="openDeleteModal({{$category}})" class="">
								<svg class="text-red-600 hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
									<path d="M21 18.5C21 19.9045 21 20.6067 20.6208 21.1111C20.4567 21.3295 20.2457 21.517 20 21.6629C19.4325 22 18.6425 22 17.0625 22L6.9375 22C5.35748 22 4.56747 22 3.99997 21.6629C3.75429 21.517 3.54335 21.3295 3.37919 21.1111C3 20.6067 3 19.9045 3 18.5C3 17.0955 3 16.3933 3.37919 15.8889C3.54335 15.6705 3.75429 15.483 3.99997 15.3371C4.56747 15 5.35748 15 6.9375 15L17.0625 15C18.6425 15 19.4325 15 20 15.3371C20.2457 15.483 20.4567 15.6705 20.6208 15.8889C21 16.3933 21 17.0955 21 18.5Z" stroke="currentColor" stroke-width="2" />
									<path d="M12.0625 4L6.9375 4C5.35748 4 4.56747 4 3.99997 4.33706C3.75429 4.48298 3.54335 4.67048 3.37919 4.88886C3 5.39331 3 6.09554 3 7.5C3 8.90446 3 9.60669 3.37919 10.1111C3.54335 10.3295 3.75429 10.517 3.99997 10.6629C4.56747 11 5.35748 11 6.9375 11L17.0625 11C18.6425 11 19.4325 11 20 10.6629" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
									<path d="M21 7.99936L15 2M21 2.00064L15 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<!-- Modal for Adding Category -->
	<div id="addCategoryModal" class="hidden fixed inset-0 z-10 overflow-auto bg-black bg-opacity-40">
		<div class="flex items-center justify-center min-h-screen">
			<div class="bg-white rounded-lg mx-auto p-5 relative max-w-lg w-full">
				<button type="button" onclick="closeModal();" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="text-gray-600 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
					<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
					</svg>
					<span class="sr-only">Close menu</span>
				</button>
				<h2 id="modalTitle" class="text-xl mb-4">Add New Category</h2>
				<form method="post">
					@csrf
					@method('POST')
					<input type="text" id="CategoryName" name="CategoryName" placeholder="Category name..." class="mb-4 w-full p-2 border rounded">
					<button onclick="store(this);" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save Category</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal for Editing Category -->
	<div id="editCategoryModal" class="hidden fixed inset-0 z-10 overflow-auto bg-black bg-opacity-40">
		<div class="flex items-center justify-center min-h-screen">
			<div class="bg-white rounded-lg mx-auto p-5 relative max-w-lg w-full">
				<button type="button" onclick="closeEditModal();" class="text-gray-600 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
					<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
					</svg>
					<span class="sr-only">Close menu</span>
				</button>
				<h2 id="editModalTitle" class="text-xl mb-4">Edit Category</h2>
				<form method="post">
					@csrf
					@method('PUT')
					<input type="text" id="CategoryNewName" name="CategoryName" value="" class="mb-4 w-full p-2 border rounded">
					<button id="saveButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
				</form>
			</div>
		</div>
	</div>

	<!-- delete pop up -->
	<div id="popup-modal" class="hidden inset-0 bg-black bg-opacity-50 fixed z-50 justify-center items-center w-full max-h-full">
		<div class="relative p-4 w-full max-w-md max-h-full">
			<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
				<button onclick="closeDeleteModal();" type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
					<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
					</svg>
					<span class="sr-only">Close modal</span>
				</button>
				<form class="p-4 md:p-5 text-center" method="post">
					@csrf
					@method('DELETE')
					<svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
					</svg>
					<h3 id="deleteModalTitle" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete the Category?</h3>
					<button id="deleteButton" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
						Yes, I'm sure
					</button>
					<button onclick="closeDeleteModal();" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<script>
		function openModal() {
			document.getElementById('addCategoryModal').classList.remove('hidden');
		}

		function closeModal() {
			document.getElementById('addCategoryModal').classList.add('hidden');
		}

		function openEditModal() {
			document.getElementById('editCategoryModal').classList.remove('hidden');
		}

		function closeEditModal() {
			document.getElementById('editCategoryModal').classList.add('hidden');
		}

		function openDeleteModal(category) {
			document.getElementById('popup-modal').classList.remove('hidden');
			document.getElementById('deleteModalTitle').innerHTML = `Are you sure you want to delete the ${category.name} Category?`;
			document.getElementById('deleteButton').setAttribute('onclick', `deleteCategory(this,${category.id})`);
		}

		function closeDeleteModal() {
			document.getElementById('popup-modal').classList.add('hidden');
		}

		function SuccessAlertToggle() {
			var drawer = document.getElementById('successAlert');
			drawer.classList.toggle('hidden');
		}

		function edit(category) {
			document.getElementById('editModalTitle').innerHTML = `Edit "${category.name}" Category`;
			document.getElementById('CategoryNewName').value = category.name;
			document.getElementById('saveButton').setAttribute('onclick', `update(this,${category.id})`);
			openEditModal();
		}

		function addCategory(category) {
			const table = document.getElementById('categoriesTable');
			const row = document.createElement('tr');
			row.setAttribute('class', 'bg-white border-b dark:bg-gray-800 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600');
			const categoryRow = `
						<td class="py-6 px-6">${category.name}</td>
						<td class="py-6 px-6">
							<button onclick="edit(${category.id})" class="">
								<svg class="text-green-500 hover:text-orange-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
									<path d="M15.2141 5.98239L16.6158 4.58063C17.39 3.80646 18.6452 3.80646 19.4194 4.58063C20.1935 5.3548 20.1935 6.60998 19.4194 7.38415L18.0176 8.78591M15.2141 5.98239L6.98023 14.2163C5.93493 15.2616 5.41226 15.7842 5.05637 16.4211C4.70047 17.058 4.3424 18.5619 4 20C5.43809 19.6576 6.94199 19.2995 7.57889 18.9436C8.21579 18.5877 8.73844 18.0651 9.78375 17.0198L18.0176 8.78591M15.2141 5.98239L18.0176 8.78591" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M11 20H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
								</svg>
							</button>
							<button onclick="openDeleteModal(${category})" class="">
								<svg class="text-red-600 hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
									<path d="M21 18.5C21 19.9045 21 20.6067 20.6208 21.1111C20.4567 21.3295 20.2457 21.517 20 21.6629C19.4325 22 18.6425 22 17.0625 22L6.9375 22C5.35748 22 4.56747 22 3.99997 21.6629C3.75429 21.517 3.54335 21.3295 3.37919 21.1111C3 20.6067 3 19.9045 3 18.5C3 17.0955 3 16.3933 3.37919 15.8889C3.54335 15.6705 3.75429 15.483 3.99997 15.3371C4.56747 15 5.35748 15 6.9375 15L17.0625 15C18.6425 15 19.4325 15 20 15.3371C20.2457 15.483 20.4567 15.6705 20.6208 15.8889C21 16.3933 21 17.0955 21 18.5Z" stroke="currentColor" stroke-width="2" />
									<path d="M12.0625 4L6.9375 4C5.35748 4 4.56747 4 3.99997 4.33706C3.75429 4.48298 3.54335 4.67048 3.37919 4.88886C3 5.39331 3 6.09554 3 7.5C3 8.90446 3 9.60669 3.37919 10.1111C3.54335 10.3295 3.75429 10.517 3.99997 10.6629C4.56747 11 5.35748 11 6.9375 11L17.0625 11C18.6425 11 19.4325 11 20 10.6629" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
									<path d="M21 7.99936L15 2M21 2.00064L15 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</button>
						</td>
			`;

			row.innerHTML = categoryRow;
			table.appendChild(row);
		}

		function store(button) {
			var form = button.closest('form');
			$(form).on('submit', function(event) {
				event.preventDefault();

				jQuery.ajax({
					url: "{{ route('category.store') }}",
					data: jQuery(form).serialize(),
					type: 'post',

					success: function(result) {
						addCategory(result.category);
						document.getElementById('alertTitle').innerHTML = result.success;
						document.getElementById('alertMessage').innerHTML = result.message;
						closeModal();
						SuccessAlertToggle();
						$(form).unbind();
					}
				})
			});
		}

		function update(button, id) {
			var form = button.closest('form');
			$(form).on('submit', function(event) {
				event.preventDefault();

				jQuery.ajax({
					url: "{{ route('category.update', ':id') }}".replace(':id', id),
					data: jQuery(form).serialize(),
					type: 'patch',

					success: function(result) {
						document.getElementById(`categoryName${id}`).innerHTML = result.category.name;
						document.getElementById('alertTitle').innerHTML = result.success;
						document.getElementById('alertMessage').innerHTML = result.message;
						closeEditModal();
						SuccessAlertToggle();
						$(form).unbind();
					}
				})
			});
		}

		function deleteCategory(button, id) {
      var form = button.closest('form');
      $(form).on('submit', function(event) {
        event.preventDefault();

        jQuery.ajax({
          url: `{{ route('category.destroy', ':id') }}`.replace(':id', id),
          data: jQuery(form).serialize(),
          type: 'delete',

          success: function(result) {
            document.getElementById(`categoryRow${id}`).remove();
						document.getElementById('alertTitle').innerHTML = result.success;
						document.getElementById('alertMessage').innerHTML = result.message;
						closeDeleteModal();
						SuccessAlertToggle();
						$(form).unbind();
          }
        })
      });
    }
	</script>
</x-dashboard-layout>