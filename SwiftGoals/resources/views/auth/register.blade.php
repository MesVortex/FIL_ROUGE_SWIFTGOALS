<x-authentication-layout>
  <section class="w-screen">
    <form id="form" class=" bg-transparent backdrop-filter backdrop-blur-sm bg-[#5882C1] bg-opacity-25 mt-10 pt-10 px-16 border-2 border-[#5882C1] border-opacity-15 rounded-3xl max-w-xl mx-auto" action="" method="post">
      <h1 class=" mb-6 text-xl font-bold text-white dark:text-white md:text-3xl lg:text-4xl">Register</h1>
      <div class="flex justify-between">
        <div class="mb-3">
          <label for="email" class="block mb-2 text-sm font-medium text-white ">Username</label>
          <input type="text" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-3.5 " placeholder="Username">
          <p class=" hidden mt-2 text-sm font-bold text-red-700" id="EmailInputHelp">Please enter a valid email! (exp: name@gmail.com)</p>
        </div>   
        <div class="mb-3">
          <label for="email" class="block mb-2 text-sm font-medium text-white ">Email</label>
          <input type="text" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-3.5 " placeholder="username@gmail.com">
          <p class=" hidden mt-2 text-sm font-bold text-red-700" id="EmailInputHelp">Please enter a valid email! (exp: name@gmail.com)</p>
        </div>
      </div>
      <div class="mb-3">
        <label for="password" class="block mb-2 text-sm font-medium text-white ">Password</label>
        <input type="password" id="password" name="pwd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-3.5 " placeholder="Password">
        <p class=" hidden mt-2 text-sm font-bold text-red-700" id="PasswordInputHelp">Your password must be at least 8 characters!</p>
      </div>
      <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-white ">Confirm Password</label>
        <input type="password" id="password" name="pwd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-3.5 " placeholder="Confirm Password">
        <p class=" hidden mt-2 text-sm font-bold text-red-700" id="PasswordInputHelp">Your password must be at least 8 characters!</p>
      </div>
      <button type="submit" class="text-white bg-[#012E4A] font-medium rounded-lg text-sm w-full py-2 text-center">Sign up</button>
      <div class="w-full text-center my-5">
        <p class="block text-xs font-normal text-white ">or continue with</p>
      </div>
      <div class="flex justify-between gap-4">
        <a href="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg py-1.5 text-center w-full"><i class="fa-brands fa-google"></i></a>
        <a href="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg py-1.5 text-center w-full"><i class="fa-brands fa-github"></i></a>
        <a href="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg py-1.5 text-center w-full"><i class="fa-brands fa-facebook"></i></a>
      </div>
      <div class="flex justify-center my-5">
        <p class=" text-xs font-normal text-white ">Already Registered?<a href="{{ route('login') }}" class="font-bold ms-3 text-white hover:underline ">Login To Your Account</a></p>
      </div>
    </form>
  </section>
</x-authentication-layout>