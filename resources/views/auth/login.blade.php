@extends('/layout/master')
@section('title', 'Вход')
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
              </svg></li>
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
        <div class="col-md-6 d-flex flex-column">
          <div class="card flex-grow-1 mb-md-0">
            <div class="card-body">
              <h3 class="card-title">Вход</h3>
              <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="example@mail.ru">
                  @include('layout.error', ['fieldName' => 'email'])
                </div>
                <div class="form-group">
                  <label>Пароль</label>
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  @include('layout.error', ['fieldName' => 'password'])
                  <small class="form-text text-muted">
                    <a href="">Сбросить пароль</a>
                  </small>
                  
                </div>
                <!-- <div class="form-group">
                  <div class="form-check">
                    <span class="form-check-input input-check">
                      <span class="input-check__body">
                        <input class="input-check__input" type="checkbox" id="login-remember">
                        <span class="input-check__box"></span>
                        <svg class="input-check__icon" width="9px" height="7px">
                          <use xlink:href="images/sprite.svg#check-9x7"></use>
                        </svg>
                      </span>
                    </span>
                    <label class="form-check-label" for="login-remember">Запомнить меня</label>
                  </div>
                </div> -->
                
                <button type="submit" class="btn btn-primary mt-4">Войти</button>                  
              </form>
            </div>
          </div>
          <div>
            <br>
            <b>
              <small>Нет аккаунта ?</small><br>
              <a href="{{ route('register') }}">Создать аккаунт</a>
            </b>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection