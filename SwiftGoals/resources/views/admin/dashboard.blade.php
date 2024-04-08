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
    <div class="bg-gray-100 flex-1 p-6 ml-40 mt-20">
        <div class="flex-grow p-6 lg:pl-80  pt-28">
            <div class="flex justify-center items-center h-full">
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md w-full max-w-4xl">
                    <div class="pb-4 flex justify-between items-center">
                        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">User Management</h2>
                        <input type="text" class="block w-1/4 text-sm py-2 px-4 rounded-lg border-2 border-gray-300 shadow-sm focus:border-blue-500" placeholder="Search users...">
                    </div>
                    <div class="">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">Name</th>
                                    <th scope="col" class="py-3 px-6">Email</th>
                                    <th scope="col" class="py-3 px-6">Status</th>
                                    <th scope="col" class="py-3 px-6">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example row -->
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="py-4 px-6">John Doe</td>
                                    <td class="py-4 px-6">john@example.com</td>
                                    <td class="py-4 px-6">Active</td>
                                    <td class="py-4 px-6 flex space-x-2">
                                        <button class="text-green-600 hover:text-green-900 dark:hover:text-green-400" title="Unblock">Unblock</button>
                                        <button class="text-red-600 hover:text-red-900 dark:hover:text-red-400" title="Block">Block</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
<!-- 
</body>

</html> -->