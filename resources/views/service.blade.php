@extends('/layout/master')
@section('title', 'Услуги')
@section('content')

<div class="site__body">
  <div class="page-header">
    <div class="page-header__container container">
      <div class="page-header__breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg"></use>
              </svg></li>
            <li class="breadcrumb-item"><a href="">Breadcrumb</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg"></use>
              </svg></li>
            <li class="breadcrumb-item active" aria-current="page">Наши услуги</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__title">
        <h1>Наши услуги</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8">
        <div class="block">
          <div class="posts-view">
            <div class="posts-view__list posts-list posts-list--layout--classic">
              <div class="posts-list__body">

                  <div class="posts-list__item">
                    <div class="post-card post-card--layout--grid post-card--size--lg">
                      <div class="post-card__image">
                        @if( Storage::url($service->image) == Storage::url($service->null) )
                          <img src="/images/photo.png" alt="">
                        @else
                          <img src="{{ Storage::url($service->image) }}" alt="">
                        @endif
                      </div>
                      <div class="post-card__info">
                        <div class="post-card__category">{{ $service->price }}</div>
                        <div class="post-card__name">{{ $service->name }}
                        </div>
                        <div class="post-card__content">
                        {{ $service->description }}
                        </div>
                      </div>
                    </div>
                  </div>
                  
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="block block-sidebar block-sidebar--position--end">

          <div class="block-sidebar__item">
            <div class="widget-newsletter widget">
              <h4 class="widget-newsletter__title">Подпишитесь на наши объявления</h4>
              <div class="widget-newsletter__text">Заполните форму и получайте наши новые объявления о товарах и услугах.</div>
              <form class="widget-newsletter__form" action="">
                <label for="widget-newsletter-email" class="sr-only">Email</label>
                <input id="widget-newsletter-email" type="text" class="form-control" placeholder="Email@example.ru">
                <button type="submit" class="btn btn-primary mt-3">Подписаться</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection