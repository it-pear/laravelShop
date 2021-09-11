@extends('/layout/master')
@section('title', 'Как купить')
@section('content')


  <div class="site__body">
    <div class="page-header">
      <div class="page-header__container container">
        <div class="page-header__breadcrumb">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Главная</a>
                <img src="/images/sprite.svg" class="breadcrumb__arrowe-svg" alt="">
              </li>
              <li class="breadcrumb-item active" aria-current="page">Часто задаваемые вопросы</li>
            </ol>
          </nav>
        </div>
        <div class="page-header__title">
          <h1>Часто задаваемые вопросы</h1>
        </div>
      </div>
    </div>
    <div class="block faq">
      <div class="container">
        <div class="faq__section">
          <div class="faq__section-title">
            <h3>Пункт 1. Как купить?</h3>
          </div>
          <div class="faq__section-body">
            <div class="row">
              <div class="faq__section-column col-12 col-lg-12">
                <div class="typography">
                  <h6>Я хочу просто купить товар</h6>
                  <p>
                    В этом случае вы можете просто отправить заявку с номером и именем, после чего наш менеджер перезвонит вам и уточнит информацию
                    по вашему заказу (но, в этом случае вы не можете просмотреть статус заказа и инфо о себе).
                  </p>
                  <h6>Я хочу видеть статус заказа</h6>
                  <p>
                    Для того, чтобы видеть в каком статусе нходится ваш заказ (в обработке, готовиться, отправлен и т.д.) 
                    - надо либо быть уже зарегистрированным на сайте, либо при оформлении заказа зарегистрироваться, 
                    после чего вы сразу можете перейти в личный кабинет клиента на сайте и просмотреть всю информацию о заказе и информацию о себе.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="faq__section">
          <div class="faq__section-title">
            <h3>Пункт 2. Как происходит весь процесс покупки на нашем сайте ?</h3>
          </div>
          <div class="faq__section-body">
            <div class="row">
              <div class="faq__section-column col-12 col-lg-12">
                <div class="typography">
                  <h6>1. Добавление товаров в корзину</h6>
                  <p>
                    Просто выберите интересующие вас товары, и добавте их в корзину
                  </p>
                </div>
                <br>
              </div>
              <div class="faq__section-column col-12 col-lg-12">
                <div class="typography">
                  <h6>2. Введите данные - выбрав интересующий вас вид покупки (Пункт 1.)</h6>
                  <p>
                    Введите ваши данные, выбрав подходящий именно для вас вид оформления товара
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

