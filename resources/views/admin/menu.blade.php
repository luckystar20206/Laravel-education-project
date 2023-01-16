<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Главная Сайт</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">Главная Админка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.create') }}">Создать новость</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.categories.index') }}">Категории</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.categories.create') }}">Добавить Категорию</a>
            </li>
        </div>
    </div>
</nav>
