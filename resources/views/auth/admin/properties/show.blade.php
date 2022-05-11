@extends('/layout/admin')
@section('title', 'Свойство' . $property->name)

@section('content')

<div class="form-admin">
  <h2>Свойство - {{ $property->name }}</h2>
  <br>
  <div class="form-admin-section">
    <div class="admin-section">
      <h6>#Id - <small>{{ $property->id }}</small></h6>
      <h6>Название - <small>{{ $property->name }}</small></h6>
      <!-- <h6>Количество товаров - <small>{ $property->products->count() }</small></h6> -->
    </div>
  </div>
  
</div>

@endsection