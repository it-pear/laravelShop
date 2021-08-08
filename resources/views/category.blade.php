

@extends('/layout/master')

@section('title', 'Категория ' . $category->name)
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
				<h1>
					{{$category->name}} ({{ $category->products->count() }})
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
                <svg
                  width="20px" height="20px">
                  <use xlink:href="images/sprite.svg#cross-20"></use>
                </svg>
              </button>
            </div>
            <div class="block-sidebar__item">
              <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse
                data-collapse-opened-class="filter--opened">
                <h4 class="widget-filters__title widget__title">Фильтр товаров</h4>
                <div class="widget-filters__list">
                  <div class="widget-filters__item">
                    <div class="filter filter--opened" data-collapse-item>
                      <button type="button" class="filter__title"
                        data-collapse-trigger>Категории 
                        <svg class="filter__arrow" width="12px" height="7px">
                          <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                        </svg>
                      </button>
                      <div class="filter__body" data-collapse-content>
                        <div class="filter__container">
                          <div class="filter-categories">
                            <ul class="filter-categories__list">
                              <li class="filter-categories__item filter-categories__item--parent">
                                <a href="">Категория 1</a>
                                <div class="filter-categories__counter">20</div>
                              </li>

                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="widget-filters__item">
                    <div class="filter filter--opened" data-collapse-item><button type="button" class="filter__title"
                        data-collapse-trigger>Price <svg class="filter__arrow" width="12px" height="7px">
                          <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                        </svg></button>
                      <div class="filter__body" data-collapse-content>
                        <div class="filter__container">
                          <div class="filter-price" data-min="0" data-max="200000" data-from="0" data-to="200000">
                            <div class="filter-price__slider"></div>
                            <div class="filter-price__title">Цена: <span class="filter-price__min-value"></span>₽ –
                              <span class="filter-price__max-value"></span>₽</div>
                          </div>
                        </div>
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
                  <button class="btn btn-primary btn-sm">Показать</button>
                  <button class="btn btn-secondary btn-sm">Сбросить</button>
                </div>
              </div>
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
                <div class="view-options__filters-button">
                  <button type="button" class="filters-button">
                    <svg
                      class="filters-button__icon" width="16px" height="16px">
                      <use xlink:href="images/sprite.svg#filters-16"></use>
                    </svg> <span class="filters-button__title">Фильтр</span> <span
                      class="filters-button__counter">3</span>
                  </button>
                </div>
                
              </div>
            </div>
            <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false"
              data-mobile-grid-columns="2">
              <div class="products-list__body">
								@foreach($category->products as $product)
								@include('card', compact('product'))
								@endforeach
              </div>
            </div>
            <div class="products-view__pagination">
              <ul class="pagination justify-content-center">
                <div class="pagination">
                  
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