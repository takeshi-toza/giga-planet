@extends('layouts.admin.app')

@section('content')
<div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">ジャンル編集</h1>

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

    <form action="{{ route('admin-genre.update', $genre->id) }}" method="post">
        @csrf @method('PUT')

        <div class="mb-2">
            <label for="genre_name" class="form-label">ジャンル名</label>
            <input type="text" class="form-control" id="genre_name" name="genre_name" value="{{ old('genre_name', $genre->genre_name) }}">
        </div>
        <div class="mb-2">
            <label for="color_code" class="form-label">カラーコード</label>
            <input type="text" class="form-control" id="color_code" name="color_code" value="{{ old('color_code', $genre->color_code) }}">
        </div>

        <a class="btn btn-primary" href="{{ route('admin-genre.index') }}" role="button">戻る</a>
        <button type="submit" class="btn btn-primary">編集</button>
    </form>

</div>
@endsection
