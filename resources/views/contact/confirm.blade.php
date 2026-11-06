<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>お問い合わせ(ユーザー)</title>
        @vite(['resources/css/app.css', 'resources/css/admin.css', 'resources/js/app.js'])
    </head>
    <body>

        <div>
            <h2 class="pageHeader">お問い合わせ(ユーザー)</h2>
        </div>


        <div class="contactMainBox">
            <div class="dataContentItem">
                <p class="dataContentItemP">会社名：{{ $validated['company'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">氏名：{{ $validated['name'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">電話番号：{{ $validated['phone'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">メールアドレス：{{ $validated['mail'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">生年月日：{{ $validated['birthday'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">性別：{{ $validated['sex'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">職業：{{ $validated['job'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">お問い合わせ内容：{{ $validated['contact'] }}</p>
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
    </body>
</html>