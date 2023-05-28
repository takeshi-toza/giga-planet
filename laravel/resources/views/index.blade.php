@extends('layouts.app')

@section('content')

<style type="text/css">
<!--
.main_visual .swiper-pagination {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    gap: 1.2rem 0.8rem;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-top: 3.2rem;
    text-align: center;
}
.main_visual .swiper-pagination-bullet {
    width: 2rem;
    height: 3px;
    border-radius: 0;
    cursor: pointer;
    vertical-align: top;
    background-color: #888888;
}
.main_visual .swiper-pagination-bullet-active {
    background-color: #FFFFFF;
}
/*.main_visual .swiper-button-prev, .main_visual .swiper-button-next {*/
/*    position: absolute;*/
/*    z-index: 1;*/
/*    top: 0;*/
/*    bottom: 0;*/
/*    margin: auto;*/
/*}*/
.swiper-button-next, .swiper-button-prev {
    color: #FFFFFF;
}
-->
</style>


    <main class="mx-auto mt-16 md:mt-0">
<!--
        <div id="carouselExampleIndicators" class="carousel slide mb-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($release_apps as $app)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->iteration -1}}" @if($loop->first) class="active" aria-current="true" @endif aria-current="true" aria-label="Slide {{$loop->iteration}}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($release_apps as $app)
                    <div class="carousel-item @if($loop->first) active @endif">
                        <img src="{{ asset($app->main_image) }}" class="d-block w-100" alt="{{$app->title}}">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
-->
        <div class="main_visual mb-4">
            <div class="l-inner">

                <div class="swiper-area">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($release_apps as $app)
                                <a href="{{ route('app.index', $app->app_id) }}" class="swiper-slide">
                                    <article class="slide">
                                        <img src="{{ asset($app->main_image) }}" class="d-block w-full" alt="{{$app->title}}">
                                    </article>
                                </a>
                            @endforeach
                        </div>
                        <div class="swiper-controller">
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card01 l-section mb-4">
            <div class="l-inner">

                <div class="swiper-area">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($all_apps as $app)
                                <a href="{{ route('app.index', $app->app_id) }}" class="swiper-slide">
                                    <article class="slide">
                                        <div class="slide-media img-cover"><img src="{{ asset($app->icon) }}" alt="{{ $app->title }}"></div>
                                        <div class="slide-content">
{{--                                            <h4 class="slide-title text-center" style="font-size:1.4rem;color:#ff5b41;">{{ $app->short_title }}</h4>--}}
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
                    <img src="{{ asset($app->icon) }}" alt="{{ $app->title }}" />
                    <figcaption>
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
{{--
        <div>
            <a href="#" class="relative px-6 py-3 font-bold text-white rounded-lg group">
                <span class="absolute inset-0 w-full h-full transition duration-300 transform -translate-x-1 -translate-y-1 bg-purple-800 ease opacity-80 group-hover:translate-x-0 group-hover:translate-y-0"></span>
                <span class="absolute inset-0 w-full h-full transition duration-300 transform translate-x-1 translate-y-1 bg-pink-800 ease opacity-80 group-hover:translate-x-0 group-hover:translate-y-0 mix-blend-screen"></span>
                <span class="relative">Button Text</span>
            </a>
        </div>
--}}
    </main>

@endsection
