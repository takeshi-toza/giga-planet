@extends('layouts.app')

@section('content')

    <main class="mx-auto mt-16 md:mt-0">

        <div class="main-visual mb-8">
            <div class="l-inner">

                <div class="swiper-area">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($release_apps as $app)
                                <a href="{{ route('app.index', $app->app_id) }}" class="swiper-slide">
                                    <article class="slide">
                                        <img src="{{ asset($app->main_image) }}" class="d-block w-full" alt="{{ $app->title }}">
                                    </article>
                                </a>
                            @endforeach
                        </div>
                        <div class="swiper-controller">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="icon-list l-section">
            <div class="l-inner">

                <div class="swiper-area">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($all_apps as $app)
                                <a href="{{ route('app.index', $app->app_id) }}" class="swiper-slide">
                                    <article class="slide">
                                        <div class="slide-media img-cover"><img src="{{ asset($app->icon) }}" alt="{{ $app->title }}"></div>
                                        <div class="slide-content">
                                            <h4 class="slide-title text-center text-base sm:text-xl" style="color:#ff5b41;">{{ $app->short_title }}</h4>
                                        </div>
                                    </article>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="p-10 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-12">
            @foreach ($all_apps as $app)
                <figure class="image-block">
                    <a href="{{ route('app.index', $app->app_id) }}" class="figure-pointer-none">
                        <img src="{{ asset($app->icon) }}" alt="{{ $app->title }}" />
                    </a>
                    <figcaption class="hidden sm:hidden md:block">
                        <h3 class="font-bold text-lg">{{ $app->title }}</h3>
                        <div>
                            @isset ($app->ios_store_url)
                                <span class="inline-block rounded-full px-2.5 py-1 text-sm font-semibold text-gray-700 mb-2" style="color:#ffffff;background-color:#3498db;">iOS</span>
                            @endisset
                            @isset ($app->android_store_url)
                                <span class="inline-block rounded-full px-2.5 py-1 text-sm font-semibold text-gray-700 mb-2" style="color:#ffffff;background-color:#2ecc71;">Android</span>
                            @endisset
                            <span class="inline-block rounded-full px-2.5 py-1 text-sm font-semibold text-gray-700 mb-2" style="color:#ffffff;background-color:#{{ $app->genre->color_code }};">{{ $app->genre->genre_name }}</span>
                        </div>
                        <p>{{ $app->short_introduction }}</p>
                        <div style="margin: 1.5rem 0 1rem 0; text-align: center;">
                            <a href="{{ route('app.index', $app->app_id) }}" class="relative px-6 py-3 font-bold text-white rounded-lg group">
                                <span class="absolute inset-0 w-full h-full transition duration-300 transform -translate-x-1 -translate-y-1 bg-purple-800 ease opacity-80 group-hover:translate-x-0 group-hover:translate-y-0"></span>
                                <span class="absolute inset-0 w-full h-full transition duration-300 transform translate-x-1 translate-y-1 bg-pink-800 ease opacity-80 group-hover:translate-x-0 group-hover:translate-y-0 mix-blend-screen"></span>
                                <span class="relative">アプリ詳細</span>
                            </a>
                        </div>
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </main>

@endsection
