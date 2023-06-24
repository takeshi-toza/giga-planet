@extends('layouts.app')

@section('content')
    <main class="mx-auto mt-16 md:mt-0">
        <div class="mb-4">
            <img src="{{ asset($app->main_image) }}" class="w-full" alt="メイン">
        </div>

        <div class="mx-4">

            @isset ($app->youtube_url)
                <div class="youtube mx-auto mb-2.5 mt-0">
                    <iframe width="560" height="315" src="{{ $app->youtube_url }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            @endisset

            <h2 class="text-white" style="font-size: 1.4rem;line-height: 1.4;border-bottom: 3px #0bd solid;padding: 5px 0;margin: 40px 0 15px;font-weight: bold;position: relative;">{{ $app->title }}</h2>

            <div class="p-4 mb-6 text-white rounded" style="background-color:#333;">
                <p>
                    {!! $app->introduction !!}
                </p>
            </div>

            @isset ($app->sub_image)
                <div class="mb-3">
                    <img src="{{ asset($app->sub_image) }}" class="w-75 mx-auto" alt="サブ">
                </div>
            @endisset

            @if(!empty($app->status) && $app->status === 1)
                @if(!empty($app->ios_store_url) || !empty($app->android_store_url))
                    <div class="flex flex-row justify-center items-center mb-6">
                        @isset ($app->ios_store_url)
                            <a href="{{ $app->ios_store_url }}"><img src="/images/btnAppStore.png" alt="AppleStoreボタン"></a>
                        @endisset
                        @isset ($app->android_store_url)
                            <a href="{{ $app->android_store_url }}"><img src="/images/google-play-badge.png" class="w-full max-w-[220px]" alt="GooglePlayボタン"></a>
                        @endisset
                    </div>
                @endif
            @elseif(empty($app->status))
                <div class="memo sng-shadow-0 rounded" style="background-color:#333; color: rgb(248, 128, 128);">
                    <div class="memo_ttl dfont">
                        <div class="sng-box-msg__title">配信停止中</div>
                    </div>
                    <div class="text-white sng-box-msg__contents">
                        <p>現在、こちらのアプリは<span class="keiko_red">配信を停止しています</span>。</p>
                    </div>
                </div>
            @endif

            <div class="icon-list l-section">
                <div class="l-inner">

                    @if(!empty($app->screen_orientation) && $app->screen_orientation === 2)
                        @foreach ($app->screenshot as $screenshot_index)
                            <div class="swiper-area">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($screenshot_index as $screenshot)
                                            <a href="javascript:void(0);" class="swiper-slide">
                                                <article class="slide">
                                                    <div class="slide-media img-cover" style="margin: 0 0 1.5em;padding: 0.5em;background: #222;border-radius: 0.3em;">
                                                        <img src="{{ asset($screenshot['screenshot']) }}" alt="" class="rounded">
                                                    </div>
                                                </article>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="swiper-area">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($app->screenshot as $screenshot)
                                        <a href="javascript:void(0);" class="swiper-slide">
                                            <article class="slide">
                                                <div class="slide-media img-cover" style="margin: 0 0 1.5em;padding: 0.5em;background: #222;border-radius: 0.3em;">
                                                    <img src="{{ asset($screenshot->screenshot) }}" alt="" class="rounded max-w-full">
                                                </div>
                                            </article>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>

        </div>

    </main>
@endsection
