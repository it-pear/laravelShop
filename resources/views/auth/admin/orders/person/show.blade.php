@extends('/layout/master')
@section('title', 'Заказ' . $order->id)
@section('content')

<div class="site__body">
  <div class="page-header">
    <div class="page-header__container container">
      <div class="page-header__breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
              </svg></li>
            <li class="breadcrumb-item"><a href="{{ route('person.profile') }}">Мои заказы</a> 
              <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
              </svg>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Заказ {{ $order->id }}</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__title">
        <h1>Заказ {{ $order->id }}</h1>
      </div>
    </div>
  </div>
  <div class="block">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-3 d-flex">
          @include('/layout/sidebarprof')
        </div>
        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
          <div class="card">
            <div class="order-header">
              <div class="order-header__actions"><a href="{{ route('person.orders.index') }}" class="btn btn-xs btn-secondary">Назад к заказам</a></div>
              <h5 class="order-header__title">Order #{{ $order->id }}</h5>
              <div class="order-header__subtitle">Дата заказа <mark class="order-header__date">{{ $order->created_at->format('H:i d/m/Y') }}</div>
              <div class="order-header__subtitle d-flex align-items-center">Статус заказа <mark class="order-header__date">
                @if ( $order->status === 1 )
                  <div class="alert alert-danger mb-0 ml-2" style="width: max-content;">
                    На обработке
                  </div>
                @elseif ( $order->status === 2 )
                  <div class="alert alert-warning mb-0 ml-2" style="width: max-content;">
                    Отправлен
                  </div>
                @elseif ( $order->status === 3 )
                  <div class="alert alert-success mb-0 ml-2" style="width: max-content;">
                    Завершен
                  </div>
                @else 
                  <div class="alert alert-danger mb-0 ml-2" style="width: max-content;">
                    Заказ не определен, пожалуйста свяжитесь с менеджером
                  </div>
                @endif
              </div>
              
            </div>
            <div class="card-divider"></div>
            <div class="card-table">
              <div class="table-responsive-sm">
                <table>
                  <thead>
                    <tr>
                    <th>Картинка</th>
                    <th>Товар</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    </tr>
                  </thead>
                  <tbody class="card-table__body card-table__body--merge-rows">
                    @foreach ($order->products as $product)
                      <tr>
                        <th>
                          @if( Storage::url($product->image) == Storage::url($product->null) )
                          <img src="/images/photo.png" alt="" style="max-height: 60px;">
                          @else
                          <img src="{{ Storage::url($product->image) }}" style="max-height: 60px;" alt="">
                          @endif
                        </th>
                        <td><a href="{{ route('product', [$product->category->code, $product->code]) }}">{{ $product->name }}</a></td>
                        <td>{{ $product->pivot->count }}</td>
                        <td>{{ $product->getPriceFoCount() }}₽</td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <td>Итоговая цена</td>
                    <td></td>
                    <td>{{ $order->getFullPrice() }}₽</td>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

@endsection