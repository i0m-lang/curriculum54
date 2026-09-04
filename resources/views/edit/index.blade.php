@extends('layouts.admin_base')
@section('title', '管理画面TOP')
@section('content')

<nav>
<ol class="breadcrumb">
    <li><a href="{{ route('admin.index') }}">TOP</a></li>
    <li><a href="{{ route('admin.account') }}">アカウント一覧</a></li>
    <li><a href="{{ route('edit.index', $user->id) }}">アカウント編集</a></li>
</ol>
</nav>

<div>
    <h2 class="pageHeader">アカウント編集</h2>
</div>

 <section class="confirm">					
    <div class="contactMainBox">	
        <form action="{{ route('edit.confirm') }}" method="POST">	
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="contactItem">					
                <div class="textItem">
                    <span class="required">必須</span>					
                    <label class="" for="name">会員名</label>
                    @error('name')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror
                </div>					
                <div class="inputItem">					
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="textInput" placeholder="例）山田太郎">
                </div>					
            </div>		
            <div class="contactItem">					
                <div class="textItem">					
                    <span class="required">必須</span>					
                    <label class="" for="kana">フリガナ</label>		
                    @error('kana')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror				
                </div>					
                <div class="inputItem">					
                    <input type="text" id="kana" name="kana" value="{{ old('kana', $user->kana) }}" class="textInput" placeholder="例）ヤマダタロウ">				
                </div>					
            </div>		
            <div class="contactItem">					
                <div class="textItem">					
                    <span class="required">必須</span>					
                    <label class="" for="email">メールアドレス</label>			
                    @error('email')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror			
                </div>					
                <div class="inputItem">					
                    <input type="text" id="email" name="email" value="{{ old('email', $user->email) }}" class="textInput" placeholder="例）example@gmail.com">				
                </div>					
            </div>		
            <div class="contactItem">					
                <div class="textItem">					
                    <span class="required">必須</span>					
                    <label class="" for="phone">電話番号</label>				
                    @error('phone')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror					
                </div>					
                <div class="inputItem">					
                    <input type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" class="textInput" placeholder="例）00000000000">	
                </div>					
            </div>		
            <div class="contactItem">					
                <div class="textItem">					
                    <span class="required">必須</span>					
                    <label class="" for="postcode">郵便番号</label>	
                    @error('postcode')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror									
                </div>					
                <div class="inputItem">					
                    <input type="text" id="postcode" name="postcode" value="{{ old('postcode', $user->zipcode) }}" class="textInput" placeholder="例）0000000">
                </div>					
            </div>		
            <div class="contactItem">					
                <div class="textItem">					
                    <span class="required">必須</span>					
                    <label class="" for="prefecture">都道府県</label>	
                    @error('prefecture')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror				
                </div>
                <div class="inputItem">
                    <select id="prefecture" name="prefecture" class="select">
                            <option value="">選択してください</option>
                            <option value="東京都" {{ old('prefecture', $user->prefecture) === '東京都' ? 'selected' : '' }}>東京都</option>
                            <option value="大阪府" {{ old('prefecture', $user->prefecture) === '大阪府' ? 'selected' : '' }}>大阪府</option>
                            <option value="福岡県" {{ old('prefecture', $user->prefecture) === '福岡県' ? 'selected' : '' }}>福岡県</option>
                    </select>
                </div>					
            </div>		
            <div class="contactItem">					
                <div class="textItem">					
                    <span class="required">必須</span>					
                    <label class="" for="city">市町村</label>			
                    @error('city')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror							
                </div>					
                <div class="inputItem">					
                    <input type="text" id="city" name="city" value="{{ old('city', $user->city) }}" class="textInput" placeholder="例）〇〇市〇〇区〇〇町">
                </div>					
            </div>		
            <div class="contactItem">					
                <div class="textItem">					
                    <span class="required">必須</span>					
                    <label class="" for="address">番地・アパート名</label>					
                    @error('address')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror
                </div>					
                <div class="inputItem">					
                    <input type="text" id="address" name="address" value="{{ old('address', $user->address) }}" class="textInput" placeholder="例）〇〇丁目〇〇-〇〇 〇〇アパート">					
                </div>					
            </div>																							
            <div class="contactItem">					
                <div class="textItem">					
                    <label class="" for="remarks">備考欄</label>					
                </div>					
                <div class="inputItem">					
                    <textarea id="remarks" name="remarks" class="textInput" rows="5">{{ old('remarks', $user->remarks) }}</textarea>				
                </div>					
            </div>
            <button type="submit" class="loginBtn">編集する</button>
        </form>
    </div>	
</section>

@endsection