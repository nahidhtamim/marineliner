@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600">
        <p class="self-center">
        <strong>{{ session('status') }}</strong>
        </p>
        <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
    </div>
@elseif (session('warning'))
    <div class="flex justify-between text-red-200 shadow-inner rounded p-3 bg-green-600">
        <p class="self-center">
        <strong>{{ session('warning') }}</strong>
        </p>
        <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
    </div>   
@endif

<!-- Hero section start -->
<section class="bg-center bg-cover bg-no-repeat" style="
          background-image: linear-gradient(#2440e222, #17151703),
            url('https://images.unsplash.com/photo-1565891741441-64926e441838?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80');
        ">
    <div class="max-w-screen-xl px-4 py-32 mx-auto lg:h-screen lg:items-center lg:flex">
        <div class="max-w-3xl py-20 px-12 rounded-2xl shadow-inner"
            style="background-image: linear-gradient(#334155b3, #334155b3)">
            <h1 class="text-3xl font-normal sm:text-5xl text-white">
                Discover the Upside

                <span class="sm:block"> with integrated logistics. </span>
            </h1>

            <p class="max-w-xl text-white mx-auto mt-4 sm:leading-relaxed sm:text-xl">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt
                illo tenetur fuga ducimus numquam ea!
            </p>

            <div class="flex flex-wrap justify-start gap-4 mt-8">
                <a class="btn-transparent" href="/get-started"> Get Started </a>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Intro start -->
<div class="wrapper">
    <div class="grid md:grid-cols-2 space-y-6 md:space-y-0 gap-16">
        <!-- left -->
        <div class="space-y-6 flex flex-col justify-center order-last">
            <h2>Move your technology supply chain to the fast lane</h2>
            <p>
                Leveraging speed through supply chain integration, especially in
                the time of disruption, can give you the crucial competitive edge
                you need in a rapidly evolving marketplace.
            </p>
            <div>
                <a class="px-6 py-3 btn-primary" href="/get-started">
                    Get Started
                </a>
            </div>
        </div>
        <!-- right -->
        <div>
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                alt="background-image" class="shadow-xl rounded-xl object-cover" />
        </div>
    </div>
</div>
<!-- Intro end -->

<!-- banner 2 start -->
<div class="object-cover bg-no-repeat bg-cover" style="
          background-image: linear-gradient(
              180deg,
              #00000081 0%,
              #00000097 50%,
              #19123681 100%
            ),
            url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
        ">
    <div class="space-y-6 flex items-center justify-center mx-auto flex-col wrapper">
        <h2 class="text-center text-white font-bold">MARINE LINERBIOFUEL SOLUTION</h2>
        <div class="border-b-4 border-blue-300 pb-4 w-20"></div>

        <p class="text-white text-center font-semibold">
            From Ambition to Action: <br />
            For Zero Impact on the Atmosphere
        </p>
        <div class="flex justify-center">
            <button type="button" class="btn-transparent">Read More</button>
        </div>
    </div>
</div>
<!-- banner 2 end -->
<!-- services start -->
<div class="wrapper space-y-16">
    <div class="flex justify-center">
        <div class="space-y-6 max-w-4xl text-center">
            <h2>Move your technology supply chain to the fast lane</h2>
            <p>
                Leveraging speed through supply chain integration, especially in
                the time of disruption, can give you the crucial competitive edge
                you need in a rapidly evolving marketplace.
            </p>
            <div>
                <button type="button" class="px-6 py-3 btn-primary">
                    Get started
                </button>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <div
            class="shadow-md bg-gradient-to-r from-gray-50 hover:bg-blue-50 hover:cursor-pointer hover:-translate-y-3 transition duration-150 ease-in-out">
            <a href="#">
                <img class="rounded-t-lg"
                    src="https://www.maersk.com/~/media_sc9/maersk/solutions/transportation-services/images/transportation-services_illustration.svg?w=1000&hash=F68E778D455E2B30243A7458F0C2445C"
                    alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h6 class="mb-2">Lorem ipsum dolor sit amet.</h6>
                </a>
                <p class="mb-3 text-gray-500">
                    Here are the biggest enterprise technology acquisitions of 2021
                    so far, in reverse chronological order.
                </p>

                <a href="#" class="inline-flex items-center px-6 py-3 btn-primary">
                    Read more
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div
            class="shadow-md bg-gradient-to-r from-gray-50 hover:bg-blue-50 hover:cursor-pointer hover:-translate-y-3 transition duration-150 ease-in-out">
            <a href="#">
                <img class="rounded-t-lg"
                    src="https://www.maersk.com/~/media_sc9/maersk/solutions/transportation-services/images/transportation-services_illustration.svg?w=1000&hash=F68E778D455E2B30243A7458F0C2445C"
                    alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h6 class="mb-2">Lorem ipsum dolor sit amet.</h6>
                </a>
                <p class="mb-3 text-gray-500">
                    Here are the biggest enterprise technology acquisitions of 2021
                    so far, in reverse chronological order.
                </p>

                <a href="#" class="inline-flex items-center px-6 py-3 btn-primary">
                    Read more
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div
            class="shadow-md bg-gradient-to-r from-gray-50 hover:bg-blue-50 hover:cursor-pointer hover:-translate-y-3 transition duration-150 ease-in-out">
            <a href="#">
                <img class="rounded-t-lg"
                    src="https://www.maersk.com/~/media_sc9/maersk/solutions/transportation-services/images/transportation-services_illustration.svg?w=1000&hash=F68E778D455E2B30243A7458F0C2445C"
                    alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h6 class="mb-2">Lorem ipsum dolor sit amet.</h6>
                </a>
                <p class="mb-3 text-gray-500">
                    Here are the biggest enterprise technology acquisitions of 2021
                    so far, in reverse chronological order.
                </p>

                <a href="#" class="inline-flex items-center px-6 py-3 btn-primary">
                    Read more
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div
            class="shadow-md bg-gradient-to-r from-gray-50 hover:bg-blue-50 hover:cursor-pointer hover:-translate-y-3 transition duration-150 ease-in-out">
            <a href="#">
                <img class="rounded-t-lg"
                    src="https://www.maersk.com/~/media_sc9/maersk/solutions/transportation-services/images/transportation-services_illustration.svg?w=1000&hash=F68E778D455E2B30243A7458F0C2445C"
                    alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h6 class="mb-2">Lorem ipsum dolor sit amet.</h6>
                </a>
                <p class="mb-3 text-gray-500">
                    Here are the biggest enterprise technology acquisitions of 2021
                    so far, in reverse chronological order.
                </p>

                <a href="#" class="inline-flex items-center px-6 py-3 btn-primary">
                    Read more
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- services end -->

<!-- banner 1 start -->
<div class="bg-gradient-to-br from-blue-300 to-sky-500 md:bg-gradient-to-r md:from-sky-200 md:to-sky-600">
    <div class="grid md:grid-cols-2 container mx-auto gap-6 px-6 lg:px-28 wrapper">
        <div class="items-center justify-center mx-auto hidden md:flex">
            <img src="{{asset('frontend/assets/images/bg-hh.png')}}" alt="" class="rounded-lg shadow-indigo-500" />
        </div>
        <div class="space-y-6 max-w-md flex items-center justify-center mx-auto flex-col">
            <h2 class="text-center text-white font-bold">
                MARINE LINER BIOFUEL SOLUTION
            </h2>
            <div class="border-b-4 border-blue-300 pb-4 w-20"></div>

            <p class="text-white text-center font-semibold">
                From Ambition to Action: <br />
                For Zero Impact on the Atmosphere
            </p>
            <div class="flex justify-center">
                <button type="button" class="btn-transparent">Read More</button>
            </div>
        </div>
    </div>
</div>
<!-- banner 1 end -->

<!-- start -->
<div class="wrapper">
    <div class="grid md:grid-cols-2 space-y-6 md:space-y-0 gap-16">
        <!-- left -->
        <div class="space-y-6 flex flex-col justify-center">
            <h2>Move your technology supply chain to the fast lane</h2>
            <p>
                Leveraging speed through supply chain integration, especially in
                the time of disruption, can give you the crucial competitive edge
                you need in a rapidly evolving marketplace.
            </p>
            <div>
                <a class="px-6 py-3 btn-primary" href="/get-started">
                    Get Started
                </a>
            </div>
        </div>
        <!-- right -->
        <div>
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                alt="background-image" class="shadow-xl rounded-xl object-cover" />
        </div>
    </div>
</div>
<!-- end -->
@endsection
