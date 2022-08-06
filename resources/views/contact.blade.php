@extends('layouts.app')

@section('content')

<div class="object-center bg-no-repeat bg-cover" style="
          background-image: linear-gradient(#00000053, #00000053),
            url(https://images.unsplash.com/photo-1615840287214-7ff58936c4cf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80);
        ">
    <div class="space-y-6 flex items-center justify-center mx-auto flex-col wrapper">
        <h2 class="text-center text-white font-bold uppercase">Contact Us</h2>
        <div class="border-b-4 border-blue-300 pb-4 w-20"></div>
    </div>
</div>
<section class="wrapper">
    <div class="h-full text-gray-800">
        <div class="grid md:grid-cols-2 gap-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509164.484029035!2d-123.79871656688789!3d37.193032687834986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sbd!4v1659074290813!5m2!1sen!2sbd"
                style="border: 0" allowfullscreen="" class="w-full h-full min-h-[450px]" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form class="w-full space-y-6">
                <h1>Contact Us</h1>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-password" type="text" placeholder="John Smith" />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Email
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-password" type="email" placeholder="xyz@dimain.com" />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Phone
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-password" type="tel" placeholder="0491 570 156" />
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Message
                        </label>

                        <textarea id="message" rows="4"
                            class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            placeholder="Your message..."></textarea>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="button" class="px-6 py-4 btn-primary">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
