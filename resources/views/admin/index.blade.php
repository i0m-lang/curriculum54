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
    <table><tr>
    <td class="addAccount"><a href="{{ route('signup.index') }}">アカウント登録</a></td>
    <td class="addAccount"><a href="{{ route('signup.index') }}">お問い合わせ情報</a></td></tr>
    <tr>
    <td class="listAccount"><a href="{{ route('admin.account') }}">アカウント一覧</a></td>
    <td class="listAccount"><a href="{{ route('contact.index') }}">お問い合わせ一覧</a></td></tr>
</div>
@endsection