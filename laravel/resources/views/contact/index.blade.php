@extends('layouts.app')

@section('content')
<style type="text/css">
<!--
.sgb-box-simple__title {
    padding: 0.6em 1em;
    background: #333;
    color: #fff;
    border-radius: 6px 6px 0 0;
    font-weight: bold;
    /*font-size: 1.3em;*/
    font-size: 1.2em;
    line-height: 1.5;
    word-break: break-all;
}
.sgb-box-simple__body {
    margin-top: -2px !important;
    padding: 0.7em 1.5em;
    border: solid 2px #333;
    border-radius: 0 0 6px 6px;
    /*font-size: 1.2em;*/
    font-size: 1em;
}
body .sgb-box-simple .sgb-box-simple__body>* {
    margin: 0.5em 0;
}

.point-list {
    counter-reset: pointNum;
    padding: 0;
}
.point-list li {
    padding-left: 30px;
    position: relative;
    text-indent: 0;
}
.point-list li::before {
    background: #c9a05c;
    border-radius: 50%;
    color: #fff;
    font-size: 13px;
    font-weight: 700;
    margin-right: 0.8rem;
    position: absolute;
    top: 0;
    left: 0;
    width: 23px;
    line-height: 23px;
    counter-increment: pointNum 1;
    content: counter(pointNum);
    text-align: center;
    vertical-align: middle;
}
.point-list li+li {
    margin-top: 0.5em;
}
-->
</style>

    <main class="mx-auto mt-20 md:mt-0 w-4/5">
        <div class="py-6 sm:py-8 lg:py-12" style="background-color: #333;">
            <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
                <div class="my-1 md:mb-16">
                    <h2 class="text-3xl font-bold text-center mb-4" style="color: #fff;">お問い合わせ</h2>
                </div>

                <form method="POST" action="{{ route('contact.confirm') }}" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto mb-4">
                    @csrf

                    <div class="sm:col-span-2">
                        <label for="email" class="inline-block text-sm sm:text-base mb-2" style="color: #fff;">メールアドレス</label>
                        <input name="email" value="{{ old('email') }}" type="text" class="w-full border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" style="background-color: #999;" />
                        @if ($errors->has('email'))
                            <p class="error-message">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="sm:col-span-2">
                        <label for="title" class="inline-block text-sm sm:text-base mb-2" style="color: #fff;">タイトル</label>
                        <input name="title" value="{{ old('title') }}" type="text" class="w-full border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" style="background-color: #999;"/>
                        @if ($errors->has('title'))
                            <p class="error-message">{{ $errors->first('title') }}</p>
                        @endif
                    </div>

                    <div class="sm:col-span-2">
                        <label for="message" class="inline-block text-sm sm:text-base mb-2" style="color: #fff;">お問い合わせ内容</label>
                        <textarea name="body" class="w-full h-64 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"style="background-color: #999;">{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                            <p class="error-message">{{ $errors->first('body') }}</p>
                        @endif
                    </div>

                    <div class="sm:col-span-2 flex justify-center items-center">
                        <button type="submit" class="inline-block bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 focus-visible:ring ring-yellow-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">送信確認</button>
                    </div>
                </form>

                <div class="max-w-screen-md mx-auto wp-block-sgb-block-simple sgb-box-simple sgb-box-simple--title-normal">
                    <div style="background-color: rgb(248, 128, 128); color: rgb(255, 255, 255); --darkreader-inline-bgcolor:#7d0707; --darkreader-inline-color:#e8e6e3;" class="sgb-box-simple__title" data-darkreader-inline-bgcolor="" data-darkreader-inline-color="">お問い合わせについて</div>
                    <div class="sgb-box-simple__body" style="border-color: rgb(248, 128, 128); background-color: #fff9e6; --darkreader-inline-border-top:#870707; --darkreader-inline-border-right:#870707; --darkreader-inline-border-bottom:#870707; --darkreader-inline-border-left:#870707; --darkreader-inline-bgcolor:#181a1b;" data-darkreader-inline-border-top="" data-darkreader-inline-border-right="" data-darkreader-inline-border-bottom="" data-darkreader-inline-border-left="" data-darkreader-inline-bgcolor="">
                        <p>上記のフォームより、お気軽にお問い合わせください。</p>
                        <ol class="point-list">
                            <li>上記の項目は、全て必須の項目になります。</li>
                            <li>アプリについてのお問合せは、アプリ名もご記載ください。</li>
                            <li>個人情報は、ご本人の同意なく第三者に提供することはございません。</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
