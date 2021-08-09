<div class="products-list__item">
  <div class="product-card product-card--hidden-actions">
    <!-- <div class="product-card__badges-list">
      <div class="product-card__badge product-card__badge--new">New</div>
    </div> -->
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
        {{$product->name}}
        </a>
      </div>
      <div class="product-card__rating">
        
        <div class="product-card__rating-legend">{{ $product->category->name }}</div>
      </div>
      <ul class="product-card__features-list">
        <li>Speed: 750 RPM</li>
        <li>Power Source: Cordless-Electric</li>
        <li>Battery Cell Type: Lithium</li>
        <li>Voltage: 20 Volts</li>
        <li>Battery Capacity: 2 Ah</li>
      </ul>
    </div>
    <div class="product-card__actions">
      <div class="product-card__availability">Availability: <span class="text-success">In
          Stock</span></div>
      <div class="product-card__prices">{{$product->price}}₽</div>
      <div class="product-card__buttons">
        <form action="{{ route('basket-add', $product) }}" method="POST">
          <button type="submit" class="btn btn-primary product-card__addtocart" type="button">Добавить</button>
          <button type="submit" class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Добавить</button>
          @csrf
        </form>
        

        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
          <svg width="16px" height="16px">
            <use xlink:href="/images/sprite.svg#wishlist-16"></use>
          </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
            <use xlink:href="/images/sprite.svg#compare-16"></use>
          </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
        </button>
      </div>
    </div>
  </div>
</div>