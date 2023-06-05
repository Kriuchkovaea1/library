@extends('admin.layouts.main')
@section('content')
    <div class="content-header" style="padding-left: 30px">
        <h1 class="m-0">Жанры</h1>
    </div>

    <div class="card" style="padding-left: 30px">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th colspan="3" class="text-center">Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($genres as $genre)
                    <tr>
                        <td>{{$genre->id}}</td>
                        <td>{{$genre->name}}</td>
                        <td><a class="btn btn-primary" href="{{route('admin.genre.show', $genre->id)}}"
                               role="button">Просмотр</a></td>
                        <td><a class="btn btn-warning" href="{{route('admin.genre.edit', $genre->id)}}" role="button">Редактировать</a>
                        </td>
                        <td>
                            <form action="{{route('admin.genre.delete', $genre->id)}}"
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" role="button">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div style="padding-left: 30px">
        <a class="btn btn-primary" href="{{route('admin.genre.create')}}" role="button">Добавить</a>
    </div>

@endsection
