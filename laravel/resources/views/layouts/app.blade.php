<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="/favicon.png" type="image/png">
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-62692980-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body class="bg-gray-700">
        <div id="app">
            <div class="bg-gray-700">
                <header class="container mx-auto pb-1 text-white">
                    <div class="flex justify-between items-center fixed w-full left-0 h-16 bg-gray-700 px-2 md:static z-50">
                        <h1 class="text-4xl font-semibold lg:mt-5"><a href="{{ route('index') }}"><img src="/images/LogoGigaPlanet.png"></a></h1>
                        <div class="md:hidden">
                            <button @click="isOpen = !isOpen" class="focus:outline-none align-middle">
                                <div :class="isOpen ? 'active' : ''" class="toggle">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div :class="isOpen ? 'active' : ''" class="menu block fixed left-0 w-full mt-16 bg-gray-700 md:block md:static md:mt-0 z-40">
                        <ul class="md:flex md:justify-end md:items-center">
                            <li class="border-b md:border-none"><a href="{{ route('index') }}" class="block px-8 py-2 my-4 hover:text-yellow-300">ホーム</a></li>
                            <li class="border-b md:border-none"><a href="{{ route('privacypolicy') }}" class="block px-8 py-2 my-4 hover:text-yellow-300">プライバシーポリシー</a></li>
                            <li class="border-b md:border-none"><a href="{{ route('contact.index') }}" class="block px-8 py-2 my-4 hover:text-yellow-300">お問い合わせ</a></li>
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
        <script src="{{ asset('js/swiper-config.js') }}"></script>
        <script>
            const app = new Vue({
                el: "#app",
                data: {
                    isOpen: false,
                }
            });
        </script>
    </body>
</html>
