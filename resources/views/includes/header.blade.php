
<!-- Header -->
<header id="header">
    <h1>
        <a href="{{ route('editCsv')}}" class="{{ $activePage == 'upload' ? 'active' : '' }}">Загрузить</a> /
        <a href="{{ route('getCsv')}}" class="{{ $activePage == 'home' ? 'active' : '' }}">Посмотреть</a>
    </h1>
</header>
