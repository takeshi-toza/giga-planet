@extends('layouts.app')

@section('content')
    <main style="max-width: 80%;margin: auto;" class="mt-3">
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
                <div class="my-1 md:mb-16">
                    <h2 class="text-gray-800 text-3xl font-bold text-center mb-4">お問い合わせ内容確認</h2>
                </div>

                <form method="POST" action="{{ route('contact.send') }}" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto">
                    @csrf

                    <div class="sm:col-span-2">
                        <label for="email" class="inline-block text-gray-800 text-sm sm:text-base mb-2">メールアドレス</label>
                        <input type="text" name="email" value="{{ $inputs['email'] }}" disabled class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="title" class="inline-block text-gray-800 text-sm sm:text-base mb-2">タイトル</label>
                        <input type="text" name="title" value="{{ $inputs['title'] }}" disabled class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                        <input type="hidden" name="title" value="{{ $inputs['title'] }}">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="body" class="inline-block text-gray-800 text-sm sm:text-base mb-2">お問い合わせ内容</label>
                        <textarea name="body" disabled class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2">{{ $inputs['body'] }}</textarea>
                        <input type="hidden" name="body" value="{{ $inputs['body'] }}">
                    </div>

                    <div class="sm:col-span-2 flex justify-evenly items-center">
                        <button type="submit" name="action" value="back" class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">
                            内容修正
                        </button>
                        <button type="submit" name="action" value="submit" class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">
                            送信する
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
