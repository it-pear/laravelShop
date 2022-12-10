<div class="account-nav flex-grow-1">
  <h4 class="account-nav__title">Навигация</h4>
  <ul class="directive-menu">
    <li @routeactive('person.orders.index') class="account-nav__item"><a href="{{ route('person.orders.index') }}">Мои заказы</a></li>
    
    <li class="account-nav__item"><a href="{{ route('logout') }}">Выйти</a></li>
  </ul>
</div>