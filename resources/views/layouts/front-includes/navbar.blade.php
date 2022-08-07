<!-- navigation start -->
<header>
    <nav class="bg-slate-100 border-gray-200 px-4 lg:px-6 py-3 shadow-lg z-10 fixed w-full">
        <div class="flex flex-wrap justify-between items-center mx-auto">
            <a href="{{url('/')}}" class="flex items-center">
                <img src="{{asset('frontend/assets/images/logo.png')}}" class="mr-3 h-10" alt="Marine Liner Logo" />
            </a>
            <div class="flex items-center lg:order-2">
                @guest
                @if (Route::has('login'))
                <a href="{{url('login')}}" class="btn-secondary mr-2 hidden md:block">Log in</a>
                @endif
                @if (Route::has('register'))
                <a href="{{url('register')}}" class="btn-primary hidden md:block">
                    Get started
                </a>
                @endif
                @else

                <div class="flex items-center lg:order-2">
                    <!-- TAMIM Dropdown start here -->
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="items-center text-sm font-medium btn-primary hidden md:flex" type="button">
                      <span class="sr-only">Open user menu</span>
                      <img class="mr-2 w-6 h-6 rounded-full" src="{{asset('frontend/assets/images/Avatar_poe84it.png')}}" alt="user photo">
                      Bonnie Green
                      <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
        
                    <!-- Dropdown menu -->
                    <div id="dropdownAvatarName" class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow hidden" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);" data-popper-reference-hidden="" data-popper-escaped="">
                      <div class="py-3 px-4 text-sm hover:bg-slate-100">
                        <a href="#">
                          <div class="font-medium">Admin</div>
                          <div class="truncate">{{Auth::user()->name}}</div>
                        </a>
                      </div>
                      <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                          <a href="#" class="block py-2 px-4 hover:bg-gray-100">Your Bookings</a>
                        </li>
                        <li>
                          <a href="#" class="block py-2 px-4 hover:bg-gray-100">Tracking</a>
                        </li>
                      </ul>
                      <div class="py-1">
                        <a href="{{ route('logout') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            Signout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </div>
                    </div>
                    <!-- TAMIM Dropdown end here -->
                </div>
                @endguest

                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full space-y-6 lg:flex lg:w-auto lg:order-1"
                id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{url('/')}}"
                            class="block py-2 pr-4 pl-3 text-blue-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0"
                            aria-current="page">Home</a>
                    </li>

                    <li>
                        <a href="{{url('about')}}"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">About</a>
                    </li>
                    <li>
                        <a href="{{url('booking')}}"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Bookings</a>
                    </li>

                    <li>
                        <a href="{{url('contact')}}"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Contact</a>
                    </li>
                </ul>

                @guest
                @if (Route::has('login'))
                <a href="{{url('login')}}" class="btn-secondary mr-2 md:hidden block">Log in</a>
                @endif
                @if (Route::has('register'))
                <a href="{{url('register')}}" class="btn-primary mr-2 md:hidden block">
                    Get started
                </a>
                @endif
                @else

                <div class="flex items-center lg:order-2">
                    <!-- TAMIM Dropdown start here -->
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="items-center text-sm font-medium btn-primary md:hidden flex" type="button">
                      <span class="sr-only">Open user menu</span>
                      <img class="mr-2 w-6 h-6 rounded-full" src="{{asset('frontend/assets/images/Avatar_poe84it.png')}}" alt="user photo">
                      Bonnie Green
                      <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
        
                    <!-- Dropdown menu -->
                    <div id="dropdownAvatarName" class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow hidden" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);" data-popper-reference-hidden="" data-popper-escaped="">
                      <div class="py-3 px-4 text-sm hover:bg-slate-100">
                        <a href="#">
                          <div class="font-medium">Admin</div>
                          <div class="truncate">{{Auth::user()->name}}</div>
                        </a>
                      </div>
                      <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                          <a href="#" class="block py-2 px-4 hover:bg-gray-100">Your Bookings</a>
                        </li>
                        <li>
                          <a href="#" class="block py-2 px-4 hover:bg-gray-100">Tracking</a>
                        </li>
                      </ul>
                      <div class="py-1">
                        <a href="{{ route('logout') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            Signout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </div>
                    </div>
                    <!-- TAMIM Dropdown end here -->
                </div>
                {{-- <a href="{{url('/profile')}}" class="btn-secondary mr-2 md:hidden block">{{ Auth::user()->name }}</a>

                <a href="{{ route('logout') }}" class="btn-primary md:hidden block" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form> --}}
                @endguest

            </div>
        </div>
    </nav>
</header>
<!-- navigation end -->
