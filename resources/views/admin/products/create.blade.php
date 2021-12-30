@extends('admin.layouts.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Новый товар</h1>
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

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Добавление товара</h3>
            </div>
            <form role="form" method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="form-group ">
                    <label for="category_id">Категория</label>
                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">

                        @foreach($categories as $k => $v)
                            <option value="{{ $k }}">{{ $v }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group ">
                    <label for="category_id">Бренд</label>
                    <select class="form-control @error('brand_id') is-invalid @enderror" id="brand_id" name="brand_id">
                        <option value="0">Выбрать Бренд</option>
                        @foreach($brands as $k => $v)
                            <option value="{{ $k }}">{{ $v }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group ">
                    <label for="title">Имя товара</label>
                    <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="title" placeholder="Имя товара">
                </div>


                <div class="form-group">
                    <label for="description">Цитата</label>
                    <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror" id="description" placeholder="Цитата">
                </div>
                <div class="form-group">
                    <label for="content">Контент</label>
                    <textarea name="content" class="form-control" id="content" rows="7"
                              placeholder="Контент ..."></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Цена</label>
                    <input type="text" name="price" class="form-control  @error('price') is-invalid @enderror" id="price" placeholder="Цена">
                </div>

                <div class="form-group">
                    <label for="old_price">Стар цена</label>
                    <input type="text" name="old_price" class="form-control  @error('old_price') is-invalid @enderror" id="old_price" placeholder="Старая цена">
                </div>
                <div class="form-group">
                    <label for="status">Статус</label>
                    <input type="text" name="status_id" class="form-control  @error('status_id') is-invalid @enderror" id="status_id" placeholder="Статус">
                </div>
                <div class="form-group">
                    <label for="hit">Хит</label>
                    <input type="text" name="hit" class="form-control  @error('hit') is-invalid @enderror" id="hit" placeholder="Хит">
                </div>


                <div class="form-group">
                    <label for="thumbnail">Изображение</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="thumbnail" id="thumbnail"
                                   class="custom-file-input">
                            <label class="custom-file-label" for="thumbnail">Choose file</label>
                        </div>
                    </div>
                </div>

            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
            <!-- /.card-body -->
            <div class="card-footer clearfix">

            </div>

        </div>

    </section>



@endsection