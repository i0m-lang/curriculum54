@extends('layouts.admin_base')
@section('title', '管理画面TOP')
@section('content')

<nav>
<ol class="breadcrumb">
    <li><a href="{{ route('admin.index') }}">TOP</a></li>
    <li><a href="{{ route('contact.index') }}">お問い合わせ一覧</a></li>
    <li><a href="{{ route('contact.edit', $contact->id) }}">お問い合わせ詳細</a></li>
</ol>
</nav>

<div>
    <h2 class="pageHeader">お問い合わせ詳細</h2>
</div>

 <section class="edit">					
    <div class="contactMainBox">	
        <form action="{{ route('contact.update') }}" method="POST">	
            @csrf
            <input type="hidden" name="id" value="{{ $contact->id }}">
            <div class="contactItem">					
                <div class="textItem">									
                    <label class="" for="status">ステータス</label>	
                    @error('status')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror				
                </div>
                <div class="inputItem">
                    <select id="status" name="status" class="select">
                            <option value="">選択してください</option>
                            <option value="未対応" {{ old('status', $contact->status) === '未対応' ? 'selected' : '' }}>未対応</option>
                            <option value="対応中" {{ old('status', $contact->status) === '対応中' ? 'selected' : '' }}>対応中</option>
                            <option value="対応済" {{ old('status', $contact->status) === '対応済' ? 'selected' : '' }}>対応済</option>
                    </select>
                </div>					
            </div>																					
            <div class="contactItem">					
                <div class="textItem">					
                    <label class="" for="contact">お問い合わせ内容</label>					
                </div>					
                <div class="inputItem">					
                    <p>{{ old('contact', $contact->contact) }}</p>				
                </div>					
            </div>																				
            <div class="contactItem">					
                <div class="textItem">					
                    <label class="" for="remarks">備考欄</label>					
                </div>					
                <div class="inputItem">					
                    <textarea id="remarks" name="remarks" class="textInput" rows="5">{{ old('remarks', $contact->remarks) }}</textarea>				
                </div>					
            </div>
            <div class="contactItem">					
                <div class="textItem">					
                    <label class="" for="info">問い合わせ情報</label>
                </div>					
                <div class="memorizedItem">					
                    <p>会社名：{{ old('company', $contact->company) }}</p>
                    <p>氏名：{{ old('name', $contact->name) }}</p>
                    <p>電話番号：{{ old('phone', $contact->phone) }}</p>
                    <p>メールアドレス：{{ old('mail', $contact->mail) }}</p>
                    <p>生年月日：{{ old('birthday', $contact->birthday) }}</p>
                    <p>性別：{{ old('sex', $contact->sex) }}</p>
                    <p>職業：{{ old('job', $contact->job) }}</p>
                </div>					
            </div>
            <button type="submit" class="loginBtn">編集する</button>
        </form>
    </div>	
</section>

@endsection