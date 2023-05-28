@extends('layouts.admin.app')

@section('content')
<div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">アプリ編集</h1>

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

    <form action="{{ route('admin-app.update', $app->id) }}" method="post" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-2">
            <label for="app_id" class="form-label">アプリID</label>
            <input type="text" class="form-control" id="app_id" name="app_id" value="{{ old('app_id', $app->app_id) }}" readonly>
        </div>
        <div class="mb-2">
            <label for="title" class="form-label">タイトル</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $app->title) }}">
        </div>
        <div class="mb-2">
            <label for="introduction" class="form-label">アプリ紹介</label>
            <textarea class="form-control" id="introduction" name="introduction" rows="5">{{ old('introduction', $app->introduction) }}</textarea>
        </div>
        <div class="mb-2">
            <label for="short_title" class="form-label">ショートタイトル</label>
            <input type="text" class="form-control" id="short_title" name="short_title" value="{{ old('short_title', $app->short_title) }}">
        </div>
        <div class="mb-2">
            <label for="short_introduction" class="form-label">ショートアプリ紹介</label>
            <textarea class="form-control" id="short_introduction" name="short_introduction" rows="3">{{ old('short_introduction', $app->short_introduction) }}</textarea>
        </div>
        <div class="mb-2">
            <label for="status" class="form-label">ステータス</label><br>
            <select id="status" name="status" class="form-select">
                @foreach($app_status as $key => $value)
                    <option value="{{$key}}" @if($app->status == $key) selected @endif>{{$value}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label for="genre_id" class="form-label">ジャンル</label><br>
            <select id="genre_id" name="genre_id" class="form-select">
                <option value=""></option>
                @foreach($genres as $key => $value)
                    <option value="{{$value->id}}" @if($app->genre_id == $value->id) selected @endif>{{$value->genre_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label for="screen_orientation" class="form-label">画面向き</label><br>
            <select id="screen_orientation" name="screen_orientation" class="form-select">
                @foreach($screen_orientation as $key => $value)
                    <option value="{{$key}}" @if($app->screen_orientation == $key) selected @endif>{{$value}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label for="main_image" class="form-label">メイン画像</label><br>
            <img src="{{ asset($app->main_image) }}" class="img-thumbnail" alt="" style="width: 600px;"><br>
            <input type="file" id="main_image" name="main_image" accept="image/*">
        </div>
        <div class="mb-2">
            <label for="sub_image" class="form-label">サブ画像</label><br>
            <img src="{{ asset($app->sub_image) }}" class="img-thumbnail" alt="" style="width: 500px;"><br>
            <input type="file" id="sub_image" name="sub_image" accept="image/*">
        </div>
        <div class="mb-2">
            <label for="icon" class="form-label">アイコン</label><br>
            <img src="{{ asset($app->icon) }}" class="img-thumbnail" alt="" style="width: 240px;"><br>
            <input type="file" id="icon" name="icon" accept="image/*">
        </div>
        <div class="mb-2">
            <label for="screenshot" class="form-label">スクリーンショット</label><br>
            <input type="file" id="screenshot" name="screenshot[]" accept="image/*" multiple>
        </div>
        <div class="mb-2">
            <label for="ios_store_url" class="form-label">iOSストアURL</label>
            <input type="text" id="ios_store_url" name="ios_store_url" class="form-control" value="{{ old('ios_store_url', $app->ios_store_url) }}" placeholder="iOSストアURL">
        </div>
        <div class="mb-2">
            <label for="android_store_url" class="form-label">AndroidストアURL</label>
            <input type="text" id="android_store_url" name="android_store_url" class="form-control" value="{{ old('android_store_url', $app->android_store_url) }}" placeholder="AndroidストアURL">
        </div>
        <div class="mb-2">
            <label for="youtube_url" class="form-label">YouTubeURL</label>
            <input type="text" id="youtube_url" name="youtube_url" class="form-control" value="{{ old('youtube_url', $app->youtube_url) }}" placeholder="YouTubeURL">
        </div>

        <a class="btn btn-primary" href="{{ route('admin-app.index') }}" role="button">戻る</a>
        <button type="submit" class="btn btn-primary">編集</button>
    </form>

</div>
@endsection
