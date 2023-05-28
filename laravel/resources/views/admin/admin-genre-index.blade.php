@extends('layouts.admin.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">ジャンル一覧</h1>

    @if (session('message'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×
            </button>
            {{ session('message') }}
        </div>
    @endif

    <a class="btn btn-primary mb-2" href="{{ route('admin-genre.create') }}" role="button">新規登録</a>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">ジャンル名</th>
            <th scope="col" style="width: 120px;"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($genres as $genre)
            <tr>
                <td class="align-middle">{{ $genre->genre_name }}</td>
                <td class="align-middle text-center">
                    <form action="{{ route('admin-genre.destroy', $genre->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-primary btn-sm" href="{{ route('admin-genre.edit', $genre->id) }}" role="button">編集</a>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('削除してもよろしいですか?');">削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $genres->links() }}
</div>
@endsection
