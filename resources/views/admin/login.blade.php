<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ログイン</title>
        @vite(['resources/css/app.css', 'resources/css/admin.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="login">
            <div class="loginFormArea">
                <h2 class="loginHeader">管理画面</h2>
                <form action="#" method="POST">
                    @csrf
                    <div class="loginItemBox">
                        <p><label for="email">Email</label></P>
                        <input type="text" class="loginInput" id="email" name="email">
                    </div>
                    <div class="loginItemBox">
                        <p><label for="password">Pass</label></p>
                        <input type="password" class="loginInput" id="password" name="password">
                    </div>
                    <button type="submit" class="loginBtn">Login</button>
                </form>
            </div>
        </div>
    </body>
</html>