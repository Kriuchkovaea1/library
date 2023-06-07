@extends('admin.layouts.main')
@section('content')
    <div class="wrapper" style="padding-left: 20px">
        <div class="content-header">
            <h1 class="m-0">Редактирование книги</h1>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.book.update', $book->id)}}" method="POST" class="w-25">
                            <div class="form-group">
                                @csrf
                                @method('PATCH')
                                <label>
                                    <input type="text" class="form-control" name="name" placeholder="Название"
                                           value="{{$book->name}}">
                                </label>
                                @error('name')
                                <div class="text-danger">это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выберите автора</label>
                                <select name="author_id" class="form-control">
                                    @foreach($authors as $author)
                                        <option
                                            value="{{$author->id}}"{{$author->id == $book->author_id ? 'selected' : ''}}
                                        >{{$author->surname_initials}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Жанры</label>
                                <select class="select2" name="genre_ids[]" multiple="multiple"
                                        data-placeholder="Выберите жанры" style="width: 100%;">
                                    @foreach($genres as $genre)
                                        <option
                                            {{ is_array($book->genres->pluck('id')->toArray()) && in_array($genre->id, $book->genres->pluck('id')->toArray()) ? 'selected' : '' }} value="{{$genre->id}}">{{$genre->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection('content')
