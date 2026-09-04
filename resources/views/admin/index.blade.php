@extends('layouts.admin_base')
@section('title', '管理画面TOP')
@section('content')

<nav>
<ol class="breadcrumb">
    <li><a href="{{ route('admin.index') }}">TOP</a></li>
</ol>
</nav>

<div class="home">
    <h2 class="pageHeader">HOME</h2>
</div>

<div class="homeMenuArea">
    <p><a href="{{ route('signup.index') }}" class="add_account">アカウント登録</a></p>
    <p><a href="{{ route('admin.account') }}" class="list_account">アカウント一覧</a></p>
    <p><a href="{{ route('contact.index') }}" class="list_account">お問い合わせ一覧</a></p>
</div>
@endsection