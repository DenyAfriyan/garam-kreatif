<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/images/Logo_Youtube_Garam_1.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/Logo_Youtube_Garam_1.png') }}" type="image/x-icon">
    <title>Garam Kreatif - Creative Studio for Brands That Want to Be Felt</title>
    <meta name="description" content="Garam Kreatif adalah studio kreatif yang fokus pada strategi, visual, dan storytelling untuk merek yang ingin meninggalkan kesan, bukan sekadar tampil.">
    <meta name="keywords" content="Garam Kreatif, Creative Agency, Branding, Design, Videography, Photography, 3D Animation, Content Planning, Studio Kreatif Jakarta">
    <meta name="author" content="Garam Kreatif">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Garam Kreatif - Studio Kreatif Jakarta">
    <meta property="og:description" content="Strategi, visual, dan storytelling yang membangun pengalaman merek yang autentik dan berkesan.">
    {{-- <meta property="og:image" content="{{ asset('assets/images/share_image.jpg') }}"> --}}
    <meta property="og:url" content="https://garamkreatif.com">
    <link rel="canonical" href="https://garamkreatif.com">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Garam Kreatif - Studio Kreatif Jakarta">
    <meta name="twitter:description" content="Kami membantu merek tampil dan terasa melalui desain, konten, dan identitas visual.">
    {{-- <meta name="twitter:image" content="{{ asset('assets/images/share_image.jpg') }}"> --}}

    <style>
    .swiper-pagination-bullet {
        background-color: #888888; /* nonaktif - abu */
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: #ffffff; /* aktif - putih */
    }
    </style>

</head>
<body class="overflow-x-hidden bg-black">
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    const swiper = new Swiper(".mySwiperFreeMode", {
        spaceBetween: 24,
        freeMode: true,
        grabCursor: true,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
        breakpoints: {
        0: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
        },
    });
    </script>
</body>
</html>
