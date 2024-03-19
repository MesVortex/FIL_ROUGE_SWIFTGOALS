<x-authentication-layout>
  <section class="w-screen">
    <form id="form" class=" bg-transparent backdrop-filter backdrop-blur-sm bg-[#5882C1] bg-opacity-25 mt-10 pt-10 px-16 border-2 border-[#5882C1] border-opacity-15 rounded-3xl max-w-lg mx-auto" action="" method="post">
      <h1 class=" mb-6 text-xl font-bold text-white dark:text-white md:text-3xl lg:text-4xl">Login</h1>
      <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-white ">Email</label>
        <input type="text" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-3.5 " placeholder="username@gmail.com">
        <p class=" hidden mt-2 text-sm font-bold text-red-700" id="EmailInputHelp">Please enter a valid email! (exp: name@gmail.com)</p>
      </div>
      <div class="mb-2">
        <label for="password" class="block mb-2 text-sm font-medium text-white ">Password</label>
        <input type="password" id="password" name="pwd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-3.5 " placeholder="Password">
        <p class=" hidden mt-2 text-sm font-bold text-red-700" id="PasswordInputHelp">Your password must be at least 8 characters!</p>
      </div>
      <p class="mb-8 text-xs font-normal text-white ">Forgot Password?</p>
      <button type="submit" class="text-white bg-[#012E4A] font-medium rounded-lg text-sm w-full py-2 text-center">Sign in</button>
      <div class="w-full text-center my-5">
        <p class="block text-xs font-normal text-white ">or continue with</p>
      </div>
      <div class="flex justify-between gap-4">
        <a href="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg py-1.5 text-center w-full"><i class="fa-brands fa-google"></i></a>
        <a href="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg py-1.5 text-center w-full"><i class="fa-brands fa-github"></i></a>
        <a href="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg py-1.5 text-center w-full"><i class="fa-brands fa-facebook"></i></a>
      </div>
      <div class="flex justify-center my-5">
        <p class=" text-xs font-normal text-white ">Don't have an account yet?<a href="{{ route('register') }}" class="font-bold ms-3 text-white hover:underline ">Register for free</a></p>
      </div>
    </form>
  </section>
</x-authentication-layout>