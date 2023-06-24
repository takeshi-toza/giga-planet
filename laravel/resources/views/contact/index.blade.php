@extends('layouts.app')

@section('content')
    <main class="mx-auto mt-20 md:mt-0 w-4/5">
        <div class="py-6 sm:py-8 lg:py-12" style="background-color: #333;">
            <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
                <div class="my-1 md:mb-16">
                    <h2 class="text-3xl font-bold text-center mb-4 text-white">お問い合わせ</h2>
                </div>

                <form method="post" action="{{ route('contact.confirm') }}" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto mb-4">
                    @csrf

                    <div class="sm:col-span-2">
                        <label for="email" class="inline-block text-sm sm:text-base mb-2 text-white">メールアドレス</label>
                        <input name="email" id="email" value="{{ old('email') }}" type="text" autocomplete="email" class="w-full border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" style="background-color: #999;" />
                        @if ($errors->has('email'))
                            <p class="error-message">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="sm:col-span-2">
                        <label for="title" class="inline-block text-sm sm:text-base mb-2 text-white">タイトル</label>
                        <input name="title" id="title" value="{{ old('title') }}" type="text" class="w-full border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" style="background-color: #999;" />
                        @if ($errors->has('title'))
                            <p class="error-message">{{ $errors->first('title') }}</p>
                        @endif
                    </div>

                    <div class="sm:col-span-2">
                        <label for="message" class="inline-block text-sm sm:text-base mb-2 text-white">お問い合わせ内容</label>
                        <textarea name="body"id="message" class="w-full h-64 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" style="background-color: #999;">{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                            <p class="error-message">{{ $errors->first('body') }}</p>
                        @endif
                    </div>

                    <div class="sm:col-span-2 flex justify-center items-center">
                        <button type="submit" class="inline-block bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 focus-visible:ring ring-yellow-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">送信確認</button>
                    </div>
                </form>

                <div class="max-w-screen-md mx-auto text-sm sm:text-base text-white wp-block-sgb-block-simple sgb-box-simple sgb-box-simple--title-normal">
                    <div class="sgb-box-simple__title" style="background-color: rgb(248, 128, 128);">お問い合わせについて</div>
                    <div class="sgb-box-simple__body" style="border-color: rgb(248, 128, 128); background-color: #333;">
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
