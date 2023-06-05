@extends('admin.layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex">
                    <h1 class="m-0">{{$book->name}}</h1>
                    <a href="{{route('admin.book.edit', $book->id)}}"><i class="fa fa-solid fa-pen"></i></a>
                    <form action="{{route('admin.book.delete', $book->id)}}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="fas fa-solid fa-trash text-danger" role="button"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="col-6">
                <div class="col-12">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{$book->id}}</td>
                            </tr>
                            <tr>
                                <td>Название</td>
                                <td>{{$book->name}}</td>
                            </tr>
                            <tr>
                                <td>Добавлено</td>
                                <td>{{$book->created_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection('content')
