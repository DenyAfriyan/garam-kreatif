@extends('app')
@section('content')
<section
  x-data="{ active: 'all' }"
  class="bg-black text-gray-200 max-w-7xl mx-auto px-6 sm:px-10 py-20"
>
  <!-- Title -->
  <h2 class="text-5xl sm:text-7xl font-light mb-10 text-white">Works</h2>

  <!-- Filter Tabs -->
  <div class="flex flex-wrap gap-3 sm:gap-4 mb-12">
    <template x-for="category in ['all', 'branding', 'design', 'photography', 'videography', '3d animation', 'content planning', 'visual experience', 'creative direction', 'sound design', 'art direction']" :key="category">
      <button
        @click="active = category"
        x-text="category.charAt(0).toUpperCase() + category.slice(1)"
        :class="active === category
          ? 'bg-white text-black border-white'
          : 'border border-white text-white hover:bg-white hover:text-black'"
        class="px-6 py-2 sm:px-8 sm:py-3 text-sm sm:text-base uppercase transition-all duration-200 cursor-pointer"
      ></button>
    </template>
  </div>

  <!-- Work Grid -->
  <div class="grid sm:grid-cols-2 gap-8">
    <!-- Work Items -->
    <div x-show="active === 'all'" class="transition-all duration-300">
        <a href="{{ route('othman', ['locale' => app()->getLocale()]) }}">
            <div>
            <div class="relative rounded-2xl overflow-hidden shadow-lg aspect-3/2">
                <img
                    class="w-full h-auto object-cover"
                    src="{{ asset('assets/images/othman_cover.png') }}"
                    alt="Othman for JFW 2024"
                />
            </div>
            <p class="text-lg md:text-2xl mt-6 mb-3">Othman for JFW 2024</p>
            <a
                href="#"
                class="text-gray-400 hover:text-white text-sm md:text-base transition-colors"
            >
                View Work
            </a>
        </div>
        </a>
    </div>
    <div x-show="active === 'all' || active === 'branding'" class="transition-all duration-300">
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
    </div>
    <div x-show="active === 'all'" class="transition-all duration-300">
      <div>
        <div class="relative rounded-2xl overflow-hidden shadow-lg aspect-3/2">
            <img
                src="{{ asset('assets/images/walk_in_resilience.jpg') }}"
                alt="WALK IN RESILIENCE"
                class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-black/10 flex items-center justify-center">
                <h3 class="text-white text-2xl md:text-3xl font-semibold tracking-wide">
                WALK IN RESILIENCE
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
    <div x-show="active === 'all' || active === 'branding'" class="transition-all duration-300">
      <div>
        <div class="relative rounded-2xl overflow-hidden shadow-lg aspect-3/2">
            <img
                src="{{ asset('assets/images/work_nehat.jpg') }}"
                alt="NEHHAT"
                class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-black/10 flex items-center justify-center">
                <h3 class="text-white text-2xl md:text-3xl font-semibold tracking-wide">
                    NEHHAT
                </h3>
            </div>
            </div>
            <p class="text-lg md:text-2xl mt-6 mb-3">Echoes In Silence for Nehhat</p>
            <a
                href="#"
                class="text-gray-400 hover:text-white text-sm md:text-base transition-colors"
            >
                View Work
            </a>
        </div>
    </div>
    <div x-show="active === 'all' || active === 'branding'" class="transition-all duration-300">
      <div>
        <div class="relative rounded-2xl overflow-hidden shadow-lg aspect-3/2">
            <img
                src="{{ asset('assets/images/work_loxus.jpg') }}"
                alt="Loxus"
                class="w-full h-full object-cover"
            />
            </div>
            <p class="text-lg md:text-2xl mt-6 mb-3">Loxus</p>
            <a
                href="#"
                class="text-gray-400 hover:text-white text-sm md:text-base transition-colors"
            >
                View Work
            </a>
        </div>
    </div>
  </div>
</section>

@endsection

