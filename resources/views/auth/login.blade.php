<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
  <title>NMIMS Placement Portal</title>
  <link rel="icon" href="css/icon.png">
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
  <style>
    /*remove custom style*/
    .circles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .circles li {
      position: absolute;
      display: block;
      list-style: none;
      width: 20px;
      height: 20px;
      background: rgba(255, 255, 255, 0.2);
      animation: animate 25s linear infinite;
      bottom: -150px;
    }

    .circles li:nth-child(1) {
      left: 25%;
      width: 80px;
      height: 80px;
      animation-delay: 0s;
    }


    .circles li:nth-child(2) {
      left: 10%;
      width: 20px;
      height: 20px;
      animation-delay: 2s;
      animation-duration: 12s;
    }

    .circles li:nth-child(3) {
      left: 70%;
      width: 20px;
      height: 20px;
      animation-delay: 4s;
    }

    .circles li:nth-child(4) {
      left: 40%;
      width: 60px;
      height: 60px;
      animation-delay: 0s;
      animation-duration: 18s;
    }

    .circles li:nth-child(5) {
      left: 65%;
      width: 20px;
      height: 20px;
      animation-delay: 0s;
    }

    .circles li:nth-child(6) {
      left: 75%;
      width: 110px;
      height: 110px;
      animation-delay: 3s;
    }

    .circles li:nth-child(7) {
      left: 35%;
      width: 150px;
      height: 150px;
      animation-delay: 7s;
    }

    .circles li:nth-child(8) {
      left: 50%;
      width: 25px;
      height: 25px;
      animation-delay: 15s;
      animation-duration: 45s;
    }

    .circles li:nth-child(9) {
      left: 20%;
      width: 15px;
      height: 15px;
      animation-delay: 2s;
      animation-duration: 35s;
    }

    .circles li:nth-child(10) {
      left: 85%;
      width: 150px;
      height: 150px;
      animation-delay: 0s;
      animation-duration: 11s;
    }

    @keyframes animate {

      0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
      }

      100% {
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
      }

    }
  </style>
  <div class="relative min-h-screen flex ">
    <div
      class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 bg-white">
      <div
        class="sm:w-1/2 xl:w-3/5 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden bg-purple-900 text-white bg-no-repeat bg-cover relative"
        style="background-image:url(images/home-bg.png);">
        <div class="absolute bg-gradient-to-b from-red-600 to-red-500 opacity-0 inset-0 z-0"></div>
        <div class="w-full  max-w-md z-10">
          <div class="sm:text-4xl xl:text-5xl font-bold leading-tight mb-6">One Stop Portal for Placements</div>
          <div class="sm:text-sm xl:text-md text-gray-200 font-normal"> Welcome to NMIMS, NMIMS is India's foremost
            industrial leadership development institution. Our Graduates are a combination of rigorous thinking,
            hardwork and fundamental stronghold. They are nurtured by the institute to strive for excellence and deliver
            impact in their field of work.
            </div>
        </div>
        <!---remove custom style-->
        <ul class="circles">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div
        class="md:flex md:items-center md:justify-center w-full sm:w-auto md:h-full w-2/5 xl:w-2/5 p-8  md:p-10 lg:p-14 sm:rounded-lg md:rounded-none bg-white">
        <div class="max-w-md w-full space-y-8">
          <div class="text-center">
            <h2 class="mt-6 text-3xl font-bold text-gray-900">
              Welcome Back!
            </h2>
            <p class="mt-2 text-sm text-gray-500">Please sign in to your account</p>
          </div>


          <form method="POST" action="{{ route('login') }}">
                        @csrf

            <input type="hidden" name="remember" value="true">
            <div class="relative">
              <div class="absolute right-3 mt-4"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Email</label>
              <input id="email" type="email"
                    class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                    placeholder="mail@gmail.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
            </div>
            <div class="mt-8 content-center">
              <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                Password
              </label>
              <input id="password" type="password"
                class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                 placeholder="Enter your password" name="password" required autocomplete="current-password">
                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input id="remember" name="remember" type="checkbox"
                  class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" class="ml-2 block text-sm text-gray-900">
                    {{ __('Remember Me') }}
                </label>
              </div>
              <div class="md:my-5 text-sm">
                <a href="#" class=" text-indigo-400 hover:text-blue-800">
                  Forgot your password?
                </a>
              </div>
            </div>
            <div>
              <button type="submit" class="w-full flex justify-center bg-gradient-to-r from-red-500 to-red-700  hover:bg-gradient-to-l 
                hover:from-red-700 hover:to-red-500 text-gray-100 p-4  rounded-sm tracking-wide font-semibold  
                shadow-lg cursor-pointer transition ease-in duration-500">
                {{ __('Login') }}
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>