

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
    <div class="row">
      <div class="col-12">
        <div class="block">
          <div class="products-view">
            
            <div class="products-view__list products-list" data-layout="grid-5-full" data-with-features="false" data-mobile-grid-columns="2">
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