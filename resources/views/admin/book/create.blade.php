@extends('admin.layouts.main')
@section('content')
    <div class="wrapper" style="padding-left: 20px">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" >Добавление книги</h1>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">

                        <form action="{{route('admin.book.store')}}" method="POST" class="w-25">
                            @csrf
                            <div class="form-group">

                                <label>
                                    <input type="text" class="form-control" name="name" placeholder="Название">
                                </label>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выберите автора</label>
                                <select name="author_id" class="form-control">
                                    @foreach($authors as $author)
                                        <option
                                            value="{{$author->id}}"{{$author->id == old('author_id') ? 'selected' : ''}}
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
                                            {{ is_array(old ('genre_ids')) && in_array($genre->id, old ('genre_ids')) ? 'selected' : '' }} value="{{$genre->id}}">{{$genre->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection('content')
