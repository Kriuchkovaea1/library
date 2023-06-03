@extends('admin.layouts.main') <!-- начинает поиск с views -->
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex">
                    <h1 class="m-0">{{$genre->name}}</h1>
                    <td><a href="{{route('admin.genre.edit', $genre->id)}}"><i class="fa fa-solid fa-pen"></i></a>
                        <form action="{{route('admin.genre.delete', $genre->id)}}"
                              method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-solid fa-trash text-danger" role="button"></i>
                            </button>
                        </form>
                    </td>
                </div><!-- /.col -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="col-6">
                <div class="col-12">
                    <div class="card">
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{$genre->id}}</td>
                            </tr>
                            <tr>
                                <td>Название</td>
                                <td>{{$genre->name}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

        </div>
        <!-- /.row -->

        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->
@endsection('content')
