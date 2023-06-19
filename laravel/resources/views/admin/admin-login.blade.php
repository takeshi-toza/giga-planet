<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form method="post" action="{{ route("admin.admin-login") }}">
            @csrf
            <h1 class="h3 mb-3 fw-normal">ログイン画面</h1>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            @endif

            <div class="form-floating">
                <input type="email" name="email" id="email" class="form-control" placeholder="メールアドレス">
                <label for="email">メールアドレス</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" id="password" class="form-control" placeholder="パスワード">
                <label for="password">パスワード</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">サインイン</button>
        </form>
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
