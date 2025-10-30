@extends('app')
@section('content')
<section class="text-gray-400 bg-black flex flex-col items-center justify-center text-center mx-auto px-6 sm:px-10 py-40">
  <div class="max-w-3xl">
    <p class="text-xl sm:text-3xl leading-relaxed mb-8">
      From strategy to storytelling to visuals — we bring flavor to brands that want to be felt, not just seen.
    </p>
    <p class="text-xl sm:text-3xl leading-relaxed">
      Whether it's digital content, campaigns, or visual identity, we approach every project like crafting a dish:
      with intention, detail, and soul.
    </p>
  </div>
</section>

<section class="text-gray-100 bg-black flex flex-col items-center justify-center text-center mx-auto px-6 sm:px-10 py-28">
    <h1 class="text-4xl sm:text-6xl mb-12 font-normal">
        We're Garam Kreatif.
    </h1>
    <div class="w-px h-72 bg-gray-500 mb-12"></div>
    <div class="max-w-4xl">
        <h1 class="text-4xl sm:text-6xl mb-12 leading-relaxed font-normal">
            We Craft Identities, narratives, and expereinces - so your brand leaves a lasting taste.
        </h1>
    </div>
    <div class=" justify-center md:justify-start hidden sm:block">
        <img src="{{ asset('assets/images/Logo_Youtube_Garam_1.png') }}" alt="Logo" class="h-32 mb-20">
    </div>
</section>
@endsection

