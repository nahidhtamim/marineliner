@extends('layouts.app')

@section('content')


<section class="pb-16">
    <div class="px-6 text-gray-800">
        <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
            <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                <img src="{{asset('frontend/assets/images/signup.webp')}}" class="w-full" alt="Sample image" />
            </div>
            <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">

                @if (session('resent'))
                    <p class="text-green-500 text-xs italic" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </p>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},

                <form class="w-full max-w-lg space-y-6" method="POST" action="{{ route('verification.resend') }}">
                    <h1>Verify Your Email Address</h1>
                    @csrf
                    <button type="submit" class="btn-primary">{{ __('click here to request another') }}</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
