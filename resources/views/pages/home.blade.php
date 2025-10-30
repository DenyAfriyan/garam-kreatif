@extends('app')
@section('content')
<section
  class="relative w-full h-[450px] bg-cover bg-center flex items-center justify-center text-white mt-5"
  style="background-image: url('{{ asset('assets/images/hero1.gif') }}');"
>
</section>

<section class="text-gray-200  max-w-7xl flex flex-wrap items-center justify-between mx-auto p-4 mt-5 py-16">
  <div class="max-w-xl">
    <p class="text-lg md:text-2xl leading-relaxed mb-6">
      We blend identity, narrative, and experience into a signature taste —
      your brand's own flavor of aesthetics.
    </p>
    <a
      href="{{ route('about', ['locale' => app()->getLocale()]) }}"
      class="text-gray-400 hover:text-white text-sm md:text-base transition-colors"
    >
      Read More
    </a>
  </div>
</section>

<section class="text-gray-200 bg-black max-w-7xl flex flex-wrap items-center justify-between mx-auto p-4 mt-5 py-16">
  <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
    <!-- Left -->
    <div class="flex justify-center md:justify-start">
      <h2 class="text-4xl md:text-6xl font-light text-white">Our Services</h2>
    </div>

    <!-- Right -->
    <div class="w-full max-w-xl space-y-4">
      <div class="border-b border-gray-600 pb-3 text-lg md:text-2xl hover:text-gray-300 cursor-pointer transition">
        Branding
      </div>
      <div class="border-b border-gray-600 pb-3 text-lg md:text-2xl hover:text-gray-300 cursor-pointer transition">
        Design
      </div>
      <div class="border-b border-gray-600 pb-3 text-lg md:text-2xl hover:text-gray-300 cursor-pointer transition">
        Photography
      </div>
      <div class="border-b border-gray-600 pb-3 text-lg md:text-2xl hover:text-gray-300 cursor-pointer transition">
        Videography
      </div>
      <div class="border-b border-gray-600 pb-3 text-lg md:text-2xl hover:text-gray-300 cursor-pointer transition">
        3D Animation
      </div>
      <div class="border-b border-gray-600 pb-3 text-lg md:text-2xl hover:text-gray-300 cursor-pointer transition">
        Content Planning
      </div>
    </div>
  </div>
</section>

<section class="text-gray-200 max-w-7xl flex flex-wrap items-center justify-center mx-auto p-4 mt-5 md:py-16">
  <div class="w-full">
    <div class="rounded-2xl overflow-hidden shadow-lg">
      <img
        class="w-full h-auto object-cover"
        src="{{ asset('assets/images/othman_cover.png') }}"
        alt="Othman for JFW 2024"
      />
    </div>
    <p class="text-lg md:text-2xl mt-6 mb-3">
      Othman for JFW 2024
    </p>
    <a
      href="#"
      class="text-gray-400 hover:text-white text-sm md:text-base transition-colors"
    >
      View Work
    </a>
  </div>
</section>

<section class="text-gray-200 max-w-7xl mx-auto p-4 mt-5 py-16">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Card 1 -->
    <div>
        <div class="relative rounded-2xl overflow-hidden shadow-lg aspect-3/2">
        <img
            src="{{ asset('assets/images/regan_harney.jpg') }}"
            alt="Regan Harney"
            class="w-full h-full object-cover"
        />
        <div class="absolute inset-0 bg-black/10 flex items-center justify-center">
            <h3 class="text-white text-2xl md:text-3xl font-semibold tracking-wide">
            REGAN HARNEY
            </h3>
        </div>
        </div>
        <p class="text-lg md:text-2xl mt-6 mb-3">Timeless Elegance for Regan Harney</p>
        <a
            href="#"
            class="text-gray-400 hover:text-white text-sm md:text-base transition-colors"
        >
            View Work
        </a>
    </div>


    <!-- Card 2 -->
    <div>
        <div class="relative rounded-2xl overflow-hidden shadow-lg aspect-3/2">
            <img
                src="{{ asset('assets/images/walk_in_resilience.jpg') }}"
                alt="Walk in Resilience"
                class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-black/10 flex items-center justify-center">
                <h3 class="text-white text-2xl md:text-3xl font-semibold tracking-wide text-center">
                WALK IN<br class="hidden sm:block" /> RESILIENCE
                </h3>
            </div>
        </div>
         <p class="text-lg md:text-2xl mt-6 mb-3">Walk in Resillience for Serumpun Indonesia</p>
        <a
            href="#"
            class="text-gray-400 hover:text-white text-sm md:text-base transition-colors"
        >
            View Work
        </a>
    </div>
  </div>
  <!-- View All Work link -->
  <div class="text-center mt-20">
    <a
      href="#"
      class="text-white text-base md:text-2xl underline underline-offset-4 hover:text-gray-300 transition-colors"
    >
      View All Work
    </a>
  </div>
</section>










@endsection

