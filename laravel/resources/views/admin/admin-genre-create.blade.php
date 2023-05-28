@extends('layouts.admin.app')

@section('content')
<div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">ジャンル登録</h1>

    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible">
            {{-- エラーの表示 --}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin-genre.store') }}" method="post">
        @csrf

        <div class="mb-2">
            <label for="genre_name" class="form-label">ジャンル名</label>
            <input type="text" id="genre_name" name="genre_name" class="form-control" value="{{ old('genre_name') }}" placeholder="ジャンル名">
        </div>
        <div class="mb-2">
            <label for="color_code" class="form-label">カラーコード</label>
            <input type="text" id="name" name="color_code" class="form-control" value="{{ old('color_code') }}" placeholder="カラーコード">
        </div>

        <a class="btn btn-primary" href="{{ route('admin-genre.index') }}" role="button">戻る</a>
        <button type="submit" class="btn btn-primary">登録</button>
    </form>

</div>
@endsection
