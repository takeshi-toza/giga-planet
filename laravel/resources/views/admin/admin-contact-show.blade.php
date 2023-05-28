@extends('layouts.admin.app')

@section('content')
<div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">お問い合わせ</h1>

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

    <form>
        <div class="mb-2">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="{{ $contact->id }}" disabled>
        </div>
        <div class="mb-2">
            <label for="email" class="form-label">メールアドレス</label>
            <input type="text" class="form-control" id="email" value="{{ $contact->email }}" disabled>
        </div>
        <div class="mb-2">
            <label for="title" class="form-label">タイトル</label>
            <input type="text" class="form-control" id="title" value="{{ $contact->title }}" disabled>
        </div>
        <div class="mb-2">
            <label for="body" class="form-label">本文</label>
            <input type="text" class="form-control" id="body" value="{{ $contact->body }}" disabled>
        </div>
        <a class="btn btn-primary" href="{{ route('admin-contact.index') }}" role="button">戻る</a>
    </form>

</div>
@endsection
