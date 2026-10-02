@extends('layouts.admin_base')
@section('title', 'お問い合わせ')
@section('content')

<nav>
<ol class="breadcrumb">
    <li class="homeBread"><a href="{{ route('admin.index') }}">TOP</a></li>
    <li class="homeBread"><a href="{{ route('contact.user') }}">お問い合わせ(ユーザー)</a></li>
</ol>
</nav>

<div>
    <h2 class="pageHeader">お問い合わせ(ユーザー)</h2>
</div>


<section class="confirm">
    <div class="contactMainBox">
        <div class="dataContentItem">
            <p class="dataContentItemP">会社名:〇〇株式会社</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">氏名:山田 太郎</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">電話番号:000-0000-0000</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">メールアドレス:test@test</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">生年月日:2022-05-25</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">性別:女</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">職業:会社員（正社員）</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">お問い合わせ内容:test</p>
        </div>

        <form action="{{ route('contact.send') }}" method="POST">
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