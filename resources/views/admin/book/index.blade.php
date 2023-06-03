@extends('admin.layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Книги</h1>
                    <div class="container">
                        <div class="col-9">
                            <div class="search">
                                <form action="{{ route('admin.book.index') }}" method="GET" class="w-75">
                                    <div class="form-group col-md-10">
                                        <input type="search" class="form-control" id="search" name="search"
                                               placeholder="Поиск...">
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-outline-success" type="submit">Поиск</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('admin.book.index')}}" method="GET">
                        <div class="form-group">
                            <label>Авторы</label>
                            <select name="authorId" class="form-control">
                                <option selected value="null"></option>
                                @foreach($authors as $author)
                                    <option
                                        value="{{$author->id}}"{{$author->id == old('author_id') ? 'selected' : ''}}
                                    >{{$author->surname_initials}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div style="margin-top: auto">
                            <button value="submit" class="btn btn-primary">Применить</button>
                        </div>
                        <div class="form-group">
                            <label>Жанры</label>
                            <select class="select2" name="genreIds[]" multiple="multiple"
                                    data-placeholder="Выберите жанры" style="width: 100%;">
                                @foreach($genres as $genre)
                                    <option
                                        {{ is_array(old ('genre_ids')) && in_array($genre->id, old ('genre_ids')) ? 'selected' : '' }} value="{{$genre->id}}">{{$genre->name}}</option>
                                @endforeach
                            </select>
                            <div style="margin-top: auto">
                                <button value="submit" class="btn btn-primary">Применить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-10">
                <tr>
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>@sortablelink('Название')</th>
                                    <th>Автор(-ы)</th>
                                    <th>Жанр(-ы)</th>
                                    <th>Добавлено</th>
                                    <th colspan="3" class="text-center">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($books->count())
                                    @foreach($books as $book)
                                        <tr>
                                            <td>{{$book->id}}</td>
                                            <td>{{$book->name}}</td>
                                            <td>{{$book->authors->surname_initials}}</td>
                                            <td>@foreach($book->genres as $genre)
                                                    {{$genre->name}}
                                                @endforeach
                                            </td>
                                            <td>{{$date->format('d.m.Y')}}</td>
                                            <td><a class="btn btn-primary"
                                                   href="{{route('admin.book.show', $book->id)}}"
                                                   role="button">Просмотр</a></td>
                                            <td><a class="btn btn-warning"
                                                   href="{{route('admin.book.edit', $book->id)}}"
                                                   role="button">Редактировать</a>
                                            </td>
                                            <td>
                                                <form action="{{route('admin.book.delete', $book->id)}}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                            role="button">
                                                        Удалить
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="{{route('admin.book.create')}}" role="button">Добавить</a>
                </tr>
            </div>
        </div>
    </div>

@endsection
