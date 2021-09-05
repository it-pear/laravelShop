@extends('/layout/master')

@section('title', 'Каталог')
@section('content')
<div class="site__body catalog_page">
  <div class="page-header">
    <div class="page-header__container container">
      <div class="page-header__breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg"></use>
              </svg></li>
            <li class="breadcrumb-item active" aria-current="page">Каталог</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__title">
        <h1>
          Каталог
        </h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="shop-layout shop-layout--sidebar--start">
      <div class="shop-layout__sidebar">
        <div class="block block-sidebar block-sidebar--offcanvas--mobile">
          <div class="block-sidebar__backdrop"></div>
          <div class="block-sidebar__body">
            <div class="block-sidebar__header">
              <div class="block-sidebar__title">Фильтр товаров</div>
              <button class="block-sidebar__close" type="button">
                <svg version="1.1" id="Capa_1" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717
                          L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859
                          c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287
                          l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285
                          L284.286,256.002z"></path>
                    </g>
                  </g>
                </svg>
              </button>
            </div>
            <div class="block-sidebar__item">
              <form method="GET" action="{{ route('catalog') }}">              
                <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                  <h4 class="widget-filters__title widget__title">Фильтр товаров</h4>
                  <div class="widget-filters__list">

                    <div class="widget-filters__item">
                      <div class="filter filter--opened" data-collapse-item="">
                        <button type="button" class="filter__title" data-collapse-trigger="">Писк по названию
                          <svg version="1.1" id="Layer_1" class="filter__arrow" width="16px" height="9px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                              c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                              s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/>
                            <g>
                            </g>
                          </svg>
                        </button>
                        <div class="filter__body" data-collapse-content="">
                          <div class="filter__container">
                            <div class="filter-list">
                              <div class="filter-list__list">
                              <input type="text" class="form-control" placeholder="Замок" name="search" value="{{ request()->search }}">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="widget-filters__item">
                      <div class="filter filter--opened" data-collapse-item="">
                        <button type="button" class="filter__title" data-collapse-trigger="">Категория
                          <svg version="1.1" id="Layer_1" class="filter__arrow" width="16px" height="9px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                              c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                              s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/>
                            <g>
                            </g>
                          </svg>
                        </button>
                        <div class="filter__body" data-collapse-content="">
                          <div class="filter__container">
                            <div class="filter-list">
                              <div class="filter-list__list">
                                @foreach ($categories as $category)
                                  <label class="filter-list__item">
                                    <span class="filter-list__input input-radio">
                                      <span class="input-radio__body">
                                        <input class="input-radio__input" name="category" type="radio"
                                          value="{{ $category->id }}"
                                          @if( $category->id == request()->category)
                                            checked="checked"
                                          @endif
                                        >
                                        <span class="input-radio__circle"></span>
                                      </span>
                                    </span>
                                    <span class="filter-list__title">{{ $category->name }}</span>
                                    <span class="filter-list__counter">{{ $category->products->count() }}</span>
                                  </label>
                                @endforeach
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="widget-filters__item">
                      <div class="filter filter--opened" data-collapse-item>
                        <button type="button" class="filter__title" data-collapse-trigger>Цена 
                          <svg version="1.1" id="Layer_1" class="filter__arrow" width="16px" height="9px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                              c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                              s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/>
                            <g>
                            </g>
                          </svg>
                        </button>
                        <div class="filter__body" data-collapse-content>
                          <div class="filter__container">
                            <div class="filter-price" data-min="0" data-max="30000"
                              @if( request()->toprice == '')
                                data-from="0"
                              @else
                                data-from="{{ request()->toprice }}"
                              @endif
                              @if( request()->doprice == '')
                                data-to="200000"
                              @else
                                data-to="{{ request()->doprice }}"
                              @endif
                            >
                              <div class="filter-price__slider"></div>
                              <div class="filter-price__title"><span class="filter-price__min-value"></span>₽ –
                                <span class="filter-price__max-value"></span>₽
                              </div>
                            </div>
                          </div>
                          <input type="hidden" class="toprice" name="toprice" value="0">
                          <input type="hidden" class="doprice" name="doprice" value="30000">
                        </div>
                      </div>
                    </div>
                    
                    <!-- <div class="widget-filters__item">
                      <div class="filter filter--opened" data-collapse-item>
                        <button type="button" class="filter__title"
                          data-collapse-trigger>Дополнительно
                          <svg class="filter__arrow" width="12px" height="7px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                          </svg>
                        </button>
                        <div class="filter__body" data-collapse-content>
                          <div class="filter__container">
                            <div class="filter-list">
                              <div class="filter-list__list"><label class="filter-list__item"><span
                                    class="filter-list__input input-check"><span class="input-check__body"><input
                                        class="input-check__input" type="checkbox"> <span class="input-check__box"></span>
                                      <svg class="input-check__icon" width="9px" height="7px">
                                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                                      </svg> </span></span><span class="filter-list__title">Wakita </span><span
                                    class="filter-list__counter">7</span></label> <label class="filter-list__item"><span
                                    class="filter-list__input input-check"><span class="input-check__body"><input
                                        class="input-check__input" type="checkbox" checked="checked"> <span
                                        class="input-check__box"></span> <svg class="input-check__icon" width="9px"
                                        height="7px">
                                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                                      </svg> </span></span><span class="filter-list__title">Zosch </span><span
                                    class="filter-list__counter">42</span></label> <label
                                  class="filter-list__item filter-list__item--disabled"><span
                                    class="filter-list__input input-check"><span class="input-check__body"><input
                                        class="input-check__input" type="checkbox" checked="checked" disabled="disabled">
                                      <span class="input-check__box"></span> <svg class="input-check__icon" width="9px"
                                        height="7px">
                                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                                      </svg> </span></span><span class="filter-list__title">WeVALT</span></label>
                                <label class="filter-list__item filter-list__item--disabled"><span
                                    class="filter-list__input input-check"><span class="input-check__body"><input
                                        class="input-check__input" type="checkbox" disabled="disabled"> <span
                                        class="input-check__box"></span> <svg class="input-check__icon" width="9px"
                                        height="7px">
                                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                                      </svg> </span></span><span class="filter-list__title">Hammer</span></label>
                                <label class="filter-list__item"><span class="filter-list__input input-check"><span
                                      class="input-check__body"><input class="input-check__input" type="checkbox">
                                      <span class="input-check__box"></span> <svg class="input-check__icon" width="9px"
                                        height="7px">
                                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                                      </svg> </span></span><span class="filter-list__title">Mitasia </span><span
                                    class="filter-list__counter">1</span></label> <label class="filter-list__item"><span
                                    class="filter-list__input input-check"><span class="input-check__body"><input
                                        class="input-check__input" type="checkbox">
                                      <span class="input-check__box"></span> <svg class="input-check__icon" width="9px"
                                        height="7px">
                                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                                      </svg> </span></span><span class="filter-list__title">Metaggo </span><span
                                    class="filter-list__counter">25</span></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->

                  </div>
                  <div class="widget-filters__actions d-flex">
                    <button type="submit" class="btn btn-primary btn-sm submit">Показать</button>
                    <a href="{{ route('catalog') }}" class="btn btn-secondary btn-sm">Сбросить</a>
                  </div>
                </div>
              </form>
            </div>
            <!-- <div class="block-sidebar__item d-none d-lg-block">
              <div class="widget-products widget">
                <h4 class="widget__title">Latest Products</h4>
                <div class="widget-products__list">
                  <div class="widget-products__item">
                    <div class="widget-products__image">
                      <div class="product-image"><a href="product.html" class="product-image__body"><img
                            class="product-image__img" src="images/products/product-1.jpg" alt=""></a></div>
                    </div>
                    <div class="widget-products__info">
                      <div class="widget-products__name"><a href="product.html">Electric Planer Brandix KL370090G
                          300 Watts</a></div>
                      <div class="widget-products__prices">$749.00</div>
                    </div>
                  </div>
                  <div class="widget-products__item">
                    <div class="widget-products__image">
                      <div class="product-image"><a href="product.html" class="product-image__body"><img
                            class="product-image__img" src="images/products/product-2.jpg" alt=""></a></div>
                    </div>
                    <div class="widget-products__info">
                      <div class="widget-products__name"><a href="product.html">Undefined Tool IRadix DPS3000SY 2700
                          Watts</a></div>
                      <div class="widget-products__prices">$1,019.00</div>
                    </div>
                  </div>
                  <div class="widget-products__item">
                    <div class="widget-products__image">
                      <div class="product-image"><a href="product.html" class="product-image__body"><img
                            class="product-image__img" src="images/products/product-3.jpg" alt=""></a></div>
                    </div>
                    <div class="widget-products__info">
                      <div class="widget-products__name"><a href="product.html">Drill Screwdriver Brandix ALX7054
                          200 Watts</a></div>
                      <div class="widget-products__prices">$850.00</div>
                    </div>
                  </div>
                  <div class="widget-products__item">
                    <div class="widget-products__image">
                      <div class="product-image"><a href="product.html" class="product-image__body"><img
                            class="product-image__img" src="images/products/product-4.jpg" alt=""></a></div>
                    </div>
                    <div class="widget-products__info">
                      <div class="widget-products__name"><a href="product.html">Drill Series 3 Brandix KSR4590PQS
                          1500 Watts</a></div>
                      <div class="widget-products__prices"><span class="widget-products__new-price">$949.00</span>
                        <span class="widget-products__old-price">$1189.00</span>
                      </div>
                    </div>
                  </div>
                  <div class="widget-products__item">
                    <div class="widget-products__image">
                      <div class="product-image"><a href="product.html" class="product-image__body"><img
                            class="product-image__img" src="images/products/product-5.jpg" alt=""></a></div>
                    </div>
                    <div class="widget-products__info">
                      <div class="widget-products__name"><a href="product.html">Brandix Router Power Tool
                          2017ERXPK</a></div>
                      <div class="widget-products__prices">$1,700.00</div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <div class="shop-layout__content">
        <div class="block">
          <div class="products-view">
            <div class="products-view__options">
              <div class="view-options view-options--offcanvas--mobile">
                <div class="view-options__filters-button mt-2">
                  <button type="button" class="filters-button">
                    <svg height="15px" viewBox="0 -53 384 384" width="15px" xmlns="http://www.w3.org/2000/svg">
                      <path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"></path>
                      <path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"></path>
                      <path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"></path>
                    </svg>
                    <span class="filters-button__title ml-1">Фильтр</span>
                  </button>
                </div>

              </div>
            </div>
            <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false" data-mobile-grid-columns="2">
              <div class="products-list__body">
                @foreach($products as $product)
                @include('card', compact('product'))
                @endforeach
              </div>
            </div>
            <div class="products-view__pagination">
              <ul class="pagination justify-content-center">
                <div class="pagination">
                  {{ $products->links() }}
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

  $(document).ready(function(){

    $('.submit').click(function(){
      let toprice = $('.noUi-handle').attr('aria-valuenow');
      let doprice = $('.noUi-handle').attr('aria-valuemax');
      $('.toprice').val(toprice);
      $('.doprice').val(doprice);
    });
  })

</script>
@endsection