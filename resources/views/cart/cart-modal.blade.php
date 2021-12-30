@if(!empty(session('cart')))
    <div class="table-responsive" id="table table-responsive_for_cart">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Наименование</th>
                <th>Цена</th>
                <th>Кол-во</th>
                <th><i class="ti-unlink"></i></th>
            </tr>
            </thead>
            <tbody>
            @foreach(session('cart') as $item)
                <tr>
                    <td>
                        <a href="{{ route('products.single', ['slug' => $item['slug']]) }}">
                            <img style="width: 150px; height: 120px" src="{{ $item['img'] }}" alt="{{ $item['title'] }}">
                        </a>
                    </td>
                    <td><a href="{{ route('products.single', ['slug' => $item['slug']]) }}">{{ $item['title'] }}</a></td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['qty'] }}</td>
                    <td><span class="text-danger del-item" data-action="{{route('cart.del_item', ['product_id' => $item['product_id'] ])}}"><i class="ti-unlink"></i></span></td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4" align="right">Итого: </td>
                <td id="modal-cart-qty" colspan="4" align="right"> {{ session('cart_qty') }}</td>
            </tr>
            <tr>
                <td colspan="4" align="right"> На сумму:</td>
                <td id="modal-cart-total"   align="right"> {{ session('cart_total') }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@else
    <h4>Корзина пуста</h4>
@endif
