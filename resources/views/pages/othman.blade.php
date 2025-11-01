@extends('app')
@section('content')
<section class="text-gray-100 bg-black flex flex-col lg:flex-row justify-between items-start mx-auto px-6 sm:px-10 py-28 max-w-7xl">
  <!-- Kiri: Teks utama -->
  <div class="flex-1">
    <h1 class="text-4xl sm:text-6xl font-light mb-4">Othman for JFW</h1>
    <h2 class="text-4xl sm:text-6xl font-light mb-12">2024</h2>

    <p class="text-lg sm:text-xl leading-relaxed max-w-2xl">
      Thank you, and congratulations to Othman for winning The Most Innovative Ready-to-Wear Label Award at Fashion Force Awards 2024
      <a href="https://www.instagram.com/jfwofficial" class="underline hover:text-gray-300">@jfwofficial</a>.
      A well-deserved achievement that reflects their hard work and vision.
    </p>
  </div>

  <!-- Kanan: Roles -->
  <div class="flex flex-col gap-4 mt-12 lg:mt-0 lg:ml-24 text-gray-400 text-lg">
    <span>Visual Experience</span>
    <span>Audio Design</span>
    <span>Creative Direction</span>
    <span>Art Direction</span>
  </div>
</section>
<section class="text-gray-100 bg-black flex flex-col lg:flex-row items-center justify-center mx-auto px-6 sm:px-10 py-28 max-w-7xl gap-10">
  <!-- Gambar -->
  <div class="w-full lg:w-1/2">
    <div class="aspect-3/2 w-full overflow-hidden rounded-lg">
      <img
        src="{{ asset('assets/images/othman_1.jpg') }}"
        alt="Othman Runway"
        class="w-full h-full object-cover object-[50%_20%]"
      />
    </div>
  </div>

  <!-- Teks -->
  <div class="w-full lg:w-1/2 text-left">
    <p class="text-lg sm:text-xl leading-relaxed mt-5">
      Thank you, and congratulations to Othman for winning The Most Innovative Ready-to-Wear Label Award
      at Fashion Force Awards 2024
      <a href="#" class="underline hover:text-gray-300">@jfwofficial</a>.
      A well-deserved achievement that reflects their hard work and vision.
    </p>
  </div>
</section>

<section class="text-gray-100 bg-black flex flex-col-reverse lg:flex-row justify-between items-center mx-auto px-6 sm:px-10 py-20 max-w-7xl">
    <!-- Teks -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center text-center lg:text-left space-y-4 mt-10 lg:mt-0">
        <p class="text-base sm:text-lg md:text-xl leading-relaxed">
            Thank you, and congratulations to
            <span class="font-semibold">Othman</span> for winning
            <span class="italic">The Most Innovative Ready-to-Wear Label Award</span>
            at Fashion Force Awards 2024
            <a href="#" target="_blank" class="underline">@jfwofficial</a>.
            A well-deserved achievement that reflects their hard work and vision.
        </p>
    </div>

    <!-- Gambar -->
    <div class="w-full lg:w-1/2">
    <div class="aspect-3/2 w-full overflow-hidden rounded-lg">
      <img
        src="{{ asset('assets/images/othman_2.jpg') }}"
        alt="Othman Runway"
        class="w-full h-full object-cover object-[50%_20%]"
      />
    </div>
  </div>
</section>

<section class="text-gray-200 max-w-7xl flex flex-wrap items-center justify-center mx-auto p-4 mt-5 md:py-16">

        <div class="w-full">
            <div class="rounded-2xl overflow-hidden shadow-lg">
            <img
                class="w-full h-auto object-cover"
                src="{{ asset('assets/images/othman_3.png') }}"
                alt="Othman for JFW 2024"
            />
            </div>
            <h2 class="text-2xl md:text-6xl mt-6 mb-3">
            Watch The Full </br>Experience
            </h2>
        </div>

     <div class="text-center mt-20">
    <a
      href="{{ route('work', ['locale' => app()->getLocale()]) }}"
      class="text-white text-base md:text-2xl underline underline-offset-4 hover:text-gray-300 transition-colors"
    >
      View All Work
    </a>
</section>



@endsection

