@extends('admin.layouts.main')
@section('content')
    <div class="wrapper" style="padding-left: 30px">
        <div class="content-header">
            <h1 class="m-0">Редактирование автора</h1>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.author.update', $author->id)}}" method="POST" class="w-25">
                            <div class="form-group">
                                @csrf
                                @method('PATCH')
                                <label>
                                    <input type="text" class="form-control" name="surname_initials"
                                           placeholder="Фамилия И.О."
                                           value="{{$author->surname_initials}}">
                                </label>
                                @error('surname_initials')
                                <div class="text-danger">это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>
                    </div>
                </div>

            </div>
        </section>

    </div>

@endsection('content')
