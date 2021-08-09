<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>Замковед @yield('title')</title>
  <link rel="icon" type="image/png" href="images/favicon.ico"><!-- fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vendor/owl-carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/vendor/photoswipe/photoswipe.css">
  <link rel="stylesheet" href="/vendor/photoswipe/default-skin/default-skin.css">
  <link rel="stylesheet" href="/vendor/select2/css/select2.min.css">
  <link rel="stylesheet" href="/css/style.css"><!-- font - fontawesome -->
  <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css"><!-- font - stroyka -->
  <link rel="stylesheet" href="/fonts/stroyka/stroyka.css">
</head>

<body>
  <!-- site -->
  <div class="site category-five">
    <!-- mobile site__header -->
    <header class="site__header d-lg-none">
      <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
      <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
        <div class="mobile-header__panel">
          <div class="container">
            <div class="mobile-header__body">
              <button class="mobile-header__menu-button">
                <svg height="22px" viewBox="0 -53 384 384" width="38px" xmlns="http://www.w3.org/2000/svg">
                  <path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"></path>
                  <path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"></path>
                  <path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"></path>
                </svg>
              </button>
              <a class="mobile-header__logo" href="/">
                <img src="/images/logo-big.png" alt="">
              </a>
              <div class="search search--location--mobile-header mobile-header__search">
                <div class="search__body">
                  <form class="search__form" action=""><input class="search__input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                    <button class="search__button search__button--type--submit" type="submit"><svg width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#search-20"></use>
                      </svg></button> <button class="search__button search__button--type--close" type="button"><svg width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#cross-20"></use>
                      </svg></button>
                    <div class="search__border"></div>
                  </form>
                  <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                </div>
              </div>
              <div class="mobile-header__indicators">
                <div class="indicator indicator--mobile d-sm-flex d-none">
                  <a href="{{ route('basket') }}" class="indicator__button">
                    <span class="indicator__area">
                      <svg width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#heart-20"></use>
                      </svg>
                      <span class="indicator__value">0</span>
                    </span>
                  </a>
                </div>
                <div class="indicator indicator--mobile">
                  <a href="{{ route('basket') }}" class="indicator__button">
                    <span class="indicator__area">
                      <svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 -31 512.00026 512" width="28">
                        <path d="m164.960938 300.003906h.023437c.019531 0 .039063-.003906.058594-.003906h271.957031c6.695312 0 12.582031-4.441406 14.421875-10.878906l60-210c1.292969-4.527344.386719-9.394532-2.445313-13.152344-2.835937-3.757812-7.269531-5.96875-11.976562-5.96875h-366.632812l-10.722657-48.253906c-1.527343-6.863282-7.613281-11.746094-14.644531-11.746094h-90c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h77.96875c1.898438 8.550781 51.3125 230.917969 54.15625 243.710938-15.941406 6.929687-27.125 22.824218-27.125 41.289062 0 24.8125 20.1875 45 45 45h272c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-272c-8.269531 0-15-6.730469-15-15 0-8.257812 6.707031-14.976562 14.960938-14.996094zm312.152343-210.003906-51.429687 180h-248.652344l-40-180zm0 0" />
                        <path d="m150 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0" />
                        <path d="m362 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0" />
                      </svg>
                      <span class="indicator__value">
                        @if(isset($order->products))
                        {{ $order->getPriceAllCount() }}
                        @else
                        0
                        @endif
                      </span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <header class="site__header d-lg-block d-none">
      <div class="site-header">
        <!-- .topbar -->
        <div class="site-header__topbar topbar">
          <div class="topbar__container container">
            <div class="topbar__row">
              <div class="topbar__item topbar__item--link">
                <a class="topbar-link" href="">О нас</a>
              </div>
              <div class="topbar__item topbar__item--link">
                <a class="topbar-link" href="">Контакты</a>
              </div>
              <div class="topbar__item topbar__item--link">
                <a class="topbar-link" href="">Как купить</a>
              </div>
              <div class="topbar__spring"></div>
              <div class="topbar__item">
                <div class="topbar-dropdown">
                  <button class="topbar-dropdown__btn" type="button">г. Ульяновск
                    <svg width="7px" height="5px">
                      <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="topbar__item">
                <div class="topbar-dropdown">
                  <button class="topbar-dropdown__btn" type="button">Валюта: <span class="topbar__item-value">RUB</span>
                    <svg width="7px" height="5px">
                      <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="topbar__item">
                <div class="topbar-dropdown">
                  <button class="topbar-dropdown__btn" type="button">Язык: <span class="topbar__item-value">RU</span>
                    <svg width="7px" height="5px">
                      <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div><!-- .topbar / end -->
        <div class="site-header__middle container">
          <div class="site-header__logo">
            <a href="/">
              <img src="/images/logo-big.png" alt="">
            </a>
          </div>
          <div class="site-header__search">
            <div class="search search--location--header">
              <div class="search__body">
                <form class="search__form" action="">
                  <input class="search__input" name="search" placeholder="Введите название товара" aria-label="Site search" type="text" autocomplete="off">
                  <button class="search__button search__button--type--submit" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 30 30" width="24px" height="24px">
                      <path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z" />
                    </svg>
                  </button>
                  <div class="search__border"></div>
                </form>
                <div class="search__suggestions suggestions suggestions--location--header"></div>
              </div>
            </div>
          </div>
          <div class="site-header__phone">
            <div class="site-header__phone-title">Телефон:</div>
            <a href="tel:+79093573212" class="site-header__phone-number">+7 (909) 357-32-12</a>
          </div>
        </div>
        <div class="site-header__nav-panel">
          <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
          <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
            <div class="nav-panel__container container">
              <div class="nav-panel__row">
                <div class="nav-panel__departments">
                  <a href="{{ route('catalog') }}" class="departments__button">
                    <svg height="18px" viewBox="0 -53 384 384" width="32px" xmlns="http://www.w3.org/2000/svg">
                      <path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" />
                      <path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" />
                      <path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" />
                    </svg>
                    <use xlink:href="images/sprite.svg#menu-18x14"></use>
                    </svg> Каталог
                  </a>
                </div><!-- .nav-links -->
                <div class="nav-panel__nav-links nav-links">
                  <ul class="nav-links__list">
                    <li class="nav-links__item">
                      <a class="nav-links__item-link" href="{{ route('services') }}">
                        <div class="nav-links__item-body">Услуги</div>
                      </a>
                    </li>
                    <li class="nav-links__item">
                      <a class="nav-links__item-link" href="{{ route('buy') }}">
                        <div class="nav-links__item-body">Как купить</div>
                      </a>
                    </li>
                    <li class="nav-links__item">
                      <a class="nav-links__item-link" href="{{ route('contacts') }}">
                        <div class="nav-links__item-body">Контакты</div>
                      </a>
                    </li>
                  </ul>
                </div><!-- .nav-links / end -->
                <div class="nav-panel__indicators">
                  <div class="indicator"></div>
                  <div class="indicator indicator--trigger--click">
                    <a href="#" class="indicator__button">
                      <span class="indicator__area">
                        <svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 -31 512.00026 512" width="28">
                          <path d="m164.960938 300.003906h.023437c.019531 0 .039063-.003906.058594-.003906h271.957031c6.695312 0 12.582031-4.441406 14.421875-10.878906l60-210c1.292969-4.527344.386719-9.394532-2.445313-13.152344-2.835937-3.757812-7.269531-5.96875-11.976562-5.96875h-366.632812l-10.722657-48.253906c-1.527343-6.863282-7.613281-11.746094-14.644531-11.746094h-90c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h77.96875c1.898438 8.550781 51.3125 230.917969 54.15625 243.710938-15.941406 6.929687-27.125 22.824218-27.125 41.289062 0 24.8125 20.1875 45 45 45h272c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-272c-8.269531 0-15-6.730469-15-15 0-8.257812 6.707031-14.976562 14.960938-14.996094zm312.152343-210.003906-51.429687 180h-248.652344l-40-180zm0 0" />
                          <path d="m150 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0" />
                          <path d="m362 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0" />
                        </svg>
                        <span class="indicator__value">
                          @if(isset($order->products))
                          {{ $order->getPriceAllCount() }}
                          @else
                          0
                          @endif
                        </span>
                      </span>
                    </a>
                    <div class="indicator__dropdown">
                      <!-- .dropcart -->
                      <div class="dropcart dropcart--style--dropdown">
                        <div class="dropcart__body">
                          <div class="dropcart__products-list">
                            @if (isset($order->products))
                            @if(count($order->products) == 0)
                            Корзина товаров пуста
                            @else


                            @foreach ($order->products as $product)
                            <div class="dropcart__product">
                              <div class="product-image dropcart__product-image">
                                <a href="product.html" class="product-image__body">
                                  <img class="product-image__img" src="/images/products/product-1.jpg" alt="">
                                </a>
                              </div>
                              <div class="dropcart__product-info">
                                <div class="dropcart__product-name">
                                  <a href="product.html">{{ $product->name }}</a>
                                </div>
                                <ul class="dropcart__product-options">
                                  <li>{{ $product->category->name }}</li>
                                  <!-- <li>Material: Aluminium</li> -->
                                </ul>
                                <div class="dropcart__product-meta">
                                  <span class="dropcart__product-quantity">{{ $product->pivot->count }}</span> ×
                                  <span class="dropcart__product-price">{{ $product->price }}₽</span>
                                </div>
                              </div>
                            </div>
                            @endforeach

                            @endif
                            @else
                            Корзина товаров пуста
                            @endif
                          </div>
                          @if (isset($order->products))
                          @if(count($order->products) == 0)
                          @else
                          <div class="dropcart__totals">
                            <table>
                              <tr>
                                <th>Итог</th>
                                <td>{{ $order->getFullPrice() }}₽</td>
                              </tr>
                            </table>
                          </div>
                          <div class="dropcart__buttons">
                            <a class="btn btn-secondary" href="{{ route('basket') }}">В корзину</a>
                            <a class="btn btn-primary" href="{{ route('checkout') }}">Оформить</a>
                          </div>
                          @endif
                          @endif
                        </div>
                      </div><!-- .dropcart / end -->
                    </div>
                  </div>
                  <div class="indicator indicator--trigger--click">
                    <a href="{{ route('login') }}" class="indicator__button">
                      <span class="indicator__area">
                        @guest
                        Войти
                        @endguest
                        @auth
                        Профиль
                        @endauth
                      </span>
                    </a>
                    <div class="indicator__dropdown">
                      <div class="account-menu">
                        @guest
                        <form class="account-menu__form">
                          <div class="account-menu__form-title">Вход в аккаунт</div>
                          <div class="form-group account-menu__form-button">
                            <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Войти</a>
                          </div>
                          <div class="account-menu__form-link">
                            <a href="{{ route('register') }}">Создать аккаунт</a>
                          </div>
                        </form>
                        @endguest
                        @auth
                        @admin
                        <ul class="account-menu__links">
                          <li><a href="{{ route('home') }}">Панель администратора</a></li>
                          <li><a href="{{ route('get-logout') }}">Выйти</a></li>
                        </ul>
                        @else
                        <div class="account-menu__divider"></div>
                        <a href="" class="account-menu__user">
                          <div class="account-menu__user-avatar">
                            <svg version="1.1" id="Capa_1" width="35px" height="35px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                              <g>
                                <g>
                                  <path d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148
                                      C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962
                                      c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216
                                      h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40
                                      c59.551,0,108,48.448,108,108S315.551,256,256,256z" />
                                </g>
                              </g>
                            </svg>
                          </div>
                          <div class="account-menu__user-info">
                            <div class="account-menu__user-name">{{ Auth::user()->name }}</div>
                            <div class="account-menu__user-email">{{ Auth::user()->email }}</div>
                          </div>
                        </a>
                        <div class="account-menu__divider"></div>
                        <ul class="account-menu__links">
                          <li><a href="">Мой профиль</a></li>
                          <li><a href="{{ route('person.orders.index') }}">История заказов</a></li>
                        </ul>
                        <div class="account-menu__divider"></div>
                        <ul class="account-menu__links">
                          <li><a href="{{ route('get-logout') }}">Выйти</a></li>
                        </ul>
                        @endadmin
                        @endauth
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    @yield('content')

    <footer class="site__footer">
      <div class="site-footer">
        <div class="container">
          <div class="site-footer__widgets">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="site-footer__widget footer-contacts">
                  <h5 class="footer-contacts__title">Контакты</h5>
                  <div class="footer-contacts__text">
                    Наш магазин открыт для вас в будние дни с 8:30-19:00, в Субботу с 8:30-18:00, в Воскресенье с 8:30-17:00
                  </div>
                  <ul class="footer-contacts__contacts">
                    <li><i class="footer-contacts__icon fas fa-globe-americas"></i> г. Ульяновск ул. Ульяновский проспект д.24, ТЦ "СтройГрад" бутик-33
                    </li>
                    <!-- <li><i class="footer-contacts__icon far fa-envelope"></i> stroyka@example.com</li> -->
                    <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> +7 (909) 357-32-12</li>
                  </ul>
                </div>
              </div>
              <div class="col-6 col-md-3 col-lg-2">
                <div class="site-footer__widget footer-links">
                  <h5 class="footer-links__title">Разделы</h5>
                  <ul class="footer-links__list">
                    <li class="footer-links__item"><a href="{{ route('catalog') }}" class="footer-links__link">Каталог</a></li>
                    <li class="footer-links__item"><a href="{{ route('contacts') }}" class="footer-links__link">Контакты</a></li>
                    <li class="footer-links__item"><a href="{{ route('services') }}" class="footer-links__link">Услуги</a></li>
                    <li class="footer-links__item"><a href="{{ route('buy') }}" class="footer-links__link">Как купить</a></li>
                    <li class="footer-links__item"><a href="{{ route('policy') }}" class="footer-links__link">Политика конф-ти</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-6 col-md-3 col-lg-2">
                <div class="site-footer__widget footer-links">
                  <h5 class="footer-links__title">Мой аккаунт</h5>
                  <ul class="footer-links__list">
                    <li class="footer-links__item"><a href="{{ route('person.orders.index') }}" class="footer-links__link">История заказов</a></li>
                    <li class="footer-links__item"><a href="" class="footer-links__link">Настройки</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4">
                <div class="site-footer__widget footer-newsletter">
                  <h5 class="footer-newsletter__title">Подписка</h5>
                  <div class="footer-newsletter__text">Подпишитесь на нашу рассылку и получайте самые новые предложения от нас</div>
                  <form action="" class="footer-newsletter__form"><label class="sr-only" for="footer-newsletter-address">Email</label>
                    <input type="text" class="footer-newsletter__form-input form-control" id="footer-newsletter-address" placeholder="Email@example.ru">
                    <button class="footer-newsletter__form-button btn btn-primary">Подписаться</button>
                  </form>
                  <!-- <div class="footer-newsletter__text footer-newsletter__text--social">Следите за нами в социальных сетях
                  </div>
                  <div class="social-links footer-newsletter__social-links social-links--shape--circle">
                    <ul class="social-links__list">
                      <li class="social-links__item"><a class="social-links__link social-links__link--type--rss" href="" target="_blank"><i class="fas fa-rss"></i></a></li>
                      <li class="social-links__item"><a class="social-links__link social-links__link--type--youtube" href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
                      <li class="social-links__item"><a class="social-links__link social-links__link--type--facebook" href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                      <li class="social-links__item"><a class="social-links__link social-links__link--type--twitter" href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                      <li class="social-links__item"><a class="social-links__link social-links__link--type--instagram" href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="site-footer__bottom text-center">
            <div class="site-footer__copyright text-center">
              &copy <?php echo date("Y"); ?> Все права защищены
            </div>
          </div>
        </div>
        <div class="totop">
          <div class="totop__body">
            <div class="totop__start"></div>
            <div class="totop__container container"></div>
            <div class="totop__end">
              <button type="button" class="totop__button">
                <svg version="1.1" id="Layer_1" width="20px" height="14px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                  <path id="XMLID_224_" d="M325.606,229.393l-150.004-150C172.79,76.58,168.974,75,164.996,75c-3.979,0-7.794,1.581-10.607,4.394
	l-149.996,150c-5.858,5.858-5.858,15.355,0,21.213c5.857,5.857,15.355,5.858,21.213,0l139.39-139.393l139.397,139.393
	C307.322,253.536,311.161,255,315,255c3.839,0,7.678-1.464,10.607-4.394C331.464,244.748,331.464,235.251,325.606,229.393z" />
                  <g>
                  </g>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </footer><!-- site__footer / end -->
  </div><!-- site / end -->
  <!-- quickview-modal -->
  <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content"></div>
    </div>
  </div><!-- quickview-modal / end -->
  <!-- mobilemenu -->
  <div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
      <div class="mobilemenu__header">
        <div class="mobilemenu__title">Меню</div>
        <button type="button" class="mobilemenu__close">
          <svg version="1.1" id="Capa_1" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
            <g>
              <g>
                <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717
                    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859
                    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287
                    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285
                    L284.286,256.002z" />
              </g>
            </g>
          </svg>
        </button>
      </div>
      <div class="mobilemenu__content">
        <ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">
          <li class="mobile-links__item">
            <div class="mobile-links__item-title">
              <a href="{{ route('catalog') }}" class="mobile-links__item-link">Каталог</a>
            </div>
          </li>
          <li class="mobile-links__item">
            <div class="mobile-links__item-title">
              <a href="{{ route('services') }}" class="mobile-links__item-link">Услуги</a>
            </div>
          </li>
          <li class="mobile-links__item">
            <div class="mobile-links__item-title">
              <a href="{{ route('buy') }}" class="mobile-links__item-link">Как купить</a>
            </div>
          </li>
          <li class="mobile-links__item">
            <div class="mobile-links__item-title">
              <a href="{{ route('contacts') }}>" class="mobile-links__item-link">Контакты</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div><!-- mobilemenu / end -->
  <!-- photoswipe -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
          <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>--> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div><!-- photoswipe / end -->
  <!-- js -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/owl-carousel/owl.carousel.min.js"></script>
  <script src="/vendor/nouislider/nouislider.min.js"></script>
  <script src="/vendor/photoswipe/photoswipe.min.js"></script>
  <script src="/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
  <script src="/vendor/select2/js/select2.min.js"></script>
  <script src="/js/number.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/header.js"></script>
  <script src="/vendor/svg4everybody/svg4everybody.min.js"></script>
</body>

</html>