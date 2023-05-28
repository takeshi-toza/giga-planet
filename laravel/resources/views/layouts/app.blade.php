<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
{{--        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">--}}
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

<!--        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">-->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
        <body class="bg-gray-700">
    <div id="app">
        <div class="bg-gray-700">
            <header class="container mx-auto pb-1 text-white">
                <div class="flex justify-between items-center fixed w-full left-0 h-16 bg-gray-700 px-2 md:static z-50">
                    <h1 class="text-4xl font-semibold lg:mt-5"><a href="{{ route('index') }}"><img src="/images/LogoGigaPlanet.png"></a></h1>
                    <div class="md:hidden">
                        <button @click="isOpen = !isOpen" class="focus:outline-none">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                                <path v-show="!isOpen" d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
                                <path v-show="isOpen" d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div :class="isOpen ? 'block' : 'hidden'" class="fixed left-0 w-full mt-16 bg-gray-700 md:block md:static md:mt-0 z-50">
                    <ul class="md:flex md:justify-end md:items-center">
                        <li class="border-b md:border-none"><a href="{{ route('index') }}" class="block px-8 py-2 my-4 hover:text-yellow-300">ホーム</a></li>
                        <li class="border-b md:border-none"><a href="{{ route('privacypolicy') }}" class="block px-8 py-2 my-4 hover:text-yellow-300">プライバシーポリシー</a></li>
                        <li class="border-b md:border-none"><a href="{{ route('contact.index') }}" class="block px-8 py-2 my-4 hover:text-yellow-300">お問い合わせ</a></li>
{{--                        <li>--}}
{{--                            <div class="my-8 text-center md:my-4">--}}
{{--                                <a href="{{ route('contact.index') }}" class="px-6 py-2 bg-orange-500 hover:bg-orange-400 rounded-full">お問い合わせ</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </header>
        </div>
    </div>
        @yield('content')
        <div class="bg-gray-700 pt-4 sm:pt-10 lg:pt-12">
            @include('layouts.footer')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

        <script>
            const app = new Vue({
                el: "#app",
                data: {
                    isOpen: false,
                }
            });
        </script>

        <script>
            const mainVisualSwiper = new Swiper('.main_visual .swiper', {
                slidesPerView: 1,
                spaceBetween: 0,
                grabCursor: true,
                loop: true,
                loopAdditionalSlides: 1,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.main_visual .swiper-pagination',
                    clickable: true,
                    // type: 'bullets',
                },
                navigation: {
                    nextEl: '.main_visual .swiper-button-next',
                    prevEl: '.main_visual .swiper-button-prev',
                },
            });
            const mySwiper = new Swiper('.card01 .swiper', {
                slidesPerView: 1,
                spaceBetween: 24,
                grabCursor: true,
                loop: true,
                loopAdditionalSlides: 1,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                    },
                    320: {
                        slidesPerView: 3,
                    },
                    640: {
                        slidesPerView: 4,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 32,
                    }
                },
            });
        </script>
    </body>
</html>
