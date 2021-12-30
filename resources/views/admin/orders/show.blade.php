@extends('admin.layouts.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Заказы</h1>
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
                <h3 class="card-title">Список продуктов</h3>
            </div>
            <div class="card-body p-1">
                <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Добавить продукт</a>
                @if(count($products))

                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                <tr>
                                    <th>ID продукта</th>
                                    <th>Имя продуктов</th>
                                    <th>description</th>
                                    <th>content</th>
                                    <th>price</th>
                                    <th>old_price</th>
                                    <th>hit</th>
                                    <th>brand_id</th>
                                    <th>category_id</th>
                                    <th>views</th>
                                    <th>thumbnail</th>
                                    <th>qty</th>
                                    <th>slug</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->content}}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->old_price }}</td>
                                        <td>{{ $product->hit }}</td>
                                        <td>{{ $product->brand_id }}</td>
                                        <td>{{ $product->category_id }}</td>
                                        <td>{{ $product->views }}</td>
                                        <td>{{ $product->qty }}</td>
                                        <td>{{ $product->slug }}</td>
                                        <td>
                                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            <form action="{{ route('orders.destroy', $order->id) }}" method="post" class="float-left">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach

                                {{--<tr>
                                    <th># Покупок </th>
                                    @foreach($user_details as $user_detail)
                                    <td>{{dd($user_detail)  }}</td>

                                </tr>
                                    @endforeach--}}
                                </tbody>
                            </table>
                        </div>
                    </div>

                @else
                    <p>Заказов пока нет</p>
                @endif

            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {{ $orders->links() }}
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->


@endsection
