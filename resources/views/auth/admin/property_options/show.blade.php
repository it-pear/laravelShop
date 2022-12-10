@extends('/layout/admin')
@section('title', 'Вариант свойства' . $propertyOption->name)

@section('content')

<div class="form-admin">
  <h2>Вариант свойства - {{ $propertyOption->name }}</h2>
  <br>
  <div class="form-admin-section">
    <div class="admin-section">
      <h6>#Id - <small>{{ $propertyOption->id }}</small></h6>
      <h6>Название - <small>{{ $propertyOption->name }}</small></h6>
    </div>
  </div>
  
</div>

@endsection