<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ポートフォリオ</title>
    <link rel="icon" href="/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body class="bg-black">

    <main id="app">
        <section id="mainvisual" class="section">
            <img src="/images/portfolio/GravityNinjaMain.jpg" class="w-full" alt="メイン画像">
        </section>

        <div class="partition"></div>

        <section id="profile" class="section">
            <div class="sectionTitle show mx-auto">
                <h1 style="background: url(/images/portfolio/bg_title_prof.png) no-repeat center center; background-size: 100% auto;">
                    <img src="/images/portfolio/title_prof.png" alt="自己紹介">
                </h1>
                <div class="shuriken2"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
                <div class="shuriken"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
            </div>

            <div class="characterDetailWrap">
                <div class="characterDetail">
                    <section class="profDetail">
                        <h1 class="name"><img src="/images/portfolio/prof_name.jpg" alt=""></h1>
                        <div class="image"><img src="/images/portfolio/GravityNinjaIcon.png" alt="プロフィール" class="p-2.5"></div>
                        <p class="detail"><img src="/images/portfolio/prof_text.jpg" alt="自己紹介"></p>
                    </section>
                </div>
            </div>
        </section>

        <div class="partition"></div>

        <section id="works" class="section">
            <div class="sectionTitle show mx-auto">
                <h1 style="background: url(/images/portfolio/bg_title_work.png) no-repeat center center; background-size: 100% auto;">
                    <img src="/images/portfolio/title_work.png" alt="制作物">
                </h1>
                <div class="shuriken2"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
                <div class="shuriken"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
            </div>

            <div class="worksList p-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-5">
                <article class="work cursor-pointer" @click="showModal('official')">
                    <img src="/images/portfolio/GigaPlanetMain.jpg" alt="オフィシャルサイト">
                </article>
                <article class="work cursor-pointer" @click="showModal('numbers')">
                    <img src="/images/portfolio/BattleTheNumberMain.jpg" alt="にゃんばーバトル">
                </article>
                <article class="work cursor-pointer" @click="showModal('labyrinth')">
                    <img src="/images/portfolio/labyrinthofforestMain.jpg" alt="赤ずきんと迷いの森">
                </article>
                <article class="work cursor-pointer" @click="showModal('reversi')">
                    <img src="/images/portfolio/DuckReversiMain.jpg" alt="みにくいアヒルのリバーシ">
                </article>
                <article class="work cursor-pointer" @click="showModal('nightmare')">
                    <img src="/images/portfolio/AliceInNightmareMain.jpg" alt="アリス イン ナイトメア">
                </article>
                <article class="work cursor-pointer" @click="showModal('monster')">
                    <img src="/images/portfolio/MonsterPuzzleMain.jpg" alt="ぺこぺこモンスター">
                </article>
                <article class="work cursor-pointer" @click="showModal('phantom')">
                    <img src="/images/portfolio/PhantomCatMain.jpg" alt="怪盗にゃんこ">
                </article>
            </div>

            <transition name="fade" class="h-full w-full flex items-center justify-center">
                <div v-show="show_modal" class="fixed inset-0 z-" style="display: none;margin: 5%;">

                    <div v-show="show_modal" @click="showModal()" class="bg-filter dark:bg-gray-700 opacity-25 fixed inset-0 w-full h-full z-20">
                    </div>

                    <main class="flex flex-col items-center justify-center h-full w-full">
                        <transition name="fade-up-down">
                            <div v-show="show_modal" class="modal-wrapper inline-block flex items-center z-30">

                                <div class="modal max-w-md mx-auto xl:max-w-5xl lg:max-w-5xl md:max-w-2xl relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            <span v-text="modal_title"></span>
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal" @click="showModal()">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <div class="p-6 space-y-6">
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            <span v-text="modal_content" class="whitespace-pre-wrap"></span>
                                        </p>
                                    </div>
                                    <div class="p-6 space-y-6">
                                        <div class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            <div class="grid grid-cols-3 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-5">
                                                <div v-for="screenshot in modal_screenshots" class="m-auto">
                                                    <img :src="screenshot" :alt="modal_title" class="w-full" style="min-width: 80px;max-width: 400px;max-height: 300px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </transition>
                    </main>

                </div>
            </transition>

        </section>

        <div class="partition"></div>

        <section id="skill" class="section">
            <div class="sectionTitle show mx-auto">
                <h1 style="background: url(/images/portfolio/bg_title_skill.png) no-repeat center center; background-size: 100% auto;">
                    <img src="/images/portfolio/title_skill.png" alt="スキル セット">
                </h1>
                <div class="shuriken2"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
                <div class="shuriken"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
            </div>

            <div class="skillDetail p-10 grid gap-5 grid-cols-1 sm:grid-cols-2 sm:gap-10 md:grid-cols-2 md:gap-10 lg:grid-cols-3 lg:gap-10 xl:grid-cols-3 xl:gap-10 2xl:grid-cols-4 2xl:gap-10">
                <article class="skill m-auto w-4/5">
                    <canvas id="frontendChart" class="p-4"></canvas>
                </article>
                <article class="skill m-auto w-4/5">
                    <canvas id="backendChart" class="p-4"></canvas>
                </article>
                <article class="skill m-auto w-4/5">
                    <canvas id="mobileAppChart" class="p-4"></canvas>
                </article>
                <article class="skill m-auto w-4/5">
                    <canvas id="infraChart" class="p-4"></canvas>
                </article>
                <article class="skill m-auto w-4/5">
                    <canvas id="toolChart" class="p-4"></canvas>
                </article>
            </div>
            <div class="qualificationDetail p-10">
                <div class="qualification" style="margin:0 auto;width: 50%;min-width: 240px;max-width: 600px;">
                    <img src="/images/portfolio/qualification.jpg" class="m-auto">
                </div>
            </div>
        </section>

        <div class="partition"></div>

        <section id="contact" class="section">
            <div class="sectionTitle show mx-auto">
                <h1 style="background: url(/images/portfolio/bg_title_contact.png) no-repeat center center; background-size: 100% auto;">
                    <img src="/images/portfolio/title_contact.png" alt="お問い合わせ">
                </h1>
                <div class="shuriken2"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
                <div class="shuriken"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
            </div>

            <p class="text-sm sm:text-base text-center">最後までご覧いただき、ありがとうございました。<br>何かありましたら、お気軽にご連絡をください。</p>

            <div class="py-6 sm:py-8 lg:py-12">
                <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">

                    <form method="POST" action="{{ route('contact.confirm') }}" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto mb-4">
                        @csrf

                        <div class="sm:col-span-2">
                            <label for="email" class="inline-block text-gray-800 text-sm sm:text-base mb-2">メールアドレス</label>
                            <input name="email" id="email" value="{{ old('email') }}" type="text" autocomplete="email" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                            @if ($errors->has('email'))
                                <p class="error-message">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="sm:col-span-2">
                            <label for="title" class="inline-block text-gray-800 text-sm sm:text-base mb-2">タイトル</label>
                            <input name="title" id="title" value="{{ old('title') }}" type="text" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                            @if ($errors->has('title'))
                                <p class="error-message">{{ $errors->first('title') }}</p>
                            @endif
                        </div>

                        <div class="sm:col-span-2">
                            <label for="message" class="inline-block text-gray-800 text-sm sm:text-base mb-2">お問い合わせ内容</label>
                            <textarea name="body" id="message" class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2">{{ old('body') }}</textarea>
                            @if ($errors->has('body'))
                                <p class="error-message">{{ $errors->first('body') }}</p>
                            @endif
                        </div>

                        <div class="sm:col-span-2 flex justify-center items-center">
                            <button type="submit" class="w-1/5" style="min-width: 100px;">
                                <img class="btn-contact" src="/images/portfolio/btn_contact.png" alt="">
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </section>

        <div class="partition"></div>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/portfolio.js') }}"></script>

</body>
</html>
