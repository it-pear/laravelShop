@extends('/layout/admin')
@section('title', 'Товар' . $order->id)

@section('content')

<div class="form-admin">
  <h2>{{ $order->name }}</h2>
  <br>
  <div class="form-admin-section">
    <div class="admin-section">
      <h6>#Id - <small>{{ $order->id }}</small></h6>
      <h6>Заказчик - <small>{{ $order->name }}</small></h6>
      <h6>Номер телефона - <small>{{ $order->phone }}</small></h6>
      <form action="">
        <label><b>Статус заказа</b></label>
        <div class="form-group" style="display: flex; align-items:center;">
          <select class="form-control" style="min-width: 203px;">
            <option>В обработке</option>
            <option>Отправлен</option>
            <option>Завершен</option>
          </select>
          <button class="btn btn-primary btn-lg" type="submit" style="height: 36px;padding: 8px 20px;margin-left: 24px;">Изменить</button>
        </div>
      </form>
    </div>
  </div>
  <h5>Заказанный товар</h5>
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

@endsection