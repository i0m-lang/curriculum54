@extends('layouts.admin_base')
@section('title', '管理画面TOP')
@section('content')

<nav>
<ol class="breadcrumb">
    <li><a href="{{ route('admin.index') }}">TOP</a></li>
    <li><a href="{{ route('admin.account') }}">アカウント一覧</a></li>
    <li><a href="{{ route('edit.index', $validated['id']) }}">アカウント編集</a></li>
</ol>
</nav>

<div>
    <h2 class="pageHeader">アカウント編集確認</h2>
</div>

<section class="confirm">
    <div class="contactMainBox">
        <div class="dataContentItem">
            <p class="dataContentItemP">氏名：{{ $validated['name'] }}</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">フリガナ：{{ $validated['kana'] }}</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">メールアドレス：{{ $validated['email'] }}</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">電話番号：{{ $validated['phone'] }}</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">郵便番号：{{ $validated['postcode'] }}</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">都道府県：{{ $validated['prefecture'] }}</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">市町村：{{ $validated['city'] }}</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">番地・アパート名：{{ $validated['address'] }}</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">備考欄：{{ $validated['remarks'] }}</p>
        </div>

        <form action="{{ route('edit.send') }}" method="POST">
            @csrf
            @foreach ($validated as $key => $value)
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endforeach
            <button type="submit" class="submitButton">送信する</button>
        </form>
        <button type="button" class="submitButton" onclick="history.back()">戻る</button>
    </div>
</section>
@endsection