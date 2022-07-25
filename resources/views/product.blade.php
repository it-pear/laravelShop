@extends('/layout/master')
@section('title' , $product->name)
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
            <li class="breadcrumb-item">
              <a href="{{ route('category', $product->category->code) }}">{{ $product->category->name }}</a>
              <img src="/images/sprite.svg" class="breadcrumb__arrowe-svg" alt="">
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  
  <div class="block">
    <div class="container">
      <div class="product product--layout--standard" data-layout="standard">
        <div class="product__content">
          <!-- .product__gallery -->
          <div class="product__gallery">
            <div class="product-gallery">
              <div class="product-gallery__featured"><button class="product-gallery__zoom"><svg width="24px" height="24px">
                    <use xlink:href="images/sprite.svg#zoom-in-24"></use>
                  </svg></button>
                <div class="owl-carousel" id="product-image">
                  <div class="product-image product-image--location--gallery">
                    @if( Storage::url($product->image) == Storage::url($product->null) )
                      <a href="/images/photo.png" data-width="700" data-height="700" class="product-image__body" target="_blank">
                        <img class="product-image__img" src="/images/photo.png" alt="">
                      </a>
                    @else
                      <a href="{{ Storage::url($product->image) }}" data-width="700" data-height="700" class="product-image__body" target="_blank">
                        <img class="product-image__img" src="{{ Storage::url($product->image) }}" alt="">
                      </a>
                    @endif
                  </div>
                  @foreach($images as $image)
                    <div class="product-image product-image--location--gallery">
                      <a href="{{ Storage::url($image->filename) }}" data-width="700" data-height="700" class="product-image__body" target="_blank">
                        <img class="product-image__img" src="{{ Storage::url($image->filename) }}" alt="">
                      </a>
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="product-gallery__carousel">
                <div class="owl-carousel" id="product-carousel">
                  @if( Storage::url($product->image) == Storage::url($product->null) )
                    <a href="/images/photo.png" class="product-image product-gallery__carousel-item">
                      <div class="product-image__body">
                        <img class="product-image__img product-gallery__carousel-image" src="/images/photo.png" alt="">
                      </div>
                    </a>
                  @else
                    <a href="{{ Storage::url($product->image) }}" class="product-image product-gallery__carousel-item">
                      <div class="product-image__body">
                        <img class="product-image__img product-gallery__carousel-image" src="{{ Storage::url($product->image) }}" alt="">
                      </div>
                    </a>
                  @endif
                  @foreach($images as $image)
                    <a href="{{ Storage::url($image->filename) }}" class="product-image product-gallery__carousel-item">
                      <div class="product-image__body">
                        <img class="product-image__img product-gallery__carousel-image" src="{{ Storage::url($image->filename) }}" alt="">
                      </div>
                    </a>
                  @endforeach
                </div>
              </div>
            </div>
          </div><!-- .product__gallery / end -->
          <!-- .product__info -->
          <div class="product__info">
            <div class="product__wishlist-compare"><button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Wishlist"><svg width="16px" height="16px">
                  <use xlink:href="images/sprite.svg#wishlist-16"></use>
                </svg></button> <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Compare"><svg width="16px" height="16px">
                  <use xlink:href="images/sprite.svg#compare-16"></use>
                </svg></button></div>
            <h1 class="product__name">{{$product->name}}</h1>
            <div class="product__rating">
              <div class="product__rating-legend"><span>{{ $product->category->name }}<span></div>
            </div>
            <div class="product__description">
              {{ $product->description }}
            </div>
            <ul class="product__meta">
              <li class="product__meta-availability">Дополнительно:
                <span class="text-success">

                </span>
              </li>
            </ul>
          </div><!-- .product__info / end -->
          <!-- .product__sidebar -->
          <div class="product__sidebar">
            <div class="product__availability">Availability: <span class="text-success">In Stock</span></div>
            <div class="product__prices">{{ $product->price }}₽</div><!-- .product__options -->
            <div class="product__options">
              <!-- <div class="form-group product__option"><label class="product__option-label">Color</label>
                <div class="input-radio-color">
                  <div class="input-radio-color__list"><label class="input-radio-color__item input-radio-color__item--white" style="color: #fff;" data-toggle="tooltip" title="White"><input type="radio" name="color"> <span></span></label>
                    <label class="input-radio-color__item" style="color: #ffd333;" data-toggle="tooltip" title="Yellow"><input type="radio" name="color"> <span></span></label> <label class="input-radio-color__item" style="color: #ff4040;" data-toggle="tooltip" title="Red"><input type="radio" name="color"> <span></span></label> <label class="input-radio-color__item input-radio-color__item--disabled" style="color: #4080ff;" data-toggle="tooltip" title="Blue"><input type="radio" name="color" disabled="disabled">
                      <span></span></label>
                  </div>
                </div>
              </div> -->
              <!-- <div class="form-group product__option"><label class="product__option-label">Material</label>
                <div class="input-radio-label">
                  <div class="input-radio-label__list"><label><input type="radio" name="material">
                      <span>Metal</span></label> <label><input type="radio" name="material">
                      <span>Wood</span></label> <label><input type="radio" name="material" disabled="disabled">
                      <span>Plastic</span></label></div>
                </div>
              </div> -->
              <div class="form-group product__option"><label class="product__option-label" for="product-quantity">Количество</label>
                <div class="product__actions">
                  <form action="{{ route('basket-add', $product->id) }}" method="POST" style="display: flex;">
                    <div class="product__actions-item">
                      <div class="input-number product__quantity">
                        <input id="product-quantity" class="input-number__input form-control form-control-lg" name="count" type="number" min="1" value="1">
                        <div class="input-number__add"></div>
                        <div class="input-number__sub"></div>
                      </div>
                    </div>
                    <div class="product__actions-item product__actions-item--addtocart">
                      <button type="submit" class="btn btn-primary btn-lg">Добавить</button>
                      @csrf
                    </div>
                  </form>
                </div>
              </div>
            </div><!-- .product__options / end -->
          </div><!-- .product__end -->
          <div class="product__footer">
            <div class="product__tags tags">
              <!-- <div class="tags__list"><a href="">Mounts</a> <a href="">Electrodes</a> <a href="">Chainsaws</a></div> -->
            </div>
            <!-- <div class="product__share-links share-links">
              <ul class="share-links__list">
                <li class="share-links__item share-links__item--type--like"><a href="">Like</a></li>
                <li class="share-links__item share-links__item--type--tweet"><a href="">Tweet</a></li>
                <li class="share-links__item share-links__item--type--pin"><a href="">Pin It</a></li>
                <li class="share-links__item share-links__item--type--counter"><a href="">4K</a></li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
      <div class="product-tabs product-tabs--sticky">
        <div class="product-tabs__list">
          <div class="product-tabs__list-body">
            <div class="product-tabs__list-container container">
              <a href="#tab-description" class="product-tabs__item product-tabs__item--active">Описание</a>
              <!-- <a href="#tab-specification" class="product-tabs__item">Характеристики</a> -->
              <!-- <a href="#tab-reviews" class="product-tabs__item">Reviews</a> -->
            </div>
          </div>
        </div>
        <div class="product-tabs__content">
          <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
            <div class="typography">
              <h3>Полное описание товара</h3>
              {{ $product->description }}
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div><!-- .block-products-carousel -->
  <div class="block block-products-carousel" data-layout="grid-5" data-mobile-grid-columns="2">
    <div class="container">
      <div class="block-header">
        <h3 class="block-header__title">Похожие товары</h3>
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
          @foreach($products as $product)
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
                    <button class="btn btn-secondary product-card__baytocart" type="button">Купить в клик</button>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
      </div><br>
    </div>
  </div><!-- .block-products-carousel / end -->
</div>
@endsection