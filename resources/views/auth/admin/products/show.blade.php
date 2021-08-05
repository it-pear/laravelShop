@extends('/layout/admin')
@section('title', 'Товар' . $product->name)

@section('content')

<div class="form-admin">
  <h2>{{ $product->name }}</h2>
  <br>
  <div class="form-admin-section">
    <div class="admin-section">
      <h6>#Id - <small>{{ $product->id }}</small></h6>
      <h6>Code - <small>{{ $product->code }}</small></h6>
      <h6>Название - <small>{{ $product->name }}</small></h6>
      <h6>Категория - <small>{{ $product->category->name }}</small></h6>
      <h6>Описание - <small>{{ $product->description }}</small></h6>
      <h6>Цена - <small>{{ $product->price }}</small></h6>
      <h6>Дополнительно - 
        <small>
          @if ($product->isNew())
            <u>Новинка</u>
          @endif
        </small>
        <small>
          @if ($product->isRecommend())
            <u>Рекомендуемое</u>
          @endif
        </small>
        <small>
          @if ($product->isHit())
            <u>Хит</u>
          @endif
        </small>
      </h6>
    </div>
    <div class="admin-section-image">
      <img src="{{ Storage::url($product->image) }}" alt="">
    </div>
  </div>
  
</div>

@endsection