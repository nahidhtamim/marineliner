@extends('layouts.app')

@section('content')


<section class="pb-16">
    <div class="px-6 text-gray-800">
        <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
            <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                <img src="{{asset('frontend/assets/images/signup.webp')}}" class="w-full" alt="Sample image" />
            </div>
            <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                @if (session('status'))
                    <span class="text-green-500 text-xs italic" role="alert">
                        {{ session('status') }}
                    </span>
                @endif
                <form class="w-full max-w-lg space-y-6" method="POST" action="{{ route('password.confirm') }}">
                    <h1>{{ __('Confirm Password') }}</h1>
                    {{ __('Please confirm your password before continuing.') }}
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Password
                            </label>
                            <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('password') is-invalid @enderror" id="grid-password" type="password" placeholder="******************" name="password" required autocomplete="current-password" />

                            @error('password')
                                <span class="text-red-500 text-xs italic" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn-primary">{{ __('Confirm Password') }}</button>
                    <br>
                    @if (Route::has('password.request'))
                    <a class="btn text-xs" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
