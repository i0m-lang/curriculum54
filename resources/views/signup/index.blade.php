@extends('layouts.admin_base')
@section('title', '管理画面TOP')
@section('content')

<nav>
<ol class="breadcrumb">
    <li><a href="{{ route('admin.index') }}">TOP</a></li>
    <li><a href="{{ route('admin.account') }}">アカウント一覧</a></li>
    <li><a href="{{ route('signup.index') }}">アカウント新規登録</a></li>
</ol>
</nav>

<div>
    <h2 class="pageHeader">アカウント新規登録</h2>
</div>

 <section class="confirm">					
    <div class="contactMainBox">	
        <form action="{{ route('signup.confirm') }}" method="POST">	
            @csrf
            <div class="contactItem">					
                <div class="textItem">
                    <span class="required">必須</span>					
                    <label class="" for="name">会員名</label>
                    @error('name')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror
                </div>					
                <div class="inputItem">					
                    <input type="text" id="name" name="name"  value="{{ old('name') }}" class="textInput" placeholder="例）山田太郎">
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
                    <input type="text" id="kana" name="kana"  value="{{ old('kana') }}" class="textInput" placeholder="例）ヤマダタロウ">				
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
                    <input type="text" id="email" name="email"  value="{{ old('email') }}" class="textInput" placeholder="例）example@gmail.com">				
                </div>					
            </div>		
            <div class="contactItem">
                <div class="textItem">
                    <span class="required">必須</span>					
                    <label class="" for="password">パスワード</label>	
                    @error('password')
                        <span class="errorMessage">{{ $message }}</span>
                    @enderror									
                </div>					
                <div class="inputItem">					
                    <input type="password" id="password" name="password"  value="{{ old('password') }}" class="textInput" placeholder="例）Password">
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
                    <input type="text" id="phone" name="phone"  value="{{ old('phone') }}" class="textInput" placeholder="例）00000000000">	
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
                    <input type="text" id="postcode" name="postcode"  value="{{ old('postcode') }}" class="textInput" placeholder="例）0000000">
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
                    <select id="prefecture" name="prefecture" class="select" >
                            <option value="">選択してください</option>
                            <option value="東京都">東京都</option>
                            <option value="大阪府">大阪府</option>
                            <option value="福岡県">福岡県</option>
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
                    <input type="text" id="city" name="city"  value="{{ old('city') }}" class="textInput" placeholder="例）〇〇市〇〇区〇〇町">
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
                    <input type="text" id="address" name="address"  value="{{ old('address') }}" class="textInput" placeholder="例）〇〇丁目〇〇-〇〇 〇〇アパート">					
                </div>					
            </div>																							
            <div class="contactItem">					
                <div class="textItem">					
                    <label class="" for="remarks">備考欄</label>					
                </div>					
                <div class="inputItem">					
                    <textarea id="remarks" name="remarks"  value="{{ old('company') }}" class="textInput" rows="5"></textarea>				
                </div>					
            </div>
            <button type="submit" class="loginBtn">登録する</button>
        </form>
    </div>	
</section>

@endsection