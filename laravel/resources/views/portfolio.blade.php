<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body class="bg-black">

<style type="text/css">
    <!--
    .sectionTitle {
        /*width: 80.625%;*/
        max-width: 516px;
        position: relative;
        margin: 10px auto 50px;
    }
    #profile .sectionTitle::before {
        background-color: #4d2a0f;
    }
    #works .sectionTitle::before {
        background-color: #4d5400;
    }
    #skill .sectionTitle::before {
        background-color: #222a45;
    }
    #contact .sectionTitle::before {
        background-color: #b28900;
    }
    .sectionTitle::before {
        content: "";
        width: 96.8993%;
        height: 0;
        padding-top: 21.3179%;
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        margin-top: 3.4884%;
        margin-left: 3.1008%;
        /*z-index: -1;*/
    }
    .sectionTitle.show::before {
        margin-top: 3.4884%;
        margin-left: 3.1008%;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        opacity: 1;
        /*z-index: -1;*/
    }
    .sectionTitle h1 {
        position: relative;
    }
    .sectionTitle .shuriken {
        width: 5.814%;
        height: 0;
        padding-top: 5.814%;
        position: absolute;
        bottom: 0;
        right: 0;
        margin-bottom: 5.4264%;
        margin-right: 1.938%;
    }
    .sectionTitle .shuriken2 {
        width: 5.814%;
        height: 0;
        padding-bottom: 5.814%;
        position: absolute;
        top: 0;
        left: 0;
        margin-top: 1.8%;
        margin-bottom: 5.4264%;
        margin-left: 3.5%;
    }
    .sectionTitle .shuriken img {
        width: 100%;
        height: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
    }
    .sectionTitle.show .shuriken img {
        margin-bottom: 0;
        margin-left: 0;
        -webkit-transform: scale(1) rotate(0deg);
        -ms-transform: scale(1) rotate(0deg);
        transform: scale(1) rotate(0deg);
        opacity: 1;
    }
    .sectionTitle .shuriken::after {
        content: "";
        width: 100%;
        height: 100%;
        display: block;
        background: url(/images/portfolio/bg_sectionTitle_shuriken.png) no-repeat right bottom;
        background-size: 100% 100%;
        position: absolute;
        bottom: 0;
        right: 0;
    }
    .sectionTitle .shuriken2::after {
        content: "";
        width: 100%;
        height: 100%;
        display: block;
        background: url(/images/portfolio/bg_sectionTitle_shuriken.png) no-repeat right bottom;
        background-size: 100% 100%;
        position: absolute;
        bottom: 0;
        right: 0;
    }
    #profile {
        /*position: relative;*/
        background-color: #fdeddb;
        padding-top: 5%;
        padding-bottom: 5%;
        /*z-index: 7;*/
    }
    #works {
        /*position: relative;*/
        background-color: #7e8a00;
        padding-top: 5%;
        padding-bottom: 5%;
        /*z-index: 9;*/
    }
    #skill {
        /*position: relative;*/
        background-color: #333f69;
        padding-top: 5%;
        padding-bottom: 5%;
        /*z-index: 6;*/
    }
    #contact {
        /*position: relative;*/
        background-color: #ffbe00;
        padding-top: 5%;
        padding-bottom: 5%;
        /*z-index: 8;*/
    }
    #works .work {
        position: relative;
        overflow: hidden;
        width: 87.67%;
        max-width: 600px;
        /*padding-top: 10%;*/
        /*padding-bottom: 10%;*/
        /*margin: 1.875% auto auto;*/
        margin: auto auto;
        background: url(/images/portfolio/bg_work.png) no-repeat center center;
        background-size: 100% 100%;
    }
    #works .work img {
        /*width: 88%;*/
        /*margin: auto;*/
        padding: 6%;
    }
    /*#works .work::before {*/
    /*    width: 100%;*/
    /*    padding-top: 67.0941%;*/
    /*    left: 0;*/
    /*    margin-left: auto;*/
    /*}*/
    /*#works .work::before {*/
    /*    content: "";*/
    /*    !*width: 109.375%;*!*/
    /*    height: 0;*/
    /*    !*padding-top: 73.4375%;*!*/
    /*    display: block;*/
    /*    background: url(/images/portfolio/bg_work.jpg) no-repeat center center;*/
    /*    background-size: 100% 100%;*/
    /*    position: absolute;*/
    /*    top: 0;*/
    /*    !*left: 50%;*!*/
    /*    !*margin-left: -54.6875%;*!*/
    /*    z-index: -1;*/
    /*}*/
    #skill .skill {
        background: url(/images/portfolio/bg_chart.jpg) no-repeat center center;
        background-size: 100% 100%;
        /*margin: auto;*/
    }
    #skill .qualification {
        /*background: url(/images/portfolio/qualification.jpg) no-repeat center center;*/
        /*background-size: 100% 100%;*/
        /*margin: auto;*/
    }
    /*#skill .skillDetail {*/
    /*    display: flex;*/
    /*    justify-content: space-evenly;*/
    /*}*/
    #profile .characterDetailWrap {
        width: 100%;
        max-width: 640px;
        position: relative;
        margin: 29.6875% auto auto;
    }
    #profile .characterDetailWrap {
        width: 69%;
        max-width: 1104px;
        margin-top: 1.875%;
    }
    #profile .characterDetailWrap.shinoby::before {
        margin-left: 0;
    }
    #profile .characterDetailWrap::before {
        content: "";
        width: 7.6993%;
        height: 0;
        padding-top: 59.058%;
        display: block;
        background: url(/images/portfolio/bg_prof_makimono_top_pc.png) no-repeat center bottom;
        background-size: 100% auto;
        position: absolute;
        top: 0;
        left: 0;
        margin-top: -2.4457%;
        margin-left: 89.2210%;
        z-index: 2;
        -webkit-transition: margin-left 0.5s ease;
        -o-transition: margin-left 0.5s ease;
        transition: margin-left 0.5s ease;
    }
    #profile .characterDetailWrap .characterDetail {
        width: 90.625%;
        background: url(/images/portfolio/bg_prof.jpg) repeat center top;
        background-size: 39.0625% auto;
        position: relative;
        padding-top: 7.1875%;
        padding-bottom: 5.9375%;
        margin: 6.25% auto 11.5625%;
    }
    #profile .characterDetailWrap .characterDetail {
        width: 95.1087%;
        height: 0;
        padding-top: 55.7972%;
        background: url(/images/portfolio/bg_prof.jpg) repeat right top;
        background-size: 200px auto;
        padding-bottom: 0;
        margin: 0 1.2682% 0 auto;
        z-index: 1;
    }
    #profile .characterDetailWrap .characterDetail::before {
        content: "";
        width: 110.3449%;
        height: 0;
        padding-top: 14.8276%;
        display: block;
        /*background: url(./images/top_character/bg_chara_top_sp.png) no-repeat center bottom;*/
        background-size: 100% auto;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 5;
        margin-top: -6.8966%;
        margin-left: -5.1725%;
    }
    #profile .characterDetailWrap .characterDetail::before {
        width: 93.3334%;
        padding-top: 52.9524%;
        background: rgba(0, 0, 0, 0.35);
        margin-top: 3.2381%;
        margin-left: 4.1905%;
        z-index: 1;
    }
    #profile .characterDetailWrap .characterDetail section {
        /*background: url(./images/top_character/bg_chara_center_sp.png) repeat-y center top;*/
        background-size: 110.3449% auto;
        position: relative;
        padding: 5.1725% 6.8966% 0;
        z-index: 4;
    }
    #profile .characterDetailWrap .characterDetail section {
        width: 93.3334%;
        height: 0;
        background: none;
        background-color: #fff;
        position: absolute;
        top: 0;
        left: 0;
        padding: 52.9524% 0 0;
        margin-top: 2.8572%;
        margin-left: 3.8096%;
    }
    #profile .characterDetailWrap .characterDetail .shinobyDetail .name {
        /*background: url(/images/portfolio/img_prof_name_pc.jpg) no-repeat center top;*/
        background: url(/images/portfolio/prof_name.jpg) no-repeat center top;
        background-size: 100% auto;
        left: auto;
        margin-right: 11.5511%;
    }
    #profile .characterDetailWrap .characterDetail .name {
        width: 77.5863%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        margin: 96.5518% auto auto;
    }
    #profile .characterDetailWrap .characterDetail .name {
        /* width: 37.6123%; */
        height: 0;
        overflow: hidden;
        padding-top: 10.1429%;
        margin-top: 5.1837%;
        width: 32.6123%;
    }
    #profile .characterDetailWrap .characterDetail .shinobyDetail .image {
        left: 0;
        margin-left: 3.5%;
    }
    #profile .characterDetailWrap .characterDetail .image {
        width: 51.0205%;
        position: absolute;
        top: 0;
        margin-top: 3%;
    }
    #profile .characterDetailWrap.shinoby .characterDetail .shinobyDetail {
        display: block;
    }
    #profile .characterDetailWrap .characterDetail .shinobyDetail .detail {
        /*background: url(/images/portfolio/img_prof_detail_pc.jpg) no-repeat center top;*/
        background: url(/images/portfolio/prof_text.jpg) no-repeat center top;
        background-size: 100% auto;
        right: 0;
        margin-right: 9.5511%;
    }
    #profile .characterDetailWrap .characterDetail .detail {
        /* width: 39.6123%; */
        height: 0;
        padding-top: 37.5715%;
        /* padding-top: 43.07692307692308%; */
        overflow: hidden;
        position: absolute;
        top: 0;
        padding-bottom: 0;
        margin-top: 14.347%;
        width: 34.6123%;
        /* width: 30.6123%; */
        /* margin-top: 10.347%; */
    }
    #profile .characterDetailWrap .characterDetail::after {
        width: 93.8096%;
        height: 100%;
        padding-top: 0;
        display: block;
        background-color: #fdeddb;
        background-image: none;
        margin-bottom: 0;
        margin-left: 0;
        -webkit-transition: width 0.5s ease;
        -o-transition: width 0.5s ease;
        transition: width 0.5s ease;
    }
    #profile .characterDetailWrap::after {
        content: "";
        width: 9.9638%;
        height: 0;
        padding-top: 59.2392%;
        display: block;
        background: url(/images/portfolio/bg_prof_makimono_bottom_pc.png) no-repeat center bottom;
        background-size: 100% auto;
        position: absolute;
        top: 0;
        right: 0;
        margin-top: -0.4529%;
        margin-right: -6.3406%;
        z-index: 3;
    }

    #contact .btn_contact:hover {
        opacity:0.7;
        transition:0.3s;
    }

    .modal-body{
        max-height: 500px;
    }
    .bg-gray-800-opacity{
        background-color: #2D374850;
    }
    @media screen and (max-width: 768px){
        .modal-body {
            max-height: 400px;
        }
    }

    /* animation for vue transition tag */
    .fade-up-down-enter-active {
        transition: all 0.5s ease;
    }
    .fade-up-down-leave-active {
        transition: all 0.5s ease;
    }
    .fade-up-down-enter {
        /*transform: translateY(10%);*/
        opacity: 0;
    }
    .fade-up-down-leave-to {
        /*transform: translateY(10%);*/
        opacity: 0;
    }
    .fade-enter-active{
        /*-webkit-transition: opacity 2s;*/
        transition: opacity 0.5s;

    }
    .fade-leave-active {
        transition: opacity 0.5s;
    }
    .fade-enter,
    .fade-leave-to{
        opacity: 0;
    }
    -->
</style>

<main id="app">
    <section id="mainvisual" class="section">
        <img src="/images/portfolio/GravityNinjaMain.jpg" style="width: 100% !important;" alt="">
    </section>

    <div style="height: 30px; width: 100%; background: url(/images/portfolio/bg_prof.jpg) repeat right top;"></div>

    <section id="profile" class="section">
        <div class="sectionTitle show mx-auto" style="width: 32.25%;">
            <h1 style="background: url(/images/portfolio/bg_title_prof.png) no-repeat center center; background-size: 100% auto;">
                <img src="/images/portfolio/title_prof.png" alt="自己紹介">
            </h1>
            <div class="shuriken2"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
            <div class="shuriken"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
        </div>
<!--
        <div class="characterDetailWrap shinoby">
            <div class="characterDetail">
                <section id="shinoby" class="shinobyDetail">
                    <h1 class="name"><img src="/images/portfolio/img_prof_name_pc.jpg" alt=""></h1>
                    <div class="image"><img src="/images/portfolio/img_prof_image.jpg" alt=""></div>
                    <p class="detail"><img src="/images/portfolio/img_prof_detail_pc.jpg" alt=""></p>
                </section>
            </div>
        </div>
-->
        <div class="characterDetailWrap shinoby">
            <div class="characterDetail">
                <section id="shinoby" class="shinobyDetail">
                    <h1 class="name"><img src="/images/portfolio/prof_name.jpg" alt=""></h1>
                    <div class="image"><img src="/images/portfolio/GravityNinjaIcon.png" alt="" class="p-2.5"></div>
                    <p class="detail"><img src="/images/portfolio/prof_text.jpg" alt=""></p>
                </section>
            </div>
        </div>
    </section>

    <div style="height: 30px; width: 100%; background: url(/images/portfolio/bg_prof.jpg) repeat right top;"></div>

    <section id="works" class="section">
        <div class="sectionTitle show mx-auto" style="width: 32.25%;">
            <h1 style="background: url(/images/portfolio/bg_title_work.png) no-repeat center center; background-size: 100% auto;">
                <img src="/images/portfolio/title_work.png" alt="制作物">
            </h1>
            <div class="shuriken2"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
            <div class="shuriken"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
        </div>

        <div class="worksList p-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-5">
            <div class="work" @click="showModal('official')">
                <img src="/images/portfolio/GigaPlanetMain.png" alt="オフィシャルサイト">
            </div>
            <div class="work" @click="showModal('numbers')">
                <img src="/images/portfolio/BattleTheNumberMain.jpg" alt="にゃんばーバトル">
            </div>
            <div class="work" @click="showModal('labyrinth')">
                <img src="/images/portfolio/labyrinthofforestMain.jpg" alt="赤ずきんと迷いの森">
            </div>
            <div class="work" @click="showModal('reversi')">
                <img src="/images/portfolio/DuckReversiMain.jpg" alt="みにくいアヒルのリバーシ">
            </div>
            <div class="work" @click="showModal('nightmare')">
                <img src="/images/portfolio/AliceInNightmareMain.jpg" alt="アリス イン ナイトメア">
            </div>
            <div class="work" @click="showModal('monster')">
                <img src="/images/portfolio/MonsterPuzzleMain.jpg" alt="ぺこぺこモンスター">
            </div>
            <div class="work" @click="showModal('phantom')">
                <img src="/images/portfolio/PhantomCatMain.jpg" alt="怪盗にゃんこ">
            </div>
        </div>

        <transition name="fade" class="h-full w-full flex items-center justify-center">
            <div v-show="show_modal" class="fixed inset-0 z-30" style="display: none;">

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
                                        <span v-text="modal_content" style="white-space: pre-wrap;"></span>
                                    </p>
                                </div>
                                <div class="p-6 space-y-6">
                                    <div class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-5">
                                            <div v-for="screenshot in modal_screenshots" class="m-auto">
                                                <img :src="screenshot" :alt="modal_title" class="" style="max-width: 200px;max-height: 200px;">
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

    <div style="height: 30px; width: 100%; background: url(/images/portfolio/bg_prof.jpg) repeat right top;"></div>

    <section id="skill" class="section">
        <div class="sectionTitle show mx-auto" style="width: 32.25%;">
            <h1 style="background: url(/images/portfolio/bg_title_skill.png) no-repeat center center; background-size: 100% auto;">
                <img src="/images/portfolio/title_skill.png" alt="スキル セット">
            </h1>
            <div class="shuriken2"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
            <div class="shuriken"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
        </div>

        <div class="skillDetail p-10 grid gap-5 grid-cols-1 sm:grid-cols-2 sm:gap-10 md:grid-cols-2 md:gap-10 lg:grid-cols-3 lg:gap-10 xl:grid-cols-3 xl:gap-10 2xl:grid-cols-4 2xl:gap-10">
            <div class="skill" style="margin:auto;width:80%;">
                <canvas id="frontendChart" style="padding:12px;"></canvas>
            </div>
            <div class="skill" style="margin:auto;width:80%;">
                <canvas id="backendChart" style="padding:12px;"></canvas>
            </div>
            <div class="skill" style="margin:auto;width:80%;">
                <canvas id="mobileAppChart" style="padding:12px;"></canvas>
            </div>
            <div class="skill" style="margin:auto;width:80%;">
                <canvas id="infraChart" style="padding:12px;"></canvas>
            </div>
            <div class="skill" style="margin:auto;width:80%;">
                <canvas id="toolChart" style="padding:12px;"></canvas>
            </div>
        </div>
        <div class="qualificationDetail p-10">
            <div class="qualification" style="margin:0px auto;"><img src="/images/portfolio/qualification.jpg" style="margin:auto;"></div>
        </div>
    </section>

    <div style="height: 30px; width: 100%; background: url(/images/portfolio/bg_prof.jpg) repeat right top;"></div>

    <section id="contact" class="section">
        <div class="sectionTitle show mx-auto" style="width: 32.25%;">
            <h1 style="background: url(/images/portfolio/bg_title_contact.png) no-repeat center center; background-size: 100% auto;">
                <img src="/images/portfolio/title_contact.png" alt="お問い合わせ">
            </h1>
            <div class="shuriken2"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
            <div class="shuriken"><img src="/images/portfolio/img_sectionTitle_shuriken.png" alt="手裏剣"></div>
        </div>

        <div class="py-6 sm:py-8 lg:py-12">
            <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
{{--                <div class="my-1 md:mb-16">--}}
{{--                    <h2 class="text-gray-800 text-3xl font-bold text-center mb-4">お問い合わせ</h2>--}}
{{--                </div>--}}

                <form method="POST" action="{{ route('contact.confirm') }}" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto mb-4">
                    @csrf

                    <div class="sm:col-span-2">
                        <label for="email" class="inline-block text-gray-800 text-sm sm:text-base mb-2">メールアドレス</label>
                        <input name="email" value="{{ old('email') }}" type="text" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                        @if ($errors->has('email'))
                            <p class="error-message">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="sm:col-span-2">
                        <label for="title" class="inline-block text-gray-800 text-sm sm:text-base mb-2">タイトル</label>
                        <input name="title" value="{{ old('title') }}" type="text" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                        @if ($errors->has('title'))
                            <p class="error-message">{{ $errors->first('title') }}</p>
                        @endif
                    </div>

                    <div class="sm:col-span-2">
                        <label for="message" class="inline-block text-gray-800 text-sm sm:text-base mb-2">お問い合わせ内容</label>
                        <textarea name="body" class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2">{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                            <p class="error-message">{{ $errors->first('body') }}</p>
                        @endif
                    </div>

                    <div class="sm:col-span-2 flex justify-center items-center">
{{--                        <button type="submit" class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">送信確認</button>--}}
                        <button type="submit" style="width: 20%;"><img class="btn_contact" src="/images/portfolio/btn_contact.png"></button>
                    </div>
                </form>
            </div>
        </div>

    </section>

    <div style="height: 30px; width: 100%; background: url(/images/portfolio/bg_prof.jpg) repeat right top;"></div>

</main>

<main id="app2">
    <div class="content">
        <p>モーダル１</p>
        <Modal :modalItems="modalItems[0]" />
    </div>
    <div class="content">
        <p>モーダル２</p>
        <Modal :modalItems="modalItems[1]" />
    </div>
</main>

<footer>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

<script>
    new Vue({
        el: '#app',
        data() {
            return {
                show_modal: false,
                modal_title: '',
                modal_content: '',
                modal_screenshots: [],
                modal_items: {
                    'official': {
                        title: 'オフィシャルサイト',
                        content: '制作したアプリの紹介とポートフォリオのサイトになります。\n\n開発環境：Laravel / HTML / CSS(Sass) / JavaScript / Tailwind / Bootstrap / MariaDB / AWS',
                        screenshots: [
                        ],
                    },
                    'numbers': {
                        title: 'にゃんばーバトル',
                        content: '表示された番号を順番にタップしてベストタイムを目指すゲームです。\n\n開発環境：Xcode / Swift / Illustrator / Photoshop',
                        screenshots: [
                            '/images/portfolio/numbers/Screen-Shot-01.jpg',
                            '/images/portfolio/numbers/Screen-Shot-02.jpg',
                            '/images/portfolio/numbers/Screen-Shot-03.jpg',
                            '/images/portfolio/numbers/Screen-Shot-04.jpg',
                            '/images/portfolio/numbers/Screen-Shot-05.jpg',
                        ],
                    },
                    'labyrinth': {
                        title: '赤ずきんと迷いの森',
                        content: '倉庫番という定番パズルを２人でも遊べるようにゲームです。\n\n開発環境：Xcode / Swift / Illustrator / Photoshop',
                        screenshots: [
                            '/images/portfolio/labyrinth/Screen-Shot-01.jpg',
                            '/images/portfolio/labyrinth/Screen-Shot-02.jpg',
                            '/images/portfolio/labyrinth/Screen-Shot-03.jpg',
                            '/images/portfolio/labyrinth/Screen-Shot-04.jpg',
                            '/images/portfolio/labyrinth/Screen-Shot-05.jpg',
                        ],
                    },
                    'reversi': {
                        title: 'みにくいアヒルのリバーシ',
                        content: 'オセロに少し癒される要素を取り入れたゲームです。\n\n開発環境：Xcode / Swift / Illustrator / Photoshop',
                        screenshots: [
                            '/images/portfolio/reversi/Screen-Shot-01.jpg',
                            '/images/portfolio/reversi/Screen-Shot-02.jpg',
                            '/images/portfolio/reversi/Screen-Shot-03.jpg',
                            '/images/portfolio/reversi/Screen-Shot-04.jpg',
                        ],
                    },
                    'nightmare': {
                        title: 'アリス イン ナイトメア',
                        content: 'ちょっとホラーな世界が舞台のアリスのアクションゲームです。\n\n開発環境：Xcode / Swift / Illustrator / Photoshop',
                        screenshots: [
                            '/images/portfolio/nightmare/AliceInNightmareScreenShot01.jpg',
                            '/images/portfolio/nightmare/AliceInNightmareScreenShot02.jpg',
                            '/images/portfolio/nightmare/AliceInNightmareScreenShot03.jpg',
                            '/images/portfolio/nightmare/AliceInNightmareScreenShot04.jpg',
                            '/images/portfolio/nightmare/AliceInNightmareScreenShot05.jpg',
                            '/images/portfolio/nightmare/AliceInNightmareScreenShot06.jpg',
                            '/images/portfolio/nightmare/AliceInNightmareScreenShot07.jpg',
                            '/images/portfolio/nightmare/AliceInNightmareScreenShot08.jpg',
                            '/images/portfolio/nightmare/AliceInNightmareScreenShot09.jpg',
                            '/images/portfolio/nightmare/AliceInNightmareScreenShot10.jpg',
                            '/images/portfolio/nightmare/AliceInNightmareScreenShot11.jpg',
                            '/images/portfolio/nightmare/AliceInNightmareScreenShot12.jpg',
                        ],
                    },
                    'monster': {
                        title: 'ぺこぺこモンスター',
                        content: 'Unityを使ってクロスプラットフォーム（iOSとAndroid）に対応したパズルゲームです。\n\n開発環境：Unity / C# / Illustrator / Photoshop',
                        screenshots: [
                            '/images/portfolio/monster/ScreenShot01Ja.jpg',
                            '/images/portfolio/monster/ScreenShot02.jpg',
                            '/images/portfolio/monster/ScreenShot03.jpg',
                            '/images/portfolio/monster/ScreenShot04.jpg',
                            '/images/portfolio/monster/ScreenShot05.jpg',
                            '/images/portfolio/monster/ScreenShot06Ja.jpg',
                        ],
                    },
                    'phantom': {
                        title: '怪盗にゃんこ',
                        content: 'Unityを使って前回よりも開発の難易度や規模を上げたアクションパズルゲームです。\n\n開発環境：Unity / C# / Illustrator / Photoshop',
                        screenshots: [
                            '/images/portfolio/phantom/ScreenShot01Ja.jpg',
                            '/images/portfolio/phantom/ScreenShot02.jpg',
                            '/images/portfolio/phantom/ScreenShot03.jpg',
                            '/images/portfolio/phantom/ScreenShot04.jpg',
                            '/images/portfolio/phantom/ScreenShot05.jpg',
                            '/images/portfolio/phantom/ScreenShot06.jpg',
                        ],
                    },
                }
            }
        },
        methods: {
            showModal(app_id) {
                if (this.show_modal) {
                    document.getElementsByTagName("html")[0].classList.remove('overflow-y-hidden');
                    this.show_modal = false;
                } else {
                    this.modal_title = this.modal_items[app_id]?.title;
                    this.modal_content = this.modal_items[app_id]?.content;
                    this.modal_screenshots = this.modal_items[app_id]?.screenshots;

                    document.getElementsByTagName("html")[0].classList.add('overflow-y-hidden');
                    this.show_modal = true;
                }
            }
        }
    })

    new Vue({
        el:'#app2',
    })
    Vue.component('App', {
        // name: "App",
        // components: {
        //     Modal,
        // },
        data() {
            return {
                modalItems: [
                    {
                        modalTtl: "モダール１",
                        modalContent: "モーダル１が立ち上がった",
                    },
                    {
                        modalTtl: "モダール２",
                        modalContent: "モーダル２が立ち上がった",
                    },
                ],
            };
        },
    })
    Vue.component('Modal', {
        // name: "Modal",
        // components: {
        //     ModalContents,
        //     ModalBtn,
        // },
        props: ["modalItems"],
        data() {
            return {
                modalFlg: false,
            };
        },
    })

    var frontendCtx = document.getElementById('frontendChart')
    var backendCtx = document.getElementById('backendChart')
    var mobileAppCtx = document.getElementById('mobileAppChart')
    var infraCtx = document.getElementById('infraChart')
    var toolCtx = document.getElementById('toolChart')
//    var ctx2d = ctx.getContext('2d');
//    ctx2d.font = 'bold 18px Times Roman';
//    ctx2d.font = 'bolder smaller serif';
//    ctx2d.font = 'bold 60pt sans-serif';

    const type = 'radar'
    const frontendLabels = [
        'HTML5',
        'CSS3/Sass',
        'JavaScript',
        'Angular',
        'React',
        'Vue.js',
    ];
    const backendLabels = [
        'PHP',
        'Laravel',
        'Java',
        'MySQL',
        'PostgreSQL',
        'Graph QL',
    ];
    const mobileAppLabels = [
        'iOS/Swift',
        'Android/Java',
        'Unity/C#',
    ];
    const infraLabels = [
        'Linux',
        'AWS',
        'Docker',
    ];
    const toolLabels = [
        'Git',
        'Illustrator',
        'Photoshop',
    ];
    const frontendData = {
        labels: frontendLabels,
        datasets: [{
            label: 'フロントエンド',
            data: [4, 4, 4, 3, 1, 2],
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            borderColor: 'rgb(255, 99, 132)',
//            borderWidth: 1,
        }]
    };
    const backendData = {
        labels: backendLabels,
        datasets: [{
            label: 'バックエンド',
            data: [4, 3, 2, 3, 3, 2],
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgb(54, 162, 235)',
//            borderWidth: 4,
            pointBorderWidth: 4,
            pointHoverBorderWidth: 4,
        }]
    };
    const mobileAppData = {
        labels: mobileAppLabels,
        datasets: [{
            label: 'アプリ',
            data: [4, 3, 3],
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            borderColor: 'rgb(255, 99, 132)',
        }]
    };
    const infraData = {
        labels: infraLabels,
        datasets: [{
            label: 'インフラ',
            data: [3, 3, 3],
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            borderColor: 'rgb(255, 99, 132)',
        }]
    };
    const toolData = {
        labels: toolLabels,
        datasets: [{
            label: 'ツール',
            data: [3, 3, 2],
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            borderColor: 'rgb(255, 99, 132)',
        }]
    };
    const chartOptions = {
        scales: {    // 軸設定
            r: {
                min: 0,     // 最小値
                max: 5,     // 最大値
                beginAtZero: true,
                ticks: {    // 目盛り
                    stepSize: 1,
                },
                pointLabels: {
                    font: {
                        size: 14
                    },
                },
            },
        },
        plugins: {
            legend: {
                labels: {
                    font: {
                        size: 18,
                        weight: 'bold',
                    }
                },
            }
        }
    }

    const frontendChart = new Chart(frontendCtx, {
        type: type,
        data: frontendData,
        options: chartOptions
    });
    const backendChart = new Chart(backendCtx, {
        type: type,
        data: backendData,
        options: chartOptions
    });
    const mobileAppChart = new Chart(mobileAppCtx, {
        type: type,
        data: mobileAppData,
        options: chartOptions
    });
    const infraChart = new Chart(infraCtx, {
        type: type,
        data: infraData,
        options: chartOptions
    });
    const toolChart = new Chart(toolCtx, {
        type: type,
        data: toolData,
        options: chartOptions
    });

</script>

</body>
</html>
