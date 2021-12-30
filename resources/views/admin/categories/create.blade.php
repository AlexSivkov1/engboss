@extends('admin.layouts.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Добавление новой категории</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Создание категории</h3>
                </div>
                <!-- /.card-header -->

                <form role="form" method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group ml-3">
                        <label for="title">Название</label>
                        <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror"
                               id="title" placeholder="Название">
                    </div>

                    <div class="form-group ml-3">
                        <label for="thumbnail">Картинка</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="thumbnail" id="thumbnail"
                                       class="custom-file-input">
                                <label class="custom-file-label" for="thumbnail">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>


                </form>

            </div>

        </div>

        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{--  {{ $categories->links() }}--}}
        </div>


    </section>


@endsection
