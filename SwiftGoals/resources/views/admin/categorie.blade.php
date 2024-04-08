<!-- <!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Welcome To Cleopatra</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;600;700;800&family=Kavoon&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="bg-gray-100"> -->
<x-dashboard-layout>
    <div class="">
        <div class="flex-grow p-6 lg:pl-80 pt-28">
            <div class=" dark:bg-gray-800  rounded-lg shadow-md ml-10 bg-white flex-1 p-6 mt-20">
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
                    <tbody id="themeTable">
                        <td>

                        </td>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="py-6 px-6">Sample Theme</td>
                            <td class="py-6 px-6">
                                <button onclick="openModal(true, 'Sample Theme')" class="text-green-500 hover:text-orange-300">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="deleteTheme('Theme ID')" class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal for Adding/Editing Theme -->
        <div id="addThemeModal" class="hidden fixed inset-0 z-10 overflow-auto bg-black bg-opacity-40">
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white rounded-lg mx-auto p-5 relative max-w-lg w-full">
                    <span class="absolute top-0 right-0 m-3 cursor-pointer text-gray-400 hover:text-gray-600" onclick="closeModal()">&times;</span>
                    <h2 id="modalTitle" class="text-xl mb-4">Add New Theme</h2>
                    <input type="text" id="newThemeName" placeholder="Theme name..." class="mb-4 w-full p-2 border rounded">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="addOrUpdateTheme()">Save Theme</button>
                </div>
            </div>
        </div>
        <script>
            function openModal() {
                document.getElementById('addThemeModal').classList.remove('hidden');
            }

            function closeModal() {
                document.getElementById('addThemeModal').classList.add('hidden');
            }

            function openModal(isEdit = false, themeName = '') {
                document.getElementById('addThemeModal').classList.remove('hidden');
                document.getElementById('newThemeName').value = themeName;
                document.getElementById('modalTitle').innerText = isEdit ? 'Edit Theme' : 'Add New Theme';
            }

            function closeModal() {
                document.getElementById('addThemeModal').classList.add('hidden');
            }
        </script>
    </div>
</x-dashboard-layout>
<!-- 
</body>

</html> -->