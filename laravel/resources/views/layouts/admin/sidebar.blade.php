<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if(Request::routeIs('admin.admin-dashboard')) active @endif" href="{{ route('admin.admin-dashboard') }}">
                    <i class="bi bi-shop"></i>
                    ホーム
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::routeIs('admin-app.*')) active @endif" href="{{ route('admin-app.index') }}">
                    <i class="bi bi-robot"></i>
                    アプリ管理
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::routeIs('admin-genre.*')) active @endif" href="{{ route('admin-genre.index') }}">
                    <i class="bi bi-grid"></i>
                    ジャンル管理
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::routeIs('admin-contact.*')) active @endif" href="{{ route('admin-contact.index') }}">
                    <i class="bi bi-envelope"></i>
                    お問合せ管理
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.admin-logout') }}">
                    <i class="bi bi-box-arrow-left"></i>
                    ログアウト
                </a>
            </li>
        </ul>
    </div>
</nav>
