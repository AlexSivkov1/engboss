@extends('admin.layouts.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактируем</h1>
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
                <h3 class="card-title">Редактирование товара</h3>
            </div>
            <form role="form" method="post" action="{{ route('products.update', ['product'=>$product->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="card-body">
                    <div class="form-group">
                        <label for="category_id">Категория</label>
                        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">

                            @foreach($categories as $k => $v)
                                <option value="{{ $k }}">{{ $v }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group ">
                        <label for="brand_id">Бренд</label>
                        <select class="form-control @error('brand_id') is-invalid @enderror" id="brand_id" name="brand_id">

                            @foreach($brands as $k => $v)
                                <option value="{{ $k }}">{{ $v }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group ">
                        <label for="title">Имя товара</label>
                        <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="title" value="{{$product->title}}">

                    </div>


                    <div class="form-group">
                        <label for="description">Цитата</label>
                        <textarea type="text" name="description" class="form-control  @error('description') is-invalid @enderror" id="description" rows="3">{{ $product->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="content">Контент</label>
                        <textarea type="text" name="content" class="form-control  @error('content') is-invalid @enderror" id="content" rows="7">{{ $product->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Цена</label>
                        <input type="text" name="price" class="form-control  @error('price') is-invalid @enderror" id="price" value="{{$product->price}}">
                    </div>

                    <div class="form-group">
                        <label for="old_price">Стар цена</label>
                        <input type="text" name="old_price" class="form-control  @error('old_price') is-invalid @enderror" id="old_price" value="{{$product->old_price}}">
                    </div>
                    <div class="form-group">
                        <label for="status_id">Статус</label>
                        <input type="text" name="status_id" class="form-control  @error('status_id') is-invalid @enderror" id="status_id" value="{{$product->status_id}}">
                    </div>
                    <div class="form-group">
                        <label for="hit">Хит</label>
                        <input type="text" name="hit" class="form-control  @error('hit') is-invalid @enderror" id="hit" value="{{$product->hit}}">
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
                        
                        <div><img style="height: 300px; width: 400px" src="{{$product->getImage()}}" alt=""></div>
                        <div>{{$product->thumbnail}}</div>


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