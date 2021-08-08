@extends('/layout/admin')
@section('title', 'Услуга' . $service->name)

@section('content')

<div class="form-admin">
  <h2>{{ $service->name }}</h2>
  <br>
  <div class="form-admin-section">
    <div class="admin-section">
      <h6>#Id - <small>{{ $service->id }}</small></h6>
      <h6>Code - <small>{{ $service->code }}</small></h6>
      <h6>Название - <small>{{ $service->name }}</small></h6>
      <h6>Описание - <small>{{ $service->description }}</small></h6>
      <h6>Цена - <small>{{ $service->price }}</small></h6>
    </div>
    <div class="admin-section-image">
      <img src="{{ Storage::url($service->image) }}" alt="">
    </div>
  </div>
  
</div>

@endsection