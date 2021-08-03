@extends('/layout/master')
@section('title', 'Мои заказы')
@section('content')

<div class="site__body">
  <div class="page-header">
    <div class="page-header__container container">
      <div class="page-header__breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
              </svg></li>
            <li class="breadcrumb-item"><a href="">Breadcrumb</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
              </svg></li>
            <li class="breadcrumb-item active" aria-current="page">Мой профиль</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__title">
        <h1>Мой профиль</h1>
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
            <div class="card-header">
              <h5>Мои заказы</h5>
            </div>
            <div class="card-divider"></div>
            <div class="card-table">
              <div class="table-responsive-sm">
                <table>
                  <thead>
                    <tr>
                      <th>Заказ №</th>
                      <th>Дата</th>
                      <th>Статус</th>
                      <th>На сумму</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                      <tr>
                        <td><a href="{{ route('person.orders.show', $order) }}">#{{ $order->id }}</a></td>
                        <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                        <td>статус</td>
                        <td>{{ $order->getFullPrice() }}₽</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-divider"></div>
            <div class="card-footer">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link page-link--with-arrow" href="" aria-label="Previous"><svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                      <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                    </svg></a></li>
                <li class="page-item"><a class="page-link" href="">1</a></li>
                <li class="page-item active"><a class="page-link" href="">2 <span class="sr-only">(current)</span></a></li>
                <li class="page-item"><a class="page-link" href="">3</a></li>
                <li class="page-item"><a class="page-link page-link--with-arrow" href="" aria-label="Next"><svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                      <use xlink:href="images/sprite.svg#arrow-rounded-right-8x13"></use>
                    </svg></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection