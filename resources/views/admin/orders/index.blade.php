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
                <h3 class="card-title">Список заказов</h3>
            </div>
            <div class="card-body p-1">
                <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Добавить заказ</a>
                @if(count($orders))
                    <h4>Всего заказов {{ count($orders) }}</h4>

                   {{--{{(Auth::user()->id)}}--}}

                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                <tr>
                                    <th>ID заказа</th>
                                    <th>Id заказчика</th>
                                    <th>Продукты</th>
                                    <th>Тел</th>
                                    <th>email</th>
                                    <th>address</th>
                                    <th>status</th>
                                    <th>созд</th>
                                    <th>изм</th>
                                    <th>slug</th>
                                    <th>actions</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                            <th scope="row">{{ $order->id }}</th>
                                        <td>{{ $order->user_id }}</td>
                                        <td>{{ $order->products->pluck('id')->join(', ') }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->updated_at }}</td>
                                        <td>{{ $order->slug }}</td>
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

                                <tr>
                                    <th># Покупок </th>



                                </tr>

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