@extends('layouts.admin.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">アプリ一覧</h1>

    {{-- 完了メッセージ --}}
    @if (session('message'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×
            </button>
            {{ session('message') }}
        </div>
    @endif

    {{-- 新規登録画面へ --}}
    <a class="btn btn-primary mb-2" href="{{ route('admin-app.create') }}" role="button">新規登録</a>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">タイトル</th>
            <th scope="col" style="width: 120px;"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($apps as $app)
            <tr>
                <td class="align-middle">{{ $app->title }}</td>
                <td class="align-middle text-center">
                    <form action="{{ route('admin-app.destroy', $app->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-primary btn-sm" href="{{ route('admin-app.edit', $app->id) }}"
                       role="button">編集</a>
                        {{-- 簡易的に確認メッセージを表示 --}}
                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('削除してもよろしいですか?');">
                            削除
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{-- ページネーション --}}
    {{ $apps->links() }}
</div>
@endsection
