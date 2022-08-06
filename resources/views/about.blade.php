@extends('layouts.app')

@section('content')

<div class="wrapper">
    <div class="grid md:grid-cols-5 gap-14">
      <!-- left -->
      <div class="space-y-9 col-span-3 text-justify">
        <h1 class="text-sky-700">Mrine Line</h1>

        <p class="leading-6">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde a
          vel excepturi sunt enim maiores eos quibusdam. Ab deserunt
          doloribus fugiat. Ipsa dicta culpa quo commodi quae, non officia
          pariatur aliquid exercitationem necessitatibus velit fuga corporis
          adipisci sunt minima omnis. Magni, suscipit totam voluptas
          reiciendis debitis assumenda, asperiores ducimus ad perspiciatis
          dolorem est nulla, ex obcaecati officiis vitae mollitia
          voluptatibus beatae consectetur quidem at. Qui nobis architecto
          aliquam amet! Veritatis culpa incidunt similique quas tempora
          pariatur in ab voluptatum alias eum, quia vel quos itaque
          explicabo sunt, eos mollitia non!
        </p>

        <p class="leading-6">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
          facere quibusdam est unde nesciunt officiis illo, et esse incidunt
          magni odit maxime placeat vero temporibus voluptates cupiditate
          non ut tempore iste dignissimos porro aperiam nulla sit? Vero
          autem repudiandae, veritatis quos rem possimus fugit consequatur,
          harum ratione sunt quo, delectus cupiditate ad labore itaque
          accusamus similique velit! Nostrum, deleniti porro, quas a cum
          tempora consectetur reprehenderit, aut libero architecto harum
          eaque perspiciatis quos nam officiis quaerat suscipit eos sunt ex!
        </p>

        <p class="leading-6">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
          possimus totam reiciendis nisi officia obcaecati, maiores cum eos,
          laborum culpa dolore dolor nobis sequi eveniet, libero iusto.
          Maiores tempore quia quam sapiente asperiores molestiae nesciunt
          deserunt, iste enim repellendus tempora magnam sed neque ipsum
          sequi dolorum provident! Ipsum, nihil ut.
        </p>
      </div>

      <!-- right -->
      <div class="flex justify-center items-center col-span-2 order-first">
        <img
          src="{{asset('frontend/assets/images/Work_3.jpg')}}"
          class="w-full"
          alt="about-image"
        />
      </div>
    </div>
  </div>

  <div class="wrapper bg-slate-50">
    <div class="grid md:grid-cols-2 gap-9">
      <!-- left -->
      <div class="flex justify-center items-center">
        <div class="space-y-4 text-center md:text-start">
          <h2 class="font-semibold">Our Professional Team</h2>
          <div class="flex justify-center md:justify-start">
            <div class="bg-sky-700 w-24 h-1"></div>
          </div>
          <p class="md:max-w-lg">
            We are a team of professionals committed to corporate
            excellence.
          </p>
        </div>
      </div>
      <!-- right -->
      <div
        class="flex justify-center items-center order-first md:order-last"
      >
        <div class="text-center">
          <img
            src="{{asset('frontend/assets/images/Avatar_poe84it.png')}}"
            class="rounded-full w-80 h-80 object-cover shadow-lg ring-4 ring-sky-500"
            alt="image"
          />
          <h3 class="font-semibold capitalize text-sky-700 mt-5">
            Lorem ipsum dolor
          </h3>
          <h6 class="font-semibold">Founder & CEO Logistix</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="grid md:grid-cols-2 gap-6 md:gap-20">
      <!-- left  -->
      <div class="space-y-9 flex flex-col items-center text-center">
        <div
          class="bg-sky-700 p-6 shadow-md ring-2 ring-slate-100 inline-block justify-center items-center"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-11 w-11 text-white"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"
            />
          </svg>
        </div>
        <h3 class="font-semibold">Our Vision</h3>
        <p class="leading-relaxed text-justify">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi
          animi velit, molestias perferendis accusantium optio nihil debitis
          deleniti sed minus aperiam iure. Distinctio ex inventore dicta
          placeat repu
        </p>
      </div>
      <!-- right  -->
      <div class="space-y-9 flex flex-col items-center text-center">
        <div
          class="bg-sky-700 p-6 shadow-md ring-2 ring-slate-100 inline-block justify-center items-center"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-11 w-11 text-white"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
              clip-rule="evenodd"
            />
          </svg>
        </div>
        <h3 class="font-semibold">Our Mission</h3>
        <p class="leading-relaxed text-justify">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi
          animi velit, molestias perferendis accusantium optio nihil debitis
          deleniti sed minus aperiam iure. Distinctio ex inventore dicta
          placeat repudiandae, assumenda neque, ea similique nostrum sunt
          nam dolorum?
        </p>
      </div>
    </div>
  </div>

@endsection