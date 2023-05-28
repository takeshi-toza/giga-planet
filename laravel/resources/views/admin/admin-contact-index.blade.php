@extends('layouts.admin.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">お問い合わせ</h1>

    {{-- 完了メッセージ --}}
    @if (session('message'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×
            </button>
            {{ session('message') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">タイトル</th>
            <th scope="col" style="width: 70px;"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <td class="align-middle">{{ $contact->title }}</td>
                <td class="align-middle text-center">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin-contact.show', $contact->id) }}"
                       role="button">詳細</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{-- ページネーション --}}
    {{ $contacts->links() }}
</div>
@endsection
