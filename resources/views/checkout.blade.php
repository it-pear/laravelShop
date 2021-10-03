@extends('/layout/master') 
@section('title', 'Оформить заказ')
@section('content')

@if(count($order->products) == 0)
<div class="container">
  <br><br>
  <h1>
    Корзина товаров пуста <br><small>нужно выбрать интересующий вас товар</small>
  </h1>
  <br>
</div>
@else 
<div class="site__body">
  <div class="page-header">
    <div class="page-header__container container">
      <div class="page-header__breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg"></use>
              </svg></li>
            <li class="breadcrumb-item"><a href="/basket">Корзина</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg"></use>
              </svg></li>
            <li class="breadcrumb-item active" aria-current="page">Оформления заказа</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__title">
        <h1>Оформления заказа</h1>
      </div>
    </div>
  </div>
  <div class="checkout block">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-3">
        {{ Auth::user()->name }}, ваш заказ почти готов, осталось заполнить поля ниже и следить за заказом через личный кабинет.
        </div>
        <form action="{{ route('checkout-confirm') }}" method="POST" class="row">
          <div class="col-12 col-lg-6 col-xl-7">
            <div class="card mb-lg-0">
              <div class="card-body">
                <h3 class="card-title">Детали заказа</h3>
                <div class="form-group">
                  <label for="checkout-state">Субъект страны</label>
                  <input type="text" class="form-control" name="country" required id="checkout-state">
                </div>
                <div class="form-group">
                  <label for="checkout-company-name">Город <span class="text-muted">(Город доставки)</span></label>
                  <input type="text" class="form-control" name="city" required id="checkout-company-name" placeholder="Введие город доставки">
                </div>
                <div class="form-group">
                  <label for="checkout-street-address">Улица</label>
                  <input type="text" class="form-control" name="street" required id="checkout-street-address" placeholder="Укажите улицу">
                </div>
                <div class="form-group">
                  <label for="checkout-address">Номер дома<span class="text-muted"> (укажите номер дома)</span></label>
                  <input type="text" class="form-control" name="home" required id="checkout-address">
                </div>                
                <div class="form-group">
                  <label for="checkout-postcode">Почтовый индекс</label>
                  <input type="text" class="form-control" name="index" required id="checkout-postcode">
                </div>
              </div>
              <div class="card-divider"></div>
              <div class="card-body">
                <h3 class="card-title">Детали заказа</h3>
                <div class="form-group">
                  <label for="checkout-comment">(необязательно)</label>
                  <textarea id="checkout-comment" class="form-control" name="message" rows="4"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
            <div class="card mb-0">
              <div class="card-body">
                <h3 class="card-title">Ваш заказ</h3>
                <table class="checkout__totals">
                  <thead class="checkout__totals-header">
                    <tr>
                      <th>Товар</th>
                      <th>Цена</th>
                    </tr>
                  </thead>
                  <tbody class="checkout__totals-products">
                  @foreach ($order->products as $product)
                    <tr>
                      <td>{{ $product->name }} × {{ $product->pivot->count }}</td>
                      <td>{{ $product->getPriceFoCount() }}₽</td>
                    </tr>
                  @endforeach
                    
                  </tbody>
                  <tfoot class="checkout__totals-footer">
                    <tr>
                      <th>Итог</th>
                      <td>{{ $order->getFullPrice() }}₽</td>
                    </tr>
                  </tfoot>
                </table>
                <div class="payment-methods">
                  <ul class="payment-methods__list">
                    <li class="payment-methods__item payment-methods__item--active">
                      <label class="payment-methods__item-header">
                        <span class="payment-methods__item-radio input-radio">
                          <span class="input-radio__body">
                            <input class="input-radio__input" name="checkout_payment_method" type="radio" value="1">
                            <span class="input-radio__circle"></span>
                          </span>
                        </span>
                        <span class="payment-methods__item-title">Доставка по городу Ульяновск</span>
                      </label>
                      <div class="payment-methods__item-container">
                        <div class="payment-methods__item-description text-muted">
                          Доставка по городу Ульяновск - БЕСПЛАТНА
                        </div>
                      </div>
                    </li>
                    <li class="payment-methods__item payment-methods__item--active">
                      <label class="payment-methods__item-header">
                        <span class="payment-methods__item-radio input-radio">
                          <span class="input-radio__body">
                            <input class="input-radio__input" name="checkout_payment_method" type="radio" value="2">
                            <span class="input-radio__circle"></span>
                          </span>
                        </span>
                        <span class="payment-methods__item-title">Доставка на почту (другой город)</span>
                      </label>
                      <div class="payment-methods__item-container">
                        <div class="payment-methods__item-description text-muted">
                          При доставке в другой город почтой действует наложенный платеж (оплата при получении в отделении почты)
                        </div>
                      </div>
                    </li>
                    <li class="payment-methods__item payment-methods__item--active">
                      <label class="payment-methods__item-header">
                        <span class="payment-methods__item-radio input-radio">
                          <span class="input-radio__body">
                            <input class="input-radio__input" name="checkout_payment_method" type="radio" checked="checked" value="3">
                            <span class="input-radio__circle"></span>
                          </span>
                        </span>
                        <span class="payment-methods__item-title">Доставка транспортной компанией <br>(другой город)</span>
                      </label>
                      <div class="payment-methods__item-container">
                        <div class="payment-methods__item-description text-muted">
                          Доставка до двери по точному адресу (плата индивидуально в зависимости от компании - доставки, менеджер уточнит по доставке)
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="checkout__agree form-group">
                  <div class="form-check"><span class="form-check-input input-check">
                    <span class="input-check__body">
                      <input class="input-check__input" type="checkbox" checked id="checkout-terms">
                      <span class="input-check__box"></span>
                      <svg class="input-check__icon" width="9px" height="7px">
                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                      </svg>
                    </span>
                  </span>
                    <label class="form-check-label" for="checkout-terms">
                      Я согласен на обработку<a target="_blank" href="/policy"> персональных данных</a>
                    </label>
                  </div>
                </div>
                @csrf
                <button type="submit" class="btn btn-primary btn-xl btn-block">Отправить</button>
              </div>
            </div>
          </div>
          
        </form>
        
      </div>
    </div>
  </div>
</div>
@endif
@endsection