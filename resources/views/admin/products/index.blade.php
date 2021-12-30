@extends('admin.layouts.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Товары</h1>
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
                <h3 class="card-title">Список товаров</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>

            <div class="card-body">
                <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Добавить товар</a>
                @if(count($products))
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-styling table-hover table-primary">
                                <thead>
                                <tr>
                                    <th>Название категории</th>
                                    <th>ID продукта</th>
                                    <th>Название товара</th>
                                    <th>Число просмотров</th>
                                    <th>Дата созда</th>
                                    <th>Дата изма</th>

                                    <th>Товар кратко</th>
                                    <th>Товар полное</th>
                                    <th>Цена</th>
                                    <th>Старая цена</th>
                                    <th>Статус</th>
                                    <th>Хит</th>
                                    <th>Бренд</th>

                                    <th>Изобр</th>

                                    <th>Actions</th>



                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                       <td>{{ $product->category->title }}</td>
                                        <td scope="row">{{ $product->id }}</td>
                                       <td>{{ $product->title }}</td>

                                        <td>{{ $product->views }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>{{ $product->updated_at }}</td>

                                        <td>{{ $product-> description }}</td>
                                        <td>{{ $product-> content }}</td>
                                        <td>{{ $product-> price }}</td>
                                        <td>{{ $product-> old_price }}</td>
                                        <td>{{ $product-> status_id }}</td>
                                        <td>{{ $product-> hit }}</td>
                                        <td>{{ $product->brand->title }}</td>

                                        <td>{{ $product-> thumbnail }}</td>
                                        <td>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            <form action="{{ route('products.destroy', $product->id) }}" method="post" class="float-left">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Подтвердите удаление')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                @else
                    <p>Единиц товара пока нет</p>
                @endif

            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
               {{ $products->links()}}
            </div>

        </div>

    </section>



@endsection