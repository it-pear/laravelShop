@extends('/layout/master')
@section('content')
<div class="site__body">
  <div class="page-header">
    <div class="page-header__container container">
      <div class="page-header__breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg"></use>
              </svg></li>
            <li class="breadcrumb-item"><a href="">Breadcrumb</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg"></use>
              </svg></li>
            <li class="breadcrumb-item active" aria-current="page">Screwdrivers</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__title">
        <h1>Каталог товаров</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="block">
          <div class="products-view">
            
            <div class="products-view__list products-list" data-layout="grid-5-full" data-with-features="false" data-mobile-grid-columns="2">
              <div class="products-list__body">
                @foreach($categories as $category)
                <div class="products-list__item">
                  <div class="product-card product-card--hidden-actions">
                    <!-- <div class="product-card__badges-list">
                            <div class="product-card__badge product-card__badge--new">New</div>
                          </div> -->
                    <div class="product-card__image product-image">
                      <a href="{{ route('category', $category->code) }}" class="product-image__body">
                        @if( Storage::url($category->image) == Storage::url($category->null) )
                        <img class="product-image__img" src="/images/photo.png" alt="">
                        @else
                        <img class="product-image__img" src="{{ Storage::url($product->image) }}" alt="">
                        @endif
                      </a>
                    </div>
                    <div class="product-card__info">
                      <div class="product-card__name"><a href="{{ route('category', $category->code) }}">{{$category->name}}</a></div>
                      <div class="product-card__rating">
                        <div class="product-card__rating-legend">({{ $category->products->count() }}) товаров</div>
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
                      <div class="product-card__availability">
                        Availability: <span class="text-success">In Stock</span>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="products-view__pagination">
              <ul class="pagination justify-content-center">
                <div class="pagination">
                  {{ $categories->links() }}
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection