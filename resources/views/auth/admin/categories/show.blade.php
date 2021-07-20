@extends('/layout/admin')
@section('title', 'Категория' . $category->name)

@section('content')

<div class="form-admin">
  <h2>Категория - {{ $category->name }}</h2>
  <br>
  <div class="form-admin-section">
    <div class="admin-section">
      <h6>#Id - <small>{{ $category->id }}</small></h6>
      <h6>Code - <small>{{ $category->code }}</small></h6>
      <h6>Название - <small>{{ $category->name }}</small></h6>
      <h6>Описание - <small>{{ $category->description }}</small></h6>
      <h6>Количество товаров - <small>{{ $category->products->count() }}</small></h6>
    </div>
    <div class="admin-section-image">
      {{ $category->image }}
      <img src="https://pngicon.ru/file/uploads/battery.png" alt="">
    </div>
  </div>
  
</div>

@endsection