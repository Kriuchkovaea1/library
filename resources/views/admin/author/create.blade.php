@extends('admin.layouts.main')
@section('content')
    <div class="wrapper" style="padding-left: 20px">
        <div class="content-header">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление автора</h1>
                    </div>
                </div>
            </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <form action="{{route('admin.author.store')}}" method="POST" class="w-25">
                            @csrf
                            <div class="form-group">

                                <label>
                                    <input type="text" class="form-control" name="surname_initials"
                                           placeholder="Фамилия И.О.">
                                </label>
                                @error('surname_initials')
                                <div class="text-danger">это поле необходимо для заполнения</div>
                                @enderror

                            </div>
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </div>
                </div>


            </div>
        </section>

    </div>

@endsection('content')
