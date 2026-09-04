<aside class="adminAside">
    <!-- ハンバーガーメニュー -->
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- ナビ -->
    <nav>
        <ul>
            <li class="adminAsideLi">
                <i class="fa-solid fa-house-chimney"></i>
                <a href="{{ route('admin.index') }}" class="adminAsideLink">HOME</a>
            </li>
            <li class="adminAsideLi">
                <i class="fa-solid fa-envelopes-bulk"></i>
                <a href="{{ route('admin.account') }}" class="adminAsideLink">アカウント一覧</a>
            </li>
            <li class="adminAsideLi">
                <i class="fa-solid fa-envelopes-bulk"></i>
                <a href="{{ route('admin.account') }}" class="adminAsideLink">お問い合わせ一覧</a>
            </li>
        </ul>
    </nav>
</aside>