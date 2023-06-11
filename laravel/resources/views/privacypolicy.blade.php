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
.memo {
    margin-bottom: 1.5em;
    padding: 1em;
    background: #fff9e5;
}
.memo_ttl {
    margin-bottom: 5px;
    color: #ffb36b;
    font-size: 1.3em;
    font-weight: bold;
}
.sng-box-msg__contents {
    color: #545454;
}
.sng-box-msg__contents p {
    font-weight: normal;
    font-size: 1.2rem;
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

.sgb-box-simple__title {
    padding: 0.6em 1em;
    background: #333;
    color: #fff;
    border-radius: 6px 6px 0 0;
    font-weight: bold;
    font-size: 1.3em;
    line-height: 1.5;
    word-break: break-all;
}
.sgb-box-simple__body {
    margin-top: -2px !important;
    padding: 0.7em 1.5em;
    border: solid 2px #333;
    border-radius: 0 0 6px 6px;
    font-size: 1.2em;
}
body .sgb-box-simple .sgb-box-simple__body>* {
    margin: 0.5em 0;
}

.point-list {
    counter-reset: pointNum;
    padding: 0;
}
.point-list li {
    padding-left: 40px;
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
    width: 30px;
    line-height: 30px;
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
    <main class="mx-auto mt-20 md:mt-0">

        <div style="margin: 0 30px;">

            <h2 class="text-white" style="font-size: 1.4rem;line-height: 1.4;border-bottom: 3px #0bd solid;padding: 5px 0;margin: 40px 0 15px;font-weight: bold;position: relative;">プライバシーポリシー</h2>

            <div style="border-radius: 5px;background-color:#fff9e6;color:#ffb36b;margin-bottom: 1.5em;padding: 1em;">
                <div style="color: #545454;">
                    <p style="font-weight: normal;font-size: 1rem;margin: 0;">
                        ギガプラネットは、お客様の個人情報をお預かりするにあたり、以下のとおり個人情報保護方針を定め、最大限の注意を払います。
                    </p>
                </div>
            </div>

            <div style="border-radius: 5px;background-color:#fff9e6;color:#ffb36b;margin-bottom: 1.5em;padding: 1em;">
                <div style="margin-bottom: 5px;color: #ffb36b;font-size: 1.2em;font-weight: bold;">
                    <span style="background:#ffb36b;display: inline-block;;width: 30px;height: 30px;font-size: 17px;line-height: 30px;margin: 0 3px 0 0;border-radius: 50%;text-align: center;vertical-align: middle;margin-right: 10px;color: #FFF;">
                        1
                    </span>
                    <div style="display: inline-block;vertical-align: middle;font-size: 1.3rem;">個人情報の取得</div>
                </div>
                <div style="color: #545454;">
                    <p style="font-weight: normal;font-size: 1rem;margin: 0;">
                        ギガプラネットは､適法かつ公正な手段によって個人情報を取得いたします｡
                    </p>
                </div>
            </div>

            <div style="border-radius: 5px;background-color:#fff9e6;color:#ffb36b;margin-bottom: 1.5em;padding: 1em;">
                <div style="margin-bottom: 5px;color: #ffb36b;font-size: 1.2em;font-weight: bold;">
                    <span style="background:#ffb36b;display: inline-block;;width: 30px;height: 30px;font-size: 17px;line-height: 30px;margin: 0 3px 0 0;border-radius: 50%;text-align: center;vertical-align: middle;margin-right: 10px;color: #FFF;">
                        2
                    </span>
                    <div style="display: inline-block;vertical-align: middle;font-size: 1.3rem;">個人情報の利用目的</div>
                </div>
                <div style="color: #545454;">
                    <p style="font-weight: normal;font-size: 1rem;margin: 0;">
                        ギガプラネットは､取得した個人情報を以下の利用目的のために利用いたします｡<br>
                        A：ギガプラネットのサービス提供のため｡<br>
                        B：お客様へのサポート､サービスの案内のため｡<br>
                        C：利用状況の分析､サービス向上のため｡<br>
                        D：広告利用のため。<br>
                    </p>
                </div>
            </div>

            <div style="border-radius: 5px;background-color:#fff9e6;color:#ffb36b;margin-bottom: 1.5em;padding: 1em;">
                <div style="margin-bottom: 5px;color: #ffb36b;font-size: 1.2em;font-weight: bold;">
                    <span style="background:#ffb36b;display: inline-block;;width: 30px;height: 30px;font-size: 17px;line-height: 30px;margin: 0 3px 0 0;border-radius: 50%;text-align: center;vertical-align: middle;margin-right: 10px;color: #FFF;">
                        3
                    </span>
                    <div style="display: inline-block;vertical-align: middle;font-size: 1.3rem;">個人情報の管理</div>
                </div>
                <div style="color: #545454;">
                    <p style="font-weight: normal;font-size: 1rem;margin: 0;">
                        ギガプラネットは､お客様の個人情報を適切かつ安全に管理いたします｡<br>
                    </p>
                </div>
            </div>

            <div style="border-radius: 5px;background-color:#fff9e6;color:#ffb36b;margin-bottom: 1.5em;padding: 1em;">
                <div style="margin-bottom: 5px;color: #ffb36b;font-size: 1.2em;font-weight: bold;">
                    <span style="background:#ffb36b;display: inline-block;;width: 30px;height: 30px;font-size: 17px;line-height: 30px;margin: 0 3px 0 0;border-radius: 50%;text-align: center;vertical-align: middle;margin-right: 10px;color: #FFF;">
                        4
                    </span>
                    <div style="display: inline-block;vertical-align: middle;font-size: 1.3rem;">個人情報の第三者への開示</div>
                </div>
                <div style="color: #545454;">
                    <p style="font-weight: normal;font-size: 1rem;margin: 0;">
                        ギガプラネットは､個人情報保護法等の法令に定めのある場合を除き､個人情報をご本人の同意なく､第三者に提供いたしません。<br>
                        ただし､以下の場合はこの限りではありません｡<br>
                        <br>
                        ・統計的なデータなど個人を識別できない状態で開示･提供する場合<br>
                    </p>
                </div>
            </div>

            <div style="border-radius: 5px;background-color:#fff9e6;color:#ffb36b;margin-bottom: 1.5em;padding: 1em;">
                <div style="margin-bottom: 5px;color: #ffb36b;font-size: 1.2em;font-weight: bold;">
                    <span style="background:#ffb36b;display: inline-block;;width: 30px;height: 30px;font-size: 17px;line-height: 30px;margin: 0 3px 0 0;border-radius: 50%;text-align: center;vertical-align: middle;margin-right: 10px;color: #FFF;">
                        5
                    </span>
                    <div style="display: inline-block;vertical-align: middle;font-size: 1.3rem;">プライバシーポリシーの改定</div>
                </div>
                <div style="color: #545454;">
                    <p style="font-weight: normal;font-size: 1rem;margin: 0;">
                        プライバシーポリシーは改定することがあります｡改定後のプライバシーポリシーは速やかに掲載いたします｡<br>
                    </p>
                </div>
            </div>

        </div>

    </main>
@endsection
