<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('h  ')))
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
<body class="bg-black m-0 p-0">
    {{-- contact us --}}
    <button
  onclick="window.open('https:\/\/api.whatsapp.com/send/?phone=%2B6282261197833&amp;text&amp;type=phone_number&amp;app_absent=0', '_blank')"
  class="flex fixed top-5 right-5 sm:right-25 border border-white text-white bg-transparent
         px-4 py-2 sm:px-5 sm:py-3 rounded-sm text-base sm:text-lg cursor-pointer
         z-999999"
  aria-label="Contact us"
>
  Contact Us
</button>
    <header>
        <nav class="bg-transparant">
            <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-4">
                <div class="flex flex-wrap items-center gap-12">
                    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img
                        src="{{ asset('assets/images/Logo_Youtube_Garam_1.png') }}"
                        alt="Garam Kreatif Logo"
                        class="h-12 md:h-16 lg:h-20 w-auto"
                        >
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                    </a>
                    <div class="items-center justify-between flex w-auto order-1 md:text-xl">
                        <ul class="flex font-base p-0  space-x-8 rtl:space-x-reverse flex-row mt-0">
                            <li>
                                <a href="{{ route('work', ['locale' => app()->getLocale()]) }}" class="blockp-0 text-white" aria-current="page">Work</a>
                            </li>
                            <li>
                                <a href="{{ route('about', ['locale' => app()->getLocale()]) }}" class="blockp-0 text-white">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')
    <footer class="text-gray-200 max-w-7xl mx-auto p-4 py-10 md:py-16 mb-5">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-6 gap-8 items-start">

            <!-- Logo -->
            <div class="flex justify-center md:justify-start">
            <img src="{{ asset('assets/images/Logo_Youtube_Garam_1.png') }}" alt="Logo" class="h-23">
            </div>

            <!-- ABOUT -->
            <div class="flex flex-col gap-2 text-md text-gray-400 md:ms-7">
            <h4 class="text-white text-base mb-2">HOME</h4>
            <a href="{{ route('work', ['locale' => app()->getLocale()]) }}" class="hover:text-white text-sm">Our Works</a>
            <a href="{{ route('about', ['locale' => app()->getLocale()]) }}" class="hover:text-white text-sm">About Us</a>
            <a href="#" class="hover:text-white text-sm">Our Team</a>
            </div>

            <!-- SUPPORT -->
            <div class="flex flex-col text-md gap-2 text-sm text-gray-400">
            <h4 class="text-white text-base mb-2">SERVICES</h4>
            <a href="#" class="hover:text-white text-sm">Branding</a>
            <a href="#" class="hover:text-white text-sm">Photoshoots</a>
            <a href="#" class="hover:text-white text-sm">Videoshoots</a>
            <a href="#" class="hover:text-white text-sm">3D Animation</a>
            </div>

            <!-- CONTACT -->
            <div class="flex flex-col text-md gap-2 text-sm text-gray-400">
            <h4 class="text-white text-base mb-2">CONTACT</h4>
            <a href="https:\/\/api.whatsapp.com/send/?phone=%2B6282261197833&amp;text&amp;type=phone_number&amp;app_absent=0" class="hover:text-white text-sm">WhatsApp</a>
            <a href="https://www.instagram.com/garamkreatif/?hl=id" target="_blank" class="hover:text-white text-sm">Instagram</a>
            <a href="#" class="hover:text-white">Email Us</a>
            </div>

            <!-- SOCIALS -->
           <div class="flex flex-col text-md gap-2 text-gray-400">
            <h4 class="text-white text-xl">www.garamkreatif.com</h4>
            <h4 class="text-white text-xl">marketing@garamkreatif.com</h4>
            <h4 class="text-white text-xl">+62 822-6119-7833</h4>
            </div>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- alpine js --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
    function openWhatsApp() {
    const phone = '6282261197833';
    const isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
    const url = isMobile
        ? `https://wa.me/${phone}`
        : `https://web.whatsapp.com/send?phone=${phone}`;
    window.open(url, '_blank');
    }
    </script>

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
