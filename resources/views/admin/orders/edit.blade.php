@extends('admin.layouts.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование заказа</h1>
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
                <h3 class="card-title">Заказ "{{ $order->title }}"</h3>

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

                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-styling table-hover table-striped table-primary">

                                <tbody>
                                        <td>


                                            <form action="{{ route('orders.update', $order->id) }}" method="post" class="float-left">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="title">Название заказа </label>
                                                    <input type="text" size="150" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $order->title }}">
                                                </div>

                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="name">Имя заказчика</label>
                                                    <input type="text" size="150" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $order->name }}">
                                                </div>

                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="phone">Телефон заказчика</label>
                                                    <input type="text" size="150" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ $order->phone }}">
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12 col-xl-3 m-b-30">
                                                        <h4 class="sub-title">Задать статус заказа</h4>
                                                        <select name="status" class="form-control form-control">
                                                            <option value="0">0</option>

                                                            <option value="1">1</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="products_id">Выбрать продукт</label>
                                                    <select class="form-control @error('products_id') is-invalid @enderror" multiple= "multiple" id="products_id" name="products_id[]">

                                                        @foreach($products as $k => $v)
                                                            <option value="{{ $k }}">{{ $k}}__{{ $v }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>



                                                <button type="submit" class="btn btn-primary float-right mt-2"> <i class="fas fa-clone"></i>Сохранить</button>
                                            </form>



                                </tbody>
                            </table>
                        </div>
                    </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
               {{-- {{ $categories->links() }}--}}
            </div>

        </div>


    </section>
    <!-- /.content -->


@endsection