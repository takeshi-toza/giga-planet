@extends('layouts.app')

@section('content')
<style type="text/css">
<!--
div h2:after {
    position: absolute;
    content: "";
    display: block;
    border-bottom: solid 3px #D95D59;
    bottom: -3px;
    width: 33%;
}
.youtube {
    width: 100%;
    aspect-ratio: 16 / 9;
}
.youtube iframe {
    width: 100%;
    height: 100%;
}
.memo {
    margin-bottom: 1.5em;
    padding: 1em;
    background: #fff9e5;
}
.memo_ttl {
    margin-bottom: 5px;
    color: #ffb36b;
    font-size: 1.2em;
    font-weight: bold;
}
.sng-box-msg__contents {
    color: #545454;
}
.sng-box-msg__contents p {
    font-weight: normal;
    font-size: 1rem;
    margin: 0;
}
.sng-box-msg__icon {
    display: inline-block;
    width: 30px;
    height: 30px;
    font-size: 17px;
    line-height: 30px;
    margin: 0 3px 0 0;
    border-radius: 50%;
    text-align: center;
    vertical-align: middle;
    margin-right: 10px;
}
.sng-box-msg__title {
    display: inline-block;
    vertical-align: middle;
    color: rgb(248, 128, 128);
    --darkreader-inline-bgcolor: #3f0000;
    --darkreader-inline-color: #f77676;
}
.keiko_red {
    background: linear-gradient(transparent 50%, rgba(255, 88, 88, 0.24) 50%);
}
-->
</style>
    <main class="mx-auto mt-16 md:mt-0">
        <div class="mb-4">
            <img src="{{ asset($app->main_image) }}" class="w-full" alt="">
        </div>

        <div class="mx-4">

            @isset ($app->youtube_url)
                <div class="youtube" style="margin: 0 auto 10px auto;">
                    <iframe width="560" height="315" src="{{ $app->youtube_url }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            @endisset

            <h2 class="text-white" style="font-size: 1.4rem;line-height: 1.4;border-bottom: 3px #0bd solid;padding: 5px 0;margin: 40px 0 15px;font-weight: bold;position: relative;">{{ $app->title }}</h2>

            <div style="border-radius: 5px;background-color:#fff9e6;color:#ffb36b;margin-bottom: 1.5em;padding: 1em;">
                <div style="color: #545454;">
                    <p style="font-weight: normal;font-size: 1rem;margin: 0;">
                        {!! $app->introduction !!}
                    </p>
                </div>
            </div>

            @isset ($app->sub_image)
                <div class="mb-3">
                    <img src="{{ asset($app->sub_image) }}" class="w-75 mx-auto" alt="">
                </div>
            @endisset

            @if(!empty($app->status) && $app->status === 1)
                @if(!empty($app->ios_store_url) || !empty($app->android_store_url))
                    <div class="flex flex-row justify-center items-center mb-6">
                        @isset ($app->ios_store_url)
                            <a href="{{ $app->ios_store_url }}"><img src="/images/btnAppStore.png"></a>
                        @endisset
                        @isset ($app->android_store_url)
                            <a href="{{ $app->android_store_url }}"><img src="/images/google-play-badge.png" style="width: 100%;max-width: 220px;"></a>
                        @endisset
                    </div>
                @endif
            @elseif(empty($app->status))
                <div class="wp-block-sgb-message">
                    <div class="memo sng-shadow-0" style="border-radius: 5px; background-color: rgb(255, 235, 235); color: rgb(248, 128, 128); --darkreader-inline-bgcolor:#3f0000; --darkreader-inline-color:#f77676;" data-darkreader-inline-bgcolor="" data-darkreader-inline-color="">
                        <div class="memo_ttl dfont">
                            <div class="sng-box-msg__title">配信停止中</div>
                        </div>
                        <div class="sng-box-msg__contents">
                            <p>現在、こちらのアプリは<span class="keiko_red">配信を停止しています</span>。</p>
                        </div>
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
                                            <a href="#" class="swiper-slide">
                                                <article class="slide">
                                                    <div class="slide-media img-cover" style="margin: 0 0 1.5em;padding: 0.5em;background: #f3f6fc;border-radius: 0.3em;">
                                                        <img src="{{ asset($screenshot['screenshot']) }}" style="border-radius: 0.3em;height: 0.1%;">
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
                                        <a href="#" class="swiper-slide">
                                            <article class="slide">
                                                <div class="slide-media img-cover" style="margin: 0 0 1.5em;padding: 0.5em;background: #f3f6fc;border-radius: 0.3em;">
                                                    <img src="{{ asset($screenshot->screenshot) }}" style="border-radius: 0.3em;max-width: 100%">
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
