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
                    content: '個人制作したゲームアプリ紹介とポートフォリオのサイトになります。\n\n開発環境：Laravel / HTML / CSS / JavaScript / Vue.js / Tailwind / Bootstrap / MariaDB / AWS',
                    screenshots: [
                        '/images/portfolio/giga-planet-top.png',
                    ],
                },
                'numbers': {
                    title: 'にゃんばーバトル',
                    content: '表示された番号を順番にタップするカジュアルゲームを開発しました。\n１画面共有で二人でも遊べるようにしました。\n\n開発環境：Xcode / Swift / Illustrator / Photoshop',
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
                    content: '倉庫番という定番パズルを２人でも遊べるようにしたゲームを開発しました。\nステージをいくつも用意して少しでも長く遊べるようにしました。\n\n開発環境：Xcode / Swift / Illustrator / Photoshop',
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
                    content: 'オセロに少し癒される要素を取り入れたテーブルゲームを開発しました。\n今回、CPUと対応出来る機能に挑戦しました。\n\n開発環境：Xcode / Swift / Illustrator / Photoshop',
                    screenshots: [
                        '/images/portfolio/reversi/Screen-Shot-01.jpg',
                        '/images/portfolio/reversi/Screen-Shot-02.jpg',
                        '/images/portfolio/reversi/Screen-Shot-03.jpg',
                        '/images/portfolio/reversi/Screen-Shot-04.jpg',
                    ],
                },
                'nightmare': {
                    title: 'アリス イン ナイトメア',
                    content: '初めてアクションゲームの開発に挑戦しました。\nちょっとホラーな世界が舞台のアクションゲームです。\n\n開発環境：Xcode / Swift / Illustrator / Photoshop',
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
                    content: '初めてUnityを使って、クロスプラットフォーム（iOSとAndroid）に対応したパズルゲームを開発しました。\n\n開発環境：Unity / C# / Illustrator / Photoshop',
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
                    content: 'Unityを使って、前回よりも開発の規模や難易度を上げたアクションパズルゲームを開発しました。\n\n開発環境：Unity / C# / Illustrator / Photoshop',
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

const frontendCtx = document.getElementById('frontendChart')
const backendCtx = document.getElementById('backendChart')
const mobileAppCtx = document.getElementById('mobileAppChart')
const infraCtx = document.getElementById('infraChart')
const toolCtx = document.getElementById('toolChart')
const type = 'radar'
const frontendLabels = [
    'HTML5',
    'CSS3/Sass',
    'JavaScript',
    'Angular',
    ' React',
    ' Vue.js',
];
const backendLabels = [
    'PHP',
    'Laravel ',
    'Java ',
    'MySQL',
    ' PostgreSQL',
    'Graph QL ',
];
const mobileAppLabels = [
    'Android/Java ',
    'iOS/Swift',
    'iOS/Objective-C',
    'Unity/C#',
];
const infraLabels = [
    'Linux',
    'AWS ',
    'Docker',
    'Nginx',
];
const toolLabels = [
    'GitHub',
    'Illustrator ',
    'Photoshop',
    'Figma',
    'Slack',
];

const frontendData = {
    labels: frontendLabels,
    datasets: [{
        label: 'フロントエンド',
        data: [4, 4, 4, 3, 2, 2],
        backgroundColor: 'rgba(255, 99, 132, 0.5)',
        borderColor: 'rgb(255, 99, 132)',
    }]
};
const backendData = {
    labels: backendLabels,
    datasets: [{
        label: 'バックエンド',
        data: [4, 3, 2, 3, 3, 2],
        backgroundColor: 'rgba(54, 162, 235, 0.5)',
        borderColor: 'rgb(54, 162, 235)',
        pointBorderWidth: 4,
        pointHoverBorderWidth: 4,
    }]
};
const mobileAppData = {
    labels: mobileAppLabels,
    datasets: [{
        label: 'アプリ',
        data: [3, 4, 2, 3],
        backgroundColor: 'rgba(255, 99, 132, 0.5)',
        borderColor: 'rgb(255, 99, 132)',
    }]
};
const infraData = {
    labels: infraLabels,
    datasets: [{
        label: 'インフラ',
        data: [3, 3, 3, 2],
        backgroundColor: 'rgba(255, 99, 132, 0.5)',
        borderColor: 'rgb(255, 99, 132)',
    }]
};
const toolData = {
    labels: toolLabels,
    datasets: [{
        label: 'ツール',
        data: [3, 4, 2, 2, 2],
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
