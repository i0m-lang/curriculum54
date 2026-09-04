@extends('layouts.admin_base')
@section('title', '管理画面TOP')
@section('content')


<nav>
<ol class="breadcrumb">
    <li class="homeBread"><a href="{{ route('admin.index') }}">TOP</a></li>
    <li class="homeBread"><a href="{{ route('admin.account') }}">お問い合わせ一覧</a></li>
</ol>
</nav>

<div class="adminTebleArea">
    <table class="teble">
        <thead class="tebleThead">
            <tr>
                <th scope="col">編集</th>
                <th scope="col">ステータス</th>
                <th scope="col">会社名</th>
                <th scope="col">氏名</th>
                <th scope="col">電話番号</th>
            </tr>
        </thead>
        <tbody class="tebleTbody">
                @foreach($contacts as $contact)
                    <tr>
                        <td><a href="{{ route('contact.index', $content->id) }}" class="tableCreateLink">編集</a></td>
                        <td>{{ $contact->status }}</td>
                        <td>{{ $contact->company }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection