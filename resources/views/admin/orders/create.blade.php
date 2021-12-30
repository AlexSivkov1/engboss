@extends('admin.layouts.layout')
@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Добавление заказа</h1>

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

        <form role="form" method="post" action="{{ route('orders.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">




                <div class="form-group">
                    <label for="title">Название заказа</label>
                    <input type="text" name="title"
                           class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title">
                </div>

                <div class="form-group">
                    <label for="phone">phone</label>
                    <input type="tel" name="phone"
                           class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="phone">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email"
                           class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" name="address"
                           class="form-control @error('address') is-invalid @enderror" id="address" placeholder="address">
                </div>

                <div class="form-group">
                    <label for="status">status</label>
                    <input type="text" name="status"
                           class="form-control @error('status') is-invalid @enderror" id="status" placeholder="status">
                </div>


                <div class="form-group ">
                    <label for="products_id">Выбрать продукт</label>
                    <select class="form-control @error('products_id') is-invalid @enderror" multiple= "multiple" id="products_id" name="products_id[]">

                        @foreach($products as $k => $v)
                            <option value="{{ $k }}">{{ $k}}__{{ $v }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group ">
                    <label for="category_id">Выбрать категорию</label>
                    <select class="form-control @error('category_id') is-invalid @enderror" multiple= "multiple" id="category_id" name="category_id[]">

                        @foreach($categories as $k => $v)
                            <option value="{{ $k }}">{{ $k}}__{{ $v }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group ">
                    <label for="user_id">Id заказчика</label>
                    <select class="form-control @error('user_id') is-invalid @enderror"   id="user_id" name="user_id">


                            <option value="{{ Auth::user()->id }}"> {{ Auth::user()->id }} </option>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>

        </form>

@endsection

                <!-- /.card-body -->
                <div class="card-footer">
                  {{--  {{ $categories->links() }}--}}
                </div>
                <!-- /.card-footer-->


