<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('admin.author.index')}}">Авторы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('admin.book.index')}}">Книги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('admin.genre.index')}}">Жанры</a>
                </li>

                <form class="col-mb-12" action="{{route('logout')}}" method="POST">
                    @csrf
                    <input class="btn btn-outline-primary " type="submit" value="Выйти">
                </form>
            </ul>
        </div>
    </div>

</nav>

