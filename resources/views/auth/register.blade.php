@extends('/layout/master')
@section('title', 'Регистрация')
@section('content')

<div class="site__body">
  <div class="page-header">
    <div class="page-header__container container">
      <div class="page-header__breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a>
              <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg"></use>
              </svg>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Мой аккаунт</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__title">
        <h1>Мой аккаунт</h1>
      </div>
    </div>
  </div>
  <div class="block">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex flex-column mt-4 mt-md-0">
          <div class="card flex-grow-1 mb-0">
            <div class="card-body">
              <h3 class="card-title">Регистрация</h3>
              <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group"><label>ФИО</label>
                  <input type="text" name="name" class="form-control" placeholder="Иванов Иван Иванович">
                  @include('layout.error', ['fieldName' => 'name'])
                </div>
                <div class="form-group"><label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="example.mail.ru">
                  @include('layout.error', ['fieldName' => 'email'])
                </div>
                <div class="form-group"><label>Пароль</label>
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  @include('layout.error', ['fieldName' => 'password'])
                </div>
                <div class="form-group"><label>Повторите пароль</label>
                  <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                  @include('layout.error', ['fieldName' => 'password_confirmation'])
                </div>
                <button type="submit" class="btn btn-primary mt-4">Зарегистрироваться</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection