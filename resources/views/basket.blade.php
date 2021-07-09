@extends('/layout/master')
@section('title', 'Корзина')
@section('content')
<div class="site__body">
  <div class="page-header">
    <div class="page-header__container container">
      <div class="page-header__breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="/images/sprite.svg#arrow-rounded-right-6x9"></use>
              </svg></li>
            <li class="breadcrumb-item"><a href="">Breadcrumb</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="/images/sprite.svg#arrow-rounded-right-6x9"></use>
              </svg></li>
            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
          </ol>
        </nav>
      </div>
      
      <div class="page-header__title page-header__title__row">
        <h1>
          @if(count($order->products) == 0)
            Корзина товаров пуста
          @else 
          Корзина товаров
          @endif
        </h1>
        <div class="cart__buttons">
          <a href="" class="btn btn-primary cart__update-button">Обновить корзину</a>
        </div>
      </div>
    </div>
  </div>
  <div class="cart block">
    <div class="container">
      @if(count($order->products) == 0)
      @else       
        <table class="cart__table cart-table">
          <thead class="cart-table__head">
            <tr class="cart-table__row">
              <th class="cart-table__column cart-table__column--image">Image</th>
              <th class="cart-table__column cart-table__column--product">Product</th>
              <th class="cart-table__column cart-table__column--price">Price</th>
              <th class="cart-table__column cart-table__column--quantity">Quantity</th>
              <th class="cart-table__column cart-table__column--total">Total</th>
              <th class="cart-table__column cart-table__column--remove"></th>
            </tr>
          </thead>
          <tbody class="cart-table__body">
          
        @foreach ($order->products as $product)
          <tr class="cart-table__row">
            <td class="cart-table__column cart-table__column--image">
              <div class="product-image"><a href="" class="product-image__body"><img class="product-image__img" src="/images/products/product-1.jpg" alt=""></a></div>
            </td>
            <td class="cart-table__column cart-table__column--product">
              <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="cart-table__product-name">{{ $product->name }}</a>
              <ul class="cart-table__options">
                <li>{{ $product->category->name }}</li>
                <li>Material: Aluminium</li>
              </ul>
            </td>
            <td class="cart-table__column cart-table__column--price" data-title="Price">{{ $product->price }}₽</td>
            <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
              <div class="input-number">
                <input class="form-control input-number__input" type="number" min="1" value="{{ $product->pivot->count }}">
                <form action="{{ route('basket-add', $product) }}" method="POST">
                  <button type="submit" class="input-number__add"></button>
                  @csrf
                </form>
                <form action="{{ route('basket-remove', $product) }}" method="POST">
                  <button type="submit" class="input-number__sub"></button>
                  @csrf
                </form>
              </div>
            </td>
            <td class="cart-table__column cart-table__column--total" data-title="Total">{{ $product->getPriceFoCount() }}₽</td>
            <td class="cart-table__column cart-table__column--remove">
              <form action="{{ route('basket-delte', $product) }}" method="POST">
                <button type="submit" class="btn btn-light btn-sm btn-svg-icon">
                  <svg version="1.1" fill="#212529" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717
                        L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859
                        c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287
                        l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285
                        L284.286,256.002z"/>
                    </g>
                  </g>
                  </svg>
                </button>
                @csrf
              </form>
            </td>
          </tr>
        @endforeach
        

        </tbody>
      </table>
      
      <div class="row justify-content-end pt-5">
        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title" style="font-weight: 300;">Итоговая цена заказа</h3>
              <table class="cart__totals">
                <tfoot class="cart__totals-footer">
                  <tr>
                    <td style="text-align: left;font-weight: 600;">{{ $order->getFullPrice() }}₽</td>
                  </tr>
                </tfoot>
              </table>
              <a class="btn btn-primary btn-xl btn-block cart__checkout-button" href="{{ route('checkout') }}">
                Оформить заказ
              </a>
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</div>
@endsection

