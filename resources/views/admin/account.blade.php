@extends('layouts.admin_base')
@section('title', '管理画面TOP')
@section('content')


<nav>
<ol class="breadcrumb">
    <li class="homeBread"><a href="{{ route('admin.index') }}">TOP</a></li>
    <li class="homeBread"><a href="{{ route('admin.account') }}">アカウント一覧</a></li>
</ol>
</nav>

<div>
    <a href="{{ route('signup.index') }}"><button class="signupBtn">＋ アカウント新規登録</button></a>
    <h2 class="pageHeader">アカウント一覧</h2>
</div>

<div class="adminTebleArea">
    <table class="teble">
        <thead class="tebleThead">
            <tr>
                <th scope="col">編集</th>
                <th scope="col">名前</th>
                <th scope="col">メールアドレス</th>
                <th scope="col">電話番号</th>
                <th scope="col">都道府県</th>
                <th scope="col">市町村</th>
                <th scope="col">番地・アパート名</th>
            </tr>
        </thead>
        <tbody class="tebleTbody">
                @foreach($users as $user)
                    <tr>
                        <td><a href="{{ route('edit.index', $user->id) }}" class="tableCreateLink">編集</a></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->prefecture }}</td>
                        <td>{{ $user->city }}</td>
                        <td>{{ $user->address }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection