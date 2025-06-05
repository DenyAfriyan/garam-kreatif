@extends('app')
@section('content')
{{-- Hero --}}
<section class="w-full relative overflow-x-hidden md:overflow-x-visible" style="background: linear-gradient(to bottom, rgba(22,22,22,1), rgba(0,0,0,1));" x-data="{ open: false }">
    <nav class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/images/Logo_Youtube_Garam_1.png') }}" class="h-16 md:h-24" alt="Garam Kreatif Logo" />
        </a>
        <!-- Hamburger Button -->
        <button @click="open = true" class="text-white hover:text-white/80 transition-colors duration-200 focus:outline-none">
            <svg class="w-8 h-8 md:w-16 md:h-16" fill="none" stroke="currentColor" stroke-width="1"
                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </nav>
    <!-- Fullscreen Overlay Menu -->
    <div x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-95"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-95"
        class="fixed inset-0 z-40 bg-black bg-opacity-95 flex flex-col items-center justify-center space-y-6 text-white text-2xl"
        @click.away="open = false"
        style="display: none;">
        <h2 class="text-gray-400"> Welcome to Garam Kreatif</h2>
        <!-- Close Button -->
        <button @click="open = false" class="absolute top-5 right-6 text-white text-3xl">&times;</button>


    </div>
    <div class="max-w-screen-xl justify-between mx-auto p-4 h-100 grid grid-cols-6 text-white mt-10  md:mb-24">
        <div class="relative col-span-4">
            <!-- Absolute "01" aligned to the right, nudged to match "narratives" -->
            <span class="absolute right-6 md:right-10 lg:right-18 top-0 text-gray-400 text-2xl">
                01
            </span>
            <div class="h-8"></div>
            <!-- Main text -->
                <div class="text-2xl md:text-4xl lg:text-7xl leading-tight mt-3">
                    {{ __('messages.hero') }}
                </div>
        </div>
        <img src="{{ asset('assets/images/GARAM_BLACK_1.png') }}"
            class="absolute top-0 right-[-29%] w-[60%] md:w-[80%] h-full object-contain pointer-events-none max-w-none"
            alt="Decorative" />

    </div>
</section>
{{-- About --}}
<section id="aboutus" class="w-full h-full relative bg-black text-white overflow-x-hidden md:overflow-x-visible">
  <!-- Image untuk desktop (absolute kiri) -->
  <img src="{{ asset('assets/images/Logo_Youtube_Garam_2.png') }}"
       class="hidden md:block absolute top-0 md:right-[30%] lg:right-[36%] w-[100%] md:h-[85%] lg:h-[120%] object-contain pointer-events-none max-w-none"
       alt="Decorative" />

  <div class="max-w-screen-xl mx-auto h-full grid grid-cols-1 p-5 md:grid-cols-2 gap-8 pt-16 md:mb-32">
    <!-- Gambar untuk mobile (bukan absolute, di atas teks) -->
    <div class="block md:hidden w-full">
      <img src="{{ asset('assets/images/Logo_Youtube_Garam_2.png') }}"
           class="h-auto object-contain pointer-events-none w-64"
           alt="Decorative" />
    </div>

    <!-- Text content -->
    <div class="relative md:col-start-2 flex flex-col justify-center">
      <h2 class="text-gray-400 text-2xl mb-4">02 / ABOUT US</h2>
      <div class="text-2xl md:text-4xl lg:text-7xl leading-tight mb-6">
        We are Garam Kreatif.
      </div>
      <div class="text-gray-400 text-2xl mb-6">
        From strategy to visuals to storytelling — we bring flavor to brands that want to be felt, not just seen.
      </div>
      <div class="text-gray-400 text-2xl">
        Whether it's digital content, campaigns, or visual identity, we approach every project like crafting a dish: with intention, detail, and soul.
      </div>
    </div>
  </div>
</section>
{{-- Service --}}
<section id="ourservice" class="w-full h-full relative text-white py-16" style="background: linear-gradient(to bottom,  rgba(0,0,0,1),rgba(22,22,22,1)); overflow-x-hidden md:overflow-x-visible">
    <div class="max-w-screen-xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-4 mb-16 md:mb-20 lg:mb-32">
        <div class="justify-self-end">
        <span class="text-gray-400 text-2xl block">03</span>
        <div class="text-2xl md:text-4xl lg:text-7xl leading-tight mb-6">
            <h2> Our Services</h2>
        </div>
        <span class="text-gray-400 text-2xl">
            We offer end-to-end creative support
            <br>
            — from raw ideas to refined execution.
        </span>
        </div>
        <div class="lg:ms-16 md:mt-5">
        <div class="text-xl text-right md:text-left md:text-2xl lg:text-3xl leading-tight">
            <div>Branding</div>
            <div>Design</div>
            <div>Photography</div>
            <div>Videography</div>
            <div>3D Animation</div>
            <div>Content Planning</div>
        </div>
        </div>
    </div>
    <div class="max-w-screen-xl mx-auto px-4 md:mb-32">
        <div class="text-2xl md:text-4xl lg:text-7xl leading-tight mb-6 md:w-[60%]">
        A glimpse into what we've cooked up for brands we've worked with.
        </div>
       <div class="justify-self-end">
        <span class="text-gray-400 text-2xl block">04</span>
        <div class="text-2xl md:text-4xl lg:text-7xl leading-tight mb-6">
            <h2>Our Works</h2>
        </div>
        </div>
    </div>
</section>
{{-- Our work --}}
<section id="ourwork" class="w-full h-full relative text-white mb-24 overflow-x-hidden md:overflow-x-visible">
  <div class="swiper mySwiperFreeMode px-4 py-10 bg-black">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide w-[320px] h-[100px] bg-black rounded-lg overflow-hidden">
        <img src="{{ asset('assets/images/carousel_1.jpg') }}" class=" object-cover" alt="Hasil videografi klien Garam Kreatif - Project Carousel 1" />
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide w-[320px] h-[420px] bg-black rounded-lg overflow-hidden">
        <img src="{{ asset('assets/images/carousel_2.jpg') }}" class=" object-cover" alt="Hasil videografi klien Garam Kreatif - Project Carousel 2" />
      </div>
      <!-- Slide 3 -->
      <div class="swiper-slide w-[320px] h-[420px] bg-black rounded-lg overflow-hidden">
        <img src="{{ asset('assets/images/carousel_3.jpg') }}" class=" object-cover" alt="Hasil videografi klien Garam Kreatif - Project Carousel 3" />
      </div>
      <!-- Slide 3 -->
      <div class="swiper-slide w-[320px] h-[420px] bg-black rounded-lg overflow-hidden">
        <img src="{{ asset('assets/images/carousel_3.jpg') }}" class=" object-cover" alt="Hasil videografi klien Garam Kreatif - Project Carousel 4" />
      </div>
      <!-- Tambahkan lebih banyak slide sesuai kebutuhan -->
    </div>

    <!-- Optional Pagination -->
    <div class="swiper-pagination mt-6"></div>
  </div>
</section>
<footer class="bg-black text-white py-12 px-6 overflow-x-hidden md:overflow-x-visible">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-6 gap-8 items-start">

    <!-- Logo -->
    <div class="md:col-span-2 flex justify-center md:justify-start">
      <img src="{{ asset('assets/images/Logo_Youtube_Garam_1.png') }}" alt="Logo" class="h-23">
    </div>

    <!-- ABOUT -->
    <div class="flex flex-col gap-2 text-md text-gray-400 md:ms-7">
      <h4 class="text-white text-lg font-semibold mb-2">ABOUT</h4>
      <a href="#ourwork" class="hover:text-white">Our Works</a>
      <a href="#aboutus" class="hover:text-white">About Us</a>
      <a href="#" class="hover:text-white">Our Team</a>
    </div>

    <!-- SUPPORT -->
    <div class="flex flex-col text-md gap-2 text-sm text-gray-400">
      <h4 class="text-white font-semibold text-lg mb-2">SUPPORT</h4>
      <a href="#" class="hover:text-white">FAQ</a>
      <a href="#" class="hover:text-white">Help Center</a>
      <a href="#" class="hover:text-white">Terms of Service</a>
      <a href="#" class="hover:text-white">Privacy Policy</a>
    </div>

    <!-- CONTACT -->
    <div class="flex flex-col gap-2 text-md text-gray-400">
      <h4 class="text-white font-semibold text-lg mb-2">CONTACT</h4>
      <a href="mailto:contact@example.com" class="hover:text-white">Email Us</a>
    </div>

    <!-- SOCIALS -->
    <div class="flex justify-center md:justify-end items-center gap-4 mt-6 md:mt-0">
    <a href="#" class="hover:text-white text-xl" aria-label="Twitter">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white hover:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
        <path d="M24 4.557a9.83 9.83 0 01-2.828.775 4.932 4.932 0 002.165-2.724c-.951.564-2.005.974-3.127 1.195a4.916 4.916 0 00-8.384 4.482A13.95 13.95 0 011.671 3.149 4.917 4.917 0 003.18 9.723a4.902 4.902 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.085 4.928 4.928 0 004.604 3.417A9.867 9.867 0 010 19.54a13.94 13.94 0 007.548 2.212c9.056 0 14.01-7.496 14.01-13.986 0-.21-.005-.423-.014-.633A10.012 10.012 0 0024 4.557z"/>
        </svg>
    </a>
    <a href="#" class="hover:text-white text-xl" aria-label="Facebook">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white hover:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
        <path d="M22.676 0H1.326C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.326 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.464.099 2.796.143v3.24h-1.918c-1.504 0-1.795.715-1.795 1.763v2.31h3.587l-.467 3.622h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.676 0z"/>
        </svg>
    </a>
    <a href="#" class="hover:text-white text-xl" aria-label="LinkedIn">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white hover:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
        <path d="M22.23 0H1.771C.792 0 0 .774 0 1.729v20.543C0 23.226.792 24 1.771 24H22.23C23.2 24 24 23.226 24 22.271V1.729C24 .774 23.2 0 22.23 0zM7.082 20.452H3.643V9h3.439v11.452zM5.362 7.641c-1.104 0-1.996-.9-1.996-2.005 0-1.104.892-2.005 1.996-2.005s2.005.9 2.005 2.005c0 1.105-.9 2.005-2.005 2.005zM20.452 20.452h-3.436v-5.605c0-1.337-.026-3.06-1.865-3.06-1.866 0-2.152 1.46-2.152 2.968v5.697h-3.439V9h3.304v1.561h.047c.46-.873 1.587-1.793 3.27-1.793 3.497 0 4.14 2.3 4.14 5.287v6.397z"/>
        </svg>
    </a>
    </div>

  </div>
</footer>
@endsection

