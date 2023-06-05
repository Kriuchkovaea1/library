<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type=text/css href="{{asset('css/virtual-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Библиотека</title>

    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset ('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css"')}}">
    <link rel="stylesheet"
          href="{{asset ('https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">

    <!-- summernote -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">

    </div>

    <!--
    <nav class="main-header navbar navbar-expand navbar-white navbar-light ">

        <div class="col-12 d-flex justify-content-between">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="#" method="POST">
                        @csrf
                        <input class="btn btn-outline-primary " type="submit" value="Выйти">
                    </form>
                </li>
            </ul>
        </div>
    </nav>
     /.navbar -->

    @include('admin.includes.sidebar')

    @yield('content')


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset ('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset ('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset ('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset ('plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset ('https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{asset ('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset ('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset ('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset ('dist/js/adminlte.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
    $(function () {
        bsCustomFileInput.init();
    });
    $('.select2').select2();
</script>
<script type="text/javascript">
    $('#search').on('keyup',function ()
    {
        $value=$(this).val();
        if($value)
        {

        }
        $.ajax({
            type:'get',
            url:'{{URL::to('admin.book.search')}}',
            data:{'search':$value},

            success:function(data)
            {
                console.log(data);
                $('#Content').html(data);
            }
        })
    })
</script>
<style>
</style>
</body>
</html>
