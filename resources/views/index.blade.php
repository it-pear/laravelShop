@extends('/layout/master')
@section('title', 'Главная')
@section('content')

<div class="site__body">
  <!-- .block-slideshow -->
  <div class="block-slideshow block-slideshow--layout--with-departments block">
    <div class="container">
      <div class="row">
        <div class="col-12">
          @if (session()->has('success'))
            <br>
            <div class="alert alert-success mb-3">{{ session()->get('success') }}</div>
          @endif
          @if (session()->has('warning'))
            <br>
            <div class="alert alert-warning mb-3">{{ session()->get('warning') }}</div>
          @endif
        </div>
        <div class="col-12">
          <div class="block-slideshow__body">
            <div class="owl-carousel"><a class="block-slideshow__slide" href="">
                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                  style="background-image: url('images/slides/slide-1-full.jpg')"></div>
                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                  style="background-image: url('images/slides/slide-1-mobile.jpg')"></div>
                <div class="block-slideshow__slide-content">
                  <div class="block-slideshow__slide-title">Заголовок <br> большой</div>
                  <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.<br>Etiam pharetra laoreet dui quis molestie.</div>
                  <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Подробнее</span>
                  </div>
                </div>
              </a><a class="block-slideshow__slide" href="">
                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                  style="background-image: url('images/slides/slide-2-full.jpg')"></div>
                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                  style="background-image: url('images/slides/slide-2-mobile.jpg')"></div>
                <div class="block-slideshow__slide-content">
                  <div class="block-slideshow__slide-title">Заголовок <br> большой</div>
                  <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.<br>Etiam pharetra laoreet dui quis molestie.</div>
                  <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Подробнее</span>
                  </div>
                </div>
              </a><a class="block-slideshow__slide" href="">
                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                  style="background-image: url('images/slides/slide-3-full.jpg')"></div>
                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                  style="background-image: url('images/slides/slide-3-mobile.jpg')"></div>
                <div class="block-slideshow__slide-content">
                  <div class="block-slideshow__slide-title">Заголовок <br> большой</div>
                  <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.<br>Etiam pharetra laoreet dui quis molestie.</div>
                  <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Подробнее</span>
                  </div>
                </div>
              </a></div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .block-slideshow / end -->
  <!-- .block-features -->
  <div class="block block-features block-features--layout--classic">
    <div class="container">
      <div class="block-features__list">
        <div class="block-features__item">
          <div class="block-features__icon">
            <svg width="48px" height="48px">
              <use xlink:href="images/sprite.svg#fi-free-delivery-48"></use>
            </svg>
          </div>
          <div class="block-features__content">
            <div class="block-features__title">Free Shipping</div>
            <div class="block-features__subtitle">For orders from $50</div>
          </div>
        </div>
        <div class="block-features__divider"></div>
        <div class="block-features__item">
          <div class="block-features__icon"><svg width="48px" height="48px">
              <use xlink:href="images/sprite.svg#fi-24-hours-48"></use>
            </svg></div>
          <div class="block-features__content">
            <div class="block-features__title">Support 24/7</div>
            <div class="block-features__subtitle">Call us anytime</div>
          </div>
        </div>
        <div class="block-features__divider"></div>
        <div class="block-features__item">
          <div class="block-features__icon"><svg width="48px" height="48px">
              <use xlink:href="images/sprite.svg#fi-payment-security-48"></use>
            </svg></div>
          <div class="block-features__content">
            <div class="block-features__title">100% Safety</div>
            <div class="block-features__subtitle">Only secure payments</div>
          </div>
        </div>
        <div class="block-features__divider"></div>
        <div class="block-features__item">
          <div class="block-features__icon"><svg width="48px" height="48px">
              <use xlink:href="images/sprite.svg#fi-tag-48"></use>
            </svg></div>
          <div class="block-features__content">
            <div class="block-features__title">Hot Offers</div>
            <div class="block-features__subtitle">Discounts up to 90%</div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .block-features / end -->
  <!-- .block-products-carousel -->
  <div class="block block-products-carousel" data-layout="grid-4" data-mobile-grid-columns="2">
    <div class="container">
      <div class="block-header">
        <h3 class="block-header__title">Рекомендуемое</h3>
        <div class="block-header__divider"></div>
        <div class="block-header__arrows-list">
          <button class="block-header__arrow block-header__arrow--left" type="button">
          <svg version="1.1" id="Capa_1" width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 443.52 443.52" style="enable-background:new 0 0 443.52 443.52;" xml:space="preserve">
            <g>
              <g>
                <path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8
                  c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712
                  L143.492,221.863z"/>
              </g>
          </svg>
          </button> 
          <button class="block-header__arrow block-header__arrow--right" type="button">
          <svg version="1.1" id="Capa_1" width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve">
            <g>
              <g>
                <path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105
                  L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795
                  l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/>
              </g>
          </svg>
          </button>
        </div>
      </div>
      <div class="block-products-carousel__slider">
        <div class="block-products-carousel__preloader"></div>
        <div class="owl-carousel">
          
          @foreach($recommends as $product)
          <div class="block-products-carousel__column">
            <div class="block-products-carousel__cell">
              <div class="product-card product-card--hidden-actions">


                <div class="product-card__image product-image">
                  <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="product-image__body">
                    @if( Storage::url($product->image) == Storage::url($product->null) )
                    <img class="product-image__img" src="/images/photo.png" alt="">
                    @else
                    <img class="product-image__img" src="{{ Storage::url($product->image) }}" alt="">
                    @endif
                  </a>
                </div>
                <div class="product-card__info">
                  <div class="product-card__name">
                    <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                      {{ $product->name }}
                    </a>
                  </div>
                  <div class="product-card__rating justify-content-center">
                    <div class="product-card__rating-legend">{{ $product->category->name }}</div>
                  </div>
                </div>
                <div class="product-card__actions">
                  <div class="product-card__availability">Availability: <span class="text-success">In Stock</span>
                  </div>
                  <div class="product-card__prices">{{ $product->price }}₽</div>
                  <div class="product-card__buttons">
                  <form action="{{ route('basket-add', $product) }}" method="POST">
                    <button type="submit" class="btn btn-primary product-card__addtocart" type="button">Добавить</button>
                    <button type="submit" class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Добавить</button>
                    @csrf
                  </form>                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div><!-- .block-products-carousel / end -->

  <!-- <div class="block block-banner">
    <div class="container"><a href="" class="block-banner__body">
        <div class="block-banner__image block-banner__image--desktop" style="background-image: url('images/banners/banner-1.jpg')"></div>
        <div class="block-banner__image block-banner__image--mobile" style="background-image: url('images/banners/banner-1-mobile.jpg')"></div>
        <div class="block-banner__title">Hundreds<br class="block-banner__mobile-br">Hand Tools</div>
        <div class="block-banner__text">Hammers, Chisels, Universal Pliers, Nippers, Jigsaws, Saws</div>
        <div class="block-banner__button"><span class="btn btn-sm btn-primary">Подробнее</span></div>
      </a></div>
  </div> -->
  <!-- .block-products -->
  <div class="block block-products block-products--layout--large-first" data-mobile-grid-columns="2">
    <div class="container">
      <div class="block-header">
        <h3 class="block-header__title">Хиты продаж</h3>
        <div class="block-header__divider"></div>
      </div>
      <div class="block-products__body">
        <div class="block-products__featured">
          <div class="block-products__featured-item">
            <div class="product-card product-card--hidden-actions">
              <div class="product-card__badges-list">
                <div class="product-card__badge product-card__badge--hot">Хит</div>
              </div>
              <div class="product-card__image product-image">
                <a href="{{ route('product', [$hit->category->code, $hit->code]) }}" class="product-image__body">
                  @if( Storage::url($product->image) == Storage::url($product->null) )
                  <img class="product-image__img" src="/images/photo.png" alt="">
                  @else
                  <img class="product-image__img" src="{{ Storage::url($product->image) }}" alt="">
                  @endif
                </a>
              </div>
              <div class="product-card__info">
                <div class="product-card__name">
                  <a href="{{ route('product', [$hit->category->code, $hit->code]) }}">{{ $hit->name }}</a>
                  </div>
                <div class="product-card__rating d-flex justify-content-center">
                  <div class="product-card__rating-legend">{{ $product->category->name }}</div>
                </div>
              </div>
              <div class="product-card__actions">
                <div class="product-card__availability">Availability: <span class="text-success">In Stock</span>
                </div>
                <div class="product-card__prices d-flex justify-content-center">{{ $hit->price }}₽</div>
                <div class="product-card__buttons">
                  <form action="{{ route('basket-add', $product) }}" method="POST">
                    <button type="submit" class="btn btn-primary product-card__addtocart" type="button">Добавить</button>
                    <button type="submit" class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Добавить</button>
                    @csrf
                  </form> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="block-products__list">
          @foreach($hits as $product)
            <div class="block-products__list-item">
              <div class="product-card product-card--hidden-actions">
                <div class="product-card__badges-list">
                  <div class="product-card__badge product-card__badge--hot">Хит</div>
                </div>
                <div class="product-card__image product-image">
                  <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="product-image__body">
                    @if( Storage::url($product->image) == Storage::url($product->null) )
                    <img class="product-image__img" src="/images/photo.png" alt="">
                    @else
                    <img class="product-image__img" src="{{ Storage::url($product->image) }}" alt="">
                    @endif
                  </a>
                </div>
                <div class="product-card__info">
                  <div class="product-card__name">
                    <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                      {{ $product->name }}
                    </a>
                  </div>
                  <div class="product-card__rating">
                    <div class="product-card__rating-legend">{{ $product->category->name }}</div>
                  </div>
                </div>
                <div class="product-card__actions">
                  <div class="product-card__availability">Availability: <span class="text-success">In Stock</span>
                  </div>
                  <div class="product-card__prices">{{ $product->price }}₽</div>
                  <div class="product-card__buttons">
                    <form action="{{ route('basket-add', $product) }}" method="POST">
                      <button type="submit" class="btn btn-primary product-card__addtocart" type="button">Добавить</button>
                      <button type="submit" class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Добавить</button>
                      @csrf
                    </form> 
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div><!-- .block-products / end -->
  <!-- .block-categories -->
  <div class="block block--highlighted block-categories block-categories--layout--classic">
    <div class="container">
      <div class="block-header">
        <h3 class="block-header__title">Популярные категории</h3>
        <div class="block-header__divider"></div>
      </div>
      <div class="block-categories__list">

        @foreach($categories as $category)
          <div class="block-categories__item category-card category-card--layout--classic">
            <div class="category-card__body">
              <div class="category-card__image">
              <a href="{{ route('category', $category->code) }}" class="product-image__body">
                  @if( Storage::url($category->image) == Storage::url($category->null) )
                  <img class="product-image__img" src="/images/photo.png" alt="">
                  @else
                  <img class="product-image__img" src="{{ Storage::url($product->image) }}" alt="">
                  @endif
                </a>
              </div>
              <div class="category-card__content">
                <div class="category-card__name">
                  <a href="{{ route('category', $category->code) }}">{{$category->name}}</a>
                </div>
                <ul class="category-card__links">
                  @foreach($category->products->slice(0, 3) as $product)
                    <li><a href="{{ route('product', [$product->category->code, $product->code]) }}">{{ $product->name }}</a></li>
                  @endforeach
                </ul>
                <div class="category-card__all"><a href="{{ route('category', $category->code) }}">Просмотреть</a></div>
                <div class="category-card__products">({{ $category->products->count() }}) товаров</div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div><!-- .block-categories / end -->
  <!-- .block-products-carousel -->
  <div class="block block-products-carousel" data-layout="horizontal" data-mobile-grid-columns="2">
    <div class="container">
      <div class="block-header">
        <h3 class="block-header__title">Новинки</h3>
        <div class="block-header__divider"></div>
        <div class="block-header__arrows-list">
          <button class="block-header__arrow block-header__arrow--left" type="button">
            <svg version="1.1" id="Capa_1" width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 443.52 443.52" style="enable-background:new 0 0 443.52 443.52;" xml:space="preserve">
              <g>
                <g>
                  <path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8
                    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712
                    L143.492,221.863z"/>
                </g>
            </svg>
            </button> 
            <button class="block-header__arrow block-header__arrow--right" type="button">
            <svg version="1.1" id="Capa_1" width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve">
              <g>
                <g>
                  <path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105
                    L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795
                    l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/>
                </g>
            </svg>
          </button>
        </div>
      </div>
      <div class="block-products-carousel__slider">
        <div class="block-products-carousel__preloader"></div>
        <div class="owl-carousel">          
          @foreach($news as $product)
            <div class="block-products-carousel__cell">
              <div class="product-card product-card--hidden-actions">
                <div class="product-card__badges-list">
                  <div class="product-card__badge product-card__badge--new">Новинка</div>
                </div>
                <div class="product-card__image product-image">
                  <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="product-image__body">
                    @if( Storage::url($product->image) == Storage::url($product->null) )
                    <img class="product-image__img" src="/images/photo.png" alt="">
                    @else
                    <img class="product-image__img" src="{{ Storage::url($product->image) }}" alt="">
                    @endif
                  </a>
                </div>
                <div class="product-card__info">
                  <div class="product-card__name">
                    <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                      {{ $product->name }}
                    </a>
                  </div>
                  <div class="product-card__rating">
                    <div class="product-card__rating-legend">{{ $product->category->name }}</div>
                  </div>
                </div>
                <div class="product-card__actions">
                  <div class="product-card__prices">{{ $product->price }}₽</div>
                  <div class="product-card__buttons">
                    <form action="{{ route('basket-add', $product) }}" method="POST">
                      <button type="submit" class="btn btn-primary product-card__addtocart" type="button">Добавить</button>
                      <button type="submit" class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Добавить</button>
                      @csrf
                    </form> 
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </div><!-- .block-products-carousel / end -->
  <!-- .block-posts -->
  <div class="block block-posts" data-layout="list" data-mobile-columns="1">
    <div class="container">
      <div class="block-header">
        <h3 class="block-header__title"><a href="{{ route('services') }}">Наши услуги</a></h3>
        <div class="block-header__divider"></div>
        <div class="block-header__arrows-list">
          <button class="block-header__arrow block-header__arrow--left" type="button">
            <svg version="1.1" id="Capa_1" width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 443.52 443.52" style="enable-background:new 0 0 443.52 443.52;" xml:space="preserve">
              <g>
                <g>
                  <path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8
                    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712
                    L143.492,221.863z"/>
                </g>
            </svg>
            </button> 
            <button class="block-header__arrow block-header__arrow--right" type="button">
            <svg version="1.1" id="Capa_1" width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve">
              <g>
                <g>
                  <path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105
                    L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795
                    l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/>
                </g>
            </svg>
          </button>
        </div>
      </div>
      <div class="block-posts__slider">
        <div class="owl-carousel">

          @foreach($services as $service)
            <div class="post-card">
              <div class="post-card__image">
                <a href=""><img src="/images/posts/post-1.jpg" alt=""></a>
              </div>
              <div class="post-card__info">
                <div class="post-card__name">
                  <a href="">{{ $service->name }}</a>
                </div>
                <div class="post-card__date">{{ $service->created_at }}</div>
                <div class="post-card__content">
                  {{ $service->description }}
                </div>
                <div class="post-card__read-more">
                  <a href="" class="btn btn-secondary btn-sm">Подробнее</a>
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>
    </div>
  </div><!-- .block-posts / end -->
  <!-- .block-brands -->
  <div class="block block-brands">
    <div class="container">
      <div class="block-brands__slider">
        <div class="owl-carousel">
          <div class="block-brands__item"><a href=""><img src="/images/logos/logo-1.png" alt=""></a></div>
          <div class="block-brands__item"><a href=""><img src="/images/logos/logo-2.png" alt=""></a></div>
          <div class="block-brands__item"><a href=""><img src="/images/logos/logo-3.png" alt=""></a></div>
          <div class="block-brands__item"><a href=""><img src="/images/logos/logo-4.png" alt=""></a></div>
          <div class="block-brands__item"><a href=""><img src="/images/logos/logo-5.png" alt=""></a></div>
          <div class="block-brands__item"><a href=""><img src="/images/logos/logo-6.png" alt=""></a></div>
          <div class="block-brands__item"><a href=""><img src="/images/logos/logo-7.png" alt=""></a></div>
        </div>
      </div>
    </div>
  </div><!-- .block-brands / end -->

</div>
@endsection

