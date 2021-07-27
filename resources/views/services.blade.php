@extends('/layout/master')
@section('title', 'Услуги')
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
                @foreach($services as $service)
                  <div class="posts-list__item">
                    <div class="post-card post-card--layout--grid post-card--size--lg">
                      <div class="post-card__image"><a href=""><img src="images/posts/post-1.jpg" alt=""></a></div>
                      <div class="post-card__info">
                        <div class="post-card__category"><a href="">{{ $service->price }}</a></div>
                        <div class="post-card__name"><a href="">{{ $service->name }}</a>
                        </div>
                        <div class="post-card__content">
                        {{ $service->description }}
                        </div>
                        <div class="post-card__read-more"><a href="" class="btn btn-secondary btn-sm">Подробнее</a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>

            <!-- <div class="posts-view__pagination">
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
            </div> -->

          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="block block-sidebar block-sidebar--position--end">
          <div class="block-sidebar__item">
            <div class="widget-search">
              <form class="widget-search__body"><input class="widget-search__input" placeholder="Blog search..." type="text" autocomplete="off" spellcheck="false"> <button class="widget-search__button" type="submit"><svg width="20px" height="20px">
                    <use xlink:href="images/sprite.svg#search-20"></use>
                  </svg></button></form>
            </div>
          </div>
          <div class="block-sidebar__item">
            <div class="widget-aboutus widget">
              <h4 class="widget__title">Услуги</h4>
              <div class="widget-aboutus__text">На данной странице вы можете просмотреть все услуги предоставляемые нашим магазином. Также вы можете следить за нами в социальных сетях.</div><!-- social-links -->
              <div class="social-links widget-aboutus__socials social-links--shape--rounded">
                <ul class="social-links__list">
                  <li class="social-links__item"><a class="social-links__link social-links__link--type--rss" href="" target="_blank"><i class="fas fa-rss"></i></a></li>
                  <li class="social-links__item"><a class="social-links__link social-links__link--type--youtube" href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
                  <li class="social-links__item"><a class="social-links__link social-links__link--type--facebook" href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="social-links__item"><a class="social-links__link social-links__link--type--twitter" href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li class="social-links__item"><a class="social-links__link social-links__link--type--instagram" href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div><!-- social-links / end -->
            </div>
          </div>

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